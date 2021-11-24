<?php
include ('connexion.php');
?>

<!DOCTYPE html>
    <head>
        <title>Check Hotel Prices </title>
        <meta charset="utf-4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
         <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
    

    <!-- navabar -->
        <?php
        include ("navbar.php");
        ?>
    <!-- premiére section -->
    <main>
        <section class="main1 py-3 text-center">
            <div class="container py-3">
                <div class="row py-3 ">                    
                        <div class="col-lg-3 ">
                            <h3 data-aos="flip-right" data-aos-duration="2000">
                           Optimiser ses ventes
                            </h3> 
                        </div>
                        <div class="col-lg-3">
                        <h3 data-aos="flip-right" data-aos-duration="2000">                           
                            Augmenter chiffre d'affaires
                        </h3>
                        </div>
                        <div class="col-lg-3">
                            <h3 data-aos="flip-right" data-aos-duration="2000">
                                Avoir une longueur d'avance
                            </h3>
                        </div>
                        <div class="col-lg-3">
                            <h3 data-aos="flip-right" data-aos-duration="2000">
                                Une vieille concurrentielle en continue
                            </h3>
                        </div>
                </div>
            </div>
        </section>
        <!-- section à propos  -->
        <section class="a_propos py-1 ms-1 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ">
                        <img src="image2.jpg" data-aos="fade-right" data-aos-duration="2000" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-3">
                        <h1> A propos</h1>
                        <p class="font-italic font-weight-bold pt-3" data-aos="fade-left" data-aos-duration="2000"> <span><i class="fas fa-rocket fa-2x"></i></span> Check Hotel Prices est une plateforme qui vous permet d'analyser en temps réel l'offre de vos concurents directs.</p>
                        <p class="font-italic font-weight-bold pt-3" data-aos="fade-left" data-aos-duration="2000"> <span><i class="fas fa-rocket fa-2x"></i></span> Vous avez le choix de selectionner votre panel de concurrents </p>
                        <p class="font-italic font-weight-bold pt-3" data-aos="fade-left" data-aos-duration="2000"> <span><i class="fas fa-rocket fa-2x"></i></span>  On mets à votre diposition  des données actualisées et fiables  </p>  
                        <p class="font-italic font-weight-bold pt-3" data-aos="fade-left" data-aos-duration="2000"> <span><i class="fas fa-rocket fa-2x"></i></span> C'est un outil doté de diverses fonctions vous permettant un meilleur positionnement sur marché </p> 
                        <p class="font-italic font-weight-bold pt-3" data-aos="fade-left" data-aos-duration="2000"> <span><i class="fas fa-rocket fa-2x"></i></span> Nous recommandons, Vous avez libre choix sur les stratégies à suivre  </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- section Prestations -->
        <section class="services py-5
        
        bg-light">
            <div class="container">
                <h1 class="text-center pb-5">Nos Prestations</h1>
                <div class="row pb-3">
                    <div class=col-lg-4 mb-3>
                        <div class="card text-center py-3" data-aos="fade-left" data-aos-duration="2000">
                            <div class="card-body">
                                <div class="circle">
                                    <span></span><i class="fas fa-diagnoses"></i></span>
                                </div>
                                <h4 class="font-weight-bold pb-2"> Etude et analyse préalables  </h4>
                                <p> une analyse préalable est priomrdiale pour faire un constat de votre établissement, une auto-critique est l
                                    </p>
                            </div>

                        </div>
                    </div>
                    <div class=col-lg-4 mb-3>
                        <div class="card text-center py-3" data-aos="fade-up" data-aos-duration="2000">
                            <div class="card-body">
                                <div class="circle">
                                    <span><i class="fas fa-puzzle-piece"></i></span>
                                </div>
                                <h4 class="font-weight-bold pb-2"> Choix du panel concurrentiel  </h4>
                                <p> 
                                    </p>
                            </div>

                        </div>
                    </div>
                    <div class=col-lg-4 mb-3>
                        <div class="card text-center py-3" data-aos="fade-right" data-aos-duration="2000">
                            <div class="card-body">
                                <div class="circle">
                                    <span><i class="fas fa-chess-queen"></i></span>
                                </div>
                                <h4 class="font-weight-bold pb-2"> Stratégie </h4>
                                <p> 
                                    </p>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Section  Portfolio -->
        <section class="portfolio py-3">
            <div class="container  py-3">
                <h1 class="text-center pb-5" data-aos="flip-right" data-aos-duration="2000">Nos méthodes</h1>
              
                <div class="row pt-3">
                    <div class="col-lg-4 pt-3">
                        <div class="item text-center">
                            <h4>Un diagnostic global </h4>
                        <img  src="image5.jpg" class="img-fluid pt-3" data-aos="fade-right" data-aos-duration="2000"  alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <div class="item text-center">
                            <h4>Analyse des données</h4>
                        <img  src="image4.jpg" class="img-fluid pt-3"data-aos="flip-right" data-aos-duration="2000"   alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <div class="item text-center">
                            <h4>Recommandations </h4>
                        <img  src="image7.jpg" class="img-fluid pt-3"   data-aos="fade-left" data-aos-duration="2000" alt="">
                        
                        </div>
                    </div>
                </div>
                
            </div>

        </section>

        <!-- section contact -->
        <section>
            <div class="container text-center">
                <h1 class="texte-center" data-aos="flip-right" data-aos-duration="2000" >Nous Contacter </h1>
                <div class="row py-5">
                    <div class="col-lg-12">
                        <di class="row">
                            <div class="col-lg-6">
                                <div class="circle text-center">
                                    <span><i class="fas fa-at"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="circle text-center">
                                    <span><i class="fas fa-phone-alt"></i></span>
                                </div>                          
                            </div>
                        </di>
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <form action="">
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control bg-light mb-3" placeholder="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control bg-light mb-3" placeholder="name">
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-12">
                                            <textarea name="" id="" class="form-control bg-light" row="30" placeholder="Message" ></textarea>
                                            
                                        </div>
                                    </div>
                                    <button class="btn3 my-4">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="row ">
        <div class="col-md-6 text-center" >
            <a href="https://www.facebook.com/michelosamely" target="_blank"><span class="medias"><i class="fa fa-facebook-square" aria-hidden="true"></i></span></a>
            <a href="https://twitter.com/SmailMahiddine " target="_blank"><span class="medias"><i class="fa fa-twitter-square" aria-hidden="true"></i></span></a>
            <a href="https://www.instagram.com/mahiddines/" target="_blank"><span class="medias"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
        </div>
        <div class="col-md-6 py-3 text-center font-weight-bold">
        <p>Copy Right 2021 <span><i class="fa fa-copyright " aria-hidden="true"></i></span> By AzulWeb All Rights Reserved</p>
        </div>
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
        <script src="script.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>