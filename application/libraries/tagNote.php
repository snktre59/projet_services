<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TagNote {
	private $id;
	private $idNote;
	private $nom;
	
	/**
	 * Constructeur de la classe
	**/
	function __construct (){
		
	}
	
	/**
	 * Retourne l'ID du tag de la note
	**/
	public function getId(){
		return $this->id;
	}
	
	/**
	 * Retourne l'ID de la note concernée
	**/
	public function getIdNote(){
		return $this->idNote;
	}
	
	/**
	 * Retourne le nom du tag
	**/
	public function getNom(){
		return $this->nom;
	}
}