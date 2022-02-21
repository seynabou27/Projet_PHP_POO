<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>

<div class="ajout">
        <h3 ><b>Ajouter un Etudiant</b></h3> 
    </div>
<div class="container ">
    
    <div class="form">
        <h3 class="titre"><b>Inscription</b></h3>

        
        <form method="post" action="<?=WEBROOT."security/inscription"?>" enctype="multipart/form-data">

        <input type="hidden" name="controllers" value="securityCcontroller"/>
        <input type="hidden" name="action" value="inscription"/>
        <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>">
           
            <div class="form1">
                <input type="text" name="nom" id=""  placeholder="Nom">
                <?php if(isset($arrErrors['non'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['non']?></small>
                <?php endif ?>
                <input type="text" name="prenom" id="" placeholder="Prenom">
                <?php if(isset($arrErrors['prenom'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['prenom']?></small>
                <?php endif ?>
            </div>
            <div class="form2">
                <input class="email" type="email" name="login" id="" placeholder="Email">
                <?php if(isset($arrErrors['login'])): ?>
                    <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
                <?php endif ?>

            </div>
            <div class="form3">
                <input class="password" type="text" name="tuteur" id="" placeholder="Tuteur">
                <?php if(isset($arrErrors['tuteur'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['tuteur']?></small>
                <?php endif ?>

            </div>
            <div class="form4">
                <input class="date" type="date" name="date" id="" placeholder="Date Naissance">
                <?php if(isset($arrErrors['date'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['date']?></small>
                <?php endif ?>

                <!-- <input class="num" type="text" name="tele" id="" placeholder="Telephone">
                <?php if(isset($arrErrors['tele'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['tele']?></small>
                <?php endif ?> -->


            </div>
            <div class="form5">
            <input class="mat" type="text" name="matri" id="" placeholder="Matricule">
                <?php if(isset($arrErrors['matri'])): ?>
                    <small id=""  class="form-text text-danger"><?=$arrErrors['matri']?></small>
                <?php endif ?>


            </div>
            <button type="submit" class="btn">Inscrire</button>

            
        </form>
    </div>
</div>

<style>
*{
    box-sizing: border-box;
}
     .container{
        display: flex;
        justify-content: center;
        align-items: center;
         height: 100vh; 
        width: 100%;
       
        
    }
    body{
        overflow-x: hidden;
    } 
   /*  button, input, optgroup, select, textarea {
        margin: 9px;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        width: 277px;
        padding: 1%;
        border-radius: 2px 2px 2px 2px;
        
    } */


body, button, input, select, textarea, blockquote p, .entry-meta, .more-link, dl, .previous a, .next a, .nav-previous a, .nav-next a, #respond h3#reply-title #cancel-comment-reply-link, #respond form input[type="text"], #respond form textarea, #secondary .widget, .error-404 .widget {
    font-family: PT Sans;
}
#respond form input[type=text], #respond form textarea, #respond form input[type=email], #respond form input[type=url],#respond form input[type=date] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 16px;
    line-height: 1.5;
    padding: 10px;
    width: 100%;
}
input[type=text], input[type=email], input[type=password], input[type=url], input[type=date] {
    padding: 1%;
    border: 1px solid #eaeaea;
    line-height: 23px;
    width: 277px;
    margin: 0 0 30px;
    background-color: #f8f8f8;
    border-radius: 3px;
}
.form2 .email {
    width: 560px;

}
.form3 .password {
    width: 560px;

}
.form5 .mat {
    width: 560px;

}
.form{
    border: 2px solid;
    border-color: #f8f8f8;
    margin: 1%;
    padding: 3%;
    padding-left: 11%;
    padding-right: 11%;
    border-radius: 2px;
    box-shadow: 2%;
    
}
.titre{
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 4%;
}
.btn{
    color: white;
    background-color:#171D2E;
    width: 70%;
    height: 45px;
    justify-content: center;
    
}
.ajout{
    text-align: center;
    padding: 2%;
    
}
</style>