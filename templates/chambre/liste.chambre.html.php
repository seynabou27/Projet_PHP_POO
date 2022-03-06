<div class="groupe3">
    <h3 class="text"><b>Chambres</b></h3>
<!--     <p class="text11"> Voici la liste des pavillions<br> </p>
 -->  
  </div>
<div class="pavillon">
<div class="titr">
     <H4 class="etud">Listes des chambres</H4>

     <a type="button" class="nav-link ajout" href="<?=WEBROOT."chambre/voirChambre"?>"><i class="fas fa-plus "></i>Ajouter</a>

     <div class=" form-inline filtr1">
          <label class="mr-3">Pavillon </label>
          <form method="post" action="<?=WEBROOT."chambre/showChambre1"?>">
                <select class="form-control" name="filtres" id="id_pavillon">
                  <option value="0">Choisir</option>
                  <?php foreach ($cham as $chams):?>
                  <option value="<?=$chams->id_pavillon?>"><?=$chams->nom_pavillon?></option>
                  <?php endforeach ?>   

                </select>
                <button type="submit" class="btn b" name="filtre" style="background-color: white; color:#171D2E;border: 2px solid #171D2E;"  style="background-color: #005CA5; color:#fff;"> <i class="fas fa-filter"></i> <b>Filter</b></button>
         </form>
          </div>  
  </div>

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

            <a href="<?=WEBROOT."chambre/ajoutChambre/".$chams->id_chambre?>" class="modif1"> <i class="fas fa-edit "></i>  Modifier</a>
            <form action="<?=WEBROOT."chambre/archiverChambre"?>" method="post">
              <input type="hidden" name="id_chambre" value="<?=$chams->id_chambre?>">
              <button class="filt1" name="btn" type="submit"> <i class="fas fa-archive"></i> Archiver</button>
            </form>

        
          </td>

        
        </tr>
        <?php endforeach ?>   
      
    </tbody>
      
    </tbody>
  </table>
  
  </div>



</div>
