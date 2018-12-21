<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])){
  echo "<script> location.href='http://www.itsynergy.co.kr/mobile/login.php';</script>";
  exit;
}
 $s_id = $_SESSION['user_id'];
 $s_pw = $_SESSION['user_pw'];

echo "안녕하세요?". $s_id."님"."(".$s_pw.")";
 ?>
