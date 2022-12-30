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
            <div class="b"><b><a href="home.php"><span style="color:black;">首頁</span></a></b></div>
            <div class="b"><b><a href="upload.php"><span style="color:black;">上傳照片</span></a></b></div>
            <div class="b"><b><a href="allphoto.php"><span style="color:black;">探索照片</span></a></b></div>
            <div class="b"><b><a href="activity.php"><span style="color:black;">抽獎活動</span></a></b></div>
            <div class="b"><b><a href="about.php"><span style="color:black;">關於我們</span></a></b></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="b"><img src="user.png" height="10" width="10">&nbsp;<a href="login.php"><span
                        style="color:black;">登入</span></a></div>
            <div class="b"><img src="logout.png" height="10" width="10">&nbsp;<a href="logout.php"><span
                        style="color:black;">登出</span></a></div>
            <div class="b"><img src="question.png" height="10" width="10">&nbsp;<a href="report.php"><span
                        style="color:black;">問題回報</span></a></div>
            <div class="b"><img src="user.png" height="10" width="10">&nbsp;<a href="user.php"><span
                        style="color:black;">用戶中心</span></a></div>
        </div>
        <p></p>
        <table>
            <tr>
                <td>
                    <div>
                        活動規則<br>
                        1、活動時間為2022/12/20~2023/1/20<br>
                        2、活動期間,上傳旅遊照片,即可參加抽獎<br>
                        3、照片檔案限5MB以下,格式限jpg<br>
                        4、若有人檢舉照片非當事人拍攝，經確認後取消抽獎資格<br>
                        5、若上傳照片有重複,以第一上傳者為主<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;沿用規則4:發生時由第二上傳者或檢舉人遞補<br>
                        6、中獎者照片經工作人員審核,若無法辨認為旅遊照,將重新抽獎<br>
                        7、獎品寄送範圍限台灣本島<br>
                        8、主辦單位保有隨時修改及終止本活動之權利
                    </div>
                </td>
                <td>

                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td><img src="mc.png" height="200" width="220"><br><b>甜心卡</b></td>
                <td><img src="seven.png" height="200" width="220"><br><b>7-11禮品卡</b></td>
                <td><img src="giftcard.png" height="200" width="220"><br><b>星巴克禮品卡</b></td>
        </table>

    </center>
</body>

</html>