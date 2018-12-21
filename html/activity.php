<?php
# session 연결
 session_start();
    if(!isset($_SESSION['id'])){
      echo "<script>
      location.href='/mobile/index.php';
        self.window.alert('로그인이 필요한 기능입니다.');
    </script>";
    }
 $user_id = $_SESSION[id];

?>

<?php
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $db=mysqli_select_db($conn , "synergy_db");

   //select *from freeboard_tb where id='$user_id';
   //select *from freeboard_reply_tb where id='$user_id';

   $freeboard_query="select *from freeboard_tb where id='$user_id' order by num desc limit 0,5";
   $freeboard_reply_query="select *from freeboard_reply_tb where id='$user_id' order by num desc limit 0,5";


   $result_freeboard = mysqli_query($conn, $freeboard_query);
   $result_freeboard_reply = mysqli_query($conn, $freeboard_reply_query);


   $qna_query="select *from qna_tb where id='$user_id' order by num desc limit 0,5";
   $qna_reply_query="select *from qna_reply_tb where id='$user_id' order by num desc limit 0,5"; 

   $result_qna = mysqli_query($conn, $qna_query);
   $result_qna_reply = mysqli_query($conn, $qna_reply_query);


?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width", initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0>
        <meta charset="utf-8">
        <link href="table_activity.css" rel="stylesheet">
        

        <style>
        #top_activity{
        text-align: center;
        border-bottom:3px solid black;
        }

        .subtitle{
        font-weight: bold;
        font-size:20px;
        }

        body{
        background-color:beige
        }
        </style>
    </head>
    <body>
</style>

	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("menu.php");
	}
    else{
        echo file_get_contents("menu_login.php");
    }
?>



    <div id="main_activity">
        <div class="subtitle"><p align="center">내가 올린 게시글</p><br></div>
        <div id="posting">
<?php

        while($freeboard_array=mysqli_fetch_array($result_freeboard)){
     	echo("
	<table class='tg'>
	<tr><th class='tg-h' colspan='2'><a href='/mobile/board/m_freeboard_view.php?num=$freeboard_array[num]'>$freeboard_array[title]</a></th></tr> <tr><td class='tg-d'>$freeboard_array[date]</td></tr>
	</table>
	");

	}
?>

        </div>
        
        <br><hr>
        <div class="subtitle"><p align="center">내가 올린 Q/A</p><br></div>
	<div id="posting">
<?php

        while($qna_array=mysqli_fetch_array($result_qna)){
     	echo("
	<table class='tg'>
	<tr><th class='tg-h' colspan='2'><a href='/mobile/qna/m_qna_view.php?num=$qna_array[num]'>$qna_array[title]</a></th></tr> <tr><td class='tg-d'>$qna_array[date]</td></tr>
	</table>
	");
	}

?>
        </div>

		<script>
			var topName = document.getElementById('top_write');
			topName.innerHTML="활동내역";
		</script>
    </body>


</html>
