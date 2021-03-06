<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.3.0, mobirise.com">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="assets/images/index-meta.png">
    <meta property="og:image" content="assets/images/index-meta.png">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/icono-96x96.png" type="image/x-icon">
    <meta name="description" content="Vocesary es un periodico independiente">
    <title>Vocesary - Inicio</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>

<body>

    <?php include 'header.php';
    require 'db/conexion.php';

    $db = new BD;
    $conexion = $db->conn();
    ?>

    <section class="content4 cid-sqzJED4jj6" id="content4-s">


        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Article Title with Solid Background</strong>
                    </h3>
                    <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5">
                        You can arrange your articles with the Mobirise website design software.
                    </h4>

                </div>
            </div>
        </div>
    </section>

    <section class="gallery3 cid-sqzJJdTOGz" id="gallery3-t">


        <div class="container-fluid">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Full-Width Gallery</strong>
                </h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Images with Title and Text</h5>
            </div>
            <div class="row mt-4">
                <?php
                $consu = $db->select('*', 'noticia', null, $conexion);
                while ($data = mysqli_fetch_array($consu)) {
                ?>
                    <div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="assets/images/features1.jpg">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong><?php echo $data['titulo'] ?></strong>
                                </h5>

                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    <?php echo $data['descripcion'] ?> <a href="#" class="text-primary">Read more..</a></p>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>


</body>

</html>