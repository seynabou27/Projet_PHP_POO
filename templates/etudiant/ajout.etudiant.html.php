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
    <form class=form action="" method="post">

   <div class="form1">
       <div class="row">
           <div class="form-controle">
                <label for="nom"></label>
                <input type="text" placeholder="Nom">
                <small>Error message</small>
           </div>

           <div class="form-controle">

            <label for="prenom"></label>
            <input type="text" placeholder="Prenom"><small>Error message</small>
            </div>
   

        </div>
       <div class="row ">
            <div class="form-controle">
                <label for="email"></label>
                <input class="email" type="text" name="login" placeholder="Email">
                <small>Error message</small>
        
            </div>
       </div>
   
    <div class="row">
        <div class="form-controle">
            <label for="telephone"></label>
            <input type="text" name="tele" placeholder="Téléphone">
            <small>Error Message</small>

        </div>
        <div class="form-controle">
            <label for="tuteur"></label>
            <input type="text" name="tuteur" placeholder="Tuteur">
            <small>Error message</small>
        </div>
    </div>
  
    <div class="form-controle">
        <label for="type"></label>
        <select  class="select" name="type" id="">
            <option value="Boursier">Boursier</option>
            <option value="Non Bourssier">Non Boursier</option>
            
        </select>        
    </div>
   


    <div class="tt">
        <div class="a">
            <a type="button" class="nav-link annuler  " href="<?=WEBROOT."etudiant/showEtudiants"?>">Annuler</a>

        </div>
        <div class="aa">
            <a type="button" class="nav-link  ajouter" href="#">Ajouter</a>

        </div>

    </div>
    <br> <br> <br>

    </form>
    
</div>


<!-- <div class="row">
                 <div class="form-controle">
                    <label for="username">Nom</label>
                    <input type="text" id="username" name="nom" placeholder="Enter votre nom">
                    <small class="form-text text-danger form">
                    <?php echo isset($arrErrors['nom']) ? $arrErrors['nom']: '';?> 
                    </small>
                    </div>
                    <div class="form-controle">
                         <label for="">Prenom</label>
                         <input type="text" id="email" name="prenom" placeholder="Enter votre prenom">
                    </div>
               </div>
               
               <div class="row">
                    <div class="form-controle">
                         <label for="">login</label>
                         <input type="text" name="login" placeholder="Enter votre login">
                    </div>
                    <div class="form-controle">
                         <label for="password2">date de naissane</label>
                         <input type="date" id="password2" name="date" placeholder="Entrer votre date de naissance">
                    </div>
               </div>
               <div class="row">
                    <div class="form-controle">
                         <label for="password2">Telephone</label>
                         <input type="text" id="password2" name="telephone" placeholder="Entrer votre telephone">
                    </div>
                    <div class="form-controle">
                         <label for="password2">Adresse</label>
                         <input type="text" id="password2" name="adresse" placeholder="Entrer votre adresse">
                    </div>
               </div>
            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div> -->
































<!-- <?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
<div>
    <h3 class="text"><b>Ajouter un Etudiant</b></h3>
     <p class="text"> Voici la liste des etudiants <br> </p>
  
    <img src="./../img/goupe3.svg" alt="hhhhh">

  </div>
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
                <?php endif ?> 


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
    button, input, optgroup, select, textarea {
        margin: 9px;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        width: 277px;
        padding: 1%;
        border-radius: 2px 2px 2px 2px;
        
    } 


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
</style> -->