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



       <!-- about us -->
       <section id="about-us" class="clearfix">

        <h1>Donnez votre avis.</h1>

        <div class="primary">

            <?php
			if (!isset($_SESSION['pseudo']) OR $_SESSION['pseudo'] == "") {
				die('Vous devez être connecté.e pour poster  <a href="index.php">Retour à l\'accueil</a>');
			}
			if (empty($_POST["avis"]) or empty($_POST["mess"])) {
				die("Veuillez indiquer un message. ");
			}
			$concert = $_POST["avis"];
			$mess = $_POST["mess"];

			$connexion=mysqli_connect("localhost", "root", "root") ;
			mysqli_select_db($connexion,"projet");
			$req='INSERT INTO avis (ContenuAvis, DateAvis, IdUser, IdConcert) VALUES ("'.$mess.'", "'.date("Y/m/d H:i:s").'", "'.$_SESSION['ID'].'","'.$concert.'");';
			mysqli_query($connexion, $req);
			mysqli_close($connexion) ;
			echo "Votre avis a bien été posté.<br/>";
			?>	

            <div class="row no-bottom-margin">


                <section class="col first">

                    <h2>Créer des souvenirs</h2>

                    <p>Un concert reste encré dans les mémoires. Ce n’est pas tous les jours qu’on a la chance d’y
                        assister, et c’est cette rareté qui fait du moment un moment précieux, un moment à raconter
                        plus tard à nos enfants.  
                       </p>

                </section>

                <section class="col">

                    <h2>Un moment de partage</h2>

                    <p>Le concert est aussi un moment de partage et de communion. Communion entre les fans et les
                        chanteurs mais également entre les fans eux-mêmes qui viennent pour le même but. Chanter
                        en compagnie de leur chanteur préféré, rien que ça. 
                       </p>

                </section>


                

            </div>

        </div>

        <aside>


                <h2>Témoignages</h2> 

                <div class="testimonials">
                    <blockquote>
                        <p> Un concert n'est pas une interprétation en direct de notre album. 
                            C'est une theatrica! un événement.  </p>

                        <cite>&mdash; Freddie Mercury </cite>
                    </blockquote>

                    <blockquote>
                            <p> Un concert c’est une histoire de chimie entre deux entités : 
                                le public d’un côté et la scène de l’autre.  </p>
    
                            <cite>&mdash; Jean-Michel Jarre </cite>
                        </blockquote>
                             </p>


                </div>

         </aside>       

        


  </section>




                









</div>

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
