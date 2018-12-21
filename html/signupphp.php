
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $id_data=$_POST[user_id];
    $pw_data=$_POST[user_pw];
    $name_data=$_POST[user_name];
    $number_data=$_POST[user_number];
    $memo_data=$_POST[memo];

    $connect = mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
    mysqli_select_db($connect,"synergy_db");
    mysqli_set_charset($connect, "utf8");

    $check = "select count(*) from info_tb where id = '$id_data'";
    $result = mysqli_query($connect, $check);
    $row = mysqli_fetch_row($result);

    if($row[0]>0)
    {
        echo "<script>
          window.alert('중복된 아이디 입니다.');
          location.href='http://www.itsynergy.co.kr/mobile/signup.php';
        </script>";
    }
    else{
      echo"<script>
        window.alert('회원가입 완료');
        location.href='http://www.itsynergy.co.kr/mobile/index.php';
      </script>";

      $query = "INSERT into info_tb values('$id_data','$pw_data','$name_data','$number_data','$memo_data')";
      mysqli_query($connect,$query);
    }

    mysqli_close($connect)
    ?>
    <script>

    </script>

  </body>
</html>
