<?php
namespace App\Entity;
class Chambre {
    protected int $id_chambre;
    protected string $num_chambre;
    protected string $num_etage;
    protected string $id_type_chambre;
    protected string $id_pavillon;


    public function __construct()
    {
        
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id_chambre
     *
     * @return  self
     */ 
    public function setId($id_chambre)
    {
        $this->id = $id_chambre;

        return $this;
    }

    /**
     * Get the value of numChambre
     */ 
    public function getNumChambre()
    {
        return $this->numChambre;
    }

    /**
     * Set the value of numchambre
     *
     * @return  self
     */ 
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }

    /**
     * Get the value of etage
     */ 
    public function getEtage()
    {
        return $this->NumEtage;
    }

    /**
     * Set the value of etage
     *
     * @return  self
     */ 
    public function setNumEtage($num_etage)
    {
        $this->login = $num_etage;

        return $this;
    }

    public static function  fromArray(object $chambre):array{
      $arr=  array_values((array)$chambre);
       $arr[]="";
       $arr[]="";
       $arr[]="";
       return  $arr;
    }
}