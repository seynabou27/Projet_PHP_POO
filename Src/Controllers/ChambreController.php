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
          $this->chambre=new ChambreRepository;
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
                if ($id==null) {
                    $insert= Chambre::fromArray1($chambre);  
                    //var_dump($insert);die;  
                    $cham->insert($insert);
                    
                }else {
                    $chambre->setId_chambre($id);
                    $chambre->setEtat('non_archiver');
                    $insert= Chambre::fromArrayUpdate($chambre);
                    /* var_dump($insert) ;
                    die;   */
                    $cham->update($insert); 
                    
                }
                $this->redirect("chambre/showChambre1");

            

            }else{
                 Session::setSession("errors",$this->validator->getErreurs() );
                 $this->redirect("chambre/voirChambre");
            }
        }
        $type=$this->typeRepo->findAll();
        $hh=$this->pavillons->findAll();
          
        $this->render("chambre/ajout.chambre.html.php",["type"=>$type,"hh"=>$hh]);

     }

     public function archiverChambre(Request $request){

        extract($request->request());
       // var_dump($id_chambre); die;
        $restor = $this->chambre->findById((int)$id_chambre);
        $restor[0]->etat=='non_archiver' ? $etat = 'archiver' : $etat = 'non_archiver' ;
        $chambre=new Chambre;
        $cham=new ChambreManager;
        $chambre->setId_chambre($id_chambre);
        $chambre->setNum_chambre($restor[0]->num_chambre);
        $chambre->setNum_etage((int)$restor[0]->num_etage);
        $chambre->setId_pavillon($restor[0]->id_pavillon);
        $chambre->setId_type_chambre($restor[0]->id_type_chambre);
        $chambre->setEtat($etat);
        $update= Chambre::fromArray($chambre);  
       //var_dump($update); die;
        $cham->update($update);

        $this->redirect("chambre/showArchiver");

        $this->render("chambre/liste.chambre.html.php");

     }
     public function updateChambre(Request $request){

        extract($request->request());

        $chambre=new Chambre;
        $cham=new ChambreManager;
        $chambre->setId_chambre($id_chambre);
        $chambre->setNum_chambre($num_chambre);
        $chambre->setNum_etage((int)$num_etage);
        $chambre->setId_pavillon($id_pavillon);
        $chambre->setId_type_chambre($id_type_chambre);
        $chambre->setEtat($etat);
        $updates= Chambre::fromArray($chambre);  
/*         var_dump($updates);die;
 */        $cham->update($updates);
        $this->render("chambre/liste.chambre.html.php");

     }
    

    
    

   
    public function voirChambre(){
        $type=$this->typeRepo->findAll();
        $hh=$this->pavillons->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type"=>$type,"hh"=>$hh]);
    }

    public function ajoutChambre($id){
        $id=$this->request->query();
        $chambre_by_id=$this->chambre->findById($id[0]);
       /*  var_dump($chambre_by_id[0]);
        die; */ 
        $type=$this->typeRepo->findAll();
        $hh=$this->pavillons->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type"=>$type,"hh"=>$hh,"chambre_by_id"=>$chambre_by_id]);
    }



    public function voirUpdateChambre(){
        $url=$this->request->query();
        $id = explode('=',$url[0]);
        $r = $this->chambre->findById((int)$id[1]);
        //var_dump($r);
        $type=$this->typeRepo->findAll();
        $hh=$this->pavillons->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type"=>$type,"hh"=>$hh,'restor'=>$r]);
    } 

    public function showChambre1(){
        $cham=$this->chambre->findAll();
        $pav = $this->pavillons->findAll();
        if ($this->request->isPost()) {
            extract($this->request->request());
            $pav=$this->pavillons->findAll();
            if (isset($filtre)) {
                  $cham=$this->chambre->findAll();
            }else{
                $pav=$this->chambre->findAll();
            }
            
            $post = $this->request->request();
            
         }
        $this->render("chambre/liste.chambre.html.php",["cham"=>$cham,"pav"=>$pav]);
    }

        // $pavillons = $this->repo->findChambreByEtat('non_archivee');
        // if (isset($ok)) {
        //     $chambres=$this->repo->findByPavillon2($pav);
        // }else {
        //     $chambres=$this->repo->findChambreByEtat('non_archivee');
        // }
        // $this->render("chambre/liste.chambre.html.php",["chambres"=>$chambres,'pavillons'=>$pavillons]);
        // }


    public function showArchiver(){
        $chamb=$this->chambre->findAll();
        
         $this->render("chambre/archiver.chambre.html.php",["chamb"=>$chamb]);
    }
    

}