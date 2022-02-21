<div class="container3">
  


  <div class="container4  tableau">

  <div>
    <p class="titre3"> <b> Liste des responsables des Pavillons</b></p>
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



















<!-- <style>
    *{
	box-sizing: border-box;
} 
body{
    overflow-x: hidden;
}

    .container3-fluid {
        width: 100%;
        padding-right: 0px;
        padding-left: 0px;
        margin-right: auto;
        margin-left: auto;
    }
    .nav {
        color: rgba(255, 255, 255, 0.9);
    }
    .image img{
        margin: 0;
        padding: 0;
        width: 1310px;
    }
    .table thead{
      background-color: #F0F0F0;
    }
    
    .tableau{
      padding: 2%;
    }
    .titre3{
      font-size: 20px;
    }
    .text{
      position: absolute;
      z-index: 2;
      color: white;
      font-size: 23px;
      margin-top: 10%;
      margin-left: 3%;
    }
   
    

</style> -->