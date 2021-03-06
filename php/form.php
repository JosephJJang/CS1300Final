<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hong's Gallery</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css" />
        <script src="../scripts/lib/jquery-1.11.3.min.js"></script>
        <script src="../scripts/nav.js"></script>
    </head>
<body>
		<!-- navbar -->
		<div id="navbar">
		    <div class="sticky">
		        <div class="container">
		            <a href="../index.php"><div class="nav-btn"><div class="nav-btn-text">HOME</div></div></a>
		            <a href="../about.php"><div class="nav-btn"><div class="nav-btn-text">ABOUT</div></div></a>
		            <a href="#"><div id="galleryBtn" class="nav-btn"><div class="nav-btn-text">GALLERY</div></div></a>
		            <a href="../contact.php"><div class="nav-btn"><div class="nav-btn-text">CONTACT</div></div></a>
		            <div id="nav-right-wrapper">
		                <a href="../index_zh.php" hreflang="zh" lang="zh"><div class="nav-lang"><div class="nav-btn-text">中文</div></div></a>
		                <a href="../index.php" lang="en"><div class="nav-lang"><div class="nav-btn-text">EN</div></div></a>
		                <a href="../index.php"><div id="navTitle"><div class="nav-btn-text">Hong's Gallery</div></div></a>
		            </div>
		        </div>
		        <div class="nav-btn" id="sub-menu">
		            <a href="../gallery1.php"><div class="submenu-btn"><div class="nav-btn-text">Colleciton 1</div></div></a>
		            <a href="../gallery2.php"><div class="submenu-btn"><div class="nav-btn-text">Collection 2</div></div></a>
		        </div>
		    </div>
		</div>

        <!-- content -->
        <div id="content">
        	<?php
				$name = "";
				$email = "";
				$phone = "";
				$buyer = "";
				$comments = "";
				$numvalid = 0;
				$output = "";

		if (isset($_POST['submit'])){

			if (!isset($_POST['fullname']) || empty($_POST['fullname'])) {
				echo "<p>Please enter in your name</p>";
			}
		
			else {	
				$name = $_POST['fullname'];
				$numvalid++;
			}

			if (!isset($_POST['email']) || empty($_POST['email'])){
				echo "<p>Please enter in your email</p>";
			}

			elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo "<p>Invalid email</p>";
			}

			else {
				$email = $_POST['email'];
				$numvalid++;
			}
			
			if (!isset($_POST['phone']) || empty($_POST['phone'])){
				$phone = "N/A";
			}
			
			else {
				$phone = $_POST['phone'];
			}

			if (!isset($_POST['buyer']) || empty($_POST['buyer'])) {
				echo "<p>Please indicate if you are a potential buyer</p>";
			}
		
			else {	
				$buyer = $_POST['buyer'];
				$numvalid++;
			}

			if (!isset($_POST['comments']) || empty($_POST['comments'])){
				echo "<p>Please write question(s) or comment(s)</p>";
			}

			elseif (strlen($_POST['comments']) < 10) {
				echo "<p>Please write at least 10 characters for your question/comment</p>";
			}

			else {
				$comments = $_POST['comments'];
				$numvalid++;
			}

			if ($numvalid == 4) {
				$output = "<br><br><p class='required'>Thanks for the questions/comments!</p> <br>
		<p>Here is a copy of your submission: <br><br> Name: $name <br> Email: $email <br> Phone: $phone <br> 
		Are you a potential buyer? $buyer <br> Questions/Comments: $comments</p>\n";
				echo $output;
			}
	    }

	    else { 
    		echo "<p class='required'>You haven't submitted the form!</p>\n";
		}
	?>
        </div>

        
        <!-- footer -->
        <?php include 'footer.php';?>

    </body>
</html>
