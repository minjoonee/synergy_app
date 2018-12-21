<!DOCTYPE html>
  <meta charset="utf-8">
<html lang="kor" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> menu_tema</title>
    <style>
    *{
margin : 0 auto;
box-sizing: border-box;
}
#body{
height: 800px;
}
/*home*/

/*메뉴*/
#menu{
width: 70%;
height: 100%;
/*	background-color: rgba(255,190,158);*/
background-color: rgba(242,242,242);
position: absolute;
transition-duration: 1s;
left: -70%;
z-index: 999;
}
#menu_btn{
width: 120%;
height: 45px;
}
#btn_view_back{
width: 45px;
height: 45px;
float: right;
cursor: pointer;
}
.btn_view{
width: 40px;
height: 5px;
background-color: rgb(88,88,88);
margin-bottom: 7px;
transition-duration: 0.5s;
border-radius: 50px;
}
#btn_view1{
margin-top: 10px;
}
/*		상단*/
#top{
height: 50px;
width: 100%;
/* background: linear-gradient( to right, rgba(253,230,88), rgba(255,254,148) ); */
background-color: rgba(253,255,161);
}
#top_write{
width: 50%;
height: 50px;
float: left;
margin-left: 25%;
font-size: 30px;
text-align: center;
font-weight: bold;
color : rgb(88,88,88);
font-family: '돋움';
padding-top: 7px;
}
#top_logo{
width: 13%;
height: 50px;
float: right;
padding-top: 0.5%;
}
#top_logo > img{
width: 100%;
height: 100%;
}
#search{
width: 100%;
height: 40px;
margin-top: 20px;
}
#search_box{
width: 95%;
height: 30px;
border: solid rgb(0,0,0) 2px;
background-color: white;
border-radius: 30px;
margin-left: 5%;
float: left;
padding: 2px 0px 2px 6px;
}

#search_box_div{
display: inline-block;
width: 70%;
height: 40px;
float: left;
}
#search_btn{
width: 100%;
height: 100%;
}
#search_box_btn{
display: inline-block;
width: 50px;
height: 40px;
float: left;
margin-top: -5px;
margin-right: 10px;
}

#menu_profile{
width: 90%;
height: 70px;
/*	background-color: red;*/
border-bottom: 2px solid rgba(88,88,88,0.5);
margin-top: 40px;
}
#profile_photo{
width: 60px;
height: 60px;
float: left;
margin-left: 5px;
}
#profile_photo> img{
width: 100%;
height: 100%;
border-radius: 50%;
}
#profile_write{
width: 130px;
height: 60px;
float: left;
font-size: 18px;
padding:7px 0 0 15px;;
}
.menu_menu{
width: 100%;
height: 40px;
margin-top: 20px;
}
.menu_menu> a{
color: black;
text-decoration: none;
}
.menu_write{
width: 60%;
height: 100%;
float: left;
font-size: 20px;
padding: 5px 0 5px 10px;
}
.menu_point{
width: 40px;
height: 100%;
float: right;
margin: 0px 10px 0 0;
}
.menu_point > img{
width: 100%;
height: 100%;
}
#logout{
width: 100%;
height: 30px;
margin-top: 90px;
float: right;
text-align: right;
}
#logout_photo{
width: 30px;
height: 30px;
float: right;
margin-right: 10px;
cursor: pointer;
}
#logout_photo>img{width: 100%; height: 100%;}
#logout_write{
  width: 100px;
  height: 100%;
  float: right;
  padding: 4px 3px 0 0 ;
}
.log_div{
  width: 100%;
  height: 45px;
  margin-top: 20px;
  border-bottom: 3px solid rgba(88,88,88,0.5);
  margin-bottom: 20px;
  color: black;
}
.log_write{
  width: 70%;
  height: 100%;
  float: left;
  font-size: 25px;
  padding-left: 10px;
  font-weight: 600;
}
.log_img{
  width: 30px;
  height: 30px;
  float: right;
  margin-right: 20px;
}
.log_img >img{
  width: 100%;
  height: 100%;
}
.search_back{
  width: 100%;
  height: 25px;
  margin-bottom: 10px;
}
.search_back_write{
  width: 150px;
  height: 100%;
  float: right;
  color: black;
  font-size: 20px;
  text-align: center;
  background-color: rgba(88,88,88,0.5);
  margin-right: 15px;
  border-radius: 10px;
}
    </style>
  </head>
  <body>
    <div id="menu">
				<div id="menu_btn">
					<div id="btn_view_back" onclick="menu_view()">
						<div class="btn_view" id="btn_view1"></div>
						<div class="btn_view"></div>
						<div class="btn_view"></div>
					</div>
				</div>
        <a href="/mobile/login.php">
          <div class="log_div">
            <div class="log_write">
              로그인
            </div>
            <div class="log_img">
              <img src="/mobile/img/point.png">
            </div>
          </div>
        </a>

        <a href="/mobile/signup.php">
          <div class="log_div">
            <div class="log_write">
              회원가입
            </div>
            <div class="log_img">
              <img src="/mobile/img/point.png">
            </div>
          </div>
        </a>

        <a href="/mobile/idsearch.php">
          <div class="search_back">
            <div class="search_back_write">
              아이디 찾기
            </div>
          </div>
        </a>

        <a href="/mobile/pw_se.php">
          <div class="search_back">
            <div class="search_back_write">
              비밀번호 찾기
            </div>
          </div>
        </a>
        <!-- 로그인후 상태 -->
				 <!-- <div id="menu_profile">
					<div id="profile_write">
						안녕하세요~<br> <strong></strong> 님!
					</div>
				</div>

				<div class="menu_menu">
					<a href="/mobile/activity.php">
						<div class="menu_write">
							활동내역
						</div>
						<div class="menu_point">
							<img src="/mobile/img/activities2.png" alt="point">
						</div>
					</a>
				</div>

				<div class="menu_menu">
					<a href="/mobile/information.php">
						<div class="menu_write">
							내정보
						</div>
						<div class="menu_point">
							<img src="/mobile/img/myinfo2.png" alt="point">
						</div>
					</a>
				</div>

				<div class="menu_menu">
          <a href="/mobile/change_profile.php">
						<div class="menu_write">
							프로필변경
						</div>
						<div class="menu_point">
							<img src="/mobile/img/changeprofile2.png" alt="point">
						</div>
					</a>
				</div>

				<div class="menu_menu">
					<a href="/mobile/others.php">
						<div class="menu_write">
							기타
						</div>
						<div class="menu_point">
							<img src="/mobile/img/etc2.png" alt="point">
						</div>
					</a>
				</div>

				<div id="logout">
					<div id="logout_photo">
						<img src="/mobile/img/logout2.png" alt="로그아웃">
					</div>
          <div id="logout_write">로그아웃</div>
				</div> -->

			</div>

<!--			상단-->
			<div id="top">
				<div id="top_write">
					비었음
				</div>
				<a href="/mobile/index.php"><div id="top_logo">
					<img src="/mobile/img/logo.png" alt="logo">
				</div>
				</a>
			</div>
  </body>
  <script>
    var menu_btn = document.getElementsByClassName('btn_view');
		var menuu = document.getElementById('menu');
		var i=0 , promenubar;

    function ab_fix(){
      menuu.style.position="absolute";
    }

  function menu_view(){
    if(i==0){
      menuu.style.left="0px";
      menu_btn[0].style.transform="rotate(37.5deg)"
      menu_btn[0].style.transformOrigin="0% 100%";
      menu_btn[2].style.transform="rotate(-37.5deg)";
      menu_btn[2].style.transformOrigin="0% 0%";
      menu_btn[1].style.opacity="0";
      menuu.style.position="fixed";
      i=1;
    }
    else{
      menuu.style.left="-70%";
      menu_btn[0].style.transform="rotate(0deg)"
      menu_btn[2].style.transform="rotate(0deg)";
      menu_btn[1].style.opacity="1";
      setTimeout(ab_fix,1000);
      // menuu.style.position="absolute";
      i=0;
    }
  }
  </script>
</html>
