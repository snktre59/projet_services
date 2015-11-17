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
	public function ajouter_utilisateur($nom, $prenom, $adresseEmail, $motDePasse, $credit, $registrationDate, $lastLoginDate, $groupe, $adresseIp, $tokenId, $statutCompte)
	{
		$this->db->set("nom", $nom);
		$this->db->set("prenom", $prenom);
		$this->db->set("adresseEmail", $adresseEmail);
		$this->db->set("motDePasse", $motDePasse);
		$this->db->set("credit", $credit);
		$this->db->set("registrationDate", $registrationDate);
		$this->db->set("lastLoginDate", $lastLoginDate);
		$this->db->set("groupe", $groupe);
		$this->db->set("adresseIp", $adresseIp);
		$this->db->set("tokenId", $tokenId);
		$this->db->set("statutCompte", $statutCompte);
		
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
		
}