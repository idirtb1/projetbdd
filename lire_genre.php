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


        <div class="primary">

        <?php 
		if (isset($_GET["genre"])) {
			$num_genre = $_GET["genre"] ;
		}
		else {
			die("Vous devez indiquer l'avis à lire");
		}
		?>
            </p>

				<h1> Voici les artistes de cette catégorie: </h2>
                <div style="height:30px;display:block;"> </div>
				<center>
				<table width="90%" border="1">
				<?php
                $connexion=mysqli_connect("localhost", "root", "root") ;
				mysqli_select_db($connexion,"projet");
				$req='SELECT * FROM genres, artistes WHERE artistes.IdGenre='.$num_genre.' GROUP BY IdArtiste;';
				$res=mysqli_query($connexion, $req);
				while ($enreg_genre=mysqli_fetch_array($res)){
					$artiste_genre=$enreg_genre['NomArtiste'];
					$photo_genre=$enreg_genre['PhotoArtiste'];
					$id_genre=$enreg_genre['IdGenre'];
					echo '<tr>';
					echo '<td>';
					echo $artiste_genre;
					echo '</td>';
					echo '<td>';
					echo '<img width="97px" height="126px" src="artistes/'.$photo_genre.'"/>';
					echo '</td>';
					echo '</tr>';
				}
			mysqli_close($connexion) ;
			?>
				</table>
				</center>


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
