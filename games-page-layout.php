<!-- Header -->
<?php include "includes/header.php"; ?>

<!-- Body -->
<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

      <!-- Content -->
      <?php
            if (isset($_GET['source'])) {
                  $source = $_GET['source'];
            } else {
                  $source = '';
            }

            switch ($source) {
                  case 'games1':
                        include "games-inc/games1.php";
                        break;

                  case 'games2':
                        include "games-inc/games2.php";
                        break;

                  case 'games3':
                        include "games-inc/games3.php";
                        break;

                  case 'games4':
                        include "games-inc/games4.php";
                        break;

                  case 'games5':
                        include "games-inc/games5.php";
                        break;

                  case 'games6':
                        include "games-inc/games6.php";
                        break;

                  case 'games7':
                        include "games-inc/games7.php";
                        break;

                  case 'games8':
                        include "games-inc/games8.php";
                        break;

                  case 'games9':
                        include "games-inc/games9.php";
                        break;

                  case 'games10':
                        include "games-inc/games10.php";
                        break;

                  case 'games11':
                        include "games-inc/games11.php";
                        break;

                  case 'games12':
                        include "games-inc/games12.php";
                        break;

                  case 'games13':
                        include "games-inc/games13.php";
                        break;

                  case 'games14':
                        include "games-inc/games14.php";
                        break;

                  case 'games15':
                        include "games-inc/games15.php";
                        break;

                  case 'games16':
                        include "games-inc/games16.php";
                        break;

                  default:
                        include "games-page.php";
                        break;
            }
      ?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
