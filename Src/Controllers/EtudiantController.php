<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Entity\Bourse;
use App\Entity\EtudiantBourssier;
use App\Repository\BourseRepository;
use App\Repository\EtudiantBourssierRepository;
use App\Repository\EtudiantNBourssierRepository;
use App\Repository\EtudiantRepository;
use App\Repository\PersonneRepository;

class EtudiantController extends AbstractController{
    private BourseRepository $bourseRepo;
    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    private Request $request;
    private EtudiantBourssierRepository $etuBoursier;
    private EtudiantNBourssierRepository $etuNboursier;
    public function __construct()
    {
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->request=new Request;
          $this->bourseRepo = new BourseRepository;
          $this->etuBoursier = new EtudiantBourssierRepository;
          $this->etuNboursier = new EtudiantNBourssierRepository;
    }
    public function login(){
          $this->layout="layout.connexion";
          $this->render("security/login.html.php");
    }

    public function showEtudiants(){
      $users=$this->etuRepo->findAll();
      
      $eb = $this->etuBoursier->findEtuBoursier();
      $enb = $this->etuNboursier->findEtuNonBoursier();
        if ($this->request->isPost()) {
            extract($this->request->request());
            if ($type_etu=='boursier') {
                  $users = $eb;
            }elseif ($type_etu=='nonboursier') {
                $users = $enb;
            }
            $post = $this->request->request();
            
         }
      $this->render("etudiant/liste.etudiant.html.php",["users"=>$users,'post'=>$post]);
  }  
  
  public function showEtudiants1(){
      $users=$this->etuRepo->insert();
      $bourse = $this->bourseRepo->findAll();

      $this->render("etudiant/ajout.etudiant.html.php",["users"=>$users,'bourses'=>$bourse]);
  }   
}

?>