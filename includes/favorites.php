<?php
  include 'config.php';
  $sql = "SELECT title, image_path, description FROM favorites";
  $result = $conn->query($sql);
?>

<section id="onepage_favorites" class="container-fluid p-0 d-flex flex-column">
  <div class="row justify-content-center">
    <div class="col-auto">
      <h2 class="title-text">Favorite Animes</h2>
    </div>
  </div>

  <?php

  if ($result && $result->num_rows > 0)
  {
    while ($row = $result->fetch_assoc())
    {
      echo '
        <div class="row row-minheight d-flex align-items-stretch justify-content-start">
          <div class="col-2 p-0 d-flex"></div>

          <div class="col-4 p-0 d-flex">
            <img 
              src="images/' . htmlspecialchars($row['image_path']) . '"
              class="img-fluid logo_img_main" alt="' . htmlspecialchars($row['title']) . '" />
          </div>

          <div class="col-4 m-2 d-flex">
            <p class="regular-text">' . htmlspecialchars($row['description']) . '</p>
          </div>

          <div class="col-2 p-0 d-flex"></div>
        </div>
      ';
    }
  } else {
    echo '<p>No favorite animes found.</p>';
  }
  ?>
</section>
