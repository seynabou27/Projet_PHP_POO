<div class="page-wrap">
	<header>
		<a href="#" class="navdrop"></a>
		<nav>
			<ul>
      <a class="" href="<?=WEBROOT."security/showRP"?>"><b>UCAD</b></a>

      <li><a href="<?=WEBROOT."security/showAccueil"?>">Acceuil</a></li>

				<li><a href="#" class="plus">Pavillon</a>
					<ul>
					<li><a href="<?=WEBROOT."pavillons/voirPavillon"?>">Ajout Pavillon</a></li>
          <li><a href="<?=WEBROOT."pavillons/showPavillon1"?>">Liste Pavillon</a></li>
					</ul>
				</li>
				<li><a href="#" class="plus">Chambre</a>
					<ul>
          <li><a href="<?=WEBROOT."chambre/voirChambre"?>">Ajout Chambre</a></li>
          <li><a href="<?=WEBROOT."chambre/showChambre1"?>">Liste Chambre </a></li>

					</ul>
				</li>
				<li><a href="#" class="plus">Responsable</a>
				<ul>
          <li><a href="#">Ajout Responsable</a></li>
          <li><a href="<?=WEBROOT."security/showRP"?>">Liste Responsable</a></li>

					</ul>
				</li>
 				<li><a href="#" class="plus">Contact</a>
					<ul>
            <li><a href="#">Ajout Etudiant non Bourssier</a></li>
            <li><a href="#">Ajout Etudiant Bourssier</a></li>
            <li><a href="<?=WEBROOT."etudiant/showEtudiants"?>">Liste Etudiant</a></li>

					</ul>
				</li>
        
          
        <a  href="<?=WEBROOT."security/logout"?>" class="button deconnexion">Deconnexion</a>
			</ul>
		</nav>
	</header>
	
</div>







<!-- 
<header>
   <label for="toggle">☰</label>
  <input type="checkbox" id="toggle"> 
  <nav class="nav-bar">
      <ul>
        <a class="navbar" href="<?=WEBROOT."security/showRP"?>"><b>UCAD</b></a>
        <li>
          <a href="<?=WEBROOT."security/showAccueil"?>">Acceuil</a>
        </li>
        <li class="menu-deroulant">
          <a href="#">Pavillons</a>
          <ul class="sous-menu">
            <li><a href="<?=WEBROOT."pavillons/voirPavillon"?>">Ajout Pavillon</a></li>
            <li><a href="<?=WEBROOT."pavillons/showPavillon1"?>">Liste Pavillon</a></li>

          </ul>
        </li>
          <li class="menu-deroulant">
          <a href="#">Chambre</a>
          <ul class="sous-menu">
            <li><a href="<?=WEBROOT."chambre/voirChambre"?>">Ajout Chambre</a></li>
            <li><a href="<?=WEBROOT."chambre/showChambre1"?>">Liste Chambre </a></li>

          </ul>
        </li>
        <li class="menu-deroulant">
          <a href="#">Responsable</a>
          <ul class="sous-menu">
            <li><a href="#">Ajout Responsable</a></li>
            <li><a href="<?=WEBROOT."security/showRP"?>">Liste Responsable</a></li>

          </ul>
        </li>
        <li class="menu-deroulant">
        <a href="#">Etudiants</a>
          <ul class="sous-menu">
            <li><a href="#">Ajout Etudiant non Bourssier</a></li>
            <li><a href="#">Ajout Etudiant Bourssier</a></li>
            <li><a href="<?=WEBROOT."etudiant/showEtudiants"?>">Liste Etudiant</a></li>

          </ul>
        </li>
       
          <form class="form-inline search">
            <input class="form-control" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
          </form>
          <a href="<?=WEBROOT."security/logout"?>" class="button">Deconnexion</a>
        
        
    <a type="button" class="link  deconnexion" href="<?=WEBROOT."security/logout"?>">Deconnexion</a>


      </ul>
     

  </nav>

</header>


 -->