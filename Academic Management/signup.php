<!DOCTYPE html>
<html>
<head>
    <title>회원가입</title>
    <meta charset="utf-8">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            margin: 0;
        }
        input[type=text], input[type=password], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            font-weight: bold;
            font-size: large;
        }
        input[type=button] {
            background-color: #5858FA;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-left: 10px;
            margin-top: 400px;
            font-weight: bold;
            font-style: normal;
        }
        input[type=submit]:hover, input[type=button]:hover {
            background-color: #00FFFF;
        }
        .container {
            border-radius: 5px;
            transform: translate(-50%,-50%);
            background-color: white;
            padding: 20px;
            width: 500px;
            height: 650px;
            position: absolute;
            top: 50%;
            left: 50%;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
         body{
                height: 100vh; /*view prot(뷰포트) 크기*/
                margin: 0;
            }
        .bg{
            background-image: url(img/index_background.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }
        h3 {
            margin-bottom: 30px; 
            margin-top: 5px;
        }
        .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        }
        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        .move {
            text-align: center;
        }
    </style>
    <script type="text/javascript" nonce="744eec7f97dd4b12b6870d30de9" src="//local.adguard.org?ts=1589241756844&amp;type=content-script&amp;dmn=eclass.daejin.ac.kr&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
    <script type="text/javascript" nonce="744eec7f97dd4b12b6870d30de9" src="//local.adguard.org?ts=1589241756844&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script></head>
    <body>
        <?php
            include_once('dbconnect.php');

            $id = $_POST['id'];
            $pw = $_POST['pw'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $addr = $_POST['addr'];
            $sid = $_POST['sid'];
            $day = $_POST['day'];
            $type = 'user';

            $sql = "insert into user values('$id', '$pw', '$name', '$email', '$addr', $sid, '$day', '$type')";
        ?>
        <div class="bg">
            <div class="container">
              <p style="display: block; margin: 0 auto; width:300px; height:100px;"><img src="img/daejinlogo.png"></p>
              <form action="signup.php" method="post">
                  <?php
                  if($conn->query($sql)) {
                      $sql = "insert into Academic(Name, StudentID, Address, Birthday) values('$name', $sid, '$addr', '$day')";
                      if($conn->query($sql)) {
                  ?>
                  <div class="move">
                  <h3><?=$name?> 님의 회원가입이 성공하였습니다.</h3>
                  <input type="button" onclick="location.href='login.html'" value="로그인 페이지"> 
                  <?php
                      }
                  }
                  else { ?>
                  <h3>회원가입에 실패하였습니다. 다시확인해주세요</h3>
                  print "<script language=javascript> alert('회원가입에 실패 했습니다. 다시한번 확인해주세요'); location.replace('signup.html'); </script>";
                  </div>
                  <?php } ?>
              </form>
            </div>
        </div>
    </body>
</html>