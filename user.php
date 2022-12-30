<?php
session_start();
?>

<!doctype html>


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
        .hi{
            display: flex;
            justify-content: center;
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
        
        if ($_SESSION["login_stack"]=="login_ok") {
            echo "<img src=\"login.png\" height=\"100\" width=\"100\"><br>";
            echo $_SESSION["account"] . '歡迎';


           
        } else {
            echo "<img src=\"no.jpg\" height=\"100\" width=\"100\"><br>";
            echo "尚未登入";
           
        }
        ?>
        <!-- Chart.js v2.9.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<body>
<div style="height: 500px;width: 800px;">
    <canvas id="myChart" width="200" height="100"></canvas>
    <script>
    var ctx = document.getElementById("myChart");
    var chart = new Chart(ctx, {
      type: "line", // 圖表類型
      data: {
        labels: ["2001", "2002", "2003", "2004", "2005", "2006","2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"], //顯示區間名稱
        datasets: [
          {
            label: "ptt足球版文章數", // tootip 出現的名稱
            data: [2, 2704, 162, 70, 6, 3250, 1729, 873, 804, 983, 1091, 640, 321, 439, 1682, 898, 1146, 1303, 1064, 503, 436, 856], // 資料
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)", //bar 顏色
            ],
            borderColor: [
              "rgba(255,99,132,1)", // 外框線顏色
             
            ],
            borderWidth: 1 // 外框線寬度
          }
        ]
      }
    });
    </script></div>
<div class = hi>
<div  class="ok" style="height: 400px;width: 600px">
  <canvas id="myChart-1" width="200" height="100"></canvas>
  <script>
    var ctx = document.getElementById('myChart-1');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['→', '推', '噓'],
        datasets: [{
          backgroundColor: [
            'rgba(100, 162, 235, 0.5)',
            'rgba(54, 255, 235, 0.5)',
            'rgba(200, 162, 255, 0.5)',
          ],
          borderColor: 'rgba(0, 0, 0, 0)',
          borderWidth: 0,
          label: "ptt足球版 →, 推, 噓總數",
          data: [108424, 130012, 4714,],
          fill: false, // 是否填滿色彩
        }]
      },
      options: {
        legend: {
          labels: {
            fontColor: 'black' // 標籤顏色 
          }
        }
      }
    });
  </script></div>
  <div class = "ok" style="height: 400px;width: 600px">
    <canvas id="myChart-2" width="200" height="100"></canvas>
    <script>
      var ctx = document.getElementById('myChart-2');
      var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['→', '推', '噓'],
          datasets: [{
            backgroundColor: [
              'rgba(100, 162, 235, 0.5)',
              'rgba(54, 255, 235, 0.5)',
              'rgba(200, 162, 255, 0.5)',
            ],
            borderColor: 'rgba(0, 0, 0, 0)',
            borderWidth: 0,
            label: "ptt足球版 →, 推, 噓總數",
            data: [0.3765, 0.605549, 0.017918,],
            fill: false, // 是否填滿色彩
          }]
        },
        options: {
          legend: {
            labels: {
              fontColor: 'black' // 標籤顏色 
            }
          }
        }
      });
    </script></div>
    </div>
</body>
    </center>
</body>

</html>