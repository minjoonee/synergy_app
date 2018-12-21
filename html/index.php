<?php
# session 연결
 session_start();
?>
<!DOCTYPE>
<html>
	<head>
		<meta name="viewport" content="width=device-width", initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0>
		<meta charset="utf-8">
		<style>
			*{
				margin: 0 auto;
				box-sizing: border-box;
			}
			body{
				background-image:url(img/back.png);
				background-size: 100% 100%;
			}
			#back{
				width: 100%;
				height: 92%;
			}
    a{
      color: black;
    }
			.menu_back{
				width: 100%;
				height: 33.33%;
			}
			.menu_div{
				width: 45%;
				height: 93%;
				background-color: rgba(255,255,255,0.3);
				border-radius: 28%;
				float: left;
				margin-left: 3%;
				margin-top: 5px;
				text-align: center;
				font-size: 20px;
				font-weight: bold;
				transition-duration: 0.5s;
				box-shadow: 0 3px 15px rgba(0, 0, 0, 0.5);
			}
			#menu_back1{margin-top: 10px;}
			.menu_div:hover{
				transform:scale(1.2);
			}
			.menu_img{
				width: 60%;
				height: 50%;
				margin-top: 10px;
				background-color: red;
				border-radius: 50%;
				margin-top: 30px;
				margin-bottom: 15px;
			}
			.menu_img>img{
				height: 100%;
				width: 100%;
			}
			#menu1{background-color: rgb(174,221,227)}
			#menu2{background-color: rgb(252,231,230)}
			#menu3{background-color: rgb(252,237,208)}
			#menu4{background-color: rgb(217,238,231)}
			#menu5{background-color: rgb(106,199,178)}
			#menu6{background-color: rgb(233,218,235)}

		</style>
	</head>

	<body>
	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("menu.php");
	}
	else{
		echo file_get_contents("menu_login.php");
	}
?>

		<div id="back">
			<div class="menu_back" id="menu_back1">

        <a href="http://www.itsynergy.co.kr/mobile/m_notice.php">
      	<div class="menu_div" >
					<div class="menu_img" id="menu1">
						<img src="img/gongzi.png">
					</div>
					공지사항
				</div>
      </a>

      <a href="http://www.itsynergy.co.kr/mobile/m_project.php">
				<div class="menu_div">
					<div class="menu_img" id="menu2">
						<img src="img/project.png">
					</div>
					프로젝트
				</div>
      </a>

      <a href="/mobile/page_member/member.php">
			</div>
			<div class="menu_back">
				<div class="menu_div" >
					<div class="menu_img" id="menu3">
						<img src="img/people.png">
					</div>
					멤버소개
				</div>
      </a>

      <a href="/mobile/qna/m_qna.php">
				<div class="menu_div" >
					<div class="menu_img" id="menu4">
						<img src="img/qa.png">
					</div>
					QnA
				</div>
			</div>
    </a>

    <a href="http://www.itsynergy.co.kr/mobile/board/m_freeboard.php">
			<div class="menu_back">
				<div class="menu_div" >
					<div class="menu_img" id="menu5">
						<img src="img/gaesipan.png">
					</div>
					자유게시판
				</div>
      </a>

      <a href="/mobile/page_member/bookdes.php">
				<div class="menu_div" >
					<div class="menu_img" id="menu6">
						<img src="img/buddy.png">
					</div>
					방명록
				</div>
			</div>
    </a>
		</div>
    <script>
    var topName = document.getElementById('top_write');
  topName.innerHTML="HOME";
		var topback = document.getElementById('top');
		topback.style.backgroundColor ="rgba(255,255,255,0.5)";
    </script>

	</body>
</html>
