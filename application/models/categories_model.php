<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_Model extends CI_Model
{
	// Définition des tables utilisées
	protected $tableCategorie = "categorie";
	
    
    public function getCategorieByType($idType){
        return $this->db->select("*")
                        ->where("fk_type_categorie", $idType)
                        ->get($this->tableCategorie);
        /*foreach($query->result_array() as $row)
        {
            $dataCat = array(
                $row["fk_type_categorie"] => array(
                    $ => $row['character_name'],
                    'url' => $row['character_name'],
                ),
            );
         }*/
    }
    
    public function getCategorieByParent(){
        $query =  $this->db->select("*")
                        ->where("idPere", NULL)
                        ->get($this->tableCategorie);
        $dataCat = array();
        foreach($query->result_array() as $row)
        {
                $dataCat[$row["id"]] = array(
                        "nom" => $row["nom"],
                        "id" => $row["id"]
                );
         }
        
        return $dataCat;
    }
    
    public function getCategorieByPere($idPere){
        $query =  $this->db->select("*")
                        ->where("idPere", $idPere)
                        ->get($this->tableCategorie);
        $dataCat = array();
        foreach($query->result_array() as $row)
        {
                $dataCat[$row["id"]] = array(
                        "nom" => $row["nom"],
                        "id" => $row["id"]
                );
         }
        
        return $dataCat;
    }
    
    public function haveParent($idCategorie){
        //$dataCat = $this->db->
    }
}
?>