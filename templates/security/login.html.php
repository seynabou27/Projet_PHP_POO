<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
    <div class="contenu">
      <div class="titre">

        <h2><b>UCAD</b></h2>

      </div>
      <div class="icone">
        <span>
          <img src="./img/groupe.svg" alt="gggggg">
        </span>
        
      </div>
      <div class="affiche">
        
        <div class="form">
          <div class="form-style-8">
              <h2 class="connect"><b>Connexion</b></h2>
            <form method="post" action="<?=WEBROOT."security/seConnecter"?>">
            <?php if(isset($arrErrors['connexion'])): ?>
              <div class="alert alert-danger" role="alert">
                <strong> <?=$arrErrors['connexion']?></strong>
              </div>
            <?php endif ?>
              <input type="text" name="login" placeholder="Nom d'utilisateur" />
              <?php if(isset($arrErrors['login'])): ?>
                <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
              <?php endif ?>
              <input type="password" name="password" placeholder="Mot de passe" />
              <?php if(isset($arrErrors['password'])): ?>
                <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['password']?></small>
              <?php endif ?>

              <button type="submit" class="btn">Je me connecte</button>

<!--               <input type="button" value="Je me connecte" />
 -->              
              <a href="#"><p class="texte" > <b>J'ai oublié mon mot de passe</b></p></a>
            </form>
          </div>
        
        </div>
    </div>
    </div>





    






















    



