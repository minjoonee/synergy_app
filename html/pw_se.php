<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
    *{
      margin: 0 auto;
      box-sizing: border-box;
    }
    body{
      background-color: rgba(255,237,167);
    }
    .pw_search{
      width: 80%;
      height:500px;
      background:rgba(0,0,0,0.5);
      margin-top: 50px;
      padding-top: 30px;
    }
    #content_head{
      width: 100%;
      height: 50px;
      text-align: center;
      font-weight: bold;
      font-size: 30px;
      color: #fff;
    }
    .pw_search input[type="text"] , .pw_search input[type="number"]{
      width: 80%;
      margin-left: 10%;
      float: left;
      background: transparent;
      outline: none;
      border: none;
      border-bottom:1px solid #fff;
      height: 60px;
      color: white;
      padding-left: 5px;
      font-size: 18px;
    }
    #content_btn{
      width: 100%;
      height: 50px;
      margin-top: 140px;
    }
    #content_btn input[type="submit"]{
      border: none;
      background: gray;
      height:40px;
      color:#fff;
      font-size:16px;
      margin-right: 10%;
      width: 20%;
      float: right;
    }
    ::placeholder{color: rgba(255, 255, 255, 0.5);}
    </style>
  </head>
  <body>
    <?php
      echo file_get_contents("menu.php");
      ?>
    <form class="pw_search" action="pw_se_php.php" method="post" onsubmit="return chk_frm()" name="pwsearch">
      <div id="content_head">
        비밀번호 찾기
      </div>
      <input type="text" name="user_id" placeholder="아이디를입력하세요">
      <input type="number" name="user_number" placeholder="학번을입력하세요">
      <div id="content_btn"><input type="submit" ></div>
    </form>

    <script>

    function chk_frm() {
      if(!document.pwsearch.user_id.value){
        window.alert("아이디를 입력하세요 ");
        document.pwsearch.user_id.focus();
        return false;
      }
      else if(!document.pwsearch.user_number.value){
        window.alert("학번을 입력하세요 ");
        document.pwsearch.user_number.focus();
        return false;
      }
      return true;
    }

    var topName = document.getElementById('top_write');
    topName.innerHTML="비밀번호 찾기";
    topName.style.width="60%";
    topName.style.marginLeft="20%";
    </script>

  </body>
</html>
