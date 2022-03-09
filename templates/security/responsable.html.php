<div class="groupe3">
    <h3 class="text"><b>Responsable</b></h3>
    <p class="text11"> Voici la liste des responsables <br> </p>
  
  </div>

<div class="pavillon">
  <div class=" pavv">
    <div class="pav1 ">
      <H4>Listes des responsables</H4>

    </div>  
  
  </div>
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Prenom/Nom</th>
      <th scope="col">Login</th>
      <th scope="col">Role</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user):?>
    <tr>
      <td><?=$user->prenom?><?=$user->nom?></td>
      <td><?=$user->email?></td>
      <td><?=$user->role?></td>
<!--       <td> <button class="modif" type="submit">Modifier</button> <button class="filt" type="submit">Archiver</button></td>
 -->    


    </tr>
<?php endforeach ?>   
    
  </tbody>
</table>
  
  </div>



</div>






































