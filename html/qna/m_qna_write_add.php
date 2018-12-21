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

<!-- /qna/qna_upload.php -->
<?php
  $conn=mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
  if(!$conn){
      echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $notice = ($_POST['notice']) ? $_POST['notice'] : 0; //공지사항
  $db=mysqli_select_db($conn , "synergy_db");
  $tablename = "qna_tb";
  $db_id = $_SESSION[id];
  $db_content=addslashes($_POST['content']);
  $db_title = $_POST['title'];
  $sql = "INSERT into $tablename values(default,'$db_title','$db_content','$db_id', default, default, $notice)";
  mysqli_query($conn, $sql);
  echo "<script>location.href='/mobile/qna/m_qna.html';
      self.window.alert('글 작성 성공!');
  </script>";


?>
