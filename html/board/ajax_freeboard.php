<?php
session_start();
  $conn=mysqli_connect("localhost","kwon","synergyit","synergy_db","3306");
  if(!$conn){
    echo"connect fail....";
  }
  mysqli_set_charset($conn, 'utf8');
  $db=mysqli_select_db($conn , "synergy_db");

  $table="freeboard_tb";
   $data = $_POST['page_num'];
   $query="select *from $table order by num desc limit $data, 5;";

   $result = mysqli_query($conn, $query);
   while($array=mysqli_fetch_array($result)){
	echo ("<div class='freeboard_book'>
	<table>
		 <tr><th colspan='2'><a href='m_freeboard_view.php?num=$array[num]'>$array[title]</a></th></tr> 
		<tr><td>$array[date]</td><td>$array[id]</td></tr>
	</table>
	</div>
	");
      }
  mysqli_close($conn);
?>
