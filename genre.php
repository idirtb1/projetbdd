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
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=red+hot+chili+peppers"><img src="images/slides/red-hot-chili-peppers.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=ninho-2022"><img src="images/slides/ninho1.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=dj+snake+paris"><img src="images/slides/djsnake.jpg" width="900" height="234" alt="" /></a>
            </div>
             
           
        </div>

        
      </section>



      
       <section id="about-us" class="clearfix">

        <h1>Genre</h1>

        <div class="primary">

            <p class="intro">D'après l'encyclopédie Larousse, le genre musical est un « ensemble de formes de même caractère, 
			réunies par leur destination (par exemple la musique de chambre) ou par leur fonction (par exemple la musique sacrée). 
			Le genre musical est un concept sans limites précises, il est compliqué d'établir une liste exhaustive des genres.
			La dénomination d’un genre peut venir d’une expression qui a marqué une scène musicale (Krautrock), de techniques 
			ou sources sonores utilisées par le genre musical (techno, synthpop), de son origine géographique (Miami bass, UK garage),
			ou de l’intention que porte le style (rock psychédélique). Un genre musical peut être vocal ou instrumental.               
            </p>
            <div style="height:50px;display:block;"> </div>
			<h2> Les styles de musiques les plus populaires : </h2>
			
			


        </div>

        <aside>


                <h2>Témoignages</h2> 

                <div class="testimonials">
                    <blockquote>
                        <p> La musique c'est du bruit qui pense .  </p>

                        <cite>&mdash; Victor Hugo </cite>
                    </blockquote>

                    <blockquote>
                            <p> La musique emporte les cœurs qui savent l’écouter
                                vers des horizons où le bonheur ne se tarit jamais.  </p>
    
                            <cite>&mdash; Frédéric Rocchia </cite>
                        </blockquote>
                             </p>


        </div>

         </aside>       

        


  </section>





  <table>
			<tr><th>Genre</th><th>Description</th></tr>
			<?php
                $connexion=mysqli_connect("localhost", "root", "root");
				mysqli_select_db($connexion,"projet");
				$req='SELECT * FROM genres;';
				$res=mysqli_query($connexion, $req);
				while ($enreg_genre=mysqli_fetch_array($res)){
					$num_genre=$enreg_genre['IdGenre'];
					$req2="SELECT NomGenre, DescriptionGenre FROM genres WHERE IdGenre=".$num_genre." ORDER BY NomGenre;";
					$res2=mysqli_query($connexion, $req2);
					$premier=mysqli_fetch_array($res2); 
					echo '<tr>';
					echo '<td>';
					echo $premier['NomGenre'];
					echo '</td>';
					echo '<td>';
					echo $premier['DescriptionGenre'].'<br/><a href="lire_genre.php?genre='.$num_genre.'">Artistes avec ce genre</a>' ;
					echo '</td>';
					echo '</tr>';
				}
			mysqli_close($connexion) ;
			?>
   </table>





            <div style="height:50px;display:block;"> </div>

     
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
