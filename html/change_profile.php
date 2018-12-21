<?php
# session 연결
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://fonts.google.com/specimen/Noto+Serif+KR" rel="stylesheet">
		<style>
		body{
			
			background-color: #d0e8e8;
			font-family: sans-serif;
		}
			*{
				margin: 0 auto;
				box-sizing: border-box;
			}
			#change_head{
				width: 100%;
				height: 50px;
				margin-top: 30px;
				font-size: 26px;
				text-align: center;
				font-weight: bold;
				color:#635b3e;
			}
			#change_form{
				height: 450px;
				width: 100%;
				margin-top: 50px;
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
				font-weight: 500;
                                color:#635b3e;
				padding-top: 10px;
				margin-left: 30px;
			}
			.change_text{
				width: 50%;
				height: 35px;
				margin-top: 5px;
				padding: 4px 0px 0px 4px;
				background-color: rgba(255,255,255,0.4);
                                border-radius: 5px;
				border: #dbd8cb;
                                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
			}
			#change_send{
				width: 50px;
				height: 30px;
					border: none;
				cursor: pointer;
				float: right;
				margin-right: 65px;
				background-color: #e0d4a8;
				border-radius: 5px;
				box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
			}
			#change_send:hover {opacity: 0.8}

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

			

			<div id="change_form">
				<form  action="update.php" method="post" onsubmit="return change_sub()" name="change">
					<div class="change_form_div">
						<div class="change_form_div_lef">이름</div>
						<input type="text" class="change_text" name="new_name" placeholder="변경할 이름을 입력하세요">
					</div>

					<div class="change_form_div">
						<div class="change_form_div_lef">학번</div>
							<input type="text" class="change_text" name="new_std" placeholder="변경할 학번을 입력하세요">
					</div>

					<div class="change_form_div">
						<div class="change_form_div_lef">비밀번호</div>
							<input type="password" class="change_text" name="new_pass" placeholder="*******">
					</div>

					<div class="change_form_div" style="height:210px;">
						<div class="change_form_div_lef">가입동기</div>
             <input type="text" style="height:200px;" class="change_text" name="new_memo"placeholder="변경할 동기를 입력하세요">
        	</div>
						<input type="submit" id="change_send" value="변경"/>
				</form>
			</div>

			<script>
      var text = document.getElementsByClassName('change_text');

      function change_sub() {
        if(!text[0].value){
          window.alert("변경할 이름을 입력하세요 ");
          text[0].focus();
          return false;
        }
        else if(!text[1].value){
          window.alert("변경할 학번을 입력하세요 ");
          text[1].focus();
          return false;
        }
        else if(!text[2].value){
          window.alert("변경할 비밀번호를 입력하세요 ");
          text[2].focus();
          return false;
        }
        else if(!text[3].value){
          window.alert("변경할 가입동기를 입력하세요 ");
          text[3].focus();
          return false;
        }
        else
          return true;
      }

			var topName = document.getElementById('top_write');
			topName.innerHTML="프로필변경";
			</script>
	</body>
</html>
