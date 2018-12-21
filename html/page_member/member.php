<?php
	# session 연결

	session_start();
	if(!isset($_SESSION['id'])){
		echo "<script>
		location.href='/mobile/index.php';
			self.window.alert('로그인이 필요한 기능입니다.');
	</script>";
	}

?>

<!doctype html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">

	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css?af">
	<link rel="stylesheet" href="css/member.css?af"><!-- member style-->
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">

	<title>프레임 1</title>
	<style>

	</style>
</head>
<body>
	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("../menu.php");
	}
	else{
		echo file_get_contents("../menu_login.php");
	}
?>
	<main class="cd-main-content">
		<!-- 여기에 내용 들어감. -->

		<div class="navi">
		  <div class="navi_tab">1기</div>
		  <div class="navi_tab">2기</div>
		  <div class="navi-tab">3기</div>
			<div>4기</div>
			<div>5기</div>
			<div>6기</div>
			<div>7기</div>
			<div>8기</div>
			<div>9기</div>
			<div>10기</div>
			<div>11기</div>
			<div>12기</div>
		</div>

		<div class="swipe">
		  <div class="swipe_member">
			</br> - 1기 멤버


				<div id="cat">
				  <div id="catright">
				    <div style="clear: both;"> &nbsp;</div>
				    <div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/JooKwonNeung.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>언리얼 게임 제작(PM)
				          </div>
				        </div>
				        <div class="member_name">
				          <li>14_주권능</br>(2018회장)</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/YangJiWon.png" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>언리얼 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>14_양지원</br>(2018부회장)</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/SoEunJi.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작(PM)
				            <br>언리얼 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>15_소은지</br>(2018총무)</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/SongJunWon.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_송준원</br>(2018서기)</li>
				        </div>
				      </div>
				      <div style="clear: both;">&nbsp;</div>
				      <div style="clear: both;">&nbsp;</div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/JoMinJoon.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>시너지 어플 제작(PM)
				          </div>
				        </div>
				        <div class="member_name">
				          <li>13_조민준</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/LeeBeomWon.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>14_이범원</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/ChoiDaeWon.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>시너지 어플 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>15_최대원</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/KwonJiHwan.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            챗봇 제작(PM)
				            <br>Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_권지환</li>
				        </div>
				      </div>
				      <div style="clear: both;"> &nbsp;</div>
				      <div style="clear: both;"> &nbsp;</div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/KimEuiSong.png" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작(PM)
				            <br>시너지 어플 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_김의송</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/SeoEunBin.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_서은빈</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/SongMinJi.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            챗봇 제작
				            <br>Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_송민지</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/ShinSeungHyun.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작
				            <br>언리얼 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_신승현</li>
				        </div>
				      </div>
				      <div style="clear: both;"> &nbsp;</div>
				      <div style="clear: both;"> &nbsp;</div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/YunMinSeong.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            웹사이트 제작
				            <br>Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_윤민성</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/YunYeChan.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작(PM)
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_윤예찬</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/LeeKiHun.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            챗봇 제작
				            <br>Java 게임 제작(PM)
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_이기훈</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/HanJaePhil.png" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작
				            <br>어플 제작(PM)
				          </div>
				        </div>
				        <div class="member_name">
				          <li>17_한재필</li>
				        </div>
				      </div>
				      <div style="clear: both;"> &nbsp;</div>
				      <div style="clear: both;"> &nbsp;</div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/KwonMinJeong.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작
				            <br>Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>18_권민정</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/KimHyeWon.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>18_김혜원</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/ShinMyungSu.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            Java 게임 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>18_신명수</li>
				        </div>
				      </div>
				      <div class="imgblock">
				        <img class="img1" src="member/mem_1/JeongNaRin.jpg" alt="사진" />
				        <div class="blackbackground">
				          <div class="text">
				            챗봇 제작
				            <br>시너지 어플 제작
				          </div>
				        </div>
				        <div class="member_name">
				          <li>18_정나린</li>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
		  <div class="swipe_member">
			</br> - 2기 멤버

				<div id="cat">
					<div id="catright">
						<div style="clear: both;"> &nbsp;</div>
						<div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/SeoJongMin.png" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										언리얼 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>14_서종민</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/SoYunTae.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										언리얼 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>14_소윤태</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/SongGiChon.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										시너지 어플 제작
									</div>
								</div>
								<div class="member_name">
									<li>14_송기천</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/LeeYeongHyun.png" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										언리얼 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>14_이영현</li>
								</div>
							</div>
							<div style="clear: both;"> &nbsp;</div>
							<div style="clear: both;"> &nbsp;</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/KimSeongYeon.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										언리얼 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>16_김성연</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/YunHyunSeo.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>17_윤현서</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/JeonWonJun.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>17_전원준</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/ParkJuHyun.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_박주현</li>
								</div>
							</div>
							<div style="clear: both;"> &nbsp;</div>
							<div style="clear: both;"> &nbsp;</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/ParkJiYeon.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_박지연</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/WooJaYoung.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_우자영</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/LeeSuYoung.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_이수영</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/LeeYeIn.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										시너지 어플 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_이예인</li>
								</div>
							</div>
							<div style="clear: both;"> &nbsp;</div>
							<div style="clear: both;"> &nbsp;</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/LeeJeongIn.jpg" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										Java 게임 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_이정인</li>
								</div>
							</div>
							<div class="imgblock">
								<img class="img1" src="./member/mem_2/ChuYeonJu.png" alt="사진" />
								<div class="blackbackground">
									<div class="text">
										시너지 어플 제작
									</div>
								</div>
								<div class="member_name">
									<li>18_추연주</li>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		  <div></br>3기 멤버 - 준비중</div>
		  <div></br>4기 멤버 - 예정</div>
		  <div></br>5기 멤버 - 예정</div>
		  <div></br>6기 멤버 - 예정</div>
		  <div></br>7기 멤버 - 예정</div>
		  <div></br>8기 멤버 - 예정</div>
		  <div></br>9기 멤버 - 예정</div>
		  <div></br>10기 멤버 - 예정</div>
		  <div></br>11기 멤버 - 예정</div>
		  <div></br>12기 멤버 - 예정</div>
		</div>

	</main>


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript">
		var topName = document.getElementById('top_write');
		topName.innerHTML="MEMBER";

		$(document).ready(function(){
				$('.swipe').slick({
			   slidesToShow: 1,
			   slidesToScroll: 1,
			   arrows: false,
			   fade: true,
			   asNavFor: '.navi'
			 });

			$('.navi').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
				asNavFor: '.swipe'
			});

		});
	</script>
</body>
</html>
