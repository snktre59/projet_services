<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categorie extends CI_Controller
{
	private $id;
	private $idTagCategorie = NULL;
	private $nom = NULL;
	
	/**
	 * Constructeur de la classe
	**/
	function __construct (){
		
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