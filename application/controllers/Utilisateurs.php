<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateurs extends CI_Controller {

	public function inscription(){
		
		// Chargement des bibliothèques
		$this->load->library('form_validation');
		
		//Chargement des modèles
		$this->load->model("utilisateurs_model");
		
		//Chargement des ressources JAVASCRIPT
		$this->layout->ajouter_js("applications/utilisateurs_inscription");
		
		// Définition du titre de la page
		$this->layout->set_titre("Troc'It Easy - Inscription");
		
		// Définition des règles de champs
		$this->form_validation->set_rules('nom', '"Nom"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('prenom', '"Prénom"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('adresseEmail', '"Adresse email"', 'trim|required|matches[adresseEmailConfirm]|encode_php_tags|is_unique[utilisateur.adresseEmail]');
		$this->form_validation->set_rules('adresseEmailConfirm', '"Adresse email confirmation"', 'trim|required|encode_php_tags');
		$this->form_validation->set_rules('motDePasse', '"Mot de passe"', 'trim|required|matches[motDePasseConfirm]|encode_php_tags');
		$this->form_validation->set_rules('motDePasseConfirm', '"Mot de passe confirmation"', 'trim|required|encode_php_tags');
		
		// Si le formulaire est correctement renseigné
		if($this->form_validation->run())
		{
			// Récupération des variables postées
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$adresse_email = $this->input->post('adresse_email');
			//$adresse_email_confirm = $this->input->post('adresse_email_confirm');
			$mot_de_passe = password_hash($this->input->post('mot_de_passe'), PASSWORD_BCRYPT);
			//$mot_de_passe_confirm = password_hash($this->input->post('mot_de_passe_confirm'), PASSWORD_BCRYPT);
			$adresse_ip = $this->input->ip_address();
			$token_id = md5(microtime(TRUE)*100000);
			
			//$this->load->library("email_templates");
			
			// L'utilisateur à été ajouté en BDD
			if($this->utilisateurs_model->ajouter_utilisateur($nom, $prenom, $adresseEmail, $motDePasse, $adresseIp, $tokenId) == TRUE){
				$message = '
					Vous vous êtes inscrit sur notre site internet et nous vous en remercions. Pour valider votre inscription, merci de cliquer sur <a href="'.base_url().'/utilisateurs/confirmation/adresse_email='.$adresse_email.'&token_id='.$token_id.'">ce lien</a>.<br />
					A bientôt sur undershift.fr !<br/>
					Under Shift.
				';
				// Envoi d'un mail de confirmation
				if($this->email_templates->inscription_validation("noreply@troc-it-easy.fr", "TROC'IT EASY", $adresse_email, $token_id, "Confirmez votre inscription", $message)){
					// Ajout d'un message de confirmation
					$this->layout->set_flashdata_message('green', "Votre inscription s'est déroulée correctement. Vous allez recevoir un email avec les détails pour l'activation de votre compte.");
					
					// Redirection et affichage du message
					redirect("accueil/index");
					
				// L'email de confirmation n'a pas été envoyé
				} else {
					// Ajout d'un message de confirmation
					$this->layout->set_flashdata_message('red', "Vous avez été inscrit cependant il y a eu un problème lors de l'envoi du mail de confirmation. Veuillez contacter un administrateur.");
					
					// Redirection et affichage du message
					redirect("accueil/index");
				}
				
			
			// Il y a eu un problème lors de l'ajout de l'utilisateur en BDD
			} else {
				
				// Ajout d'un message de confirmation
				$this->layout->set_flashdata_message('red', "Suite à un problème technique votre inscription ne peut aboutir. Veuillez contacter l'administrateur du site via le formulaire de contact.
					Veuillez nous excuser pour la gêne occasionnée.");
				
				// Redirection et affichage du message
				redirect("utilisateurs/inscription");
			}
			
		}
		else
		{
			// Affichage
			$this->layout->view('utilisateurs/inscription');
		}
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
			
			//$this->load->library("email_templates");
			
			// L'utilisateur à été ajouté en BDD
			if($this->utilisateurs_model->ajouter_utilisateur($nom, $prenom, $adresseEmail, $motDePasse, $adresseIp, $tokenId) == TRUE){
				$message = '
					Vous vous êtes inscrit sur notre site internet et nous vous en remercions. Pour valider votre inscription, merci de cliquer sur <a href="'.base_url().'/utilisateurs/confirmation/adresse_email='.$adresseEmail.'&token_id='.$tokenId.'">ce lien</a>.<br />
					A bientôt sur undershift.fr !<br/>
					Under Shift.
				';/*
				// Envoi d'un mail de confirmation
				if($this->email_templates->inscription_validation("noreply@troc-it-easy.fr", "TROC'IT EASY", $adresseEmail, $tokenId, "Confirmez votre inscription", $message)){
					// Ajout d'un message de confirmation
					$this->layout->set_flashdata_message('green', "Votre inscription s'est déroulée correctement. Vous allez recevoir un email avec les détails pour l'activation de votre compte.");
					
					// Redirection et affichage du message
					redirect("accueil/index");
					
				// L'email de confirmation n'a pas été envoyé
				} else {
					// Ajout d'un message de confirmation
					$this->layout->set_flashdata_message('red', "Vous avez été inscrit cependant il y a eu un problème lors de l'envoi du mail de confirmation. Veuillez contacter un administrateur.");
					
					// Redirection et affichage du message
					redirect("accueil/index");
				}
				*/
			
			// Il y a eu un problème lors de l'ajout de l'utilisateur en BDD
			} else {
				
				// Ajout d'un message de confirmation
				$this->layout->set_flashdata_message('red', "Suite à un problème technique votre inscription ne peut aboutir. Veuillez contacter l'administrateur du site via le formulaire de contact.
					Veuillez nous excuser pour la gêne occasionnée.");
				
				// Redirection et affichage du message
				redirect("utilisateurs/inscription");
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
}