<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Entity\Chambre;
use App\Entity\TypeChambre;
use App\Repository\EtudiantRepository;
use App\Repository\PavillonRepository;
use App\Repository\PersonneRepository;
use App\Repository\ChambreRepository;


class ChambreController extends AbstractController{

    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    private PavillonRepository $pavillon;
    private ChambreRepository $chambre;



    private Request $request;

    public function __construct(){
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->request=new Request;
          $this->pavillon=new PavillonRepository;
          $this->chambre=new ChambreRepository;

    }

    public function ajout_chambre(Request $request){
        $arrErr=[];
         if($request->isPost()){
           extract($request->request());
            $this->validator->isVide($numero1,"numero1");
            $this->validator->isVide($numero2,"numero2");
           /*  $this->validator->isVide($type,"type"); */
            if($this->validator->valid()){
           
            /* $TypeChambre = new TypeChambre  ;
            $bourse->setId($id_bourse);
            $cham=new TypeChambre;
             $cham=new ChambreManager; */
           $cham->setNum_chambre($numero1);
            $cham->setNum_etage($numero2);

            $insert= Chambre::fromArray($cham); 
              var_dump($insert);
            die();   
            $chambre->insert($insert);

            }else{
                 Session::setSession("errors",$this->validator->getErreurs() );
                 $this->redirect("chambre/voirChambre");
            }
            $this->redirect("chambre/showChambre1");
        }
        
         $this->render("chambre/ajout.chambre.html.php");
     }
    

    
    

   
    public function voirChambre(){
        
        $this->render("chambre/ajout.chambre.html.php");
    }

    public function showChambre1(){
        $cham=$this->chambre->findAll_chambre();
        $this->render("chambre/liste.chambre.html.php",["cham"=>$cham]);
    }
    

}