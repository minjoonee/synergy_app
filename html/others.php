<?php
# session 연결
 session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
		<title></title>
		<style>
		  body{
        background-image: url("img/space.jpg");
        background-size: 100% 745px;
      }
			*{
				margin: 0 auto;
				box-sizing: border-box;
			}
      strong{color: red;}
      .other_parent{perspective: 500px;}
      #other_main{
        width: 80%;
        height: 300px;
        color: white;
        transition-duration: 1s;
        margin-top: 100px;
        /* transform: rotateX(40deg); */
        text-align: center;
        font-size: 40px;
        overflow: hidden;
      }
      #other_main_in{
        margin-top: 30px;
        animation-name: floww;
        animation-duration: 25s;
        animation-timing-function:linear;
        animation-delay: 0.5s;
        animation-iteration-count: infinite;
				font-family: 'Noto Sans KR', sans-serif;
				font-weight: 300;
      }
      @keyframes floww {
        0%{margin-top: 30px;}
        100%{margin-top: -1400px;}
      }
      #aaaa{
        width: 400px;
        background-color: red;
        height: 50px;
        float: left;
      }
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
      <div class="other_parent">
        <div id="other_main">
          <div id="other_main_in">
            <h1>Making Film</h1><br>
            @조민준-pm : 독재자독재자독재자<strong>독재자</strong>독재자독재자독재자독재자독재자독재자독재자독재<br>
            @송기전 : 빠른95?<br>
            @최대원 : 존멋96<br>
            @김의송<br>
            @이예인<br>
            @정나린<br>
						pm에 독재에도 꿋꿋이 <br>프로젝트에 참여하신 <br>어플 4팀 진심으로 <br>고생하셧습니다.<br>항상 응원합니다.
          </div>

        </div>

        </div>
				<audio src="img/star.mp3" autoplay>
				</audio>
      </div>

			<script>
			var topName = document.getElementById('top_write');
      var making = document.getElementById('other_main');

      setTimeout(rotatefunc,500);

      function rotatefunc() {
        making.style.transform="rotateX(40deg)";
      }

			topName.innerHTML="menu";
			</script>
	</body>
</html>
