<header>
<div class="menuContainer">
  <input type="checkbox" id="menuHamburger"/>
  <ul>
  <a class="" href="<?=WEBROOT."security/showRP"?>"><b>UCAD</b></a>

  <li><a href="<?=WEBROOT."security/showAccueil"?>"><img src="./../img/home.svg"> Acceuil</a></li>
  <li><a href="#"> <img src="./../img/app.svg">Pavillon</a>
					<ul>
          <li><a href="<?=WEBROOT."security/showRP"?>">Responsable</a></li>
					<li><a href="<?=WEBROOT."pavillons/voirPavillon"?>">Ajout Pavillon</a></li>
          <li><a href="<?=WEBROOT."chambre/voirChambre"?>">Ajout Chambre</a></li>
          <li><a href="<?=WEBROOT."pavillons/showPavillon1"?>">Liste Pavillon</a></li>
          <li><a href="<?=WEBROOT."chambre/showChambre1"?>">Liste Chambre </a></li>

					</ul>
				</li>
        <li><a href="<?=WEBROOT."etudiant/showEtudiants"?>" class="plus"> <img src="./../img/sc.svg">Etudiants</a>
					<ul>
            <li><a href="#">Ajout Etudiant</a></li>
            <li><a href="<?=WEBROOT."etudiant/showEtudiants"?>">Liste Etudiant</a></li>

					</ul>
         
				</li>

        
        
  
    
  </ul><label for="menuHamburger"></label>
  
</div>
<a  href="<?=WEBROOT."security/logout"?>" class="button deconnexion"><i class="fas fa-sign-out-alt"></i>Deconnexion</a>

  <form class="form-inline deconnexion1">
    <input class="form-control" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
  </form>
        
           
</header>