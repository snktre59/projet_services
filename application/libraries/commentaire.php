<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Commentaire {
	private $id;
	private $idNote;
	private $commentaire;
	
	/**
	 * Constructeur de la classe
	**/
	function __construct (){
		
	}
	
	/**
	 * Retourne l'ID du commentaire
	**/
	public function getId(){
		return $this->id;
	}

	/**
	 * Retourne l'ID de la note du commentaire
	**/
	public function getIdNote(){
		return $this->idNote;
	}
	
	/**
	 * Retourne le commentaire
	**/
	public function getCommentaire(){
		return $this->commentaire;
	}
}