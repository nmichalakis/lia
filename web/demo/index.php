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

  <?php include_once 'partials/header-front.php'; ?>


  <!-- Statement -->
  <div id="statement" class="basic-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-container">
            <h3>Η ταυτότητα του έργου</h3>
            <p class="p-large">“Ο σκοπός του έργου είναι να δημιουργηθεί και να λειτουργήσει Θερμοκοιτίδα Επιχειρήσεων (Incubator) και Επιχειρηματικός Επιταχυντής (Accelerator) με παροχή υπηρεσιών φιλοξενίας, συμβουλευτικής, εκπαίδευσης και δικτύωσης, η οποία στους χώρους της θα στεγάσει και μια υποδομή Co-Working Space ταυτόχρονα με τη λειτουργία Business Center”</p>

            <img src="images/statement.jpg" alt="alternative">
            <h6>Βαγγέλης Μυρσινιάς, Πρόεδρος Ε.Ε.Λ.</h6>

          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-1 -->
  <!-- end of statement -->

  <?php include_once 'partials/steps.php'; ?>
  <!-- Details 1 -->
  <div id="details" class="basic-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-7">
          <div class="image-container">
            <img class="img-fluid" src="images/startup-1.svg" alt="alternative">
          </div>
          <!-- end of image-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 col-xl-5">
          <div class="text-container">
            <h2>STARTUP ΕΠΙΧΕΙΡΗΣΕΙΣ ΚΑΙ ΑΝΑΠΤΥΞΗ ΤΟΥΣ</h2>
            <p>
              Ο όρος «Επιχειρηματική Θερμοκοιτίδα» χρησιμοποιείται συχνά για να περιγράψει ένα ευρύ φάσμα διαφορετικών δομών και οργανώσεων που, με διαφορετικούς τρόπους, βοηθούν και υποστηρίζουν δυνητικούς επιχειρηματίες από το πολύ πρώιμο στάδιο της επιχειρηματικής ιδέας έως και την έναρξη της εμπορικής τους δραστηριότητας και τη δημιουργία της νέας επιχειρηματικής οντότητας.</p>

            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">
                  <strong>For startups</strong>
                  which have less data and operations
                </div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">
                  <strong>For big companies</strong>
                  with a lot of data and daily inputs
                </div>
              </li>
            </ul>
            <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Lightbox</a>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-2 -->
  <!-- end of details 1 -->


  <!-- Details Lightbox -->
  <!-- Lightbox -->
  <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
      <div class="col-lg-8">
        <div class="image-container">
          <img class="img-fluid" src="images/details-lightbox.jpg" alt="alternative">
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Goals Setting</h3>
        <hr>
        <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
        <h4>User Feedback</h4>
        <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        <ul class="list-unstyled li-space-lg">
          <li class="media">
            <i class="fas fa-check"></i>
            <div class="media-body">Splash screen panel</div>
          </li>
          <li class="media">
            <i class="fas fa-check"></i>
            <div class="media-body">Statistics graph report</div>
          </li>
          <li class="media">
            <i class="fas fa-check"></i>
            <div class="media-body">Events calendar layout</div>
          </li>
          <li class="media">
            <i class="fas fa-check"></i>
            <div class="media-body">Location details screen</div>
          </li>
          <li class="media">
            <i class="fas fa-check"></i>
            <div class="media-body">Onboarding steps interface</div>
          </li>
        </ul>
        <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Contact Us</a>
        <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->
  <!-- end of details lightbox -->


  <!-- Details 2 -->
  <div class="basic-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5">
          <div class="text-container">
            <h2>Οικοσύστημα Νεοφυών Επιχειρήσεων</h2>
            <p>
              Ένα οικοσύστημα startup επιχειρήσεων, έχει μία σειρά από δομικά χαρακτηριστικά. Αυτά τα χαρακτηριστικά έχουν μία δυναμική μορφή και είναι ευμετάβλητα με την πάροδο των χρόνων. Τα οικοσυστήματα των νεοφυών επιχειρήσεων χωρίζονται σε υλικά και άυλα.
            </p>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">
                  <strong>Υλικό οικοσύστημα (Tangible ecosystem)</strong>
                  : Με την έννοια υλικό οικοσύστημα, αναφερόμαστε σε όλες τις διαδικασίες και θεσμούς που συμπεριλαμβάνονται στα οικοσυστήματα
                </div>

              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">
                  <strong>Άυλο οικοσύστημα (Intangible ecosystem)</strong>
                  Το άυλο οικοσύστημα συμπεριλαμβάνει όλες εκείνες τις δομές που δεν λαμβάνουν χώρα σε ένα συγκεκριμένο μέρος.
                </div>

              </li>
            </ul>
            <a class="btn-solid-reg" href="#your-link">Αναλυτικά</a>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 col-xl-7">
          <div class="image-container">
            <img class="img-fluid" src="images/startup-2.svg" alt="alternative">
          </div>
          <!-- end of image-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-3 -->
  <!-- end of details 2 -->


  <!-- Features -->
  <div id="features" class="basic-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="mb-4">Υλικό οικοσύστημα (Tangible ecosystem)</h3>
        </div>
        <div class="col-lg-6 mb-grid">
          <div class="text-box bg-gray">
            <i class="fas fa-rocket"></i>
            <h4>Νεοφυείς (startup) επιχειρήσεις</h4>
            <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
          </div>
          <!-- end of text-box -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 mb-grid">
          <div class="text-box bg-gray">
            <i class="fas fa-images"></i>
            <h4>Μηχανισμοί επιχειρηματικής επώασης</h4>
            <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
          </div>
          <!-- end of text-box -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 mb-grid">
          <div class="text-box bg-gray">
            <i class="fas fa-download"></i>
            <h4>Επιχειρηματικές προθερμοκοιτίδες (Business pre-incubators)</h4>
            <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
          </div>
          <!-- end of text-box -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 mb-grid">
          <div class="text-box bg-gray">
            <i class="fas fa-cog"></i>
            <h4>Επιχειρηματικές θερμοκοιτίδες (Business incubators)</h4>
            <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
          </div>
          <!-- end of text-box -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 mb-grid">
          <div class="text-box bg-gray">
            <i class="fas fa-file-alt"></i>
            <h4>Επιταχυντές (Accelerators)</h4>
            <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
          </div>
          <!-- end of text-box -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 mb-grid">
          <div class="text-box bg-gray">
            <i class="fas fa-award"></i>
            <h4>Πηγές χρηματοδότησης – κεφάλαιο ρίσκου</h4>
            <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
          </div>
          <!-- end of text-box -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-4 -->
  <!-- end of features -->

  <div class="call-toaction d-flex bg-parallax bg-alpha p-5 basic-6 align-items-center ">
    <div class="container ">
      <div class="text-container bg-gray position-relative z-front">
        <h4>Έχω μια νέα επιχείρηση και θέλω να δω την δραστηριότητα της να απογειώνεται</h4>
        <a class="btn-solid-lg" href="#your-link">Ξεκινήστε εδώ</a>
      </div>

    </div>
  </div>
</body>

</html>
</div>
</div>
</div><!-- Features2 -->
<div id="features2" class="basic-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-4">Άυλο οικοσύστημα (Intangible ecosystem)</h3>

      </div>
      <div class="col-lg-6 mb-grid">
        <div class="text-box bg-gray">
          <i class="fas fa-rocket"></i>
          <h4>Νεοφυείς (startup) επιχειρήσεις</h4>
          <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        </div>
        <!-- end of text-box -->
      </div>
      <!-- end of col -->
      <div class="col-lg-6 mb-grid">
        <div class="text-box bg-gray">
          <i class="fas fa-images"></i>
          <h4>Μηχανισμοί επιχειρηματικής επώασης</h4>
          <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        </div>
        <!-- end of text-box -->
      </div>
      <!-- end of col -->
      <div class="col-lg-6 mb-grid">
        <div class="text-box bg-gray">
          <i class="fas fa-download"></i>
          <h4>Επιχειρηματικές προ-θερμοκοιτίδες (Business pre-incubators)</h4>
          <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        </div>
        <!-- end of text-box -->
      </div>
      <!-- end of col -->
      <div class="col-lg-6 mb-grid">
        <div class="text-box bg-gray">
          <i class="fas fa-cog"></i>
          <h4>Επιχειρηματικές θερμοκοιτίδες (Business incubators)</h4>
          <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        </div>
        <!-- end of text-box -->
      </div>
      <!-- end of col -->
      <div class="col-lg-6 mb-grid">
        <div class="text-box bg-gray">
          <i class="fas fa-file-alt"></i>
          <h4>Επιταχυντές (Accelerators)</h4>
          <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        </div>
        <!-- end of text-box -->
      </div>
      <!-- end of col -->
      <div class="col-lg-6 mb-grid">
        <div class="text-box bg-gray">
          <i class="fas fa-award"></i>
          <h4>Πηγές χρηματοδότησης – κεφάλαιο ρίσκου</h4>
          <p>Hendrerit id facilisis eu metus purus metus accumsan tristique urna purus lorem quam magna magna tincidunt quisque commodo cursus urna tempus amet lorem fusce dolor.</p>
        </div>
        <!-- end of text-box -->
      </div>
    </div>
  </div>
  <div class="call-toaction bg-parallax bg-beta d-flex bg-beta p-5 basic-6 align-items-center ">
    <div class="container ">
      <div class="text-container bg-gray position-relative z-front">
        <h4>Έχω μια επιχείρηση και θέλω να μάθω πως μπορώ να ενισχύσω τη λειτουργία της</h4>
        <a class="btn-solid-lg" href="#your-link">Ξεκινήστε εδώ</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row"><!-- end of col --></div><!-- end of row -->
  </div><!-- end of container -->
</div><!-- end of basic-4 --><!-- end of features2 --><!-- About -->
<div id="about" class="basic-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center header-bolder">Σχετικά με τις startup</h2>
      </div>

      <div class="col-lg-4">
        <div class="text-container">
          <h3>Βασικά χαρακτηριστικά</h3>
          <p>Το βασικότερο χαρακτηριστικό κάθε startup επιχείρησης είναι η ικανότητά της να αναπτύσσεται.</p>
          <p>Μια startup είναι σχεδιασμένη να αναπτύσσεται πολύ γρήγορα. Η στόχευση αυτή στην ανάπτυξη, χωρίς γεωγραφικούς περιορισμούς θα είναι η ιδιότητα που διαχωρίζει τις startup επιχειρήσεις από κάθε άλλη μικρή επιχείρηση.
          </p>
          <p>Συνήθως η πλειονότητα των επιχειρήσεων παύει να είναι startup μετά το πέρας των τριών πρώτων χρόνων σύστασής της.</p>

          <a class="btn-solid-reg" href="#">περισσότερα</a>


        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <div class="h-100">
          <img class="img-cover" src="images/about.svg" alt="alternative">
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <div class="text-container">
          <h3>Παράγοντες - κριτήρια</h3>

          <p>Υπάρχουν κάποιοι παράγοντες που οι νεοφυείς επιχειρήσεις εξετάζουν ιδιαίτερα όταν επιλέγουν την βάση της επιχείρησης ή το επόμενο σημείο επέκτασης. Αυτοί είναι:</p>
          <ul class="list-unstyled li-space-lg">
            <li>
              1.
              Υποστηρικτές δομές και παρουσία άλλων νεοφυών επιχειρήσεων
            </li>
            <li>
              2. Πρόσβαση σε κεφάλαια/ χρηματοδότηση
            </li>

            <li>
              3. Πρόσβαση στην αγορά
            </li>

            <li>
              4. Λειτουργικά κόστη
            </li>

            <li>
              5. Ανθρώπινο δυναμικό
            </li>

            <li>
              6. Νομικό και ρυθμιστικό πλαίσιο
            </li>
          </ul>
          <a class="btn-solid-reg" href="#">περισσότερα</a>


        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</div><!-- end of basic-5 --><!-- end of about --><!-- Statistics -->
<div class="counter">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Counter -->
        <div id="counter">
          <div class="cell">
            <div class="counter-value number-count" data-count="231">1</div>
            <p class="counter-info">Κύκλοι</p>
          </div>
          <div class="cell">
            <div class="counter-value number-count" data-count="385">1</div>
            <p class="counter-info">Δράσεις</p>
          </div>
          <div class="cell">
            <div class="counter-value number-count" data-count="159">1</div>
            <p class="counter-info">Μέλη</p>
          </div>
          <div class="cell">
            <div class="counter-value number-count" data-count="127">1</div>
            <p class="counter-info">Case Studies</p>
          </div>
          <div class="cell">
            <div class="counter-value number-count" data-count="211">1</div>
            <p class="counter-info">Startups</p>
          </div>
        </div>
        <!-- end of counter -->
      </div>
    </div>
  </div>
</div>

  <?php include_once 'partials/events.php'; ?>
  <?php include_once 'partials/blog.php'; ?>




<?php include_once 'partials/contact.php'; ?>


<?php include_once 'partials/footer-copyrights.php'; ?>

<script src="js/jquery.min.js"> </script><!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="js/bootstrap.min.js"></script><!-- Bootstrap framework -->
<script src="js/jquery.easing.min.js"></script><!-- jQuery Easing for smooth scrolling between anchors -->
<script src="js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
<script src="js/jquery.magnific-popup.js"></script><!-- Magnific Popup for lightboxes -->
<script src="js/scripts.js"></script><!-- Custom scripts --></body>

</html>
