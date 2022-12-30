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
        .name{
            padding-left: 30px;
        }
        .cjcu{
            font-size: 20px;
            font-family:DFKai-sb;
            color: #FFBD45;
        }
        .hi{
            font-size: 20px;
            padding-bottom: 10px;
            font-family:DFKai-sb;
            text-align: center;
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
        <img src="school.png" height="200" width="200">
        <table>
            <tr>
                <td>
                <p>&nbsp; </p><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.1842724994317!2d120.27119621475319!3d22.906573126402066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e736b14c964cd%3A0x9b1a2dbb4192bc23!2z6ZW35qau5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1672375598207!5m2!1szh-TW!2stw"
                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </td>
                <td>
                    <div class = "name">
                    <div class = "cjcu">
                        <b>長榮大學&nbsp;&nbsp;資工系&nbsp;3A</b>
                        </div>
                        <br>
                        <br>
                        <div class = "hi">
                        杜哲宇<br>
                        </div>
                        <div class = "hi">
                        蘇金宏<br>
                        </div>
                        <div class = "hi">
                        吳仲閔<br>
                        </div>
                        <div class = "hi">
                        曾英智<br>
                        </div>
                    </div>  

                        
                        
                </td>
                <td style="width: 120px;"></td>
            </tr>

        </table>
    </center>
</body>

</html>