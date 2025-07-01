<!DOCTYPE html>
<html lang="en">
  
  <div>
    <?php include 'includes/header.php'; ?>
  </div>

  <body>
    <?php include 'includes/navbar.php'; ?>

    <header id="home" class="container-fluid p-0 d-flex">
      <div class="row row-minheight d-flex align-items-stretch justify-content-center">
        <div class="col-2 p-0 d-flex">
          <img
            src="images/ultrawidevertical.webp"
            class="img-fluid side_image side_image_flip_horizontally" />
        </div>

        <div class="col-8 p-0 d-flex">
          <img 
            src="images/ultrawidebanner.jpg"
            class="img-fluid logo_img_main" />
        </div>

        <div class="col-2 p-0 d-flex">
          <img
            src="images/ultrawidevertical.webp"
            class="img-fluid side_image" />
        </div>
      </div>
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

  </body>
</html>
