<?php
    include 'includes/config.php';
    $sql_index = "SELECT main_banner_img_path, side_banner_img_path FROM homepage";
    $result_index = $conn->query($sql_index);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <?php include 'includes/header.php'; ?>
    <script src="onepagescript.js" defer></script>
  </head>

  <style>
    .page { display: none;}
    .active { display: block;}
  </style>
</head>
<body>
  <header>
    <?php include 'includes/navbar.php'; ?>
  </header>

  <div id="app">
    <div id="home" class="page active">
      <div class="container-fluid p-0">
      <?php
      if ($result_index && $result_index->num_rows > 0)
      {
        $row_index = $result_index->fetch_assoc();
        echo '
        <div class="row row-minheight d-flex align-items-stretch justify-content-center">
          <div class="col-2 p-0 d-flex">
            <img
              src="images/' . htmlspecialchars($row_index['side_banner_img_path']) . '"
              class="img-fluid side_image side_image_flip_horizontally" />
          </div>

          <div class="col-8 p-0 d-flex">
            <img 
              src="images/' . htmlspecialchars($row_index['main_banner_img_path']) . '"
              class="img-fluid logo_img_main" />
          </div>

          <div class="col-2 p-0 d-flex">
            <img
              src="images/' . htmlspecialchars($row_index['side_banner_img_path']) . '"
              class="img-fluid side_image" />
          </div>
        </div>
        ';
        }
        ?>
        </div>
    </div>
    <div id="onepage_about" class="page"></div>
    <div id="contact" class="page"></div>
  </div>

</html>