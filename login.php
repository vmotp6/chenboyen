<html>
<head>
    <meta charset="UTF-8">
    <title>登入</title>
</head>
<body>
    <?php
    include("chenboyen.php");

    $帳 = mysqli_real_escape_string($link, $_POST["cid2"]);
    $密 = mysqli_real_escape_string($link, $_POST["pwd2"]);
    $sql指令="SELECT * FROM `user` WHERE `帳號` = '$帳' AND `密碼` = '$密'";
    $結果 = mysqli_query($link, $sql指令) or die(mysqli_errno($link));
    if(mysqli_num_rows($結果)>0){

        $row = mysqli_fetch_assoc($結果);
        $_SESSION["id"] = $row["帳號"];
        $_SESSION["cn"] = $row["密碼"];
       
        echo "登入成功<br>";
        echo "登入帳號為： " . $row["帳號"];
    } else {
        echo "<span style='color:red'>登入失敗</span>";
    }

    ?>
</body>
</html>