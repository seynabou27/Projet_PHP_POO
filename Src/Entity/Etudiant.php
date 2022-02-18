<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Etudiant extends Personne implements EntityInterface{

    private string $matricule;
    private string $tuteur;
    private string $date;
    private int $telephone;
   //Propriete Navigationnelle OneToMany
   //Collection
 ///  private ArrayCollection $inscriptions;



   public function __construct()
   {
       parent::__construct();
       $this->role="ROLE_ETUDIANT";
   }
    /**
     * Get the value of tuteur
     */ 
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set the value of tuteur
     *
     * @return  self
     */ 
    public function setTuteur($tuteur)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

   /**
    * Get the value of inscriptions
    */ 
   public function getInscriptions()
   {
      return $this->inscriptions;
   }

   /**
    * Set the value of inscriptions
    *
    * @return  self
    */ 
   public function setInscriptions($inscriptions)
   {
      $this->inscriptions = $inscriptions;

      return $this;
   }

  public function addInscription(Inscription $inscription):self{
       if( !$this->inscriptions->contains($inscription)){

           $this->inscriptions->add($inscription);
           //Relation Inverse
           $inscription->setEtudiant($this);
       }
       return $this;
  }
  public function removeInscription(Inscription $inscription):self{
    if($this->inscriptions->contains($inscription)){
        $inscription->setEtudiant(null);
        $this->inscriptions->removeElement($inscription);
        
    }
    return $this;
}

public static function  fromArray(object $personne):array{
    $arr=  array_values((array)$personne);
    $arr[]=$arr[0];
    $arr[]=$arr[1];
    $arr[]=$arr[2];
    $arr[]=$arr[3];
    $arr[]=$arr[4];
    $arr[]=$arr[6];
    $arr[]=null;
    $arr[]="";
    $arr[]="";
    $arr[]="";
    $arr[]=null;
    $arr[]=$arr[5];
    unset($arr[0]);
    unset($arr[1]);
    unset($arr[2]);
    unset($arr[3]);
    unset($arr[4]);
    unset($arr[5]);
    unset($arr[6]);
    
     return  array_values($arr);
  }


    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
     /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

     

    

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
}