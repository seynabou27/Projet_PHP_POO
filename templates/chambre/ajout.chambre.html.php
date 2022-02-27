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
       <a class="text12" href="<?=WEBROOT."chambre/showChambre1"?>"> <img  src="./../img/outline.png" alt="hhhh">Retour vers chambre</a>

    </div>    
    <h3 class="text"><b>Ajout chambres</b></h3>
<!--      <p class="text11"> Voici la liste des chambres <br> </p>
 -->  
</div> 
<div class="principale">
    <p class="annonce">Pour ajouter une nouvelle chambre, veuillez remplir <br> <br> le formulaire ci-dessous</p>
    <form class=form  method="post" action="<?=WEBROOT."chambre/ajout_chambre"?>" enctype="multipart/form-data">

    <div class="form1">
       <div class="row">
           <div class="form-controle">
                <label for="nom"></label>
                <input type="text" name="numero1" placeholder="Numéro de la chambre">
                <?php if(isset($arrErrors['numero1'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['numero1']?></small>
                <?php endif ?>
<!--                 <small>Error message</small>
 -->           </div>

           <div class="form-controle">

            <label for="prenom"></label>
            <input type="text" name="numero2" placeholder="Numéro de l'etage ">
            <?php if(isset($arrErrors['numero2'])): ?>
                <small id=""  class="form-text text-danger"><?=$arrErrors['numero2']?></small>
            <?php endif ?>
<!--             <small>Error message</small>
 -->            </div>
   

        </div>
        <div class="row">
            <div class="form-controle" id="fcb">
                <label for="type"></label>
                    <select  class="select1" name="id_type_chambre" id="">
                         <option value="0">Choisir</option>
                         <?php foreach($typechambre as $type): ?>
                            <option value="<?=$type->id_type_chambre?>"><?=$type->nom_type_chambre?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
        </div>

        <div class="tt">
        <div class="a">
            <a type="button" class="nav-link annuler  " href="<?=WEBROOT."chambre/showChambre1"?>">Annuler</a>

        </div>
        <div class="aa">
            <button type="submit" class="btn nav-link ajouter">Ajouter chambre</button>


        </div>
 
    </div>
       
       
    </div>
    </form>

</div>