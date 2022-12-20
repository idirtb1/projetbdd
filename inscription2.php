<?php 
	session_start() ;
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Concerto</title>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />

    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<!-- header-wrap -->
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
        </nav>

    </header>
</div>



	<section id="inscription" class="clearfix">
	   
        <h1>Suite inscription.</h1>
		
		<div class="primary">
		<form>
		    <?php
	        if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] != "") {
		        die('Vous êtes déjà connecté.e. <a href="index.php">Retour à l\'accueil</a>');
	        }
			?>
			
			<?php
			// v鲩fication que tous les champs sont remplis
			if (empty($_POST["pseudo"]) or empty($_POST["pass1"]) or empty($_POST["pass2"]) or empty($_POST["mail"])) {
				die("Vous devez remplir TOUS les champs !");
			}
			else {
				// tous les champs sont remplis
				$pseudo = $_POST["pseudo"];
				$pass1 = $_POST["pass1"];
				$pass2 = $_POST["pass2"];
				$mail = $_POST["mail"];

		        // test de la cohérence des mots de passe
		        if ($pass1 != $pass2) {
					die("Les deux mots de passe doivent être identiques !");
				}
				else {
					// tout va bien
					if ($_FILES['nom_du_fichier']['error']) {
						die("Erreur lors du transfert de l'image.");
					}
					if (isset($_FILES['nom_du_fichier']['name']) && ($_FILES['nom_du_fichier']['error'] == UPLOAD_ERR_OK)) {
						$chemin_destination = 'avatars/';
						move_uploaded_file($_FILES['nom_du_fichier']['tmp_name'],
						$chemin_destination.$_FILES['nom_du_fichier']['name']);
					}
					echo 'Votre pseudo est '.$pseudo.' avec le mot de passe '.$pass1.' et votre mail est '.$mail.'.';$connexion=mysqli_connect("localhost", "root", "root") ;
					$connexion=mysqli_connect("localhost", "root", "root") ;
					mysqli_select_db($connexion,"projet");
					$req= 'INSERT INTO utilisateurs (Pseudo, Password, Mail, Admin, Avatar) VALUES ("'.$pseudo.'", "'.$pass1.'", "'.$mail.'", "Non", "'.$_FILES['nom_du_fichier']['name'].'");';
					mysqli_query($connexion, $req);
					mysqli_close($connexion);
					echo 'Vous avez bien été enregistré.e : 
						  <ul>
						  <li> Pseudo : '.$pseudo.' </li>
						  <li> Mot de passe : '.$pass1.' </li>
						  <li> Mail : '.$mail.'</li> 
						  </ul>'; 
		        }
	        }
            ?>
		</form>
		</div>
	</section>



	
<!-- footer -->
<footer>
   
    <div class="footer-content">
        <ul class="footer-menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="concert.php">Concert</a></li>
                <li><a href="artiste.php">Artiste</a></li>
                <li><a href="genre.php">Genre</a></li>
                <li><a href="#">Forum</a></li>
            <!-- <li class="rss-feed"><a href="#">RSS Feed</a></li> -->
        </ul>

    </div>

</footer>

<!-- scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>

<script src="js/jquery.smoothscroll.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/jquery.easing-1.3.pack.js"></script>
<script src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/init.js"></script>

</body>
</html>
