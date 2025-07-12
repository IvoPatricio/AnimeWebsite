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

</head>
<body>
  <header>
    <?php include 'includes/navbar.php'; ?>
  </header>

  <div id="app">
    <div id="home" class="active-pages page-active">
      <div class="container-fluid p-0">
      <?php include 'home.php'; ?>
    </div>

    <div id="onepage_favorites" class="active-pages"></div>
    <div id="onepage_about" class="active-pages"></div>
    <div id="onepage_contact" class="active-pages"></div>

  </div>

</html>