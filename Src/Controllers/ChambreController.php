<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Entity\Chambre;
use App\Entity\TypeChambre;
use App\Repository\EtudiantRepository;
use App\Manager\ChambreManager;

use App\Repository\PavillonRepository;
use App\Repository\PersonneRepository;
use App\Repository\ChambreRepository;
use App\Repository\TypeChambreRepository;

use function PHPSTORM_META\type;

class ChambreController extends AbstractController{

    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    private PavillonRepository $pavillons;
    private ChambreRepository $chambre;
    private TypeChambreRepository $typechambre;




    private Request $request;

    public function __construct(){
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->request=new Request;
          $this->pavillons=new PavillonRepository;
          $this->chamRepo=new ChambreRepository;
          $this->typeRepo=new TypeChambreRepository;


    }

    public function ajout_chambre(Request $request){
        $arrErr=[];
         if($request->isPost()){
            
           extract($request->request());
             $this->validator->isVide($numero1,"numero1");
             $this->validator->isVide($numero2,"numero2");
            if($this->validator->valid()){
             
            $typechambre = new TypeChambre;
            $typechambre->setId_type_chambre($id_type_chambre);
            $chambre=new Chambre;
            $cham=new ChambreManager;
            $chambre->setNum_chambre($numero1);
            $chambre->setNum_etage($numero2);
            $chambre->setId_pavillon($id_pavillon);
            $chambre->setId_type_chambre($id_type_chambre);



            $insert= Chambre::fromArray($chambre); 
            /* var_dump($insert);
            die(); */    
            $cham->insert($insert);

            }else{
                 Session::setSession("errors",$this->validator->getErreurs() );
                 $this->redirect("chambre/voirChambre");
            }
            $this->redirect("chambre/showChambre1");
        }
        $type=$this->typeRepo->findAll();
        $hh=$this->pavillons->findAll();
            /* var_dump($pavillons);
            die; */
        $this->render("chambre/ajout.chambre.html.php",["type"=>$type,"hh"=>$hh]);

     }
    

    
    

   
    public function voirChambre(){
        
        $type=$this->typeRepo->findAll();
        $hh=$this->pavillons->findAll();

        $this->render("chambre/ajout.chambre.html.php",["type"=>$type,"hh"=>$hh]);
    } 

    public function showChambre1(){
        $cham=$this->chamRepo->findAll();
        $this->render("chambre/liste.chambre.html.php",["cham"=>$cham]);
    }
    

}