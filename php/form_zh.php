<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>洪成华美术馆</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css" />
        <script src="../scripts/lib/jquery-1.11.3.min.js"></script>
        <script src="../scripts/nav.js"></script>
    </head>
<body>
		<!-- navbar -->
        <div id="navbar">
		    <div class="sticky">
		        <div class="container">
		            <a href="../index_zh.php"><div class="nav-btn"><div class="nav-btn-text">主页</div></div></a>
		            <a href="../about_zh.php"><div class="nav-btn"><div class="nav-btn-text">关于</div></div></a>
		            <a href="#"><div id="galleryBtn" class="nav-btn"><div class="nav-btn-text">画集</div></div></a>
		            <a href="../contact_zh.php"><div class="nav-btn"><div class="nav-btn-text">联系</div></div></a>
		            <div id="nav-right-wrapper">
		                <a href="../index_zh.php" hreflang="zh" lang="zh"><div class="nav-lang"><div class="nav-btn-text">中文</div></div></a>
		                <a href="../index.php" lang="en"><div class="nav-lang"><div class="nav-btn-text">EN</div></div></a>
		                <a href="../index_zh.php"><div id="navTitle"><div class="nav-btn-text">美术馆</div></div></a>
		            </div>
		        </div>
		        <div class="nav-btn" id="sub-menu">
		            <a href="../gallery1_zh.php"><div class="submenu-btn"><div class="nav-btn-text">画集 1</div></div></a>
		            <a href="../gallery2_zh.php"><div class="submenu-btn"><div class="nav-btn-text">画集 2</div></div></a>
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
				echo "<p>请输入您的名字</p>";
			}
		
			else {	
				$name = $_POST['fullname'];
				$numvalid++;
			}

			if (!isset($_POST['email']) || empty($_POST['email'])){
				echo "<p>请输入您的邮箱</p>";
			}

			elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo "<p>请输入合法邮箱</p>";
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
				echo "<p>请输入您是否有兴趣购买画集</p>";
			}
		
			else {	
				$buyer = $_POST['buyer'];
				$numvalid++;
			}

			if (!isset($_POST['comments']) || empty($_POST['comments'])){
				echo "<p>请输入您的问题或评论</p>";
			}

			elseif (strlen($_POST['comments']) < 10) {
				echo "<p>问题和评论不能少于10个字</p>";
			}

			else {
				$comments = $_POST['comments'];
				$numvalid++;
			}

			if ($numvalid == 4) {
				$output = "<br><br><p class='required'>谢谢您的回复!</p> <br>
		<p>以下是您的回复: <br><br> 姓名: $name <br> 邮箱: $email <br> 电话: $phone <br> 
		您是否有兴趣购买画集? $buyer <br> 评论: $comments</p>\n";
				echo $output;
			}
	    }

	    else { 
    		echo "<p class='required'>您没有成功</p>\n";
		}
	?>
        </div>

        
        <!-- footer -->
        <?php include 'footer_zh.php';?>

    </body>
</html>
