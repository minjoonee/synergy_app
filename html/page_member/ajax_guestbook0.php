<?php
  session_start();
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $db=mysqli_select_db($conn , "synergy_db");

  $table="welcome_tb";
   $data = $_POST['page_num'];
   $query="select *from $table order by num desc limit 1;";

   $result = mysqli_query($conn, $query);
   while($array=mysqli_fetch_array($result)){
     echo(
			 "<div id='guest_book'>
		 			<div id='id'>$array[id]</div>
					<div id='date'>$array[date]</div>
					<div id='content'>$array[content]</div>
				</div>
					");
   }
  mysqli_close($conn);
?>
