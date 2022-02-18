<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Repository\EtudiantRepository;
use App\Repository\PersonneRepository;

class EtudiantController extends AbstractController{

    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    private Request $request;
    public function __construct()
    {
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->request=new Request;
    }
    public function login(){
          $this->layout="layout.connexion";
          $this->render("security/login.html.php");
    }

    public function showEtudiants(){
      $users=$this->etuRepo->findAll();
      $this->render("etudiant/liste.etudiant.html.php",["users"=>$users]);
  }  
  
  public function showEtudiants1(){
      $users=$this->etuRepo->insert();
      /* die('gtuhuh'); */
      $this->render("etudiant/ajout.etudiant.html.php",["users"=>$users]);
  }   
}

?>