<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Controller
{
	private $id;
	private $idAnnonce;
	private $note;
	
	/**
	 * Constructeur de la classe
	**/
	function __construct (){
		
	}
	
	/**
	 * Retourne l'ID de la note
	**/
	public function getId(){
		return $this->id;
	}
	
	/**
	 * Retourne l'ID de l'annonce sur laquelle porte la note
	**/
	public function getIdAnnonce(){
		return $this->idAnnonce;
	}
	
	/**
	 * Retourne la note
	**/
	public function getNote(){
		return $this->note;
	}
	
	
}