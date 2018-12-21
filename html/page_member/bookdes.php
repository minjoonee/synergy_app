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

	<link rel="stylesheet" href="css/bookdes.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">

	<title>프레임 1</title>
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
			var num = 0;

			$(document).ready(function(){
				getCommentList();
			});
			function getCommentList(){
				$.ajax({
					url: "ajax_guestbook.php",
					type: "POST",
					cache: false,
					data: {
						"page_num" : num
					},
					success: function(data){
						$('.book').append(data);
					}
				});
			}
			function getCommentList2(){
				$.ajax({
					url: "ajax_guestbook0.php",
					type: "POST",
					cache: false,
					data: {
						"page_num" : num
					},
					success: function(data){
						$('.book').prepend(data);
					}
				});
			}
			function fn_comment(){
					var dat = $("#guestForm").serialize();
			    $.ajax({
		        type:'POST',
		        url : "ajax_ok.php",
		        data: dat,
		        success : function(data){
		            if(data=="success")
		            {
									alert('success');
									$('.content').val('');
									getCommentList2();
		            }
		        },
		        error:function(request,status,error){
		    		}
			    });
			}


			function add_table(){
				num = num+10;
				$.ajax({
					url: "ajax_guestbook.php",
					type: "POST",
					cache: false,
					data: {
						"page_num" : num
					},
					success: function(data){
						$('.book').append(data);
					}
				})
			}
	</script>
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

			<div class="guestcheck">
			  <form name="guestForm" id="guestForm">
			    <textarea style="resize:none;" name="content" class="content" placeholder="방명록을 작성해주세요" autofocus required></textarea>
					<input type="button" value="작성하기" class="bookButton" onClick="fn_comment();">
			  </form>
			</div>
			<div class="book">
			</div>
					<input type="button" value="더 보기" class="bookButton" onclick="add_table();">
	</main>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>

			var topName = document.getElementById('top_write');
			topName.innerHTML="Guest Book";
	</script>
</body>
</html>
