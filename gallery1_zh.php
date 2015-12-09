<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="zh">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>洪成华美术馆</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
        <script src="./scripts/lib/jquery-1.11.3.min.js"></script>
        <script src="./scripts/gallery.js"></script>
        <script src="./scripts/nav.js"></script>


    </head>

    <body>
        <!-- navbar -->
        <?php include 'php/navbar_zh.php';?>

        <!-- content -->
        <div id="content">
            <div id="titleSection">
                <p>作品集 1: 山野山风</p>
            </div>

            <div id="mainSection">
                <img src="images/gallery/sample1.jpg" alt="Image Large">
            </div>
            <div id="thumbnailSection">
                <div id="leftThumb" class="thumbnail-arrow"><img id="leftArrow" src="images/leftArrow_dim.png" alt="Image Arrow"/></div>
                <div id="thumbnails">
                    <div id="sample1" class="thumbnail"><img src="images/gallery/sample1.jpg" alt="Image Thumbnail"/></div>
                    <div id="sample2" class="thumbnail"><img src="images/gallery/sample2.jpg" alt="Image Thumbnail"/></div>
                    <div id="sample3" class="thumbnail"><img src="images/gallery/sample3.jpg" alt="Image Thumbnail"/></div>
                    <div id="sample4" class="thumbnail"><img src="images/gallery/sample4.jpg" alt="Image Thumbnail"/></div>
                </div>
                <div id="rightThumb" class="thumbnail-arrow"><img id="rightArrow" src="images/rightArrow_dim.png" alt="Image Arrow"/></div>
            </div>
        </div>

        <!-- footer -->
        <?php include 'php/footer_zh.php';?>
        
    </body>
</html>
