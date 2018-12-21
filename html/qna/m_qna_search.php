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


<?php
//session_start();
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $db=mysqli_select_db($conn , "synergy_db");

  $table="qna_tb";
   $data = $_POST['search_content'];
   //select *from qna_tb where title like "%content%" or content like "%content%";
   $query="select *from qna_tb where title like '%$data%' or content like '%$data%' order by num desc;";
   $result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    <title></title>
    <style media="screen">
      body {
        font-family: 'Gamja Flower', cursive;
      }
    </style>
  </head>
  <body class="m_qna_main">
 	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("../menu.php");
	}
	else{
		echo file_get_contents("../menu_login.php");
	}

	?>

	<script>
    var topName = document.getElementById('top_write');
  topName.innerHTML="질문게시판";
    </script>


<ul class="search">
  <li class="search_icon_li"><form class="search_icon" action="m_qna_search.php" method="post">
    <input type="text" name="search_content" class="search_content" placeholder="  제목 + 내용 검색"></li>
    <li><input type="image" src="/mobile/img/Search.png">
    </li>
  </form>
    <li><a href="m_qna_write.html"><img src="/mobile/img/Write.png" alt="Write" href="m_qna_write.html"/></a></li>
</ul>

    <div class="in">
        <?php
        while($array=mysqli_fetch_array($result)){
     	echo("<div class='qna_book'>
	<table>
	<tr><th colspan='2'><a href='m_qna_view.php?num=$array[num]'>$array[title]</a></th></tr> <tr><td>$array[date]</td><td>$array[id]</td></tr>   	</table>
	</div>
	");
	}
 ?>
    </div>

    <div class="footer">
      <button type="button" name="button" onclick="add_table()" class="btn">더보기</button>
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


  </body>
</html>
