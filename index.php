<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hong's Gallery</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
        <script src="./scripts/lib/jquery-1.11.3.min.js"></script>
        <script src="./scripts/slide.js"></script>
        <script src="./scripts/nav.js"></script>

    </head>

    <body>
        <!-- navbar -->
        <?php include 'php/navbar.php';?>

        <!-- content -->
        <div id="content" class="container">

            <!-- slide show -->
            <div id="bannerSlide">

                <!-- slide photos -->
                <div class="carousel-slide">
                    <img src="./images/gallery/sample1.jpg" alt="banner">
                </div>
                <div class="carousel-slide">
                    <img src="./images/gallery/sample2.jpg" alt="banner">
                </div>
                <div class="carousel-slide">
                    <img src="./images/gallery/sample3.jpg" alt="banner">
                </div>
                <div class="carousel-slide">
                    <img src="./images/gallery/sample4.jpg" alt="banner">
                </div>
                <div class="carousel-slide">
                    <img src="./images/gallery/sample5.jpg" alt="banner">
                </div>

                <!-- slide overlaye -->
                <div id="carouselLayer">

                    <!-- slide arrows -->
                    <div id="leftArrow" class="carousel-arrow">
                        <img src="./images/leftArrow_dim.png" alt="left arrow">
                    </div>
                    <div id="rightArrow" class="carousel-arrow">
                        <img src="./images/rightArrow_dim.png" alt="right arrow">
                    </div>

                    <!-- slide indicator -->
                    <div id="carouselIndex">
                        <div class="carousel-index-box"><img src="./images/index_oval.png" alt="index"></div>
                        <div class="carousel-index-box"><img src="./images/index_oval.png" alt="index"></div>
                        <div class="carousel-index-box"><img src="./images/index_oval.png" alt="index"></div>
                        <div class="carousel-index-box"><img src="./images/index_oval.png" alt="index"></div>
                        <div class="carousel-index-box"><img src="./images/index_oval.png" alt="index"></div>
                    </div>
                </div>

            </div>

            <h1>Welcome to Hong's Gallery</h1>
        </div>

        <!-- footer -->
        <?php include 'php/footer.php';?>

    </body>
</html>
