<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hong's Gallery</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- navbar -->
        <div id="navbar">
            <div class="sticky">
                <div class="container">
                    <a href="./index.html"><div class="nav-btn"><div class="nav-btn-text">HOME</div></div></a>
                    <a href="./about.html"><div class="nav-btn"><div class="nav-btn-text">ABOUT</div></div></a>
                    <a href="./gallery.html"><div class="nav-btn"><div class="nav-btn-text">GALLERY</div></div></a>
                    <a href="#"><div class="nav-btn nav-btn-active"><div class="nav-btn-text">CONTACT</div></div></a>
                    <a href="./index.html"><div id="navTitle"><div class="nav-btn-text">Hong's Gallery</div></div></a>
                </div>
            </div>
        </div>

        <!-- content -->
        <div id="content">
        <div id='text'>
                <br><br>
                <p>Submit any inquiries about Hong's artwork in the form below:</p>
                <span class='required'>* required</span><br><br>
                <form action="php/form.php" method="post">
                    Name: <input type="text" name="fullname"> <span class='required'>*</span><br><br>
                    Email: <input type="text" name="email"> <span class='required'>*</span><br><br>
                    Phone: <input type="text" name="phone"> <br><br>
                    Are you a potential buyer? <span class='required'>*</span><br>
                    <input type="radio" name="buyer" value="Yes"> Yes
                    <input type="radio" name="buyer" value="Maybe"> Maybe
                    <input type="radio" name="buyer" value="No"> No
                    <br><br>
                    Questions/Comments: <span class='required'>*</span><br><textarea name="comments" rows="8" cols="50"></textarea><br><br>
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>


        <!-- footer -->
        <div id="footer">
            <div id="copyright">
                &#169; COPYRIGHT 2015, ALL RIGHTS RESERVERD.
            </div>
        </div>
    </body>
</html>
