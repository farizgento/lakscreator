
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Tentang Kami || Lakscreator</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <!-- <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

    <!-- Favicons
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico"> -->
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./carousel.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-light py-3 fixed-top shadow" style="background-color: #eeebe7;">
    <div class="container">
      <a class="navbar-brand ms-2" href="#">Lakscreator</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <?php
    include('partials/header/header.php')
    ?>
    </nav>
</header>

<main class="mt-5 pt-5">

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container">
      <!-- <p class="lead"></p> -->
      <p class="pertama mx-5">Tentang Lakscreator</p>
      <p class="mx-5" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur ab quas esse! Sed eos, magnam, consequatur atque iure iusto sint sit, recusandae voluptates eligendi ab nihil dignissimos nulla. Sequi, iste!</p>
      <p class="mx-5" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur ab quas esse! Sed eos, magnam, consequatur atque iure iusto sint sit, recusandae voluptates eligendi ab nihil dignissimos nulla. Sequi, iste!</p>

    <!-- <div class="flex-shrink-0">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid" width="200" height="200" src="./image/292592188_133175712477956_2678465494237519897_n.jpg" role="img" aria-label="Placeholder: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
    </div> -->
  </div>

  <!-- FOOTER -->
  <footer class="container fixed-bottom">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<?php
@include('partials/script/script.php')
?>
    <script>
      
      // gsap.to(".lead", {duration: 3, delay:1 ,text: "Tentang Lakscreator"});
      gsap.from(".pertama", {duration: 1.5, delay:0.5 ,text: ""});
      gsap.from(".kedua", {duration: 4, delay:2 ,text: ""});
    </script>
    
  <script>
    
  </script>
  </body>
</html>
