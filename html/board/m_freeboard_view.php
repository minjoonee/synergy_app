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
  $num=$_GET['num'];
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');

  $table="freeboard_tb";
   //select *from freeboard_tb where num=76;
  $query= "SELECT *FROM $table where num=$num";
  $result = mysqli_query($conn, $query);
  $array=mysqli_fetch_array($result);
  //echo $array[content];

  $table="freeboard_reply_tb";
  //SELECT *from $table where board_num=$num order by reply_num;
  $r_query= "SELECT *FROM $table where board_num=$num order by reply_num";
  $r_result= mysqli_query($conn, $r_query);
  ?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
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

    <div class="view">
      <div class="ID">
        <?php echo $array[id]; ?>
      </div>
      <div class="DATE">
          <?php echo $array[date]; ?>
      </div>
      <div class="TITLE">
          <?php echo $array[title]; ?>
      </div>
      <div class="CONTENT">
          <?php echo $array[content]; ?>
      </div>
    </div>

   
    <form method="POST" 
    action="m_freeboard_reply_add.php?num=<?php echo $num; ?>">
        <div class="comment">
            <input type="text"  class="writeComment" name="comment" />
            <button class="sendComment">&#187;</button>
        </div>
    </form>
   


    <div class="REPLY">
      <?php
        while($r_array = mysqli_fetch_array($r_result)){
          ?>
      <div class="ID">
            <?php echo $r_array[id]; ?>
      </div>
      <div class="DATE">
          <?php echo $r_array[date]; ?>
      </div>
      <div class="r_CONTENT">
          <?php echo $r_array[content];?>
          <hr color="#E2E2E2">
          <?php } ?>
      </div>      
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
