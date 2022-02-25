<?php

namespace App\Entity;

class Chambre{

    protected int $id_chambre;
    protected string $num_chambre;
    protected string $num_etage;
    protected string $id_type_chambre;
    protected string $id_pavillon;


    public function __construct(){
        
    }
    

    

    

    public static function  fromArray(object $chambre):array{
      $arr=  array_values((array)$chambre);
       $arr[]="";
       $arr[]="";
       $arr[]="";
       return  $arr;
    }

    /**
     * Get the value of id_chambre
     */ 
    public function getId_chambre()
    {
        return $this->id_chambre;
    }

    /**
     * Set the value of id_chambre
     *
     * @return  self
     */ 
    public function setId_chambre($id_chambre)
    {
        $this->id_chambre = $id_chambre;

        return $this;
    }

    /**
     * Get the value of num_chambre
     */ 
    public function getNum_chambre()
    {
        return $this->num_chambre;
    }

    /**
     * Set the value of num_chambre
     *
     * @return  self
     */ 
    public function setNum_chambre($num_chambre)
    {
        $this->num_chambre = $num_chambre;

        return $this;
    }

    /**
     * Get the value of num_etage
     */ 
    public function getNum_etage()
    {
        return $this->num_etage;
    }

    /**
     * Set the value of num_etage
     *
     * @return  self
     */ 
    public function setNum_etage($num_etage)
    {
        $this->num_etage = $num_etage;

        return $this;
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
     * Get the value of id_pavillon
     */ 
    public function getId_pavillon()
    {
        return $this->id_pavillon;
    }

    /**
     * Set the value of id_pavillon
     *
     * @return  self
     */ 
    public function setId_pavillon($id_pavillon)
    {
        $this->id_pavillon = $id_pavillon;

        return $this;
    }
}

