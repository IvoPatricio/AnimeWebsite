<?php
    include 'includes/config.php';
    $sql = "SELECT main_banner_img_path, side_banner_img_path FROM homepage";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  
  <div>
    <?php include 'includes/header.php'; ?>
  </div>

  <body>

    <?php include 'includes/navbar.php'; ?>

    <header id="home" class="container-fluid p-0 d-flex">
      <p>Backoffice_homepage</p>
    </header>

    <div class="container-fluid p-0 d-flex">
      <?php include 'includes/footer.php'; ?>
    </div>

  </body>
</html>
