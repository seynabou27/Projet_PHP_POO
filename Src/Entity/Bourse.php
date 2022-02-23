<?php
namespace App\Entity;

use App\Entity\Personne;
use Doctrine\Common\Collections\ArrayCollection;

class Bourse extends Personne implements EntityInterface{

    private int $id_bourse;
    private string $type_bourse;
    private int $montant;


    public function __construct(){

    }
   
        
    

    /**
     * Get the value of id_bourse
     */ 
    public function getId_bourse()
    {
        return $this->id_bourse;
    }

    /**
     * Set the value of id_bourse
     *
     * @return  self
     */ 
    public function setId_bourse($id_bourse)
    {
        $this->id_bourse = $id_bourse;

        return $this;
    }

    /**
     * Get the value of type_bourse
     */ 
    public function getType_bourse()
    {
        return $this->type_bourse;
    }

    /**
     * Set the value of type_bourse
     *
     * @return  self
     */ 
    public function setType_bourse($type_bourse)
    {
        $this->type_bourse = $type_bourse;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }
}

?>