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
  </head>

</head>
<body>
  <header>
    <?php include 'includes/navbar.php'; ?>
  </header>

  <div id="app">
    <div id="home" class="active-pages page-active">
      <div class="container-fluid p-0">
        <?php include 'pages/home.php'; ?>
      </div>
    </div>

    <div id="onepage_favorites" class="active-pages"></div>
    <div id="onepage_about" class="active-pages"></div>
    <!--<div id="onepage_contact" class="active-pages"></div>-->

  </div>
  <?php include 'includes/footer.php'; ?>
</body>
</html>