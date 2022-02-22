<div class="contenu3">
  <div class="groupe3">
    <h3 class="text"><b>Etudiants</b></h3>
    <p class="text11"> Voici la liste des etudiants <br> </p>
  
<!--     <img src="./../img/goupe3.svg" alt="hhhhh">
 -->
  </div>

  
  <div class="contenu4">
  <div class="titr">
    <p class="etud"> <b> Liste des Etudiants</b></p> 
    <a type="button" class="nav-link  filtre" href="#">Filtre</a>

    <a type="button" class="nav-link  ajout" href="<?=WEBROOT."etudiant/showEtudiants1"?>">Ajouter</a>

  </div>

  <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Prenom/Nom</th>
      <th scope="col">Etat bourse</th>
      <th scope="col">Tuteur</th>
      <th scope="col">Date naissance</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user):?>
    <tr>
      <td><?=$user->prenom?><?=$user->nom?></td>
      <td><?=$user->email?></td>
      <td><?=$user->tuteur?></td>
      <td><?=$user->date_naissance?></td>
      <td> <button class="modif" type="submit">Modifier</button> <button class="filt" type="submit">Archiver</button></td>

    </tr>
<?php endforeach ?>   
    
  </tbody>
</table>
  </div>

</div>
