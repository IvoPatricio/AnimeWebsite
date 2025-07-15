<?php
  include '../includes/config.php';
  $sql_favorites = "SELECT title, image_path, description FROM favorites";
  $result = $conn->query($sql_favorites);
?>

<section id="onepage_favorites" class="container-fluid p-4 d-flex flex-column">
  <?php

  if ($result && $result->num_rows > 0)
  {
    while ($row_favorites = $result->fetch_assoc())
    {
      echo '
        <div class="row row-minheight d-flex align-items-center justify-content-center">
          <div class="col-4 m-4 d-flex">
            <img
              src="easyload_low"
              data-src="images/' . htmlspecialchars($row_favorites['image_path']) . '"
              class="lazyload favorite-img"
            />
          </div>

          <div class="col-6 m-4 d-flex align-items-center">
            <p class="regular-text">' . nl2br(htmlspecialchars($row_favorites['description'])) . '</p>
          </div>
        </div>
      ';
    }
  } else {
    echo '<p>No favorite animes found.</p>';
  }
  ?>
</section>
