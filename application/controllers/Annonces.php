<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {
    
    public function ajouter(){
        
        // Définition du titre de la page
		$this->layout->set_titre("Troc'It Easy - Ajouter une annonce");
        $this->load->library("categorie");
        $data["categorie"] = new categorie();
        
        // Affichage
        $this->layout->view('annonces/ajouter', $data);
    }
    
    
}
?>