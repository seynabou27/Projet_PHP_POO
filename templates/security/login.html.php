<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
    <div class="container">
      <div class="titre">

        <h2><b>UCAD</b></h2>

      </div>
      <div class="icone">
        <span>
          <img src="./img/groupe.svg" alt="gggggg">
        </span>
        
      </div>
      <div class="titre1">
        
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

























    <style>
      *{
    box-sizing: border-box;
    overflow: hidden;
  } 
  body{
    display: flex;
    background-color: #171D2E;
    color: white;
    text-align: center;

  }
  .titre{
    padding: 30px ;
    font-size: 10px;
  }
  .connect{
    margin: 30px;
    padding: auto;
  }
  .container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .texte{
      margin-top: -45px;
      font-size: 12px;
  }
  a{
    color: #FFFFFF;
  }

  .form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #171D2E;
	margin: px auto;
	

}
.form-style-8 h2{
	text-transform: uppercase;
	font-family: '', sans-serif;
	color: #5F9DFF;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
  text-align: center;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
  color: #707070;
  border-color: #707070;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 button[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #FFFFFF;
	border: 1px solid #FFFFFF;
  border-radius: 10px 10px 10px 10px;
	display: inline-block;
	cursor: pointer;
	color: #000000;
  margin: 65px;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
}
.form-style-8 button[type="submit"]:hover, 
.form-style-8 button[type="submit"]:hover {
	background:linear-gradient(to bottom, #5F9DFF 5%, #5F9DFF 100%);
	background-color:#5F9DFF;
}

    </style>






