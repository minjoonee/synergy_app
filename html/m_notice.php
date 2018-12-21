<?php
session_start();
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $db=mysqli_select_db($conn , "synergy_db");

  $tablename = "notice_tb";
  $query = "select *from $tablename";
  $result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="/mobile/board/test.css">
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    <title></title>
    <style media="screen">
      body {
        font-family: 'Gamja Flower', cursive;
      }
    </style>
  </head>
  <body class ="m_notice_main">
      	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("menu.php");
	}
	else{
		echo file_get_contents("menu_login.php");
	}

	?>

    <div class="notice_in">
        <?php
        while ($array = mysqli_fetch_array($result)) {
	echo ("
	<div class='notice_book'>
	<table>
		 <tr><th>
		<a href='https://it.jbnu.ac.kr/itjbnu/2016/$array[href]' target='_blank'>$array[notice]</a></th></tr>
	</table>
	</div>
	");
        }
          ?>

    </div>



    <script>
      var menu_btn = document.getElementsByClassName('btn_view');
    var menuu = document.getElementById('menu');
    var i=0 ;

      function menu_view(){
      if(i==0){
        menuu.style.left="0px";
        menu_btn[0].style.transform="rotate(37.5deg)"
        menu_btn[0].style.transformOrigin="0% 100%";
        menu_btn[2].style.transform="rotate(-37.5deg)";
        menu_btn[2].style.transformOrigin="0% 0%";
        menu_btn[1].style.opacity="0";
        i=1;
      }
      else{
        menuu.style.left="-70%";
        menu_btn[0].style.transform="rotate(0deg)"
        menu_btn[2].style.transform="rotate(0deg)";
        menu_btn[1].style.opacity="1";
        i=0;
      }
    }
    </script>

	<script>
    var topName = document.getElementById('top_write');
  topName.innerHTML="공지사항";
    </script>

  </body>
</html>
