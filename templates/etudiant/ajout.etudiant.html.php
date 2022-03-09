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
       <a class="text12" href="<?=WEBROOT."etudiant/showEtudiants"?>"> <img  src="./../img/outline.png" alt="hhhh">Retour vers Etudiant</a>

    </div>    
    <h3 class="text"><b>Ajout étudiants</b></h3>
     <p class="text11"> Voici la liste des etudiants <br> </p>
  
<!--      <img src="./../img/goupe3.svg" alt="hhhhh">
 --> 
</div> 
<div class="principale">
    <p class="annonce">Pour ajouter un nouveau etudiant, veuillez remplir <br> <br> le formulaire ci-dessous</p>
    <form class=form  method="post" action="<?=WEBROOT."security/inscription"?>" enctype="multipart/form-data">
    <input type="hidden" name="controllers" value="securityCcontroller"/>
    <input type="hidden" name="action" value="inscription"/>
    <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>">
          

   <div class="form1">
       <div class="row">
           <div class="form-controle">
                <label for="nom"></label>
                <input type="text" name="nom" placeholder="Nom">
                <?php if(isset($arrErrors['nom'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['nom']?></small>
                <?php endif ?>
<!--                 <small>Error message</small>
 -->           </div>

           <div class="form-controle">

            <label for="prenom"></label>
            <input type="text" name="prenom" placeholder="Prenom">
            <?php if(isset($arrErrors['prenom'])): ?>
                <small id=""  class="form-text text-danger"><?=$arrErrors['prenom']?></small>
            <?php endif ?>
<!--             <small>Error message</small>
 -->            </div>
   

        </div>
       <div class="row ">
            <div class="form-controle">
                <label for="email"></label>
                <input  type="text" name="login" placeholder="Email">
                <?php if(isset($arrErrors['login'])): ?>
                    <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
                <?php endif ?>

<!--                 <small>Error message</small>
 -->        
            </div>
            <div class="form-controle">
                <label for="date"></label>
                <input type="date" id="" name="date" placeholder="Date Naissance">
                <?php if(isset($arrErrors['date'])): ?>
                    <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['date']?></small>
                <?php endif ?>

            </div>
       </div>
       <div class="row">
             <div class="form-controle">
                <label for="tuteur"></label>
                <input class="email" type="text" name="tuteur" placeholder="Tuteur">
                <?php if(isset($arrErrors['tuteur'])): ?>
                    <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['tuteur']?></small>
                <?php endif ?>

    <!--             <small>Error message</small>
    -->      </div>
       </div>
   
    <div class="row">
        <div class="form-controle">
            <label for="telephone"></label>
            <input type="text" name="telephone" placeholder="Téléphone">
            <?php if(isset($arrErrors['tele'])): ?>
                    <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['tele']?></small>
                <?php endif ?>

<!--             <small>Error Message</small>
 -->
        </div>
        <div class="form-controle">
            <label for="matri"></label>
            <input type="text" name="matri" placeholder="Matricule">
            <?php if(isset($arrErrors['matri'])): ?>
                    <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['matri']?></small>
                <?php endif ?>

<!--             <small>Error Message</small>
 -->
        </div>
       
    </div>
    <div class="radio">
                <p>Selectionnez le type d'etudiant:</p><br> <br>
                 <div class="classs" style="display:flex">
                    <div class="rad">
                        <input type="radio" id="myRadio"  style="margin-right: 13px;" onclick="handleClick(this);" name="fav_language" value="bourse">
                        <label for="Bourse" >Boursier</label><br>
                   </div>
                    <div class="rad1">
                        <input type="radio" id="myRadio" style="margin-right: 13px;" onclick="handleClick(this);"    name="fav_language" value="notbourse">
                        <label for="NonBoursier">Non Boursier</label>
                    </div>
                </div>
            </div>
            <div class="form-controle" id="fcb" style="display:none">
                <label for="type"></label>
                    <select  class="select" name="id_bourse" id="">
                         <option value="0">Choisir</option>
                         <?php foreach($bourses as $brs): ?>
                            <option value="<?=$brs->id_bourse?>"><?=$brs->type_bourse?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-controle" id="fca" style="display:none">
                <label for="adresse"></label>
                <input type="text" id="adresse" class="email" name="adresse" placeholder="Adresse">
                <p style="color: #dc3545;margin-top: 2%;"><?=isset($arrayErrors['adresse'])?$arrayErrors['adresse']: ""?></p>
            </div>
  
    
   


    <div class="tt">
        <div class="a">
            <a type="button" class="nav-link annuler  " href="<?=WEBROOT."etudiant/showEtudiants"?>">Annuler</a>

        </div>
        <div class="aa">
            <button type="submit" class="btn nav-link  ajouter">Ajouter</button>

<!--             <a type="button" class="nav-link  ajouter" href="#">Ajouter</a>
 -->
        </div>
 
    </div>
    <br> <br> <br>

    </form>
    
</div>































