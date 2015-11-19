<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateur extends CI_Controller
{
	// Déclaration des variables
	private $id;
	private $nom;
	private $prenom;
	private $adresseEmail;
	private $motDePasse;
	private $credit;
	private $registrationDate;
	private $lastLoginDate;
	private $groupe;
	private $lastLoginIp;
	private $tokenId;
	private $statutCompte;
	
	/**
	 * Constructeur de la classe
	 * Paramètre : ID -> 1 (ID par defaut : VISITEUR)
	 **/
	public function __construct($id = "1")
    {
		// Chargement d'une instance codeIgniter'
        $CI =& get_instance();
        
        // Chargement du modèle utilisateur
        $CI->load->model("utilisateurs_model");
        
		// Récupération des données utilisateur
        $dataUser = $CI->utilisateurs_model->getDataUtilisateurById($id);
		
		// Hydratation de la classe
		$this->id = (int)$dataUser["id"];
		$this->nom = $dataUser["nom"];
		$this->prenom = $dataUser["prenom"];
		$this->adresseEmail = $dataUser["adresseEmail"];
		$this->motDePasse = $dataUser["motDePasse"];
		$this->credit = $dataUser["credit"];
		$this->registrationDate = $dataUser["registrationDate"];
		$this->lastLoginDate = $dataUser["lastLoginDate"];
		$this->groupe = $dataUser["groupe"];
		$this->lastLoginIp = $dataUser["lastLoginIp"];
		// A ajouter au Model
		$this->tokenId = $dataUser["tokenId"];
		$this->statutCompte = $dataUser["statutCompte"];
		
		if($dataUser["groupe"] == "VISITEUR"){
            $this->registered = FALSE;
        } else $this->registered = TRUE;
	}
	
	/*
     * Fonction d'inscription d'un utilisateur
     */
    public function inscrire($nom, $prenom, $adresseEmail, $motDePasse, $credit, $registrationDate, $lastLoginDate, $groupe, $lastLoginIp, $tokenId, $statutCompte)
	{
        // Création du tableau contenant les informations à propos de l'utilisateur
		$tableauUtilisateur = array(
			"id"				=>		"",
			"nom"				=>		$nom,
			"prenom"			=>		$prenom,
			"adresseEmail"		=>		$adresseEmail,
			"motDePasse"		=>		$motDePasse,
			"credit"			=>		$credit,
			"registrationDate"	=>		$registrationDate,
			"lastLoginDate"		=>		$lastLoginDate,
			"groupe"			=>		$groupe,
			"lastLoginIp"		=>		$lastLoginIp,
			"tokenId"			=>		$tokenId,
			"statutCompte"		=>		"INACTIF"
		);
        
        // Insertion des données dans la table "utilisateurs"
		$inscrireUtilisateur = $this->db->insert("utilisateurs", $tableauUtilisateur);
	}
	
	/*
     * Active le compte d'un utilisateur (Passage du champs statutCompte à "ACTIF")
     */
	public function activer_compte($adresse_email, $token_id){
        $this->CI =& get_instance();
        
        return $this->CI->utilisateurs_model->activer_compte($adresse_email, $token_id);
    }
    
	/*
     * Retourne les données d'un utilisateur
     */
    public function connexion_utilisateur($adresse_email, $mot_de_passe){
        $dataUser = $this->CI->utilisateurs_model->getDataUtilisateurByEmail($adresse_email);
    }
    
	/*
     * Retourne TRUE si l'utilisateur est connecté sinon FALSE
     */
    public function estAuthentifie(){
        return ($this->registered === TRUE) ? TRUE : FALSE;
    } 
	
	/*
     * Retourne l'ID de l'utilisateur courant
     */
	public function getId(){
		return $this->id;
	}
	
	/*
     * Retourne le nom de l'utilisateur courant'
     */
	public function getNom(){
		return $this->nom;
	}
	
	/*
     * Retourne le prénom de l'utilisateur courant'
     */
	public function getPrenom(){
		return $this->prenom;
	}
	
	/*
     * Retourne l'adresse email de l'utilisateur courant
     */
	public function getAdresseEmail(){
		return $this->adresseEmail;
	}
	
	/*
     * Retourne le mot de passe de l'utilisateur courant
     */
	public function getMotDePasse(){
		return $this->motDePasse;
	}
	
	/*
     * Retourne le credit du compte de l'utilisateur courant
     */
	public function getCredit(){
		return $this->credit;
	}
	
	/*
     * Retourne la date d'inscription de l'utilisateur courant
     */
	public function getRegistrationDate(){
		return $this->registrationDate;
	}
	
	/*
     * Retourne la dernière date à laquelle l'utilisateur s'est connecté
     */
	public function getLastLoginDate(){
		return $this->lastLoginDate;
	}
	
	/*
     * Retourne le groupe de l'utilisateur (INVITE, UTILISATEUR, ADMINISTRATEUR, WEBMASTER)
     */
	public function getGroupe(){
		return $this->groupe;
	}
	
	/*
     * Retourne l'adresse IP de l'utilisateur courant
     */
	public function getAdresseIp(){
		return $this->adresseIp;
	}
	
	/*
     * Retourne le tokenID de l'utilisateur
     */
	public function getTokenId(){
		return $this->tokenId;
	}
	
	/*
     * Retourne le statut du compte (ACTIF, INACTIF)
     */
	public function getStatutCompte(){
		return $this->statutCompte;
	}
}