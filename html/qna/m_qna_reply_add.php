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
$conn = mysqli_connect("localhost", "kwon", "synergyit", "synergy_db", "3306");

mysqli_set_charset($conn, 'utf8');

if(!$conn){
    echo"connect fail....";
  }

  $tablename = "qna_reply_tb";
   $board_num = $_GET['num'];
  $db_id = $_SESSION[id];
  $db_comment = $_POST['comment'];

   //echo "$board_num";
     //echo "$db_comment";
       $query = "SELECT reply_num from $tablename where board_num=$board_num order by reply_num desc";
    $result=mysqli_query($conn,$query);
    $data = mysqli_fetch_array($result);
    $r_num=$data['reply_num'];
    $r_num=$r_num+1;


$query = "INSERT INTO $tablename
       VALUES (
       '$board_num',
       '$r_num',
       '$db_id',
       '$db_comment',
        default
)";

$result = mysqli_query($conn, $query);
if($result === false){
  echo 'error';
 }

mysqli_close($conn);
    echo "<script>history.back(); </script>";
?>
