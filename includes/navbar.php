<?php
  include 'config.php';
  $sql_navbar = "SELECT href_text, href, is_active FROM navbar_links ORDER BY position";
  $result_navbar = $conn->query($sql_navbar);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        if ($result_navbar && $result_navbar->num_rows > 0)
        {
          echo '<ul class="navbar-nav">';
          while ($row_navbar = $result_navbar->fetch_assoc())
          {
            $activeClass = '';
            if ($row_navbar['is_active'] == 1)
              $activeClass = ' active';
            echo '
              <li class="nav-item">
                <a class="nav-link' . $activeClass . '" href="' . htmlspecialchars($row_navbar['href']) . '">'
                  . htmlspecialchars($row_navbar['href_text']) .
                '</a>
              </li>';
          }
        }
        echo '</ul>';
      ?>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/IvoPatricio" target="_blank">
            <i class="fab fa-github"></i> GitHub
          </a>
        </li>
      </ul>'
    </div>
  </div>
</nav>