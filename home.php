<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>旅遊輕鬆享</title>
<style>

	.a{
		margin-top: 20px;
		padding-bottom: 20px;
		display: flex;
		justify-content: center;
		align-items: center;
		box-shadow: 0px 4px 5px 0px rgba(191,122,122,0.71);
	}
	.b{
        font-weight: 400;
            background: transparent;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-content: center;
            padding: 5px;
            padding-right: 10px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
	}
	
	.earth{
		padding-left: 300px;
		padding-right: 40px;
	}
	.d{
		display: flex;
		justify-content: center;
		align-items: center;
        
	}
	.e{
		font-family: DFKai-sb;
		font-size: 25px;
		padding-bottom: 15px;
		color: white;
		text-align: left;
	}
	.button{
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 16px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		transition-duration: 0.4s;
		cursor: pointer;
		border-radius: 20px;
		text-align: center;
		position:absolute;
		left: 400px;
	}
	.button:hover {
		background-color: green;
  		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}
	.f{
		display: flex;
		justify-content: center;
		padding-right: 40px;
	}
	.g{
		font-weight: 400;
		background: transparent;
		text-decoration: none;
    	color: inherit;
		display: flex;
		align-content: center;
		padding: 15px;
		padding-right: 60px;
		font-size: 20px;
		text-align: center;
	}
</style>
</head>
<body>
	<center>
		<div class = "a">
			<div class = "earth">
				<img src = "earth.png" alt = "The World" height = "50" width = "50"/>
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
		<br>
		<div class = "d">
			<table class = "e" style="background-image:url(photo.jpg); width:1000px; height:600px;" >
            <tr>
				<td>
					
				 	<div class = "e">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;簡單好用的照片上傳功能</div>
                    <div class = "e">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一起來分享生活</div>
                    <div class = "e">&nbsp;&nbsp;描繪你的精采故事</div>
					
					<div>
						<button class="button"><a  href="upload.php" style="text-decoration: none;"><span style = "color:black">開始上傳</span></button>
					</div>
				</td>
			</tr>
        	</table>
		</div>
		<br><br>
		<div class = "f">
			<div class = "g" ><b>上傳抽好禮</b></div>
			<div class = "g"><b>分享快樂</b></div>
			<div class = "g"><b>參加抽獎</b></div>
			<div class = "g"><b>了解活動</b></div>
			
		</div>
	</center>
</body>
</html>
