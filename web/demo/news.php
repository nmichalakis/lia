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

  <div id="latest-blog" class="pb-5">
  <h2 class="text-center">Νέα-Ανακοινώσεις</h2>
  <p class="text-center pt-2 pb-5">Διαβάστε τις τελευταίες ειδήσεις και ενημερώσεις σχετικά με το Lesvos Startup Hub.</p>
  <div class="container">
    <div class="row">
      <?php
      $total = 1;
      while ($total <= 12) {
        ?>
            <div class="col-xs-12 col-lg-3 mb-grid">
        <div class="article--teaser">
          <span class="article--teaser__date small">05 Φεβ. 2022</span>
          <h4>Δοκιμαστικός τίτλος για νέα ανακοινώσεις #<?php $total; ?></h4>
          <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam et suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Et mollis, est non
          </p>
          <a class="learn-more small">Περισσοτερα
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
        <?php $total++;
      } ?>
      </div>
  </div>
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
