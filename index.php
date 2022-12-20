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

            <p class="intro">Après un concert, la musique devient tout de suite plus juteuse. Nous écoutions tous de la
               musique, que ce soit pendant un footing ou bien pendant un long trajet en train, nos 
               écouteurs sont nos plus précieux compagnons. Cependant la musique n’a pas réellement la 
               même saveur que lors d’un concert accompagner de milliers de personnes autant fan que vous, qui 
               se réunissent pour voir leurs artistes préféré et kiffer tous ensemble. C’est une sensation à 
               vivre au moins une fois dans sa vie.                
            </p>

       

            <h2>Chantez, Bougez</h2>

            <p>Vous allez pouvoir vous défouler, danser, chanter (sans avoir honte de votre voix) avec votre
               artiste favori. N’est-ce pas une bonne raison d’y assister ? 
               Cela va également vous permettre de vous changer un peu les idées, mais également de 
               créer de nouveaux souvenirs. 
            </p>

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










  <section id="styles" class="clearfix">

           

    <div class="primary">

        <h2> Les Festivals </h2>

        <p>Si vous êtes une personne qui aime la musique ainsi que les sensations fortes, alors vous
           devez à tout prix assister à un festival. Un festival se déroule la plupart du temps sur 
           plusieurs jours, et regroupe grand nombre de chanteurs, ce qui va vous permettre de découvrir 
           de nouveaux horizons musicaux. Étant donné l’ampleur des festivals et le nombre de fan de 
           musique qui s’y rendent, alors pourquoi pas profiter de l’occasion pour faire de nouvelle
           rencontre. 
           
        </p>


        <div>     
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jXv7eRZ8Eto" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
            </iframe>
        </div>

        <br/>

        <p> Il existe bien évidemment d’autres évènement dans le monde de cette même envergure,
             notamment au Brésil, avec le Festival Rock in Rio, ou on retrouve à nouveaux de grands
              artistes. En plus des concerts, vous pourrez assister à d’autres choses cool comme des 
              spectacles de danses, des animations, des jeux…<br>
              Lancez-vous, et partez à la découverte du monde.  
            </p>

        <h2> Pour plus de renseignements sur les festivals à venir (en France), cliquez <a href="https://www.sortiraparis.com/scenes/concert-musique/guides/50343-les-festivals-de-musique-de-l-ete-2022-les-plus-attendus-en-france"><span>ici</span></a>. </h2>

        

    </div>

    <aside>

            <h2> C'est quoi ?</h2>

            <p>C’est tout simplement génial. C’est comme plusieurs concerts qui se succèdent
                 et à chaque concert une découverte. Mais au-delà de ça, ce qui différencie 
                 concert et festival, c’est la longévité de ce dernier, qui peut durer jusqu’à 
                 plusieurs jours, ainsi que l’ambiance qu’on y trouve. Et souvent, ces conditions 
                 permettent de rendre le moment plus marquant. <br>
                Parmi les plus connus dans le monde entier, on peut citer le festival Coachella, qui reste à ce
                jour le plus célèbre des festivals. Il se déroule une fois par an, et on peut y trouver des noms
                tels que Kanye West, Beyonce, Tyler The Creator, Ariana Grande et j’en passe. Le festival se
                déroule au beau milieu de la Californie, dans un coin perdu histoire de faire la fête en ne
                dérangeant personne. 
                 
            </p> 

            

    </aside>


</section>









      <section id="services" >

             <h1>A l'Affiche.</h1>



             <div class="primary">
                <ul class="the-team">
                                <li class="odd">
                                    <div class="thumbnail">
                                        <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=ninho-2022"><img alt="thumbnail" src="images/ninho.jpg" width="97" height="126"></a>
                                    </div>
                                    <p class="mname"><a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=ninho-2022">Ninho</a></p>
                                    <p>Catégorie: Rap</p>
                                </li>

                                <li>
                                    <div class="thumbnail">
                                        <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=Angele"><img alt="thumbnail" src="images/angele2.jpg" width="97" height="126"></a>
                                    </div>
                                    <p class="mname"><a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=Angele">Angele</a></p>
                                    <p>Catégorie: Pop</p>
                                </li>

                               
                              

                                <li class="odd">
                                    <div class="thumbnail">
                                        <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=Eva"><img alt="thumbnail" src="images/eva.jpg" width="97" height="126"></a>
                                    </div>
                                    <p class="mname"><a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=Eva">Eva</a></p>
                                    <p> Catégorie: Rnb</p>
                                </li>

                               

                                <li>
                                    <div class="thumbnail">
                                        <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=red+hot+chili+peppers"><img alt="thumbnail" src="images/redhotchilli.jpg" width="97" height="126"></a>
                                    </div>
                                    <p class="mname"><a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=red+hot+chili+peppers">Red Hot Chilli Peppers</a></p>
                                    <p>Catégorie: Rock</p>
                                </li>

                                <li class="odd">
                                    <div class="thumbnail">
                                        <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=mylene+farmer"><img alt="thumbnail" src="images/mylenefarmer.jpg" width="97" height="126"></a>
                                    </div>
                                    <p class="mname"><a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=mylene+farmer">Mylene Farmer</a></p>
                                    <p> Catégorie: Variété Française</p>
                                </li>

                               

                                <li>
                                    <div class="thumbnail">
                                        <a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=soprano"><img alt="thumbnail" src="images/soprano.jpg" width="97" height="126"></a>
                                    </div>
                                    <p class="mname"><a href="https://www.ticketmaster.fr/fr/resultat?ipSearch=soprano">Soprano</a></p>
                                    <p>Catégorie: Rap</p>
                                </li>


                            </ul>
                </div>

                

                <aside>
                
                
                                <h2>Réservations</h2>
                
                                <p>Vous souhaitez vous offrir une place ou bien offrir une place de concert
                                    à vos proches en guise de cadeau, nous vous avons concocter une liste de liens 
                                    afin de satisfaire vos désirs.
                                    Il vous manque plus qu'à cliquer, et vous échauffer la voix.</p>
                
                                    <a href="concert.php" class="download-btn">Voir les dates</a>
                
                                <h2>Links</h2>
                
                                <ul class="link-list">
                                    <li><a rel="nofollow" href="https://www.francebillet.com" title="Site Templates">France billet</a></li>
                                    <li><a rel="nofollow" href="https://www.ticketmaster.fr" title="Website Templates">Ticketmaster</a></li>
                                    <li><a rel="nofollow" href="https://www.fnacspectacles.com/place-spectacle/concerts/concert-7412769751009616465-lt.htm" title="Web Templates">Fnac</a></li>
                                    <li><a rel="nofollow" href="https://www.billetreduc.com/concerts/" title="Webhosting">BilletReduc</a></li>
                                </ul> 

                                
                
                        </aside>

                        <div style="height:570px;display:block;"> </div>
                

                      
                
            </section>
                










            

    
      <section id="portfolio">

            <h1>Salle de Concert. (France)</h1>

            <ul class="folio-list clearfix">

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/defensearena1.jpg" title="40 000 Places" ><img src="images/thumbs/defensearena.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title"> Paris La Défense Arena</h3>
                </li>

                <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/zenithnancy1.jpg" title="25 000 Places"><img src="images/thumbs/zenithnancy.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Zénith de Nancy</h3>
                </li>

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/pierremauroy1.jpg" title="25 000 Places"><img src="images/thumbs/pierremauroy.jpg" alt="" /></a>
                    </div>
                    <h3 class="entry-title"> Arena Pierre-Mauroy</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/accorrarena.jpg" title="20 300 Places" ><img src="images/thumbs/accorhotel.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title"> Accor Hotel Arena</h3>
                </li>

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/tonygarnier1.jpg" title="17 000 Places "><img src="images/thumbs/tonygarnier.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title"> Halle Tony Garnier </h3>
                </li>

                 <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/sudarena1.jpg" title="14 800 Places"><img src="images/thumbs/sudarena.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title"> Sud de France Arena </h3>
                </li>


      </section>

     
      

    







      <section id="contact" class="clearfix">
	  		<?php
		    if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] != "") {
				$connect = 1;
			}
            else {
				($connect = 0);
				echo '<h1>Partage tes moments.</h1>';
				echo '<div class="primary">';
                echo '<p class="intro">';
                echo 'Partagez avec nous votre expérience dans notre forum. ';
                echo 'Il suffit de vous inscrire chez nous, cela vous permettra de poster des photos, et partager avec '; 
                echo 'les autres utilisateurs vos plus beaux souvenirs créer pendant les concerts auxquels vous avez ';
                echo 'assister. ';
                echo 'Le concert est lui-même un moment de partage, alors partagez avec nous vos plus précieux ';
                echo 'moments.';                        
                echo '</p>';
                echo '<a href="inscription.php" class="download-btn">Sinscrire</a>'; 
                echo '</div>';
			}
			?>

            <a class="back-to-top" href="index.php">Back to Top</a>

            <aside>


                    <h2>Follow Us</h2> 

                    <ul class="link-list social">
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="googleplus"><a href="#">Google+</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="dribble"><a href="#">Dribble</a></li>
                        <li class="linkedin"><a href="#">Linkedin</a></li>
                        <li class="delicious"><a href="#">Delicious</a></li>
                        <li class="flickr"><a href="#">Flickr</a></li>
                    </ul>

                    

                    </div>

            </aside>

            

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
