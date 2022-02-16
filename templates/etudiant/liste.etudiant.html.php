<div class="container-fluid">

  <img src="./../img/groupe2.png" alt="hhhhh">

  
  <div class="container mt-5 ">
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
   *{
	box-sizing: border-box;
}

    .container-fluid {
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

</style>