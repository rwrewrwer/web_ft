<!doctype html>
<html>
<?php
session_start();

?>
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
                    echo"檔案名稱:".$_FILES["upload_file"]["name"]."<br>";
                    echo"檔案大小:".$_FILES["upload_file"]["size"]."<br>";
                    echo"檔案格式:".$_FILES["upload_file"]["type"]."<br>";
                    echo"檔案名稱:".$_FILES["upload_file"]["tmp_name"]."<br>";
                    echo"錯誤代碼:".$_FILES["upload_file"]["error"]."<br>";
				if($_FILES["upload_file"]["type"]=="image/jpeg"){
					echo "上傳格式符合規定(jpg)<br>";
				}
				else{
					echo "<font color=\"red\">";
                    echo "<img src=\"no.jpg\" height=\"200\" width=\"200\"><br>";
					die("格式只限jpg<br>");
				}
				if((int)$_FILES["upload_file"]["size"]<5000000){
                    echo "<img src=\"yes.jpg\" height=\"200\" width=\"200\"><br>";
					echo"上傳檔案大小符合規定(5MB以下)<br>";
				}
				else{
					echo "<font color=\"red\">";
                    echo "<img src=\"no.jpg\" height=\"200\" width=\"200\"><br>";
					die("大小必須小於5MB");
				}
				echo $_SERVER["PHP_SELF"]."<br>";
				echo $_SERVER["SCRIPT_FILENAME"]."<br>";
				echo __FILE__."<br>";
				echo dirname(__FILE__)."<br>";
				echo basename(__FILE__)."<br>";
				if(is_dir("pictures")){
					if(is_uploaded_file($_FILES['upload_file']['tmp_name'])){ //如果上傳之檔案存在
						$dest_upload_file="C:/AppServ/www/pictures/".$_FILES['upload_file']['name'];
						move_uploaded_file($_FILES['upload_file']['tmp_name'],$dest_upload_file); //現存之檔名->目的路徑./原來檔名
					}
				}
				?>
    </center>
</body>

</html>