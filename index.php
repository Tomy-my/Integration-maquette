<?php
try // on essaye mdr
{
	// On se connecte à la base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=tst;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// On récupère tout le contenu de la table nom et on choisis dans la table l'ID numéro 1
$reponse = $bdd->query('SELECT * FROM nom WHERE id=\'1\'');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/font.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/ordi.css" />
        <link rel="stylesheet" href="css/resolutions.css" />
        <link rel="icon" href="images/Favicon.jpeg" />
        <title>Love Photographie</title>
    </head>
        <body>

            <nav role="navigation">
                <div class="test">
                    <div id="menuToggle">
                        <input type="checkbox" />
                
                <span></span>
                <span></span>
                <span></span>
                
                <ul id="menu">
                    <img src="images/Logo.png">
                    <span></span>
                    <a href="#home">HOME</a>
                    <span></span>
                    <a href="#about-page">ABOUT</a>
                    <span></span>
                    <a href="#porto">PORTFOLIO</a>
                    <span></span>
                    <a href="#blog">BLOG</a>
                    <span></span>
                    <a href="#video">VIDEO</a>
                    <span></span>
                    <a href="#testi">TESTIMIONALS</a>
                    <span></span>
                    <a href="#contact">CONTACT</a>
                    <span></span>
                    <input type="text" name="search" placeholder=" search">
                </ul>
                </div>
            </div>
            </nav>
        <header>
            <nav>
                <div id="home" class="topnav">
                    <a class="active" href="#home">HOME</a>
                    <a href="#about-page">ABOUT</a>
                    <a href="#porto">PORTFOLIO</a>
                    <a href="#blog">BLOG</a>
                    <a href="#video">VIDEO</a>
                    <a href="#testi">TESTIMIONALS</a>
                    <a href="#contact">CONTACT</a>
                    <input type="text" name="search" placeholder=" search">
                  </div>
            </nav>
        </header>
            <section>
                <img src="images/Logo.png" class="Logo1"/>
                <h2>Silver Swans </h2>
                <div id="ligne"></div>
                <h1>Love Story Photography</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolorLoLorem<br>
                    ipsum dolor sit apisicing elit,Lorem ipsum dolor sit<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dadipisicing elit, sed d elit, sed dLorem ipsum dipisicing elit, sed d<br>
                    consectetur adipisicing elit, sed dadipisicing elit, sed d elit, sed dLorem ipsum dipisicing eli    consectetur adipisicing elit, sed dadipisicing elit, sed d elit, sed dLorem ipsum dipisicing eli
                </p>       
            </section>
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
            <div class="social">
                <a href="#" class="facebook">t</i></a>
                <a href="#" class="twitter">g</i></a>
                <a href="#" class="google">o</i></a>
                <a href="#" class="linkedin">i</i></a>
              </div>
        <div id= "about-page" class="about-me">
            <img src="images/aboutme.png" class="photo-about-me">
            <div class="ligne-about"></div>
            <h1>About me</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>
                sed Lorem ipsum dolor sit ame
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>
                sed Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sed.<br>
                Lorem ipsum dolor sit amet.
            </p>
            <h2>GET TO KNOW ME BETTER</h2>
        </div>
        <div id= "porto" class="porto">
            <h2>Portfolio</h2>
            <h1>The  Best  of  2020</h1>
            <div class="ligne-porto"></div>
            <h3>After wedding, Engagement, Love Story, Wedding</h3>
            <div class="more">MORE PHOTOS</div>
        </div>
        
        <div class="casse-blanc">
            <div class="colonne-1">  
                <img src="images/colo1.jpg" class="colo1">
                <img src="images/colo1-1.jpg" class="colo1-1">
            </div>
            <div class="colonne-2">
                <img src="images/colo2.jpg" class="colo2">
                <img src="images/colo2-2.jpg" class="colo2-2">
                <img src="images/colo2-3.jpg" class="colo2-3">                               
            </div>
            <div class="colonne-3">
                <img src="images/colo3.jpg" class="colo3">
                <img src="images/colo3-2.jpg" class="colo3-2">
            </div>
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
        </div>


        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="images/colo1.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="images/colo1-1.jpg" style="width:100%">
            </div>
                       
            <div class="mySlides fade">
                <img src="images/colo3.jpg" style="width:100%">
              </div>
            
            <div class="mySlides fade">
                <img src="images/colo3-2.jpg" style="width:100%">
              </div>
              
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
        <div id= "video" class="video">
            <h1>VIDEO</h1>
            <div class="ligne-video"></div>
            <h3>Lorem ipsum dolor sit amet, consectetur adipig elit, sed ditsicing<br>
                elLorem ipsum dolor sit amet, consectetur<br>
                adipisicing elit, sed ditg elit, sed ditg elit, sed dit, sed<br>
            </h3>
            
        </div>
        <div class="video-2">
            <img src="images/video.jpg" class="photo-video">
            <div class="ligne-videoytb"></div>
            <p>
                Torem ipsum dolor sit amet, consectetur adipisicing elit, sed Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dd<br>
                Ohytrem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d <br>
                My rem ipsum dolor sit amet, consectetur adipisicing elit, sed dadipisicing elit, sed d
            </p>
            <div class="video-liste">
                <img src="images/video1.jpg" class=" v1">
                <span></span>
                <div class="media-text1">
                    <p>
                        Lorem ipsum dolor sit amet,<br>
                        consecteur adipisicing
                    </p>
                </div>
                <img src="images/video2.JPG" class=" v2">
                <span></span>
                <div class="media-text2">
                    <p>
                        Lorem ipsum dolor sit amet,<br>
                        consecteur adipisicing
                    </p>
                </div>
                <img src="images/video3.JPG" class=" v3">
                <span></span>
                <div class="media-text3">
                    <p>
                        Lorem ipsum dolor sit amet,<br>
                        consecteur adipisicing
                    </p>
                </div>
            </div>
            <div class="ligne-s">
                <div class="l1"></div>
                <div class="l2"></div>
                <div class="l3"></div>
            </div>
            <div class="text-l">
                <div class="text-l1">
                    <p>
                        Lorem ipsum dolor sit amet,<br>
                        consectetur adipisicing      
                    </p> 
                </div>
                <div class="text-l2">
                    <p>
                        Lorem ipsum dolor sit amet,<br>
                        consectetur adipisicing      
                    </p> 
                </div>
                <div class="text-l3">
                <p>
                    Lorem ipsum dolor sit amet,<br>
                    consectetur adipisicing      
                </p> 
                </div>
            </div>
            <div class="more-video">MORE VIDEOS</div>
            <div class="separation"></div>
        </div>
        <div id="testi" class="monials">
            <h2>The Testimonials</h2>
            <h1>WHAT THEY SAY</h1>
            <div class="box">
                <div class="box1">
                    <img src="images/img1.PNG" class="boximg1">
                    <h1><?php echo $donnees['nom']; ?></h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed d
                    </p>
                </div>
                <div class="box2">
                    <img src="images/img2.PNG" class="boximg2">
                    <h1>Aleksandra & Max</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed d

                    </p>
                </div>
                <div class="box3">
                    <img src="images/img3.PNG" class="boximg3">
                    <h1>Angela & Jack</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed d

                    </p>
                </div>
            </div>
            <div class="more-video">READ MORE</div>
        </div>
        <div id="contact" class="contact">
            <h1>Contact me</h1>
            <h2>GET IN TOUCH</h2>
            <div class="ligne-de-contact"></div>
                <div class="container">
                    <div class="colo1">
                        <p>
                            Lorem ipsum dolor sit amet,consectetur  
                            adipisicing elit,sed doLorem ipsum dolor  amet,consectetur  
                            adipisicing elit,sed doL
                        </p>
                        <form method="post" action="controller.php">
                        <input type="text" name="name" placeholder=" Entrez votre nom" /><br />
                        <input  type="email" name="email" placeholder=" Entrer votre Email" /><br />
                        <textarea type="text" name="subject" placeholder=" Entrer la raison de votre demande de contact"> </textarea> <br/>
                        <input type="submit" value="Submit" />
                        </form>
                        <p>
                    </div>
                    <div class="colo2">
                        <img src="images/contactimg.JPG" class="logo">
                        <img src="images/Logo.png" class="logo1">
                    </div>
                </div>
            </div>
        </div>
        <div class="ending">
            <nav>
                <div class="topnav">
                    <a href="#home">HOME</a>
                    <a href="#about-page">ABOUT</a>
                    <a href="#porto">PORTFOLIO</a>
                    <a href="#blog">BLOG</a>
                    <a href="#video">VIDEO</a>
                    <a href="#testi">TESTIMIONALS</a>
                    <a href="#contact">CONTACT</a>
                    <input type="text" name="search" placeholder=" search">
                  </div>
            </nav>
            <p>F I T C P O</p>
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddolor sit amet, consectetur adipisicing elit, sed <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddolor sit amet, consectetur adipisicing<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddolor sit amet, consectetur adipisi    
            </h1>
        </div>        
        <script>
        </script>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
    </body>
</html>
