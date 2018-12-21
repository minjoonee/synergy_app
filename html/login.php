<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width", initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0>
<meta charset="utf-8">
<link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="loginbox">
        <img src="img/login.png" class="user">
        <h2>반갑습니다</h2>
        <form action="login_process.php" method="POST">
            <p>ID</p>
            <input type="text"  name="user_id" placeholder="아이디 입력">
            <p>Password</p>
            <input type="password"  name="user_pw" placeholder="******">
            <input type="submit" name="" value="로그인">
        </form>
    </div>
</body>

</html>
