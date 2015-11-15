<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TagCategorie {
	private $id;
	private $nom;
	
	/**
	 * Constructeur de la classe
	**/
	function __construct (){
		
	}
	
	/**
	 * Retourne l'ID du tag de la catégorie
	**/
	public function getId(){
		return $this->id;
	}
	
	/**
	 * Retourne le nom du tag de la catégorie
	**/
	public function getNom(){
		return $this->nom;
	}
}