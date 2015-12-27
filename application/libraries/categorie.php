<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categorie extends CI_Controller
{
	private $id;
	private $nom = NULL;
	private $fk_type_categorie = NULL;
    private $idPere = NULL;
	
	/**
	 * Constructeur de la classe
	**/
	function __construct (){
        //parent::__construct();
        //$this->load->model("categories_model");
        
        //$this->categorie_model->getCategorieByType($idType);
		
	}
    
    public function getCategorieByPere($idPere){
        $this->CI =& get_instance();
        $this->CI->load->model("categories_model");
        return $this->CI->categories_model->getCategorieByPere($idPere);
    
    }
    
    public function getCategorieByParent(){
        $this->CI =& get_instance();
        $this->CI->load->model("categories_model");
        return $this->CI->categories_model->getCategorieByParent();
    }
	
	/**
	 * Retourne l'ID de la catégorie
	**/
	public function getId(){
		return $this->id;
	}
	
	/**
	 * Retourne l'ID du tag de la catégorie
	**/
	public function getIdTagCategorie(){
		return $this->idTagCategorie;
	}
	
	/**
	 * Retourne le nom de la catégorie
	**/
	public function getNom(){
		return $this->nom;
	}
	
}