
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    # session 연결
     session_start();
    ?>
    <?php

    $name_data=$_POST[new_name];
    $stdnum_data=$_POST[new_std];
    $pass_data=$_POST[new_pass];
    $memo_data=$_POST[new_memo];

    $connect = mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
    mysqli_select_db($connect,"synergy_db");
    mysqli_set_charset($connect, "utf8");
    $user_id = $_SESSION['id'];
    $check = "update info_tb set pass='$pass_data' , name='$name_data' , student_id='$stdnum_data', motivate='$memo_data' where id='$user_id'";

    $result = mysqli_query($connect, $check);

    ?>
    <script>
        window.alert("프로필 변경 완료~");
        location.href='http://www.itsynergy.co.kr/mobile/index.php';
    </script>

  </body>
</html>
