<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateurs extends CI_Controller {

	public function inscription(){
		
		// Chargement des bibliothèques
		$this->load->library('form_validation');
		
		//Chargement des modèles
		$this->load->model("utilisateurs_model");
		
		//Chargement des ressources JAVASCRIPT
		$this->layout->ajouter_js("applications/utilisateurs/utilisateurs_inscription");
		
		// Définition du titre de la page
		$this->layout->set_titre("Troc'It Easy - Inscription");
	
		// Affichage
		$this->layout->view('utilisateurs/inscription');
	}
	
	public function do_inscription(){
		// Chargement des bibliothèques
		$this->load->library('form_validation');
		
		//Chargement des modèles
		$this->load->model("utilisateurs_model");
		
		// Définition des règles de champs
		$this->form_validation->set_rules('nom', '"Nom"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('prenom', '"Prénom"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('adresseEmail', '"Adresse email"', 'trim|required|matches[adresseEmailConfirm]|encode_php_tags|is_unique[utilisateur.adresseEmail]');
		$this->form_validation->set_rules('adresseEmailConfirm', '"Adresse email confirmation"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('motDePasse', '"Mot de passe"', 'trim|required|matches[motDePasseConfirm]|encode_php_tags');
		$this->form_validation->set_rules('motDePasseConfirm', '"Mot de passe confirmation"', 'trim|required|encode_php_tags');
		//$this->form_validation->set_rules('termesEtConditions', 'Termes', 'callback_accepter_termes');
		
		// Si le formulaire est correctement renseigné
		if($this->form_validation->run())
		{
			// Récupération des variables postées
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$adresseEmail = $this->input->post('adresseEmail');
			//$adresse_email_confirm = $this->input->post('adresse_email_confirm');
			$motDePasse = password_hash($this->input->post('motDePasse'), PASSWORD_BCRYPT);
			//$mot_de_passe_confirm = password_hash($this->input->post('mot_de_passe_confirm'), PASSWORD_BCRYPT);
			$adresseIp = $this->input->ip_address();
			$tokenId = md5(microtime(TRUE)*100000);
			
			$this->load->library("email_template");
			
			// L'utilisateur à été ajouté en BDD
			if($this->utilisateurs_model->ajouter_utilisateur($nom, $prenom, $adresseEmail, $motDePasse, $adresseIp, $tokenId) == TRUE){
				$message = '
					Vous vous êtes inscrit sur notre site internet et nous vous en remercions. Pour valider votre inscription, merci de cliquer sur <a href="'.base_url().'/utilisateurs/confirmation/adresse_email='.$adresseEmail.'&token_id='.$tokenId.'">ce lien</a>.<br />
					A bientôt sur undershift.fr !<br/>
					Under Shift.
				';
				// Envoi d'un mail de confirmation
				if($this->email_template->inscription_validation("noreply@troc-it-easy.fr", "TROC'IT EASY", $adresseEmail, $tokenId, "Confirmez votre inscription", $message)){
					// Ajout d'un message de confirmation
					//$this->layout->set_flashdata_message('green', "Votre inscription s'est déroulée correctement. Vous allez recevoir un email avec les détails pour l'activation de votre compte.");
					
					// Redirection et affichage du message
					//redirect("accueil/index");
					
				// L'email de confirmation n'a pas été envoyé
				} else {
					// Ajout d'un message de confirmation
					//$this->layout->set_flashdata_message('red', "Vous avez été inscrit cependant il y a eu un problème lors de l'envoi du mail de confirmation. Veuillez contacter un administrateur.");
					
					// Redirection et affichage du message
					//redirect("accueil/index");
				}
				
			
			// Il y a eu un problème lors de l'ajout de l'utilisateur en BDD
			} else {
				
				// Ajout d'un message de confirmation
				$this->layout->set_flashdata_message('red', "Suite à un problème technique votre inscription ne peut aboutir. Veuillez contacter l'administrateur du site via le formulaire de contact.
					Veuillez nous excuser pour la gêne occasionnée.");
				
				// Redirection et affichage du message
				//redirect("utilisateurs/inscription");
			}
			
			$response["status"] = TRUE;
		}
		else
		{
			// Affichage
			$errors = array();
			// Loop through $_POST and get the keys
			foreach ($this->input->post() as $key => $value)
			{
				// Add the error message for this field
				$errors[$key] = form_error($key);
			}
			$response = array();
			$response['errors'] = array($errors); // Some might be empty
			$response['status'] = FALSE;
		}
		// You can use the Output class here too
		header('Content-type: application/json');
		exit(json_encode($response));
	}
	
	
	function accepter_termes()
	{
		//if (isset($_POST['accept_terms_checkbox']))
        if ($this->input->post('termesEtConditions'))
		{
			return TRUE;
		}
		else
		{
			$error = 'Pour vous inscrire vous devez être d\'accord avec nos conditions.';
			$this->form_validation->set_message('termesEtConditions', $error);
			return FALSE;
		}
	}
	
	public function connexion()
	{	
		// Chargement des bibliothèques
		$this->load->library('form_validation');
		
		// Chargement des modèles
		$this->load->model("utilisateurs_model");
	 
	 	// Définition des règles de champs
		$this->form_validation->set_rules('adresseEmail', '"Adresse Email"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('motDePasse', '"Mot de passe"', 'trim|required|encode_php_tags');
	
		if ($this->form_validation->run())
		{
			// Récupération des variables postées
			$adresseEmail = $this->input->post('adresseEmail');
			$motDePasse = $this->input->post('motDePasse');
			$remember = $this->input->post('remember');
			
			// Récupération des informations du compte utilisateur
			$userData = $this->utilisateurs_model->getDataUtilisateurByEmail($adresseEmail);
			$mdp = password_hash($motDePasse, PASSWORD_BCRYPT);
			
			// Le compte n'existe pas
			if ($userData == FALSE) {
				
				// Ajout d'un message d'erreur
				$this->layout->set_flash_message("danger", "Le compte avec lequel vous souhaitez vous connecter n'existe pas, merci d'en créer un.", "remove-sign");
				
				// Redirection et affichage du message d'erreur
				redirect("utilisateurs/connexion");
				
			// Le compte existe	
			} else {
				
				// Le compte existe mais n'est pas activé
				if ($userData["statutCompte"] != "ACTIF") {
					
					// Ajout d'un message d'erreur
					$this->layout->set_flash_message("danger", "Le compte auquel vous souhaitez vous connecter n'est pas activé. Pour l'activer, cliquez sur le mail que vous avez reçu lors de votre inscription puis reconnectez vous.", "remove-sign");
					
					// Redirection et affichage du message d'erreur
					redirect("utilisateurs/connexion");
				}
				
				// Le compte existe et les mots de passe correspondent
				else if (password_verify($motDePasse, $userData["motDePasse"])) {
					
					// Instanciation d'un nouvel utilisateur avec ses informations
					$utilisateur = $this->utilisateurs_model->instancier_utilisateur($adresseEmail);
					
					// Destruction de la session précédente (visiteur)
					$this->session->unset_userdata("utilisateurCourant");
					
					// Création d'une nouvelle session utilisateur
					$this->session->set_userdata("utilisateurCourant", $utilisateur);
					
					// Mémorisation de la session
					if($remember == "on"){
						$this->session->mark_as_temp('utilisateurCourant', 604800);
					}
					
					// Ajout d'un message de confirmation
					$this->layout->set_flash_message("success", "Vous êtes dès à présent <strong>connecté</strong> !", "ok-sign");
					
					// Redirection et affichage du message de confirmation
					redirect("accueil/index");
				
				// Les identifiants du compte sont incorrects	
				} else {
					
					// Ajout d'un message d'erreur
					$this->layout->set_flash_message("danger", "Les informations d'identification sont incorrectes, veuillez réessayer.", "remove-sign");
					
					// Redirection et affichage du message d'erreur
					redirect("utilisateurs/connexion");
				}
			}
		}
		else
		{
			$this->layout->view('utilisateurs/connexion');
		}
	}
	
	function confirmation($adresse_email, $token_id){
		
		// Décodage de l'adresse email codée pour les caractères spéciaux
		$adresse_email = urldecode($adresse_email);
		
		// Chargement des modèles
		$this->load->model("utilisateurs_model");
		
		// Si le compte est activé
		if($this->utilisateur->activer_compte($adresse_email, $token_id) === TRUE){
			
			// Définition du message de confirmation et du statut
			// Ajout d'un message de confirmation
			$this->layout->set_flash_message("success", "Votre compte ".$adresse_email." à été activé ! Vous pouvez dès à présent vous connecter au site sur <a href='".base_url()."utilisateurs/connexion'>cette page</a>");
			
			// Affichage de la vue
			redirect("/accueil/", 'location', 301);
			
		// Le compte à déjà été activé ou n'existe pas
		} else {
			
			// Définition du message d'erreur et du statut
			// Affichage de la vue
			$this->layout->set_flash_message("warning", "Votre compte n'a pas été activé. Cela peut-être dû au fait que le compte n'existe pas ou à déjà été validé.");
			redirect("/accueil/", 'location', 301);
		}
	}
	
	function deconnexion(){
		// Destruction de la session précédente (visiteur)
		$this->session->unset_userdata("utilisateurCourant");
		
		// Ajout d'un message de confirmation
		$this->layout->set_flash_message("success", "Vous êtes à présent <strong>déconnecté</strong> !", "ok-sign");
		
		// Redirection et affichage du message de confirmation
		redirect("accueil/index");
	}
    
    function mot_de_passe_oublie(){
        // Chargement des bibliothèques
		$this->load->library('form_validation');
        
        $this->load->library('email_template');
		
		// Chargement des modèles
		$this->load->model("utilisateurs_model");
	 
	 	// Définition des règles de champs
		$this->form_validation->set_rules('adresseEmail', '"Adresse Email"', 'trim|required|valid_email|encode_php_tags');
	
		if ($this->form_validation->run())
		{
			// Récupération des variables postées
			$adresseEmail = $this->input->post('adresseEmail');
            $tokenRecovery = md5(microtime(TRUE)*100000);
            
            if($this->utilisateurs_model->ajouter_token_recovery($adresseEmail, $tokenRecovery) == TRUE){
                // Si l'ajout du token s'est bien déroulé envoi de l'email
                $message = "Pour confirmer la demande de récupération de mot de passe cliquez sur <a href='base_url(utilisateurs/recuperation/".$adresseEmail."/".$tokenRecovery.")'>ce lien</a>.<br />
					A bientôt sur troc-it-easy.fr !<br/>
					L\'équipe Troc\'It Easy.";
                $this->email_template->mot_de_passe_oublie_validation("noreply@troc-it-easy.fr", "TROC'IT EASY", $adresseEmail, $adresseEmail, $tokenRecovery, "Récupérez votre mot de passe", $message);
            }
            
            // Définition du message de confirmation et du statut
			// Ajout d'un message de confirmation
			$this->layout->set_flash_message("success", "Un email vous à été envoyé avec les instructions vous permettant de récupérer votre mot de passe.");
            redirect('accueil');
            
        } else {
            
            $this->layout->view('utilisateurs/mot_de_passe_oublie');
        }
        
    }
    
    function recuperation($adresseEmail, $tokenRecovery){
        $this->load->model('utilisateurs_model');
        if(empty($adresseEmail) || empty($tokenRecovery)){
            $this->layout->set_flash_message("danger", "Votre adresse mail ou votre jeton à mal été transmis à la page, merci de vérifier le lien que vous avez reçu.");
            redirect('accueil');
        } else {
            $adresseEmail = urldecode($adresseEmail);
        
            $tokenRecoveryBdd = $this->utilisateurs_model->getTokenRecoveryByEmail($adresseEmail);

            if($tokenRecovery != $tokenRecoveryBdd["tokenRecovery"]){
                $this->layout->set_flash_message("danger", "Le jeton de demande de récupération de mot de passe n'est pas valide pour ce compte. Veuillez réitérer votre demande.", "remove-sign");
                redirect('accueil');
            } else {
                $data['adresseEmail'] = $adresseEmail;
                $data['tokenRecovery'] = $tokenRecovery;

                $this->layout->view('utilisateurs/recuperation', $data);
            }
        }
        
        
    }
    
    function recuperation_validation(){
        // Chargement des bibliothèques
		$this->load->library('form_validation');
        
        $this->load->library('email_template');
		
		// Chargement des modèles
		$this->load->model("utilisateurs_model");
	 
	 	// Définition des règles de champs
        $this->form_validation->set_rules('adresseEmail', '"Adresse email"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('tokenRecovery', '"Jeton"', 'trim|required|encode_php_tags');
        $this->form_validation->set_rules('motDePasse', '"Mot de passe"', 'trim|required|matches[motDePasseConfirm]|encode_php_tags');
        $this->form_validation->set_rules('motDePasseConfirm', '"Mot de passe confirmation"', 'trim|required|encode_php_tags');
	
		if ($this->form_validation->run())
		{
            // Récupération des données du formulaire
            $adresseEmail = $this->input->post('adresseEmail');
            $tokenRecovery = $this->input->post('tokenRecovery');
            $motDePasse = $this->input->post('motDePasse');
            $motDePasseConfirm = $this->input->post('motDePasseConfirm');
            $tokenRecoveryBdd = $this->utilisateurs_model->getTokenRecoveryByEmail($adresseEmail);
            
            if($tokenRecovery != $tokenRecoveryBdd['tokenRecovery']){
                $this->layout->set_flash_message("danger", "Le jeton de demande de récupération de mot de passe n'est pas valide pour ce compte. Veuillez réitérer votre demande.", "remove-sign");
            redirect('accueil');
            } else {
                $motDePasse = password_hash($motDePasse, PASSWORD_BCRYPT);
                if($this->utilisateurs_model->updateUserPassword($adresseEmail, $tokenRecovery, $motDePasse) == TRUE) {
                    if($this->utilisateurs_model->viderTokenRecovery($adresseEmail, $tokenRecovery)) {
                        $this->layout->set_flash_message("success", "Le mot de passe de votre compte à été changé, vous pouvez vous connecté dès à présent.", "ok-sign");
                        redirect('accueil');
                    } else {
                        $this->layout->set_flash_message("danger", "Problème de réinitialisation du jeton.");
                        redirect('accueil');
                    }
                } else {
                    $this->layout->set_flash_message("danger", "Une erreur est survenue, votre mot de passe n'a pas été changé (Jeton invalide ou adresse email non existante).", "remove-sign");
                    redirect('accueil');
                }
            }
        } else {
            $data['adresseEmail'] = $adresseEmail;
            $data['tokenRecovery'] = $tokenRecovery;
            $this->layout->view('utilisateurs/recuperation', $data);
        }
    }
	
}