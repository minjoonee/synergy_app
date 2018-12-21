<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
    *{
      margin : 0 auto;
      box-sizing: border-box;
    }
    body{
      background-color: rgba(255,237,167);
    }
    .id_search{
      width: 80%;
      height:500px;
      background:rgba(0,0,0,0.5);
      margin-top: 50px;
      padding-top: 30px;
    }
    #search_head{
      font-weight: bold;
      color: #fff;
      font-size: 20px;
      width: 100%;
      height: 30px;
      text-align: center;
    }
    #search_content{
      width: 100%;
      height: 50px;
      margin-top: 30px;
    }
    #search_content input[type="number"]{
      border: none;
      border-bottom:1px solid #fff;
      background: transparent;
      outline: none;
      height:40px;
      color:#fff;
      font-size:16px;
      margin-left: 15%;
      width: 50%;
    }
    #search_content input[type="submit"]{
      border: none;
      background: gray;
      height:40px;
      color:#fff;
      font-size:16px;
      margin-left: 3%;
      width: 15%;
    }
    #show_id{
      width: 100%;
      height: 100px;
      font-size: 30px;
      text-align: center;
      padding-top: 20px;
    }
    ::placeholder
    {
        color: rgba(255, 255, 255, 0.5);
    }
    </style>
  </head>
  <body>
    <?php
      echo file_get_contents("menu.php");
      ?>
    <form class="id_search" action="idsearch.php" method="post" name="idsearchfr" onsubmit="return chk_frm()">
      <div id="search_head">학번을 입력하세요</div>
      <div id="search_content">
        <input type="number" name="name" placeholder="밑에 아이디가 나옴니다">
        <input type="submit" value="확인" onclick="search_id_fc()">
      </div>
      <div id="show_id">ID</div>
    </form>


    <?php
    $connect = mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
    mysqli_select_db($connect,"synergy_db");
    mysqli_set_charset($connect, "utf8");
    $ex1 = $_POST[name];
    $search = "select id from info_tb where student_id='$ex1'";
    $result = mysqli_query($connect , $search);
    $row = mysqli_fetch_row($result);
     ?>

     <script>

     function chk_frm() {
       if(!document.idsearchfr.name.value){
         window.alert("학번을 입력하세요 ");
         document.idsearchfr.name.focus();
         return false;
       }
       return true;
     }

     search_id_fc();
     function search_id_fc() {
       var id_final = "<?php echo $row[0];?>";
       var show_box = document.getElementById('show_id');
       show_box.innerHTML=id_final;
     }

     var topName = document.getElementById('top_write');
     topName.innerHTML="아이디찾기";
     </script>
  </body>
</html>
