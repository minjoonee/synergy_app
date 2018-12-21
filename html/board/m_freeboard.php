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
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    		<script>
    		var num = 0;
    		$.ajax({
    			url: "ajax_freeboard.php",
    			type: "POST",
    			cache: false,
    			data: {
    				"page_num" : num
    			},
    			success: function(data){
    				$('.in').append(data);
    			}
    		});
        function add_table(){
          num = num+5;
          $.ajax({
      			url: "ajax_freeboard.php",
      			type: "POST",
      			cache: false,
      			data: {
      				"page_num" : num
      			},
      			success: function(data){
      				$('.in').append(data);
      			}
      		})
        }
    		</script>
  </head>
  <body class = "m_freeboard_main">
   	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("../menu.php");
	}
	else{
		echo file_get_contents("../menu_login.php");
	}

	?>

<ul class="search">
  <li class="search_icon_li"><form class="search_icon" action="m_freeboard_search.php" method="post">
    <input type="text" name="search_content" class="search_content" placeholder="  제목 + 내용 검색"></li>
    <li><input type="image" src="/mobile/img/Search.png">
    </li>
  </form>
    <li><a href="m_freeboard_write.php"><img src="/mobile/img/Write.png" alt="Write" href="m_freeboard_write.html"/></a></li>
</ul>


	<div class="in">
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
	<script>
    var topName = document.getElementById('top_write');
  topName.innerHTML="자유게시판";
    </script>


  </body>
</html>
