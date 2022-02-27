<div class="groupe3">
    <h3 class="text"><b>Chambres</b></h3>
<!--     <p class="text11"> Voici la liste des pavillions<br> </p>
 -->  
  </div>
<div class="pavillon">
  <div class="row pav">
    <div class="pav1 col-6 ">
      <H4>Listes des chambres</H4>

    </div>  
    <div class="pav2 col-4 ">
      <div class="btn1 ">
<!--         <a type="button" class="nav-link fil" href="#">Filtre</a>
 -->
      </div>  
      <div class="btn">
        <a type="button" class="nav-link ajo" href="<?=WEBROOT."chambre/voirchambre"?>"><i class="fas fa-plus "></i>Ajouter</a>

      </div>
    </div>
  </div>
  <div class="container">
    <table class="table">
    <thead>
      <tr>
        
        <th scope="col">Numéro chambre</th>
        <th scope="col">Numéro Etage</th>
        <th scope="col">Action</th>


      </tr>
    </thead>
    <tbody>
      <?php foreach ($cham as $chams):?>
      <tr>
          <td><?=$chams->num_chambre?></td>
          <td><?=$chams->num_etage?></td>
        <td> <button class="modif" type="submit">Modifier</button> <button class="filt" type="submit">Archiver</button></td>

      </tr>
  <?php endforeach ?>   
      
    </tbody>
  </table>
  
  </div>



</div>