<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="zh">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>洪成华美术馆</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
        <script src="./scripts/lib/jquery-1.11.3.min.js"></script>
        <script src="./scripts/nav.js"></script>

    </head>

    <body>
        <!-- navbar -->
        <?php include 'php/navbar_zh.php';?>

        <!-- content -->
        <div id="content">
        <div id='text'>
                <br><br>
                <p>请通过以下表格提供您的任何疑问或评论:</p>
                <span class='required'>* 必填项</span><br><br>
                <form action="php/form_zh.php" method="post">
                    姓名: <input type="text" name="fullname"> <span class='required'>*</span><br><br>
                    邮箱: <input type="text" name="email"> <span class='required'>*</span><br><br>
                    电话: <input type="text" name="phone"> <br><br>
                    您是否有兴趣购买画集? <span class='required'>*</span><br>
                    <input type="radio" name="buyer" value="Yes"> 是
                    <input type="radio" name="buyer" value="Maybe"> 可能
                    <input type="radio" name="buyer" value="No"> 否
                    <br><br>
                    问题或评论: <span class='required'>*</span><br><textarea name="comments" rows="8" cols="50"></textarea><br><br>
                    <input value="提交" type="submit" name="submit">
                </form>
            </div>
        </div>


        <!-- footer -->
        <?php include 'php/footer_zh.php';?>
    </body>
</html>
