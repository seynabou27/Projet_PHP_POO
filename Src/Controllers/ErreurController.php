<?php 
namespace App\Controllers;

use App\Core\AbstractController;
class ErreurController extends AbstractController{
    public function __construct()
    {
        parent::__construct();
        $this->layout='layout.connexion';
    }
   public  function pageNotFound(){
       http_response_code(404);
       $this->render("erreur/page.not.found.html.php");
    }
}