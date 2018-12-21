<?php
# session 연결
 session_start();
?>

<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="m_project.css">
	<title>Synergy_project</title>
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
			<div id="pro_menu">
				<div class="pro_menu_btn" id="pro_menu_btn1" onclick="pro_past(0)">
					<div style="font-weight: bold">1기</div>

				</div>
				<div class="pro_menu_btn" id="pro_menu_btn2" onclick="pro_now(1)">
					<div style="font-weight: bold">2기</div>

				</div>
				<div id="pro_menu_bar">
					<div id="pro_menu_bar_in"></div>
				</div>
			</div>

			<div id="past_pro_back" draggable="true" ondragstart="dragg(0)">
				<div class="pro">
					<div class="pro_img">
						<img src="img/pro0.png">
					</div>
					<div class="pro_write">
						시너지 홈페이지 개발
						<div class="pro_write_btn"  onclick="modal_open(0)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img">
						<img src="img/pro1.png">
					</div>
					<div class="pro_write">
						JAVA를 이용한 RPG게임 개발
						<div class="pro_write_btn"  onclick="modal_open(1)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img">
						<img src="img/pro2.png">
					</div>
					<div class="pro_write">
						JAVA를 이용한 리듬게임 개발
						<div class="pro_write_btn"  onclick="modal_open(2)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img" id="pro_img_chat">
						<img src="img/pro3.png">
					</div>
					<div class="pro_write">
						챗봇
						<div class="pro_write_btn"  onclick="modal_open(3)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>
			</div>

			<div id="now_pro_back" draggable="true" ondragstart="dragg(1)">
				<div class="pro">
					<div class="pro_img">
						<img src="img/#.png" alt="언리얼 사진">
					</div>
					<div class="pro_write">
						언리얼을 이용한 게임 개발
						<div class="pro_write_btn" onclick="modal_open(4)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img">
						<img src="img/#.png" alt="시너지 어플사진">
					</div>
					<div class="pro_write">
						시너지 어플 개발
						<div class="pro_write_btn"  onclick="modal_open(5)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img">
						<img src="img/#.png" alt="날씨 어플 사진">
					</div>
					<div class="pro_write">
						날씨알림 개발
						<div class="pro_write_btn"   onclick="modal_open(6)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img">
						<img src="img/#.jpg" alt="스노우크래프트 사진">
					</div>
					<div class="pro_write">
						JAVA를 이용한 전략게임 개발
						<div class="pro_write_btn"   onclick="modal_open(7)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>

				<div class="pro">
					<div class="pro_img">
						<img src="img/#.jpg" alt="종합게임 사진">
					</div>
					<div class="pro_write">
						JAVA를 이용한 종합게임 개발
						<div class="pro_write_btn"  onclick="modal_open(8)">
							더보기<strong>+</strong>
						</div>
					</div>
				</div>
			</div>

			<div id="modal_box">
				<div id="modal_content">
					<div id="modal_close_back">
						<div id="modal_close" onclick="modal_close()">&times;</div>
					</div>
					<div id="modal_img_box">
						<img src="#" alt="프로젝트 사진" id="modal_img">
					</div>
					<div id="modal_write">
						각 프로젝트 설명
					</div>
				</div>
			</div>

		</body>
	<script>

		var i=0 , promenubar;
		var pro_past_back = document.getElementById('past_pro_back');
		var pro_now_back = document.getElementById('now_pro_back');
		var pro_btn = document.getElementsByClassName('pro_menu_btn');
		var pro_btn_bar = document.getElementById('pro_menu_bar_in');
		var modal = document.getElementById('modal_box');
		var modalimg = document.getElementById('modal_img');
//		모달박스 함수
		function modal_close(){
			modal.style.display="none";
		}

		function modal_open(x){
			modal.style.display="block";
			modalimg.src="img/pro"+x+".png";
			if(x==3){
				modalimg.style.width="60%";
				modalimg.style.marginLeft="20%";
			}
			else{
				modalimg.style.width="100%";
				modalimg.style.marginLeft="0%";
			}
		}

//		프로젝트 메뉴 함수
		function pro_past(x){
			promenubar = (23*x);
			pro_past_back.style.display="block";
			pro_now_back.style.display="none";
			pro_btn[0].style.opacity="1";
			pro_btn[1].style.opacity="0.3";
			pro_btn_bar.style.marginLeft=promenubar+"%";
		}
		function pro_now(x){
			promenubar = (23*x);
			pro_past_back.style.display="none";
			pro_now_back.style.display="block";
			pro_btn[0].style.opacity="0.3";
			pro_btn[1].style.opacity="1";
			pro_btn_bar.style.marginLeft=promenubar+"%";
		}

		function dragg(x) {
			if(x===0){
				promenubar = (23*x);
				pro_past_back.style.display="none";
				pro_now_back.style.display="block";
				pro_btn[0].style.opacity="0.3";
				pro_btn[1].style.opacity="1";
				pro_btn_bar.style.marginLeft="23%";
			}
			if(x===1){
				pro_past_back.style.display="block";
				pro_now_back.style.display="none";
				pro_btn[0].style.opacity="1";
				pro_btn[1].style.opacity="0.3";
				pro_btn_bar.style.marginLeft="0%";
			}
		}

		var topName = document.getElementById('top_write');

    topName.innerHTML="Project";

	</script>
</html>
