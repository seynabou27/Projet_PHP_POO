<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class EtudiantBourssier extends Etudiant {
    
    private Bourse $id_bourse;

    public function __construct(){
        parent::__construct();
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
}

