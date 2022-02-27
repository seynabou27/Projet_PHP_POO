<?php
namespace App\Entity;

use App\Entity\Personne;
use App\Entity\Chambre;
use App\Entity\Pavillon;


use Doctrine\Common\Collections\ArrayCollection;

class TypeChambre extends Chambre implements EntityInterface{

    protected int $id_type_chambre;
    private string $nom_type_chambre;


    public function __construct(){

    }
   
        
    

    

    /**
     * Get the value of id_type_chambre
     */ 
    public function getId_type_chambre()
    {
        return $this->id_type_chambre;
    }

    /**
     * Set the value of id_type_chambre
     *
     * @return  self
     */ 
    public function setId_type_chambre($id_type_chambre)
    {
        $this->id_type_chambre = $id_type_chambre;

        return $this;
    }

    /**
     * Get the value of nom_type_chambre
     */ 
    public function getNom_type_chambre()
    {
        return $this->nom_type_chambre;
    }

    /**
     * Set the value of nom_type_chambre
     *
     * @return  self
     */ 
    public function setNom_type_chambre($nom_type_chambre)
    {
        $this->nom_type_chambre = $nom_type_chambre;

        return $this;
    }
}

?>