<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        background-color: rgba(255,237,167);
      }
      *{
        margin : 0 auto;
        box-sizing: border-box;
      }
      #pass_write_back{
        width: 80%;
        height: 300px;
        background:rgba(0,0,0,0.5);
        margin-top: 50px;
        padding-top: 30px;
      }
      #pass_write_back > p{
        font-size: 20px;
        font-weight: bold;
        color: white;
        text-align: center;
      }
      #pass_write{
        width: 80%;
        height: 50px;
        background-color: red;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        margin-top: 20px;
        border: 2px white solid;
        background-color: rgba(255,255,255,0.6);
        padding-top : 10px;
      }
    </style>
  </head>
  <body>
    <?php
      echo file_get_contents("menu.php");
      ?>
    <div id="pass_write_back">
      <p>비밀번호 !!!</p>
      <div id="pass_write">
        ERROR
      </div>
    </div>


    <?php

      $connect = mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
      $id = $_POST['user_id'];
      $num = $_POST['user_number'];

      mysqli_select_db($connect , "synergy_db");
      $query = "select *from info_tb where id = '$id'";
      $result = mysqli_query($connect, $query);

      $array = mysqli_fetch_array($result);



      if($array[id]==$id){
        if($array[student_id] == $num){
          $final_write = $array[pass];
        }
        else{
           // $final_write ="아이디랑 학번이 다름니다.";
           $final_write ="a";
        }
      }
      else if($array[id]!=$id){
        // $final_write ="아이디가 없습니다.";
        $final_write ="b";
      }
    ?>
    <script>
      var write = document.getElementById('pass_write');
      var password = "<?php echo $array[pass]; ?>";

      if(password == "a"){
        write.innerHTML= "아이디랑 학번이 다름니다.";
      }
      else if(password == "b"){
        write.innerHTML= "아이디가 없습니다.";
      }
      else{
        write.innerHTML= password;
      }

write.innerHTML = password;

var topName = document.getElementById('top_write');
topName.innerHTML="비밀번호 찾기";
topName.style.width="60%";
topName.style.marginLeft="20%";

    </script>
  </body>
</html>
