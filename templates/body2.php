
<!--
<div class="d-flex flex-column justify-content-start w-100 bg3 py-3">

<div class="row w-75 mx-auto color-gold my-3 fs-1 text-center">
<div class="py-2" style="font-size:16px">
                    Perdre 20 kilos en 1 mois,40 kilos en 2 mois ,6 kilos en 6 mois sans régime 
                    alimentaire avec votre nouveau pack NELVINE EXCLUSIVE LIMITED ÉDITION RENAITRE
                     REDIFINING YOUR SELF BETTER ME #WOMAN EVOLVE PREMIUM ONLY<br><br>
                     *Ces vous qui décidez de la rapidité de votre pack
                </div>

</div>
</div>

</div>

<div class="w-100">
    <div class="d-flex flex-wrap w-100 bg-x5 mx-auto">
        <div class="col-md-2"></div>
        <div class="col-md-10 color-gold py-5">
            <div class="fs-2 fw-bolder text-uppercase color-semi-gold py-4"></div>>
            <div class="fw-bolder text-uppercase py-4" style="font-size: 5rem;"></div>
            <div class="fw-bolder text-uppercase py-4" style="font-size: 5rem;"></div>
            <div class="fw-bolder text-uppercase py-4" style="font-size: 5rem;"></div>
        </div>
    </div>
--->

<div class="w-100 d-flex flex-column justify-content-center border-top border-light bg5">
        <div class="w-75 mx-auto text-center text-uppercase fs-3 fw-bolder color-gold py-5">
        Comment j'ai perdu 20 kilos en 1 mois et demi sans régime alimentaire avec le nouveau 
        pack NELVINE NEW ME LIMITED EDITION LIVE LONG LIVE HAPPY
        </div>
    
        <div class=" d-flex justify-content-center w-100">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GjYMCiIapXg" allowfullscreen style></iframe>
        </div>
        
    </div>

    <div class="w-100 py-4" style="background-color: #eee;">
        <div class="text-center fs-1 fw-bold text-capitalize color-gold py-3">
             </div>
        <div class="container-fluid row">
            <?php

            $a = $con->query("SELECT * from flyers WHERE status='3'  order by id  ") or die(mysqli_error($con));

            while($rows = $a->fetch_assoc()) {
         
            ?>

                <div class="col-sm-6 col-md-4 col-lg-3 card hover-zoom bg-white">
                    <div class="card-img-top embed-responsive embed-responsive-4by3">
                    <img src="templates/admin/assets/images/flyers/<?php  echo $rows['name']; ?>" alt="" class="w-100 h-auto  d-block mx-auto">

                    </div>
                    
                </div>
            <?php } ?>
        </div>
        
    </div>

    
    <div class="w-100 d-flex flex-column justify-content-center border-top border-light bg5">
        <div class="w-75 mx-auto text-center text-uppercase fs-1 fw-bolder color-gold py-5">
            LES CONSÉQUENCES ET LE MÉCANISME DU SURPOIDS 
        </div>
    
        <div class=" d-flex justify-content-center w-100">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lLnMHIMjae4" allowfullscreen style></iframe>
        </div>
        
    </div>

    
    <div class="w-100  py-5" style="background:#e4e4e4">
     
        <div class="d-flex flex-wrap container mx-auto">
            <div class="col-xs-10 col-md-6 mx-auto d-flex flex-column justify-content-center">
                <img src="assets/images/flyer.jpg" alt="" class="w-100 h-auto  d-block mx-auto">
            </div>
            <div class="col-xs-10 col-md-6 mx-auto fs-3 color-blk">
                <div class="py-2">
                <img src="templates/admin/assets/images/flyers/6.jpg" alt="" class="w-100 h-auto  d-block mx-auto">

                   

                </div>
                <div class="py-2">
             
                </div>
                <!--            
                <div class="pt-4 d-flex justify-content-center">
                    <a href="" class="btn border border-white text-white px-4 py-2 text-uppercase "><i class="fas fa-gift mx-2  "></i>get your free copy now</a>
                --> 
            </div>
        </div>
    </div>

    





    <!-- Inner -->
    <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
        <div class="container">
            <div class="row">
                    <div class="col-lg-6">
                        
<h3 class="color-gold text-center py-5 ">Démonstration life du nouveau pack ventre plat NELVINE LIVE LONG LIVE HAPPY</h3>
                        <div class="card">
                            <iframe class="embed-responsive-item card-img-top" src="https://www.youtube.com/embed/vwvkdkOJY-Q" allowfullscreen style></iframe>
                            <div class="card-body">
                                <h5 class="card-title">NEL NEW ME PREMIUM</h5>
                               
                                <a href="https://youtu.be/vwvkdkOJY-Q"  class="btn btn-danger d-block mx-auto" target="_new">watch now</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                    <h3 class="color-gold text-center py-5 ">Comment j'ai perdu 10 kilos en 5 jours avec le pack NELVINE NEW ME</h3>
                        <div class="card">
                            <iframe class="embed-responsive-item card-img-top" src="https://www.youtube.com/embed/AFwpDcmU4Kg" allowfullscreen style></iframe>
                            <div class="card-body">
                                <h5 class="card-title">NELVINE NEW ME PREMIUM ONLY</h5>
                               
                                <a href="https://youtu.be/AFwpDcmU4Kg"  class="btn btn-danger d-block mx-auto" target="_new">watch now</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<!-- Inner -->
</div>
<!-- Carousel wrapper -->

<div class="w-100 py-4" style="background-color: #eee;">
        <div class="text-center fs-1 fw-bold text-capitalize color-gold py-3">
             </div>
        <div class="container-fluid row">
            <?php

            $a = $con->query("SELECT * from flyers where status='1' order by id  ") or die(mysqli_error($con));

            while($rows = $a->fetch_assoc()) {
         
            ?>

                <div class="col-sm-6 col-md-4 col-lg-3 card hover-zoom bg-white">
                    <div class="card-img-top embed-responsive embed-responsive-4by3">
                    <img src="templates/admin/assets/images/flyers/<?php  echo $rows['name']; ?>" alt="" class="w-100 h-auto  d-block mx-auto">

                    </div>
                    
                </div>
            <?php } ?>
        </div>
        
    </div>




    <div class="w-100  py-5" style="background:#e4e4e4">
     
        <div class="d-flex flex-wrap container mx-auto">
            <div class="col-xs-10 col-md-6 mx-auto d-flex flex-column justify-content-center">
                <img src="assets/images/flyer2.jpg" alt="" class="w-100 h-auto  d-block mx-auto">
            </div>
            <div class="col-xs-10 col-md-6 mx-auto fs-3 color-blk">
                <div class="py-2">
                    I help the rich to get in shape add confidence and 20 years to their lifes
                    <img src="assets/images/flyer3.jpg" alt="" class="w-100 h-auto  d-block mx-auto">

                </div>
                <div class="py-2">
             
                </div>
                <!--            
                <div class="pt-4 d-flex justify-content-center">
                    <a href="" class="btn border border-white text-white px-4 py-2 text-uppercase "><i class="fas fa-gift mx-2  "></i>get your free copy now</a>
                --> 
            </div>
        </div>
    </div>

<!--
    <div class="w-100  bg-blk  py-5" >

        <div class="col-6 mx-auto py-0" >
            <img src="assets/images/cover.jpg" alt="" srcset="" class="w-100">
        </div>
    </div>
-->

        <?php include 'slider.php'; ?>
        <?php include 'carousel.php'; ?>
                            </div>

                            <div class="w-100 py-4" style="background-color: #eee;">
        <div class="text-center fs-1 fw-bold text-capitalize color-gold py-3">
             </div>
        <div class="container-fluid row">
            <?php

            $a = $con->query("SELECT * from flyers WHERE status='2' order by id  ") or die(mysqli_error($con));

            while($rows = $a->fetch_assoc()) {
         
            ?>

                <div class="col-sm-6 col-md-4 col-lg-3 card hover-zoom bg-white">
                    <div class="card-img-top embed-responsive embed-responsive-4by3">
                    <img src="templates/admin/assets/images/flyers/<?php  echo $rows['name']; ?>" alt="" class="w-100 h-auto  d-block mx-auto">

                    </div>
                    
                </div>
            <?php } ?>
        </div>
        
    </div>



<h3 class="color-gold text-center py-5 ">LES QUESTIONS LES PLUS POSÉ PAR LES CLIENTS DE LA MEILLEURE
     MARQUE MINCEUR D'AFRIQUE NELVINE PREMIUM ONLY:</h3>



<div class="w-100  bg-blk  py-5" >

<div class="col-6 mx-auto py-0" >
    <img src="assets/images/cover2.jpg" alt="" srcset="" class="w-100">
</div>
</div>




    <div class="w-100 py-5">
        <div class="text-center fs-1 fw-bolder color-gold py-3">QUESTIONS  RÉPONSE</div>
        <div class="container rounded my-4 row mx-auto">
             
                <div class="col-md-6 my-2 p-0">
                    <div class="w-100 py-3 px-4" style="background-color: #eee;">
                        <blockquote class="my-3">
                            <header class="fw-bold fs-4 coloir-semi-gold py-2">- Et si je souhaite rencontrer le coach ?</header>
                            <p class="py-1 color-black">Consultation en ligne et paiement a la livraison.</p>
                        </blockquote>
                        <div class="d-flex flex-wrap justify-content-start pl-5 w-100 mb-5">
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-0 px-4">
                      <img class="col-sm-3 mx-auto img rounded-circle" src="assets/images/photo.jpg" alt="Title" style="margin-top: -2rem; width: 8rem; height: 8rem;">
                      <div class="col-sm-7 mx-auto py-4">
                        <h4 class="card-title color-gold h4">NELVINE</h4>
                        <p class="card-text color-black h5">CEO/BODY HERO/WEIGHT LOSS EXPERT</p>
                      </div>
                    </div>
                </div>
             



                <div class="col-md-6 my-2 p-0">
                    <div class="w-100 py-3 px-4" style="background-color: #eee;">
                        <blockquote class="my-3">
                            <header class="fw-bold fs-4 coloir-semi-gold py-2">Le suivie ce passe ou exactement ?</header>
                            <p class="py-1 color-black">En ligne je suis a votre disposition 24/24 .</p>
                        </blockquote>
                        <div class="d-flex flex-wrap justify-content-start pl-5 w-100 mb-5">
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-0 px-4">
                      <img class="col-sm-3 mx-auto img rounded-circle" src="assets/images/photo.jpg" alt="Title" style="margin-top: -2rem; width: 8rem; height: 8rem;">
                      <div class="col-sm-7 mx-auto py-4">
                        <h4 class="card-title color-gold h4">NELVINE</h4>
                        <p class="card-text color-black h5">CEO/BODY HERO/WEIGHT LOSS MENTOR</p>
                      </div>
                    </div>
                </div>


                <div class="col-md-6 my-2 p-0">
                    <div class="w-100 py-3 px-4" style="background-color: #eee;">
                        <blockquote class="my-3">
                            <header class="fw-bold fs-4 coloir-semi-gold py-2">Et si je souhaite payer en tranches ?</header>
                            <p class="py-1 color-black">le paiement ce fait en une seule tranche a la réception</p>
                        </blockquote>
                        <div class="d-flex flex-wrap justify-content-start pl-5 w-100 mb-5">
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-0 px-4">
                      <img class="col-sm-3 mx-auto img rounded-circle" src="assets/images/photo.jpg" alt="Title" style="margin-top: -2rem; width: 8rem; height: 8rem;">
                      <div class="col-sm-7 mx-auto py-4">
                        <h4 class="card-title color-gold h4">NELVINE</h4>
                        <p class="card-text color-black h5">CEO/BODY HERO/WEIGHT LOSS EXPERT</p>
                      </div>
                    </div>
                </div>
             



                <div class="col-md-6 my-2 p-0">
                    <div class="w-100 py-3 px-4" style="background-color: #eee;">
                        <blockquote class="my-3">
                            <header class="fw-bold fs-4 coloir-semi-gold py-2">Es-ce qui ya risque de reprise ?</header>
                            <p class="py-1 color-black">
                            Non le thé de maintien et stabilisation sont offerts aujourd'hui pour éliminer tout risque de reprise.<br>

                             Et si je souhaite avoir uniquement le pack ventre plat ? Le pack ventre plat uniquement coûte 500 mil
                            </p>
                        </blockquote>
                        <div class="d-flex flex-wrap justify-content-start pl-5 w-100 mb-5">
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-0 px-4">
                      <img class="col-sm-3 mx-auto img rounded-circle" src="assets/images/photo.jpg" alt="Title" style="margin-top: -2rem; width: 8rem; height: 8rem;">
                      <div class="col-sm-7 mx-auto py-4">
                        <h4 class="card-title color-gold h4">NELVINE</h4>
                        <p class="card-text color-black h5">CEO/BODY HERO/WEIGHT LOSS EXPERT</p>
                      </div>
                    </div>
                </div>
                






                <div class="col-md-6 my-2 p-0">
                    <div class="w-100 py-3 px-4" style="background-color: #eee;">
                        <blockquote class="my-3">
                            <header class="fw-bold fs-4 coloir-semi-gold py-2">Et si jatend la prochaine promotion ?</header>
                            <p class="py-1 color-black">
                            A chaque promotion les prix augmentent
                            </p>
                        </blockquote>
                        <div class="d-flex flex-wrap justify-content-start pl-5 w-100 mb-5">
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                            <i class="fas fa-star color-gold fs-4 mx-2 "></i>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-0 px-4">
                      <img class="col-sm-3 mx-auto img rounded-circle" src="assets/images/photo.jpg" alt="Title" style="margin-top: -2rem; width: 8rem; height: 8rem;">
                      <div class="col-sm-7 mx-auto py-4">
                        <h4 class="card-title color-gold h4">NELVINE</h4>
                        <p class="card-text color-black h5">CEO/BODY HERO/WEIGHT MENTOR</p>
                      </div>
                    </div>
                </div>


        </div>


        <div class="w-100 bg-blk py-5 color-gold">
        <div class="fs-1 text-center color-gold pb-3 text-uppercase"> </div>
        <div class="d-flex flex-wrap container mx-auto">
           
            <div class="col-xs-10 col-md-12 mx-auto fs-3 color-gold">
                <div class="py-2" style="text-shadow:none;  font: size 14px;">
                Nous sommes en promotion aujourd'hui a l'occasion du lancement officiel
                4 de mon nouveau site internet.Tout les prix sont divisés par 2.le pack ventre plat + 
                 le suivie de 7 an après la perte + le thé de  maintien et stabilisation+ le suivie de
                  7 an après la sont offerts pour toute commande aujourd'hui pour éliminer tout  risque de reprise. <BR>
"For those who demande only the best of what life has to offer",
this premium package is for you .
Available to only 1 % of AFRICA'S population to ensure the highest Caliber of
 personal follow up is offered to all its members.<BR> 

<strong>APPLY NOW!</strong> <BR>

PREMIUM ONLY .<br>

NOT FOR EVERY ONE .<BR>

OSÉ RECONQUÉRIR VÔTRE CHÉRI, <BR>

AUGMENTER VOTRE ESPÉRANCE DE VIE ,<BR>

RETROUVEZ CONFIANCE EN VOUS .<BR>

BUY A BETTER VERSION OF YOUR SELF TODAY .<BR>

SOAR .  <BR>

#WOMAN EVOLVE ,<BR>

NELVINE LIVE LONG LIVE HAPPY. <BR>

10*VOTRE BEAUTÉ <BR>
10* VOTRE SANTÉ <BR>
10*VOTRE VIE <BR>

<a href="https://api.whatsapp.com/send?phone=674187565&text=I Saw your product on your website and I am interested" target="_blank" style="display: table; font-family: sans-serif; text-decoration: none; margin: 1em auto; color: #000; font-size: 0.9em; padding: 1em 3.5em; border-radius: 2em; font-weight: bold; background:rgb(217,185,141); background-size: 1.6em;" class="text-center my-3"> <i class="fab fa-whatsapp"></i> commandé maintenant </a>

 
                </div>
                <div class="py-2">
             
                </div>
                
            </div>
        </div>
    </div>
      
    </div>
