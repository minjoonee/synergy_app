<?php
  session_start();
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $db=mysqli_select_db($conn , "synergy_db");

  $table  ="welcome_tb";
	$db_id = $_SESSION['id'];
	$db_content = $_POST['content'];

  $query="INSERT into $table values(default, '$db_id', '$db_content', default)";
	$result = mysqli_query($conn, $query);

	if($result){
		echo "success";
	}
/*
	$query="SELECT *from $table order by num desc limit 0, 5;";
	$result = mysqli_query($conn, $query);
  while($array=mysqli_fetch_array($result)){
     echo(
			 "<div id='guest_book'>
			 		<table class='in'>
		 			<tr><td>$array[id]</td>
					<td>$array[content]</td></tr>
					<tr><th colspan='2'>$array[date]</th></tr>
					</table>
				</div>"
			);
   }
	*/
?>
