<div class="groupe3">
    <h3 class="text"><b>Pavillon</b></h3>
<!--     <p class="text11"> Voici la liste des pavillions<br> </p>
 -->  
  </div>
<div class="pavillon">
  <div class="row pav">
    <div class="pav1 col-6 ">
      <H4>Listes des pavillons</H4>

    </div>  
    <div class="pav2 col-5 ">
    <div class=" form-inline filt2">
          <label class="mr-3">Type </label>
          <form method="post" action="">
          <input type="hidden" name="controlleurs" value=""/>
          <input type="hidden" name="action" value=""/>
                <select class="form-control" name="etat" id="">
                  <option></option>
                  <option></option>
                  

                </select>
                <button type="submit" class="btn b" style="background-color: #171D2E; color:white;" name="ok" style="background-color: #005CA5; color:#fff;"><b>ok</b></button>

         </form>
          </div>
      <!-- <div class="btn1 ">
        <a type="button" class="nav-link fil" href="#">Filtre</a>

      </div>  --> 
      <div class="btn">
        <a type="button" class="nav-link ajo" href="<?=WEBROOT."pavillons/voirPavillon"?>"><i class="fas fa-plus "></i>Ajouter</a>

      </div>
    </div>
  </div>
  <div class="container">
    <table class="table">
    <thead>
      <tr>
        
        <th scope="col">Nom Pavillon</th>
        <th scope="col">N° Pavillon</th>
        <th scope="col">Nombre Etage</th>
        <th scope="col">Action</th>


      </tr>
    </thead>
    <tbody>
      <?php foreach ($pavi as $pavss):?>
      <tr>
          <td><?=$pavss->nom_pavillon?></td>
            <td><?=$pavss->num_pavillon?></td>
            <td><?=$pavss->nbr_etage?></td>
        <td> <button class="modif" type="submit">Modifier</button> <button class="filt" type="submit">Archiver</button></td>

      </tr>
  <?php endforeach ?>   
      
    </tbody>
  </table>
  
  </div>



</div>