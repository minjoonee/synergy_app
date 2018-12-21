<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width", initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0>
<meta charset="utf-8">
<style>
            *{
                margin: 0 auto;
                box-sizing:border-box;
}

body{
    width: 100%;
    background-color: rgba(255,237,167);
    background-image: url(img/synergy.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.loginbox{
    position:absolute;
    top:370px;
    left:50%;
    transform: translate(-50%, -50%);
    width: 350px;
    height:680px;
    padding: 60px 40px 0 40px;
    background:rgba(0,0,0,0.5);
}

.user
{
    width:80px;
    height:80px;
    border-radius:50%;
    overflow: hidden;
    position: absolute;
    top: calc(-50px/2);
    left: calc(50% - 40px);
}

h2{
    margin:0;
    padding: 0 0 20px;
    color: #efed40;
    text-align: center;
}

.loginbox p{
    margin:0;
    padding: 0;
    font-weight: bold;
    color: #fff;

}

.loginbox input{
    width:100%;
    margin-bottom:20px;
}

.loginbox input[type="text"],
.loginbox input[type="password"]
{
    border: none;
    border-bottom:1px solid #fff;
    background: transparent;
    outline: none;
    height:40px;
    color:#fff;
    font-size:16px;
}

::placeholder
{
    color: rgba(255, 255, 255, 0.5);
}

.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height:40px;
    color: #fff;
    font-size:16px;
    background:gray;
    cursor: pointer;
    border-radius:20px;
    margin-top:10px;
}
#logtextarea
{
    border: 1px solid white;
    outline: none;
    height:70px;
    color: #fff;
    font-size:16px;
    background:none;
    padding: 4px 0px 0px 4px;
    font-weight:bold;
    width:100%;
}
.loginbox input[type="submit"]:hover
{
    background:white;
    color:black;
}
#passbtn{
  width: 100px;
  height: 25px;
  float: right;
  margin-bottom: 0px;
}
</style>
</head>

<body>
    <div class="loginbox">
        <img src="img/signup.png" class="user">
        <h2>반갑습니다</h2>
        <form action="signupphp.php" method="post" onsubmit="return chk_frm()" name="join">
            <p>ID</p>
            <input type="text" name="user_id" placeholder="아이디 입력">
            <p>Password</p>
            <input type="password" name="user_pw" placeholder="******">
            <p>Password 확인
              <input type="button" id="passbtn" value="비밀번호 확인" onclick="pass_check()">
            </p>
            <input type="password" name="user_pw_check" placeholder="******">
            <p>이름</p>
            <input type="text" name="user_name" placeholder="이름 입력">
            <p>학번</p>
            <input type="text" name="user_number" placeholder="학번 입력">
            <p>가입동기</p>
            <textarea id="logtextarea" name="memo"> </textarea>
            <input type="submit" name="" value="회원가입">
        </form>
    </div>

    <script>

    var pass_count=0;

  function chk_frm() {
    if(!document.join.user_id.value){
      window.alert("아이디를 입력하세요 ");
      document.join.user_id.focus();
      return false;
    }
   else if(!document.join.user_pw.value){
      window.alert("비밀번호를 입력하세요 ");
      document.join.user_pw.focus();
      return false;
    }
  else if(!document.join.user_pw_check.value){
     window.alert("비밀번호확인을 입력하세요 ");
     document.join.user_pw_check.focus();
     return false;
   }
  else if(!document.join.user_name.value){
     window.alert("이름을 입력하세요 ");
     document.join.user_name.focus();
     return false;
  }
  else if(!document.join.user_number.value){
     window.alert("학번 입력하세요 ");
     document.join.user_number.focus();
     return false;
   }
   if(pass_count){
     return true;
   }
   else{
     window.alert("비밀번호 확인을 받으세요.");
     return false;
   }
  }

  function pass_check(){

    if(document.join.user_pw.value == 0){
      window.alert("password를 입력하시오");
    }
    else if((document.join.user_pw_check.value == 0)){
      window.alert("password확인 입력하시오");
    }
    else if(document.join.user_pw.value ==document.join.user_pw_check.value ){
          document.join.user_pw_check.style.borderBottom="1px solid blue";
          self.window.alert("password가 확인 되었습니다.");
          pass_count=1;
    }
    else if(!(document.join.user_pw.value == document.join.user_pw_check.value) ){
          document.join.user_pw_check.style.borderBottom="1px solid red";
          self.window.alert("password확인을 정확히 입력하시오.");
    }
  }

</script>

</body>

</html>
