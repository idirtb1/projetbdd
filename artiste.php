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
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=clara+luciani"><img src="images/slides/claraluciani.jpg" width="900" height="234" alt="" /></a>
                <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=eva"><img src="images/slides/eva1.jpg" width="900" height="234" alt="" /></a>

            </div>
             
           
        </div>

        
      </section>



      <section id="about-us" class="clearfix">

                <h1>Artistes</h1>

                    <div class="primary">

                            <p class="intro">              
                            </p>
                            <h2> Les Artistes actuels : </h2>


                    </div>
      </section>





	<table class="tableauartiste" >
              
		<tr><th>Artiste</th><th>Description</th><th>Genre</th><th>Concert</th></tr>
           
			<?php
                $connexion=mysqli_connect("localhost", "root", "root");
				mysqli_select_db($connexion,"projet");
				$req='SELECT * FROM artistes;';
				$res=mysqli_query($connexion, $req);
				while ($enreg_artiste=mysqli_fetch_array($res)){
					$nom_artiste=$enreg_artiste['IdArtiste'];
					$req2="SELECT NomArtiste, PhotoArtiste, BioArtiste, IdArtiste, artistes.IdGenre FROM artistes, genres WHERE NomArtiste=".$nom_artiste."ORDER BY NomArtiste;";
					$res2=mysqli_query($connexion, $req2);
					echo '<tr>';
					echo '<td>';
					echo $enreg_artiste['NomArtiste'].'<br/> 
                    <section id="cadreartiste"> 
                    <div class="thumbnail">
                    <img alt="thumbnail"  src="artistes/'.$enreg_artiste['PhotoArtiste'].'" width="97" height="126">
                    </div>
                    </section>';
					echo '</td>';
					echo '<td>';
					echo $enreg_artiste['BioArtiste'];
					echo '</td>';
					echo '<td>';
					echo $enreg_artiste['IdGenre'];
					echo '</td>';
					echo '<td>';
					echo '<a href="lire_concert.php?artiste='.$nom_artiste.'">Voir ses concerts</a>';
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
