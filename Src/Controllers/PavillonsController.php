<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Entity\Pavillon;
use App\Repository\EtudiantRepository;
use App\Manager\PavillonManager;
use App\Repository\PavillonRepository;
use App\Repository\PersonneRepository;

class PavillonsController extends AbstractController{

    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    private PavillonRepository $pavRepo;

    private Request $request;

    public function __construct(){
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->request=new Request;
          $this->pavRepo=new PavillonRepository;


    }
    

    public function ajout_pavillon(Request $request){
        $arrErr=[];
         if($request->isPost()){
           extract($request->request());
            $this->validator->isVide($nompav,"nompav");
            $this->validator->isVide($pavillon1,"pavillon1");
            $this->validator->isVide($pavillon2,"pavillon2");
            if($this->validator->valid()){
            $pavillon=new PavillonManager;
            $pavs=new Pavillon;
            $pavs->setNom_pavillon($nompav);
            $pavs->setNum_pavillon($pavillon1);
            $pavs->setNbr_etage($pavillon2);
            if ($id_pav==null) {
                $insert= Pavillon::fromArray($pavs); 
                 $pavillon->insert($insert);
            }else {
                $pavs->setId_pavillon($id_pav);
                $updates= Pavillon::fromArray1($pavs);  
                $pavillon->update($updates);
            }
            $this->redirect("pavillons/showPavillon1");
            }else{
                 Session::setSession("errors",$this->validator->getErreurs() );
                 $this->redirect("pavillon/voirPavillon");
            }
           
/*               $this->redirect("pavillons/showPavillon1");
 */              
        }
        
         $this->render("pavillon/ajout.pavillon.html.php");
     }    
    
    //  public function updatePavillon(Request $request){
    //     extract($request->request());
    //     $pavillon=new pavillonManager;
    //     $pavs=new Pavillon;
    //     $pavs->setId_pavillon($id_pav);
    //     $pavs-> setNom_pavillon($nom_pavillon);
    //     $pavs-> setNum_pavillon($num_pavillon);
    //     $pavs-> setNbr_etage($nbr_etage);


    //     $updates= Pavillon::fromArray1($pavs);  
    //      //var_dump($updates);die;
    //      $pavillon->update($updates);

    //     $this->render("pavillon/liste.pavillon.html.php");

    // }

   
    public function voirPavillon(){
         $this->render("pavillon/ajout.pavillon.html.php");
    }

    public function voirPavillonUpdate(){
        $id_pav=$this->request->query();
        $pavillon_by_id =$this->pavRepo->findById($id_pav[0]);
        $this->render("pavillon/ajout.pavillon.html.php",["pavillon_by_id"=>$pavillon_by_id]);
   }

    public function showPavillon1(){
        $pavi=$this->pavRepo->findAll();
        $this->render("pavillon/liste.pavillon.html.php",["pavi"=>$pavi]);
    }
   
    

}