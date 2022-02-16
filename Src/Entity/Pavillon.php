<?php
namespace App\Entity;
class Pavillon {
    protected int $id_pavillon;
    protected string $nom_pavillon;
    protected string $num_pavillon;
    protected string $nbr_etage;


    public function __construct()
    {
        
    }
    

    /**
     * Get the value of id
     */ 
    public function getIdPavillon()
    {
        return $this->id_pavillon;
    }

    /**
     * Set the value of id_pavillon
     *
     * @return  self
     */ 
    public function setId($id_pavillon)
    {
        $this->id = $id_pavillon;

        return $this;
    }

    /**
     * Get the value of nomPavillon
     */ 
    public function getNompavillon()
    {
        return $this->nomChambre;
    }

    /**
     * Set the value of numPavillon
     *
     * @return  self
     */ 
    public function setNumPavillon($num_pavillon)
    {
        $this->numChambre = $num_pavillon;

        return $this;
    }

    /**
     * Get the value of etage
     */ 
    public function getNbr_Etage()
    {
        return $this->Nbr_Etage;
    }

    /**
     * Set the value of etage
     *
     * @return  self
     */ 
    public function setNbr_Etage($nbr_etage)
    {
        $this->login = $nbr_etage;

        return $this;
    }

    public static function  fromArray(object $pavillon):array{
      $arr=  array_values((array)$pavillon);
       $arr[]="";
       $arr[]="";
       $arr[]="";
       return  $arr;
    }
}