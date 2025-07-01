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

    <?php
    if ($result && $result->num_rows > 0)
    {
      $row = $result->fetch_assoc();
      echo '
      <div class="row row-minheight d-flex align-items-stretch justify-content-center">
        <div class="col-2 p-0 d-flex">
          <img
            src="images/' . htmlspecialchars($row['side_banner_img_path']) . '"
            class="img-fluid side_image side_image_flip_horizontally" />
        </div>

        <div class="col-8 p-0 d-flex">
          <img 
            src="images/' . htmlspecialchars($row['main_banner_img_path']) . '"
            class="img-fluid logo_img_main" />
        </div>

        <div class="col-2 p-0 d-flex">
          <img
            src="images/' . htmlspecialchars($row['side_banner_img_path']) . '"
            class="img-fluid side_image" />
        </div>
      </div>
      ';
    }
    ?>
    </header>

    <div class="container-fluid p-0 d-flex">
      <?php include 'includes/favorites.php'; ?>
    </div>
    
    <div class="container-fluid p-0 d-flex">
      <?php include 'includes/upcoming.php'; ?>
    </div>
    
    <div class="container-fluid p-0 d-flex">
      <?php include 'includes/about.php'; ?>
    </div>
    
    <div class="container-fluid p-0 d-flex">
      <?php include 'includes/contact.php'; ?>
    </div>

    <div class="container-fluid p-0 d-flex">
      <?php include 'includes/footer.php'; ?>
    </div>

  </body>
</html>
