<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>BICC.NO</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css"> 

  <link rel="icon" href="img/bubonyere.png" type="image/gif" sizes="16x16"> 
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style> 
  .mySlides {display:none}
  .myText {display:none}
  .w3-left, .w3-right, .w3-badge {cursor:pointer}
  .w3-badge {height:13px;width:13px;padding:0}
  .arrow-color{color:blueviolet;}
  .arrow-color .w3-badge{color:blueviolet; background-color: deeppink;}
  </style>
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
  <!-- =======================================================
    Theme Name: Vlava
    Theme URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      	  <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="index.php"><img data-0="width:155px;" data-300=" width:120px;" src="img/bubonyere.png" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.php">Hjem</a></li>
          <li><a href="#slides">Bubo</a></li> 
          <li><a href="#section-about">Gruppe 2</a></li>
          <li><a href="#section-contact">Kontakt oss</a></li> 
          <li><a href="/docs/index.html">Dokumentasjon</a></li> 
          <li><a href="login/login.html">Logg inn</a></li>
          <li><a href="logged_in.php">Demo</a></li>

        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section id="intro">
    <div class="intro-content">  
      <h2 id="overskrift">BICC.no</h2>
      <h3><!--Kartlegger fuglekollisjoner på DIN vindturbin--> Bird Collision Count? Use Bubo!<h3>
      <div> 

        <!-- <a href="#section-services" class="btn-get-started scrollto">Kom i gang</a> -->
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-earth">earth</a>
                    </div>
                </div>
            <h3 class="text-bold"> Enklere å beskytte fuglelivet <!--i Norge --></h3>
            <p>BICC detekterer kollisjoner mellom fugler og vindturbinvinger. Dette kan brukes som et supplement når man overvåker påvirkningen av turbinen på fugleliv i et område.</p>
            <p>Forstyrrelsen av fuglelivet rundt vindturbinen kan med et Bubo-system måles ut fra antall treff vindturbinen får i et tidsrom. </p> 
            <p>Gjør du tiltak for å minske antall kollisjoner, kan Bubo brukes for å kontrollere om tiltakene fungerer.</p>
            <div class="clear"></div>
        </div> 

       

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-link">link</a>
            </div>
          </div>
          <h3 class="text-bold">Monterbar på alle vindturbiner</h3>
       
          <p>Bubo kan monteres på omtrent alle små vindturbiner, dvs. at diameteren til vingen er maks 2.5 meter</p>
          <p>Et Bubo-system har sensorer festet på hver vinge med et justerbart belte. Disse er koblet med ledninger, som møtes i vingekrysset og går videre til en CPCU inne i nacellen. CPCUen kommuniserer med en Hub på bakkenivå, som igjen sender data til en database med treffhistorikk. Se figur <a href="#slides" style="color: deepskyblue;">her</a>. </p>
          
          
          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-user">person</a>
            </div>
          </div>
          <h3 class="text-bold"> Brukervenlig dataoversikt </h3>
          <p>Innlogging med egen bruker gir tilgang til databasen for alle dine vindturbiner. Med en egen nettside får du kart over vindturbinparken og treffhistorikk presentert i grafer og tabeller. Se demo <a href="logged_in.php" style="color: deepskyblue">her</a> for et eksempel på brukergrensesnitt.</p>
          <div class="clear"></div>
        </div>

        <!-- 

      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-archive">archive</a>
            </div>
          </div>
          <h3 class="text-bold">Valid HTML5</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-contract">Mobile</a>
            </div>
          </div>
          <h3 class="text-bold">Modern</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-clock">Faster</a>
            </div>
          </div>
          <h3 class="text-bold">Fast loading</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>
        -->

      </div>
    </div>
  </section> 

  <!-- spacer section:testimonial  <section id="testimonials" class="section">-->  
  <section id="slides">

  <div class="w3-container">
  </div>
  
  <div class="w3-content w3-display-container" style="max-width:800px;background:white;">
    <img class="mySlides" src="img/slides/sistekonsept.png" style="width:100%">
    <img class="mySlides" src="img/slides/beggeredigert.jpg" style="width:100%">
    <img class="mySlides" src="img/slides/cpcu.jpg" style="width:100%">
    <img class="mySlides" src="img/slides/sensor.jpg" style="width:100%">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="color: darkgrey; font-size: 30px;">&#10094;</div>
      <div class="w3-right w3-hover--text-khaki" onclick="plusDivs(1)" style="color: darkgrey; font-size: 30px;">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white arrow-color" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white arrow-color" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white arrow-color" onclick="currentDiv(3)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white arrow-color" onclick="currentDiv(4)"></span>
    </div>
  </div>
  



  <!-- <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial1.png" class="img-circle" max-width: 100% height: auto;> 
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
											</h5>
                    <br/>
                    <span class="author">&mdash; SARAH DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial2.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
												</h5>
                    <br/>
                    <span class="author">&mdash; NICOLE DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial3.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
											</h5>
                    <br/>
                    <span class="author">&mdash; DASON KRUN <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>  
  </section>  -->

 

 

  <!-- section works -->
  <!-- <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Om Bubo</h2>
            <p>Hvordan fungerer Bubo?</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn btn-small" data-filter="*">Alt</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".webdesign">Informasjon</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".photography">Bilder</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".print">Priser</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img1.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img2.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img3.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img4.jpg" alt=""> 
                  <h3 class="text-bold">Priser</h3> 
                  <h4 class="text">Bubo: </h4>
                  <p> 1 000 000,- kr.</p>
        
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img5.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img6.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img7.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img8.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img9.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>

    </div>
      ß
  </section> -->
  <section id="clients" class="section clearfix bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-2 align-center">
              <img class="ntnu" alt="logo" src="img/clients/logo_norsk_uten_slagord.jpg">
            </div>
<!-- HER KAN MAN HA SPONSORLOGOER 
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo2.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo3.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo4.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo5.png">
            </div>
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo6.png"> 
            
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- video autoplay=1" -->
  <section id="section-map" class="clearfix">
    <div align= "center">
    <iframe src="https://www.youtube.com/embed/qSWm_nprfqE?"width="700" height="615" frameborder="0" style="border:0;" allowfullscreen=""controls  muted></iframe>
      
  </div>
  </section> 

 

  <!-- about -->
  <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Oss bak bubo</h2>
            <p>Bubo er utviklet av gruppe 2, elsysprosjekt, ved NTNU. </p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-1/p160x160/55881678_1319308048222854_8719830345949642752_o.jpg?_nc_cat=105&_nc_oc=AQmbYCqakr2SGGms9eyZvN0KbrS0vAdyg3E7uYgNYtLikp-Mx9M0GlitXND14RqBy-OJYGBDi_k1BaamncROIvxc&_nc_ht=scontent-arn2-2.xx&_nc_tp=6&oh=d01ba5ce6a9bec83ca57885ed8da0d63&oe=5ECB211A" alt=""></figure>
            <div class="team-detail">
              <h4>Selma Tofte Thiis</h4>
              <span>Elsysar</span>
            </div>
          </div>
        </div> 
      
     
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-1/p160x160/67940920_10216710562334979_679622155901599744_o.jpg?_nc_cat=107&_nc_oc=AQkoIT3PbQF6Iw3NIC92HOSb8Ak8XINoacASS37weTOKPCx-57Ek9YO3c9lzDtvCatfzyKrjX8pGnLrq-9G2EGvY&_nc_ht=scontent-arn2-1.xx&_nc_tp=6&oh=cdc3fffbe6b33a618144d6ff23e08478&oe=5EFE771C" alt=""></figure>
            <div class="team-detail">
              <h4>Andreas Sundsbø</h4>
              <span>Elsysar</span>
            </div>
          </div>
        </div>   
      

     
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-1/p160x160/38801610_697788973892485_2739257436182413312_n.jpg?_nc_cat=106&_nc_oc=AQnrxjw2Fh1pPQQonkQmc5nMWqXhPDzOxWK8ltGodW6kRcgp3s_XOgmhtb7NVLVsIlwuLzJcOEA1qlJ2_KWom4ff&_nc_ht=scontent-arn2-1.xx&_nc_tp=6&oh=691d59134c79c4586032cdbfe46aa6f0&oe=5EBBAF5A" alt=""></figure>
            <div class="team-detail">
              <h4>Inès Kolz</h4>
              <span>Elsysar</span>
            </div>
          </div>
        </div>
        
     
          <div class="col-md-3">
            <div class="team-member">
              <figure class="member-photo"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-1/p160x160/1625543_10202543856510929_1320923190_n.jpg?_nc_cat=106&_nc_oc=AQm0RIcKsiwiRIpRGjPSHZz-kSpd_D0bwA0CnQJPiiLxkCEAcutbLvx070fODXgxJzJFr_lgu9rjYsgDtywomZ7E&_nc_ht=scontent-arn2-1.xx&_nc_tp=6&oh=8440a58d9c46b9d96efb24d68dd2b8f3&oe=5EC4E377" alt=""></figure>
              <div class="team-detail">
                <h4>Chris Vaksdal</h4>
                <span>Elsysar</span>
              </div>
            </div>
          </div>
        </div> 
    

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-1/c29.0.160.160a/p160x160/38744611_1783826805071274_5653957886905155584_o.jpg?_nc_cat=107&_nc_oc=AQmzIOnmgQhK54NJyz2p9LRwGz25DoOoL5peC67S4JKj1_K3qcD58U6hf3NbBlam_kn9cbRhEjaGOGWi7bTuLB5F&_nc_ht=scontent-arn2-1.xx&oh=923097ac96586d0a020cfdf2e5f99ebe&oe=5EF70C36" alt=""></figure>
            <div class="team-detail">
              <h4>Benedikt Mithassel</h4>
              <span>Elsysar</span>
            </div>
          </div>
        </div> 
     

          <div class="col-md-3">
            <div class="team-member">
              <figure class="member-photo"><img src="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-1/p160x160/66525946_2379268728762654_8618462421910028288_o.jpg?_nc_cat=105&_nc_oc=AQk0LjMog8rF_yWL66Hu0tQVSAeYDG_RSCnEN40ZRbPUM3pmzdEypJ9QIAZckAgqupyb_ERccQMUJgIKmN8Y9RE5&_nc_ht=scontent-arn2-2.xx&_nc_tp=6&oh=c3ab9a03e62ea73392e5af9246bc994b&oe=5EC1D479" alt=""></figure>
               <div class="team-detail">
                <h4>Silje Toftevåg Urke</h4>
                <span>Elsysar</span>
              </div>
            </div>
          </div> 
 


        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-1/c341.447.981.981a/s160x160/39752098_2268431346504863_4171282120594948096_o.jpg?_nc_cat=107&_nc_oc=AQlM_rhNWGNHe2bRis8Oe0qrI5Gp9-N0pUAYeFxpsClatSJKf_g9JEKCh15It0lPyhdO_17wMF1SBg2C7JwnvDWy&_nc_ht=scontent-arn2-1.xx&oh=b65113780617f04bd07fc898d5caa6fd&oe=5EC07170" alt=""></figure>
            <div class="team-detail">
              <h4>Inge Eide Johnsen</h4>
              <span>Elsysar</span>
            </div>
          </div>
        </div>


        <div class="team-member">
          <figure class="member-photo"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-1/p160x160/13902604_996699540427642_5147669636116961498_n.jpg?_nc_cat=104&_nc_oc=AQkq83SxnUkIJcLt8f1HjHHL8wXgecFRzgF_Up3qvTNybhUTlRbver1NDubhZ2LnNKVwJmX4uka8hhKxkWgaHe2i&_nc_ht=scontent-arn2-1.xx&_nc_tp=6&oh=811316f86565a776dee7713c74b42ca0&oe=5EF9484D" alt=""></figure>
          <div class="team-detail">
            <h4>Erika Marki Frydendal</h4>
            <span>Elsysar</span>
          </div>
        </div>
      </div> 
    </div> 

  
  </section>
  <!-- /about --> 

  <!-- map -->
  <section id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d892.6771647786024!2d10.401729414990385!3d63.418035757923626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x466d3195a08d8f4f%3A0xe6839110bf6fbd2b!2sKolbj%C3%B8rn%20Hejes%20vei%208%2C%207034%20Trondheim!5e0!3m2!1sno!2sno!4v1580722754831!5m2!1sno!2sno"width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section> 

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Kontakt oss</h2>
            <p>Lurer du på noe om Bubo? Send oss en epost så hjelper vi deg!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Meldingen din er sendt. Ha en fin dag!</div>
            <div id="errormessage"></div>
            <form action="/contact.php" method="post" class="contactForm">

              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="Navn" class="cform-text" size="40" data-rule="minlen:1" data-msg="Venligst skriv inn navn">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="Din epostadresse" class="cform-text" size="40" data-rule="email" data-msg="Venligst skriv inn en gyldig epostadresse">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="Subject" placeholder="Emne" class="cform-text" size="40" data-rule="minlen:1" data-msg="Venligst skriv inn emne">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Venligst fortell oss hva du lurer på"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="SEND MELDING" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>

  <section id="footer" class="section footer">
    <!-- <div align = "right">
    <h5>Adresse:</h5>  
        <p>NTNU Gløshaugen <br/>
        Koopen <br/>
        Kolbjørn Hejes vei 8  <br/>
        7034 Trondheim</p>  
    </div>  
  -->
    <div class="row mar-bot40">
      <div class="col-md-offset-3 col-md-6">
        <div class="section-header">
          <div align = "left">
          <h5 dislplay: inline; class="section-heading animated" data-animation="bounceInUp">Adresse:</h5> 
          <p>  
            NTNU Gløshaugen <br/>
            Koopen <br/>
            Kolbjørn Hejes vei 8  <br/>
            7034 Trondheim 
          </p>
          <div align = "left">
            <h5 display: inline; class="section-heading animated" data-animation="bounceInUp">Kontakt:</h5>
            <p>  
              kontakt@bicc.no
            </p>
          </div>
        </div>
        </div> 
      </div>
    </div> 


    <!-- <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation"> 
        <div align = "right">
          <h5 class="section-heading animated" data-animation="bounceInUp">Kontakt:</h5>
          <p>  
            kontakt@bicc.no
          </p>
        <div class="col-sm-12 align-center">
          
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>

        </div>
      </div>
      <div class="row align-center mar-bot20">
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Get in touch</a></li>
        </ul>
-->
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; All rights reserved</p>
        </div>
      </div> 
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Vlava
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
