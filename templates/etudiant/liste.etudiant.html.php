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
    <a type="button" class="nav-link  ajout" href="<?=WEBROOT."etudiant/showEtudiants1"?>"><i class="fas fa-plus "></i>Ajouter</a>

    <div class=" form-inline filtr1">
          <label class="mr-3">Type </label>
          <form method="post" action="">
          <input type="hidden" name="controlleurs" value=""/>
          <input type="hidden" name="action" value=""/>
                <select class="form-control" name="etat" id="">
                  <option>Bourssier</option>
                  <option>Non Boursier</option>
                  

                </select>
                <button type="submit" class="btn b" style="background-color: #171D2E; color:white;" name="ok" style="background-color: #005CA5; color:#fff;"><b>ok</b></button>

         </form>
          </div>
<!--     <a type="button" class="nav-link  filtre" href="#">Filtre</a>
 -->

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
      <td><?=$user->type?></td>
      <td><?=$user->tuteur?></td>
      <td><?=$user->date_naissance?></td>
      <td> <button class="modif" type="submit">Modifier</button> <button class="filt" type="submit">Archiver</button></td>

    </tr>
<?php endforeach ?>   
    
  </tbody>
</table>
  </div>

</div>
