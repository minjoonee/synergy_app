<?php
session_start();
$res = session_destroy();
if($res){
  echo "<script>location.href='http://www.itsynergy.co.kr/mobile/index.php';
  </script>";
}
 ?>
