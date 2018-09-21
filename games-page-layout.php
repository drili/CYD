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

                  default:
                        include "games-page.php";
                        break;
            }
      ?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
