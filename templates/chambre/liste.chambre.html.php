<div class="groupe3">
    <h3 class="text"><b>Chambres</b></h3>
<!--     <p class="text11"> Voici la liste des pavillions<br> </p>
 -->  
  </div>
<div class="pavillon">
<div class="titr">
     <H4 class="etud">Listes des chambres</H4>

     <a type="button" class="nav-link ajout" href="<?=WEBROOT."chambre/voirchambre"?>"><i class="fas fa-plus "></i>Ajouter</a>

     <div class=" form-inline filtr1">
          <label class="mr-3">Type </label>
          <form method="post" action="<?=WEBROOT."chambre/"?>">
                <select class="form-control" name="" id="">
                  <option value="">Choisir</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
                <button type="submit" class="btn b" name="filtre" style="background-color: white; color:#171D2E;border: 2px solid #171D2E;" name="ok" style="background-color: #005CA5; color:#fff;"><b>Filter</b></button>
         </form>
          </div>  
<!--     <a type="button" class="nav-link  filtre" href="#">Filtre</a>
 -->

  </div>
  <!-- <div class="row pav">
    <div class="pav1 col-6 ">
      <H4>Listes des chambres</H4>

    </div>  
   
    <div class="pav2 col-5 ">
      <div class="btn1 ">
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
         <a type="button" class="nav-link fil" href="#">Filtre</a>
 
      </div>  
      <div class="btn" style="margin-left: 23%;">
        <a type="button" class="nav-link ajo" href="<?=WEBROOT."chambre/voirchambre"?>"><i class="fas fa-plus "></i>Ajouter</a>
        

      </div>
    </div>
  </div> -->
  <div class="container">
    <table class="table">
    <thead>
      <tr>
        
        <th scope="col">Numéro chambre</th>
        <th scope="col">Numéro Etage</th>
        <th scope="col">Pavillon</th>
        <th scope="col">Action</th>

      </tr>
      </thead>
    <tbody>
      <?php foreach ($cham as $chams):?>
      <tr>
          <td><?=$chams->num_chambre?></td>
          <td><?=$chams->num_etage?></td>
          <td><?=$chams->nom_pavillon?></td>
          <td style="display: flex;">

            <a href="<?=WEBROOT."chambre/ajoutChambre/".$chams->id_chambre?>" class="modif1">Modifier</a>
            <form action="<?=WEBROOT."chambre/archiverChambre"?>" method="post">
              <input type="hidden" name="id_chambre" value="<?=$chams->id_chambre?>">
              <button class="filt1" name="btn" type="submit">Archiver</button>
            </form>

        
          </td>

        
        </tr>
        <?php endforeach ?>   
      
    </tbody>
      
    </tbody>
  </table>
  
  </div>



</div>


<!-- <td>
          <form action="<?=WEBROOT."chambre/archiverChambre"?>" method="post">
              <input type="hidden" name="id_chambre" value="<?=$chams->id_chambre?>">
              <button class="filt" name="btn" type="submit">Archiver</button>
          </form>
          </td> -->