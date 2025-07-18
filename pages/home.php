<?php
    include 'includes/config.php';
    $sql_index = "SELECT main_banner_img_path, side_banner_img_path FROM homepage";
    $result_index = $conn->query($sql_index);
?>

<?php
    if ($result_index && $result_index->num_rows > 0)
    {
        $row_index = $result_index->fetch_assoc();
        echo '
        <div class="row row-minheight d-flex align-items-stretch justify-content-center">
            <div class="col-2 p-0 d-flex">
                <img
                    src="images/easyload_low.jpg"
                    data-src="images/' . htmlspecialchars($row_index['side_banner_img_path']) . '"
                    class="lazyload img-fluid side_image side_image_flip_horizontally"
                />
            </div>

            <div class="col-8 p-0 d-flex" style="background-color: black !important;">
            <img
                src="images/easyload_low.jpg"
                data-src="images/' . htmlspecialchars($row_index['main_banner_img_path']) . '"
                class="lazyload img-fluid logo_img_main "
                />
            </div>

            <div class="col-2 p-0 d-flex">
                <img
                    src="images/easyload_low.jpg"
                    data-src="images/' . htmlspecialchars($row_index['side_banner_img_path']) . '"
                    class="lazyload img-fluid side_image"
                />
            </div>
        </div>
        ';
    }
?>