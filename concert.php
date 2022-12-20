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
					echo '<a href="Inscription.php">S\'inscrire</a>  <a href="connexion.php">Se connecter</a>';
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
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=tayc"><img src="images/slides/tayc.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=red+hot+chili+peppers"><img src="images/slides/red-hot-chili-peppers.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=stromae2023"><img src="images/slides/stromae.jpg" width="900" height="234" alt="" /></a>
            </div>
             
           
        </div>

        
      </section>



       <!-- about us -->
       <section id="about-us" class="clearfix">

        <h1>Concerts</h1>

        <div class="primary">

            <p class="intro"> Voici tous les concerts du moments. Que vous soyez fan des grands classiques 
                de la variété française, ou bien que vos goûts musicaux penchent plus côté urbain, ne vous inquietez pas, 
                il y en a pour tous les goûts. On est persuadé que vous trouverez votre bonheur.
                Jetez un coup d'oeil à notre sélection, afin de ne rien rater des concerts à venir.              
            </p>
            <div style="height:100px;display:block;"> </div>
			<h2> Les Concerts à venir : </h2>
			
			


        </div>

        <aside>


                <h2>Témoignages</h2> 

                <div class="testimonials">
                    <blockquote>
                        <p> La musique donne une âme à nos coeurs 
                            et des ailes à la pensée.  </p>

                        <cite>&mdash; Platon </cite>
                    </blockquote>

                    


                </div>

         </aside>       

        


  </section>




  <table >
              
              <tr><th>Artiste</th><th>Date</th><th>Lieu</th><th>Voir les Photos</th><th>Voir les Avis</th></tr>
             
              <?php
                  $connexion=mysqli_connect("localhost", "root", "root");
                  mysqli_select_db($connexion,"projet");
                  $req='SELECT * FROM concerts;';
                  $res=mysqli_query($connexion, $req);
                  while ($enreg_concert=mysqli_fetch_array($res)){
                      $num_concert=$enreg_concert['IdConcert'];
                      $req2="SELECT TitreConcert, DateConcert, LieuConcert, IdConcert FROM concerts, artistes, genres WHERE IdConcert =".$num_concert." ORDER BY DateConcert DESC;";
                      $res2=mysqli_query($connexion, $req2);
                      echo '<tr>';
                      echo '<td>';
                      echo $enreg_concert['TitreConcert'];
                      echo '</td>';
                      echo '<td>';
                      echo $enreg_concert['DateConcert'];
                      echo '</td>';
                      echo '<td>';
                      echo $enreg_concert['LieuConcert'];
                      echo '</td>';
                      echo '<td>';
					  echo '<br/><a href="photoconcert.php?concert='.$num_concert.'">Photos concert</a>' ;
                      echo '</td>';
					  echo '<td>';
					  echo '<br/><a href="lire_avis.php?concert='.$num_concert.'">Avis concert</a>' ;
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
