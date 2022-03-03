<?php

namespace App\Entity;

class Chambre{

    protected int $id_chambre;
    protected string $num_chambre;
    protected string $num_etage;
    protected int $id_type_chambre;
    protected int|null $id_pavillon;
    private string $etat;


    public function __construct(){
        
    }
    

    

    

    public static function  fromArray(object $chambre):array{
      $arr=  array_values((array)$chambre);
    //   $arr[]=$arr[1];
    //   $arr[]=$arr[2];
    //   $arr[]=$arr[3];
    //   $arr[]=$arr[4];
    //   $arr[]=$arr[5];
       $arr[]=$arr[0];
         unset($arr[0]);
        // unset($arr[1]);
        // unset($arr[2]); 
        // unset($arr[3]); 
        // unset($arr[4]);  
        // unset($arr[5]);  
        return  array_values($arr);

    }

    public static function  fromArray1(object $chambre):array{
        $arr=  array_values((array)$chambre);
     
        //$arr[]=$arr[0];
          // unset($arr[0]);
           
          return  array_values($arr);
  
      }




    public static function  fromArrayUpdate(object $chambre):array{
        $arr=  array_values((array)$chambre);
        $arr[]=$arr[0];
        unset($arr[0]);
          return  array_values($arr);
  
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
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}