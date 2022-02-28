<div class="groupe3">
    <h3 class="text"><b>Archives</b></h3>
<!--     <p class="text11"> Voici la liste des pavillions<br> </p>
 -->  
  </div>
<div class="pavillon">
  <div class="row pav">
    <div class="pav1 col-6 ">
      <H4>Listes des archives</H4>

    </div>  
    <div class="pav2 col-4 ">
        
      
    </div>
  </div>
  <div class="container">
    <table class="table">
    <thead>
      <tr>
        
        <th scope="col">Numéro chambre</th>
        <th scope="col">Numéro Etage</th>
        <th scope="col">Pavillon</th>
        <th scope="col">Etat</th>




      </tr>
    </thead>
    <tbody>
      <?php foreach ($chamb as $chams):?>
      <tr>
          <td><?=$chams->num_chambre?></td>
          <td><?=$chams->num_etage?></td>
          <td><?=$chams->id_pavillon?><?=$chams->id_nom_pavillon?></td>
          <td><?=$chams->etat?></td>


        
        </tr>
        <?php endforeach ?>   
      
    </tbody>
  </table>
  
  </div>



</div>