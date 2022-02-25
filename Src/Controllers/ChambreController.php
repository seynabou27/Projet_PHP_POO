<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Repository\EtudiantRepository;
use App\Repository\PavillonRepository;
use App\Repository\PersonneRepository;

class ChambreController extends AbstractController{

    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    private PavillonRepository $pavillon;


    private Request $request;

    public function __construct(){
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->request=new Request;
          $this->pavillon=new PavillonRepository;



    }
    

    
    

   
    public function voirChambre(){
        $chambre=$this->pavillon->findAll();
        $this->render("chambre/ajout.chambre.html.php",["chambre"=>$chambre]);
    }

    public function showChambre1(){
        $pav=$this->pavillon->findAll_pavillon1();
        $this->render("chambre/liste.chambre.html.php",["pav"=>$pav]);
    }
    

}