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
          <form method="post" action="<?=WEBROOT."etudiant/showEtudiants"?>">
                <select class="form-control" name="type_etu" id="">
                  <option value="">Choisir</option>
                  <option value="boursier">Bourssier</option>
                  <option value="nonboursier">Non Boursier</option>
                </select>
                <button type="submit" class="btn b" name="filtre" style="background-color: white; color:#171D2E;border: 2px solid #171D2E;" name="ok" style="background-color: #005CA5; color:#fff;"><b>Filter</b></button>
         </form>
          </div>
<!--     <a type="button" class="nav-link  filtre" href="#">Filtre</a>
 -->

  </div>

  <div class="container">
  <table class="container table ">
  <thead>
    <tr>
      
      <th scope="col">Prenom/Nom</th>
      <th scope="col">Bourse</th>
      <th scope="col">Tuteur</th>
      <th scope="col">Date naissance</th>
      <th scope="col">Chambre</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone</th>



    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user):?>
    <tr> <?php isset($user->id_bourse) && $user->id_bourse==1 ? $b = 'bourse_entier' : "" ?> <?php isset($user->id_bourse) && $user->id_bourse==2 ? $b = 'demi_bourse' : "" ?>
      <td><?=$user->prenom?><?=$user->nom?></td>
      <td><?=isset($user->id_bourse)? $b : "-"?></td>
      <td><?=$user->tuteur?></td>
      <td><?=$user->date_naissance?></td>
      <td><?=isset($user->chambre) ?$user->chambre : "-" ?></td>
      <td><?=isset($user->adresse) ?$user->adresse : "-" ?></td>
      <td><?=$user->telephone?></td>

    </tr>
<?php endforeach ?>   
    
  </tbody>
</table>
  </div>
  </div>

</div>
