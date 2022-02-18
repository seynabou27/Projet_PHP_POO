
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand infos" href="#"><b>UCAD</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav partie1 mr-auto">
     <li class="nav-item active">
        <a class="nav-link" href="<?=WEBROOT."security/showRP"?>">Responsable<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=WEBROOT."etudiant/showEtudiants"?>">Etudiant</a>
      </li>
     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pavillon
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=WEBROOT."pavillons/voirPavillon"?>">Liste Pavillon</a>
          <a class="dropdown-item" href="<?=WEBROOT."pavillons/showPavillon1"?>">Ajout Pavillon</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">  
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Chambre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=WEBROOT."chambre/voirChambre"?>">Liste Chambre</a>
          <a class="dropdown-item" href="<?=WEBROOT."chambre/showChambre1"?>">Ajout Chambre</a>
          
        </div>
      </li>
      
    </ul>
    <form class="form-inline search">
      <input class="form-control" type="search" placeholder="Que cherchez-vous?" aria-label="Search">
    </form>
<!--     <button type="button" class="btn deconnexion" href="<?=WEBROOT."security/logout"?>">Deconnexion</button>
 -->       
          <a type="button" class="nav-link  deconnexion" href="<?=WEBROOT."security/logout"?>">Deconnexion</a>
    
  </div>
</nav>






<style>
  *{
    overflow-x: hidden;
  }
  nav{
    background-color:#171D2E ;    
}
.infos{
  padding-left: 5%;
  
}
/* .search{
  margin-right: 2%;
  top: 18px;
  left: 1067px;
  width: 460px;
  height: 40px;
  background: #314055 0% 0% no-repeat padding-box;
  border-radius: 6px;
  opacity: 1;
} */
.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
  color: rgba(255, 255, 255, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
  color: rgba(255, 253, 253, 0.9);
}
.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
  
}
.form-inline .form-control {
  display: inline-block;
  width: 310px;
  vertical-align: middle;
  padding-left: 9%;
  margin-right: 3%;
}
.navbar-expand-lg .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  margin-left: 5%;
}

.deconnexion{
  margin-right: 4%;
  padding-right: 2%;
  border: 1px solid white;
  background-color: white;
  color: #171D2E;
  border-radius: 3px 3px 3px 3px;
}
.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
  background-color: #171D2E;
  background: #314055 0% 0% no-repeat padding-box;
  height: 46px;
  border-color: #314055 0% 0% no-repeat padding-box;
}





</style>