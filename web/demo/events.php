<?php

/**
 * @file
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Your description">
  <meta name="author" content="Your name">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" />
  <!-- website name -->
  <meta property="og:site" content="" />
  <!-- website link -->
  <meta property="og:title" content="" />
  <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" />
  <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" />
  <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" />
  <!-- where do you want your post to link to -->
  <meta name="twitter:card" content="summary_large_image">

  <!-- Webpage Title -->
  <title>Λέσβος StartUp Hub</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;900;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300;500;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <link href="css/swiper.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Gemdev</a> -->

      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="index.html"> <img src="images/logo.svg" alt="alternative">
        <span>Lesvos Startup Hub</span>
      </a>

      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#details">Lesvos StartUp Hub
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#features">Βιβλιοθήκη</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Δράσεις</a>

            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item p-1" href="#">Σεμινάρια</a></li>
              <li><a class="dropdown-item p-1" href="#">Μαθήματα</a></li>
              <li><a class="dropdown-item p-1" href="#">Εκδηλώσεις</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">Online Εκπαίδευση</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">Startup Accelerator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">Νέα</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">Επικοινωνία</a>
          </li>
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
        </span>
      </div>
      <!-- end of navbar-collapse -->
    </div>
    <!-- end of container -->
  </nav>
  <!-- end of navbar -->
  <!-- end of navigation -->


  <div class="container-fluid bg-light-gray">

  <div id="latest-events" class="py-5 container">
    <div class="events--header text-center py-5">
        <h2 class="pt-5">Οι Δράσεις μας</h2>
        <p>Ενημερωθείτε σχετικά με τα τελευταία σεμινάρια, μαθήματα, εκδηλώσεις</p>
    </div>
    <div class="row">
      <?php
      $total = 1;
      $titles = [
        "Πρόσκληση Συμμετοχής στον Δ' Κύκλο του Προγράμματος Business Launch",
        "Παράταση: Υποβολή Αιτήσεων μέχρι 4 Νοεμβρίου",
        "Νέα Δέσμη Δράσεων «Ψηφιακός Μετασχηματισμός ΜμΕ»",
        "Έρχεται το ΕΞΟΙΚΟΝΟΜΩ για τις επιχειρήσεις",
        "3η Ενημερωτική Ήμερίδα Κέντρου Στήριξης Επιχειρηματικότητας",
        "Νέο επιδοτούμενο πρόγραμμα «ΨΗΦΙΑΚΑ ΕΡΓΑΛΕΙΑ ΜΜΕ»",
        "Νέοι Επιχειρηματικοί Οδηγοί Business Support",
        "Ηλεκτρονική Ενημερωτική Ημερίδα Παρουσίασης του Κέντρου",
        "Μικρο-Θερμοκοιτίδα: Αιτήσεις για τον Α κύκλο μέχρι 7 Απριλίου",
      ];

      while ($total <= 12) {
        $rand = rand(0, 8);

        ?>
          <div class="col-lg-4 mb-grid">
            <div class="event--teaser event--teaser--inside">

              <img class="img-fluid" src="<?php print 'images/events/image-' . ($rand + 1) . '.jpeg'?>" alt="" />
              <div class="event--teaser__content">
                <small class="py-3"><?php print rand(1, 28);?> Φεβρουαρίου 2023</small>
                <h4><?php print $titles[$rand];?></h4>
              </div>
            </div>
          </div>
        <?php $total++;
      } ?>
  </div>
</div>

  <?php include_once 'partials/footer-copyrights.php'; ?>

  <script src="js/jquery.min.js"> </script><!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="js/bootstrap.min.js"></script><!-- Bootstrap framework -->
  <script src="js/jquery.easing.min.js"></script><!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
  <script src="js/jquery.magnific-popup.js"></script><!-- Magnific Popup for lightboxes -->
  <script src="js/scripts.js"></script><!-- Custom scripts -->
</body>

</html>
