<?php
session_start();

?>
<?php
require("data.php");
$account = $_POST["account"];
$password = $_POST["password"];
for ($i = 0; $i < 4; $i++) {
    if ($account == $account_correct[$i] && $password == $password_correct[$i]) {
        $check = "ok";
    }

}
if ($check == "ok") {
    $_SESSION["login_stack"] = "login_ok";
    $_SESSION["account"] = $account;
}

?>
<!doctype html>
<?php
function page_redirect($page)
{
    echo "<HTML>\n";
    echo "<HEAD>\n";
    echo "<META HTTP-EQUIV=REFRESH CONTENT=5;URL=\"$page\">\n";
    echo "<TITLE>Redirection...</TITLE>\n";
    echo "</HEAD>\n";
    echo "<BODY>\n</BODY>\n</HTML>";
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>旅遊輕鬆享</title>
    <style>
        .a {
            margin-top: 20px;
            padding-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 4px 5px 0px rgba(191, 122, 122, 0.71);
        }

        .b {
            font-weight: 400;
            background: transparent;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-content: center;
            padding: 5px;
            padding-right: 10px;
            font-size: 20px;
            text-align: center
        }

        .earth {
            padding-left: 300px;
            padding-right: 40px;
        }
    </style>
</head>

<body>
    <center>
        <div class="a">
            <div class="earth">
                <img src="earth.png" alt="The World" height="50" width="50" />
            </div>
            <div class="b"><b><a  href="home.php"><span style="color:black;">首頁</span></a></b></div>
            <div class="b"><b><a  href="upload.php"><span style="color:black;">上傳照片</span></a></b></div>
            <div class="b"><b><a  href="allphoto.php"><span style="color:black;">探索照片</span></a></b></div>
            <div class="b"><b><a  href="activity.php"><span style="color:black;">抽獎活動</span></a></b></div>
            <div class="b"><b><a  href="about.php"><span style="color:black;">關於我們</span></a></b></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <div class="b"><img src="user.png" height="10" width="10">&nbsp;<a  href="login.php"><span style="color:black;">登入</span></a></div>
            <div class="b"><img src="logout.png" height="10" width="10">&nbsp;<a  href="logout.php"><span style="color:black;">登出</span></a></div>
            <div class="b"><img src="question.png" height="10" width="10">&nbsp;<a  href="report.php"><span style="color:black;">問題回報</span></a></div>
            <div class="b"><img src="user.png" height="10" width="10">&nbsp;<a  href="user.php"><span style="color:black;">用戶中心</span></a></div>
        </div>
        <p></p>

       
        <?php
        if ($check == "ok") {
            echo "<img src=\"yes.jpg\" height=\"200\" width=\"200\"><br>";
            echo $_SESSION["account"] . '歡迎';


           
        } else {
            echo "<img src=\"no.jpg\" height=\"200\" width=\"200\"><br>";
            echo "<font color=\"red\">未登入成功";
            page_redirect("login.php");
            echo "<font color=\"red\">五秒後自動跳轉</font>";
        }
        ?>
    </center>
</body>

</html>