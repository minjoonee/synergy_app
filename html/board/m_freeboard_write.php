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
  <body>
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
  topName.innerHTML="자유게시판";
    </script>

        <div class="write_box">
            <form class="write_form" action="m_freeboard_write_add.php" method="post">
              <input class="write_title" type="text" name="title" placeholder="제목을 입력하세요.">
              <textarea class="write_content" name="content" placeholder="내용을 입력하세요."></textarea>
              <input class="write_submit" value="글쓰기" type="submit">
            </form>
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
