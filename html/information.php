<?php
$conn=mysqli_connect('127.0.0.1', 'kwon', 'synergyit', 'synergy_db', '3306');
mysqli_set_charset($conn, 'utf8');
$db=mysqli_select_db($conn , "synergy_db");

session_start();
    if(!isset($_SESSION['id'])){
      echo "<script>
      location.href='/mobile/index.php';
        self.window.alert('로그인이 필요한 기능입니다.');
    </script>";
    }
$user_id = $_SESSION['id'];

$query = "select *from info_tb where id = '$user_id'";
$result = mysqli_query($conn, $query);
$array = mysqli_fetch_array($result);
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width", initial-scale=1.0,    minimum-scale = 1.0, maximum-scale = 1.0>
        <meta charset="utf-8">
        
        <style>
            *{margin: 0 auto;}
            #top_info{
                text-align:center;
                border-bottom: 3px solid black;
            }
            body{
                background-color:beige
            }
            
            #my_img{
                width:120px;
                height:120px;
                border:2px solid black;
                border-radius:30%;
                margin-top:20px;
                
                background-image:url(img/pororo.png);
                background-size:120px 120px;
                background-repeat:no-repeat;
                
            }
            
            #name_info{
                width:80%;
                height:30px;
				text-align:center;
				font-weight:bold;
            }
            
            #school_info{
                margin-top:10px;
                width:80%;
                height:30px;
				text-align:center;
				font-weight:bold;
            }
            
            #num_info{
                width:80%;
                height:30px;
				text-align:center;
				font-weight:bold;

            }
            
            #join_info{
                width:80%;
                height:30px;
				text-align:center;
				font-weight:bold;
            }
        
        </style>    
    </head>
    
    <body>
	<?php
	if(!isset($_SESSION['id'])) {
		echo file_get_contents("menu.php");
	}
    else{
        echo file_get_contents("menu_login.php");
    }
?>

    <div id="top_info">
        <h1>내 정보</h1>
    </div>
        
    <div id="my_img"></div>
    <div id="name_info">
    <?php echo $array[name]; ?>
    </div>
    
    <div id="school_info">
        <p>아이디 : <?php echo $user_id; ?> </p>
    </div>
        
    <div id="num_info">
         <p>학번 : <?php echo $array[student_id]; ?> </p>
    </div>
    
    <div id="join_info">
        <p>가입동기 : <?php echo $array[motivate]; ?>
    </div>
        
    <script>
			var topName = document.getElementById('top_write');
			topName.innerHTML="menu";	
	</script>
    </body>

</html>