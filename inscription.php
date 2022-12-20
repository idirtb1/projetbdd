<?php 
	session_start() ;
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
</head>

<body>


    <div id="header-wrap">
        <header>
    
            <hgroup>
                <h1><a href="index.php">Concerto</a></h1>
                <h3>Soyez au rendez-vous</h3>
            </hgroup>
    
            <nav>
                <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="concert.php">Concert</a></li>
                <li><a href="artiste.php">Artiste</a></li>
                <li><a href="genre.php">Genre</a></li>
                <li><a href="#">Forum</a>
                    <ul>
                        <li><a href="ecrire_avis.php">Commentaires</a></li>
                        <li><a href="posterphoto.php">Photos</a></li>
                    </ul>    
                </li>
				<li>
				<?php
				if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] != "") {
					// Une personne est connectée
					echo '<a href="deconnexion.php">Se déconnecter (connecté.e en tant que '.$_SESSION['pseudo'].')</a>';
					$connect = 1;
				}
				else {
					// Personne n'est connecté
					echo '<a href="inscription.php">S\'inscrire</a>  <a href="connexion.php">Se connecter</a>';
					$connect = 0;
				}
				?>
				</li>
                </ul>
            </nav>
    
        </header>
    </div>




<section id="inscription" class="clearfix">

    <h1>Inscrivez-vous.</h1>

    <div class="primary">
        <?php
	    if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] != "") {
		    die('Vous êtes déjà connecté.e. <a href="index.php">Retour à l\'accueil</a>');
     	}
        ?>

        <form action="inscription2.php" method="POST" ENCTYPE="multipart/form-data">
            <div>
            <p>Remplir le formulaire</p>
            </div>

            <div>
            <label>Pseudo <span class="required">*</span></label>
            <input type="text" name="pseudo" id="name">
            </div>

            <div>
            <label>Avatar <span class="required">*</span></label>
            <input type="hidden" name="MAX_FILE_SIZE" value=100000>
            <input type="file" name="nom_du_fichier">
            </div>

            <div>
            <label>Email <span class="required">*</span></label>
            <input type="text" name="mail" id="name">
            </div>

            <div>
            <label>Mot de passe <span class="required">*</span></label>
            <input name="pass1" type="password" id="subject"  value="">
            </div>
    
            <div>
                <label>Confirmer mot de passe <span class="required">*</span></label>
                <input name="pass2" type="password" id="subject"  value="">
            </div>

            <div>
            <input type="submit"  value="S'inscrire" class="button">
             <input type="reset" value="Effacer" class="button">
            </div>


        </form>

    

    </div>
</section>



    <footer>
        <div class="footer-content">
            <ul class="footer-menu">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="concert.php">Concert</a></li>
                <li><a href="artiste.php">Artiste</a></li>
                <li><a href="genre.php">Genre</a></li>
                <li><a href="#">Forum</a></li>
                <!-- <li class="rss-feed"><a href="#">RSS Feed</a></li> -->
            </ul>
    
           
    
        </div>
    
    </footer>


    
</body>
</html>