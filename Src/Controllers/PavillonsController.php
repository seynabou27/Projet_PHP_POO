<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Repository\EtudiantRepository;
use App\Repository\PavillonRepository;
use App\Repository\PersonneRepository;

class PavillonsController extends AbstractController{

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
    

    
    

   
    public function voirPavillon(){
        $pav=$this->pavillon->findAll_pavillon();
/*         die('gtuhuh');
 */        $this->render("pavillon/ajout.pavillon.html.php",["pav"=>$pav]);
    }

    public function showPavillon1(){
        $pav=$this->pavillon->findAll_pavillon1();
        $this->render("pavillon/liste.pavillon.html.php",["pav"=>$pav]);
    }
    

}