<?php
# session 연결
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
		body{
			background-color: rgba(255,237,167);
		}
			*{
				margin: 0 auto;
				box-sizing: border-box;
			}
			#change_head{
				width: 100%;
				height: 50px;
				margin-top: 30px;
				font-size: 35px;
				font-weight: bold;
				text-align: center;
				border-bottom: 3px solid black;
			}
			#change_form{
				height: 450px;
				width: 100%;
				margin-top: 30px;
			}
			.change_form_div{
				width: 100%;
				height: 50px;
				margin-bottom: 10px;
			}
			.change_form_div_lef{
				width: 25%;
				height: 50px;
				float: left;
				text-align: center;
				font-size: 20px;
				font-weight: 300;
				padding-top: 10px;
				margin-left: 30px;
			}
			.change_text{
				width: 50%;
				height: 35px;
				margin-top: 5px;
				border: black 1px solid;
				padding: 4px 0px 0px 4px;
				background-color: rgba(255,255,255,0.4);
			}
			#change_send{
				width: 50px;
				height: 30px;
					border: none;
				cursor: pointer;
				float: right;
				margin-right: 65px;
				background-color: rgba(255,255,255,0.7);
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

			<div id="change_head">프로필변경</div>

			<div id="change_form">
				<form class="" action="update.php" method="post">
					<div class="change_form_div">
						<div class="change_form_div_lef">이름</div>
						<input type="text" class="change_text" name="new_name">
					</div>

					<div class="change_form_div">
						<div class="change_form_div_lef">학번</div>
							<input type="text" class="change_text" name="new_std">
					</div>

					<div class="change_form_div">
						<div class="change_form_div_lef">비밀번호</div>
							<input type="text" class="change_text" name="new_pass">
					</div>

					<div class="change_form_div" style="height:210px;">
						<div class="change_form_div_lef">가입동기</div>
             <input type="text" style="height:200px;" class="change_text" name="new_memo">
        	</div>
						<input type="submit" id="change_send" value="변경"/>
				</form>
			</div>
			<script>
			var topName = document.getElementById('top_write');

			topName.innerHTML="menu";
			</script>
	</body>
</html>
