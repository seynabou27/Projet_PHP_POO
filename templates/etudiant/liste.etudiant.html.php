<div class="container1">
  <div>
     <p class="text"><b>Bienvenue! <br>  Unuversité Cheikh Anta Diop</b></p>
 
    <img src="./../img/groupe2.png" alt="hhhhh">

  </div>

  
  <div class="container1">
  <div class="titr">
    <p class="titre1"> <b> Liste des Etudiants</b></p> 

    <a type="button" class="nav-link  deconnexion" href="<?=WEBROOT."etudiant/showEtudiants1"?>">Ajouter</a>

  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Complet</th>
      <th scope="col">Login</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user):?>
    <tr>
      <th scope="row"><?=$user->id_personne?></th>
      <td><?=$user->prenom?><?=$user->nom?></td>
      <td><?=$user->email?></td>
      <td><?=$user->role?></td>
    </tr>
<?php endforeach ?>   
    
  </tbody>
</table>
  </div>

</div>
<style>

/* liste etudiant */

 

    .container1 {
        width: 100%;
        padding-right: 0px;
        padding-left: 0px;
        margin-right: auto;
        margin-left: auto;
    }
    .nav {
        color: rgba(255, 255, 255, 0.9);
    }
    img{
        margin: 0;
        padding: 0;
        width: 1310px;
    }
    .text{
      position: absolute;
      z-index: 2;
      color: white;
      font-size: 23px;
      margin-top: 10%;
      margin-left: 3%;
    }
    .table thead{
      background-color: #F0F0F0;
    }
    .titre1{
      font-size: 20px;
      padding: 1%;
      
      
    }
    .titr{
      padding: 2%;
    }
    .deconnexion{
   
    border: 1px solid #171D2E;
    background-color: #171D2E;
    color: white;
    border-radius: 3px 3px 3px 3px;
    width: 124px;
    float: right;
    margin-top: -6%;  
    text-align: center;
  }


    


</style>