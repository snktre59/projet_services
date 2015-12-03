<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateurs_Model extends CI_Model
{
	// Définition des tables utilisées
	protected $tableUtilisateurs = "utilisateur";
	
	/*
	 * Instancie un utilisateur en fonction de son adresse email
	 * Paramètres :
	 * $adresse_email => Adresse email du compte utilisateur à instancier
	 *
	 * Retour : Un objet utilisateur
	 */
	public function instancier_utilisateur($adresseEmail = ""){
		
		// Récupération des données du compte
		$dataUser = $this->getDataUtilisateurByEmail($adresseEmail);
		
		// Si aucune données récupérée
		if ($dataUser === FALSE) {
			
			// L'ID devient celui du visiteur
			$dataUser["id"] = 1;
		}
		
		// Chargement des librairies
		$this->load->library("utilisateur", $dataUser["id"]);
		
		// Création d'un nouvel utilisateur
		$utilisateur = new Utilisateur($dataUser["id"]);
		
		return $utilisateur;
	}
	
	/*
	 * Ajoute un utilisateur en base de données
	 * Retour : TRUE si une ligne à été affectée ou FALSE
	 */
	public function ajouter_utilisateur($nom, $prenom, $adresseEmail, $motDePasse, $adresseIp, $tokenId)
	{
		$this->load->helper("Date");
		
		$this->db->set("nom", $nom);
		$this->db->set("prenom", $prenom);
		$this->db->set("adresseEmail", $adresseEmail);
		$this->db->set("motDePasse", $motDePasse);
		$this->db->set("credit", "100");
		$this->db->set("registrationDate", date('Y-m-d H:i:s'));
		$this->db->set("lastLoginDate", "");
		$this->db->set("groupe", "UTILISATEUR");
		$this->db->set("lastLoginIp", $adresseIp);
		$this->db->set("tokenId", $tokenId);
		$this->db->set("statutCompte", "INACTIF");
		
		$this->db->insert($this->tableUtilisateurs);
		
		return ($this->db->affected_rows() != 1) ? FALSE : TRUE;
	}
	
	/*
	 * Récupération des données du compte utilisateur par son adresse email
	 * Paramètres :
	 * $adresse_email => Adresse email du compte
	 *
	 * Retour : $donnees du compte ou FALSE
	 */
	public function getDataUtilisateurByEmail($adresseEmail){
		$this->db->select("*")
				->where('adresseEmail', $adresseEmail);
		
		$resultat = $this->db->get($this->tableUtilisateurs);
		
		$donnees = $resultat->result_array();
		
		return ($donnees == NULL) ? FALSE : $donnees[0];
	}
	
	/*
	 * Récupération des données du compte utilisateur par son ID
	 * Paramètres :
	 * $id => ID du compte 
	 *
	 * Retour : $donnees du compte ou FALSE
	 */
	public function getDataUtilisateurById($id){
			$this->db->select("*")
					->where('id', $id);
			
			$resultat = $this->db->get($this->tableUtilisateurs);
			
			$donnees = $resultat->result_array();
			
			return ($donnees == NULL) ? FALSE : $donnees[0];
	}
	
	/*
	 * Active le compte d'un utilisateur en fonction de son adresse email et de son token ID
	 * Paramètres :
	 * $adresseEmail => Adresse email du compte à activer
	 * $tokenId => TokenId du compte (vérification)
	 *
	 * Retour : TRUE si une ligne à été affectée ou FALSE
	 */
	public function activer_compte($adresseEmail, $tokenId){
		$data = array(
			"statutCompte" => "ACTIF"
		);
		
		$this->db->where('adresseEmail', $adresseEmail);
		$this->db->where('tokenId', $tokenId);
		$this->db->update($this->tableUtilisateurs, $data);
		$rows = $this->db->affected_rows();
		
		return ($rows == 1) ? TRUE : FALSE;
	}
		
}