
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        session_start();
        $connect = mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
        $id = $_POST['user_id'];
        $pw = $_POST['user_pw'];
        $db=mysqli_select_db($connect , "synergy_db");
        mysqli_set_charset($connect, "utf8");
        $query = "select * from info_tb where id = '$id'";
        $result = mysqli_query($connect, $query);

        $array = mysqli_fetch_array($result);
        if($array[id]==null){
         echo "<script>window.alert('아이디가 없습니다.'); history.back();</script>";
        }else if($array[pass] != $pw){
         echo "<script>window.alert('비밀번호가 틀립니다.');history.back(); </script>";
        }else{
          $_SESSION['id'] = $id;
        echo "<script>window.alert('로그인 성공!')</script>";
        echo "<script> location.href='http://www.itsynergy.co.kr/mobile/index.php';</script>";
        }
      ?>


  </body>
</html>
