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
    

    

    public static function  fromArray(object $pavillon):array{
      $arr=  array_values((array)$pavillon);
      $arr[]=$arr[0];
      $arr[]=$arr[1];
      $arr[]=$arr[2];
        unset($arr[0]);
        unset($arr[1]);
        unset($arr[2]);
       

        return  array_values($arr);
    }
    public static function  fromArray1(object $pavillon):array{
        $arr=  array_values((array)$pavillon);
        $arr[]=$arr[0];
         unset($arr[0]);
         
          
  
          return  array_values($arr);
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

    /**
     * Get the value of nom_pavillon
     */ 
    public function getNom_pavillon()
    {
        return $this->nom_pavillon;
    }

    /**
     * Set the value of nom_pavillon
     *
     * @return  self
     */ 
    public function setNom_pavillon($nom_pavillon)
    {
        $this->nom_pavillon = $nom_pavillon;

        return $this;
    }

    /**
     * Get the value of num_pavillon
     */ 
    public function getNum_pavillon()
    {
        return $this->num_pavillon;
    }

    /**
     * Set the value of num_pavillon
     *
     * @return  self
     */ 
    public function setNum_pavillon($num_pavillon)
    {
        $this->num_pavillon = $num_pavillon;

        return $this;
    }

    /**
     * Get the value of nbr_etage
     */ 
    public function getNbr_etage()
    {
        return $this->nbr_etage;
    }

    /**
     * Set the value of nbr_etage
     *
     * @return  self
     */ 
    public function setNbr_etage($nbr_etage)
    {
        $this->nbr_etage = $nbr_etage;

        return $this;
    }
}