<html>
    <head>
        <meta charset="UTF-8">
        <title>sign.php</title>
    </head>
    <body>
        <?php
        if($_POST["id"]==""){
            die("未輸入資料帳號");
        }
        if($_POST["password"]==""){
            die("未輸入資料密碼");
        }

        include("chenboyen.php");

        $id=mysqli_real_escape_string($link, $_POST["id"]);
        $password=mysqli_real_escape_string($link, $_POST["password"]);
        $sql_query="INSERT INTO `user` (`帳號`, `密碼`) VALUES ('$id','$password');";
        $result=mysqli_query($link,$sql_query) or die(mysqli_errno($link));
        
        echo "資料註冊成功";
               
        ?>

        <form action="login.html">
        <input type="submit" value="進入登入首頁">
        </form>
    </body>
</html>