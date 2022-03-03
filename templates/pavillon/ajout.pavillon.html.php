

<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>


<div class="groupe3">
    <div class="outline">
       <a class="text12" href="<?=WEBROOT."pavillons/showPavillon1"?>"> <img  src="./../img/outline.png" alt="hhhh">Retour vers pavillon</a>

    </div>    
    <h3 class="text"><b>Ajout Pavillon</b></h3>
<!--      <p class="text11"> Voici la liste des Pavillons <br> </p>
 -->  
</div> 
<div class="principale">
    <p class="annonce">Pour ajouter une nouvelle pavillon, veuillez remplir <br> <br> le formulaire ci-dessous</p>
    <form class=form  method="post" action="<?=WEBROOT."pavillons/ajout_pavillon"?>" enctype="multipart/form-data">
    <input type="hidden" value="<?=isset($pavillon_by_id[0]->id_pavillon) ? $pavillon_by_id[0]->id_pavillon:'';?>" name="id">


    <div class="form1">

    <div class="row">
      <div class="form-controle">
        <label for="nom"></label>
                <input type="text" class="email" name="nompav" placeholder="Nom du pavillon">
                <?php if(isset($arrErrors['nompav'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['nompav']?></small>
                <?php endif ?>        
      </div>
    </div>
       <div class="row">
           <div class="form-controle">
                <label for="nom"></label>
                <input type="text"  name="pavillon1" placeholder="Numéro du pavillon">
                <?php if(isset($arrErrors['pavillon1'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['pavillon1']?></small>
                <?php endif ?>
<!--                 <small>Error message</small>
 -->           </div>

           <div class="form-controle">

            <label for="prenom"></label>
            <input type="text" name="pavillon2" placeholder="Nombre d'etages ">
            <?php if(isset($arrErrors['pavillon2'])): ?>
                <small id=""  class="form-text text-danger"><?=$arrErrors['pavillon2']?></small>
            <?php endif ?>
<!--             <small>Error message</small>
 -->            </div>
   

        </div>
        

        <div class="tt">
        <div class="a">
            <a type="button" class="nav-link annuler  " href="<?=WEBROOT."pavillons/showPavillon1"?>">Annuler</a>

        </div>
        <div class="aa">
            <button type="submit" class="btn nav-link ajouter">Ajouter pavillon</button>


        </div>
 
    </div>
       
       
    </div>
    </form>

</div>