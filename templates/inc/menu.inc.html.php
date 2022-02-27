<header>
<div class="menuContainer">
  <input type="checkbox" id="menuHamburger"/>
  <ul>
  <a class="" href="<?=WEBROOT."security/showRP"?>"><b>UCAD</b></a>

  <li><a href="<?=WEBROOT."security/showAccueil"?>">Acceuil</a></li>
  <i class="fa-light fa-apartment"></i><li><a href="#">Pavillon</a>
					<ul>
					<li><a href="<?=WEBROOT."pavillons/voirPavillon"?>">Ajout Pavillon</a></li>
          <li><a href="<?=WEBROOT."pavillons/showPavillon1"?>">Liste Pavillon</a></li>
					</ul>
				</li>
        <li><a href="#">Chambre</a>
					<ul>
          <li><a href="<?=WEBROOT."chambre/voirChambre"?>">Ajout Chambre</a></li>
          <li><a href="<?=WEBROOT."chambre/showChambre1"?>">Liste Chambre </a></li>

					</ul>
				</li>
        <li><a href="<?=WEBROOT."etudiant/showEtudiants"?>" class="plus">Etudiants</a>
					<ul>
            <li><a href="#">Ajout Etudiant</a></li>
            <li><a href="<?=WEBROOT."etudiant/showEtudiants"?>">Liste Etudiant</a></li>

					</ul>
         
				</li>

        
        
  
    
  </ul><label for="menuHamburger"></label>
  
</div>
<a  href="<?=WEBROOT."security/logout"?>" class="button deconnexion">Deconnexion</a>

  <form class="form-inline deconnexion1">
    <input class="form-control" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
  </form>
        
           
</header>