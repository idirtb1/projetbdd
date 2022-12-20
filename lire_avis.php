<?php 
	session_start() ;
?>

<!DOCTYPE html>
<html>


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
            </ul>
        </nav>

    </header>
</div>

<!-- content-wrap -->
<div class="content-wrap">

    <!-- main -->
    <section id="main">

       

        <div class="slider-wrapper">

            <div id="slider" class="nivoSlider">
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=stromae2023"><img src="images/slides/stromae.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=dj+snake+paris"><img src="images/slides/djsnake.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=ninho-2022"><img src="images/slides/ninho1.jpg" width="900" height="234" alt="" /></a>
            </div>
             
           
        </div>

        
      </section>



    <section id="about-us" class="clearfix">

        <h1>Vibrez en musique.</h1>

        <div class="primary">

        <?php 
		if (isset($_GET["concert"])) {
			$num = $_GET["concert"] ;
		}
		else {
			die("Vous devez indiquer l'avis à lire");
		}
		echo "Vous lisez le sujet n°".$num."<br/>" ;
		?>
		<center>
		<table width="90%" border="1">
		<?php
		        $connexion=mysqli_connect("localhost", "root", "root") ;
				mysqli_select_db($connexion,"projet");
				$req='SELECT  a.IdAvis, a.ContenuAvis , a.DateAvis FROM avis a, concerts, utilisateurs WHERE avis.IdAvis='.$num.' GROUP BY IdAvis;';
				$res=mysqli_query($connexion, $req);
				while ($enreg_artiste=mysqli_fetch_array($res)){
					$user=$enreg_artiste['Pseudo'];
					$avis=$enreg_artiste['ContenuAvis'];
					echo '<tr>';
					echo '<td>';
					echo $user;
					echo '</td>';
					echo '<td>';
					echo $avis;
					echo '</td>';
					echo '</tr>';
				}
		?>
		</table>
		</center>
		
		<?php
		if ($connect == 1) {
			echo '<a href="ecrire_avis.php?concert='.$num.'">Poster avis concert</a>';
	    }
?>
			

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
