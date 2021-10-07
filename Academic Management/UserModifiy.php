<!DOCTYPE html>
<html>
<head>
    <title>Modifiy</title>
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
        input[type=submit] {
            background-color: #5858FA;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-left: 10px;
            margin-top: 20px;
            font-weight: bold;
            font-style: normal;
        }
        a {
            background-color: #5858FA;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-left: 10px;
            margin-top: 20px;
            font-weight: bold;
            font-style: normal;
            text-decoration: none;
            font-size: small;
        }
        input[type=submit]:hover, a:hover {
            background-color: #00FFFF;
        }
        .container {
            border-radius: 5px;
            transform: translate(-50%,-50%);
            background-color: white;
            padding: 20px;
            width: 500px;
            height: 710px;
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
    </style>
    <script type="text/javascript" nonce="744eec7f97dd4b12b6870d30de9" src="//local.adguard.org?ts=1589241756844&amp;type=content-script&amp;dmn=eclass.daejin.ac.kr&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
<script type="text/javascript" nonce="744eec7f97dd4b12b6870d30de9" src="//local.adguard.org?ts=1589241756844&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script></head>
    <body>
        <?php
        session_start();
		include_once('dbconnect.php');
        if(!isset($_SESSION['uname']) || !isset($_SESSION['sid']) ) {
        print "<script language=javascript> alert('로그인을 해주세요.'); location.replace('login.html'); </script>";
        }
        else{
            $sid = $_SESSION['sid'];
            $sql = "select * from user where StudentID = '$sid'";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
		?>
        <div class="bg">
            <div class="container">
                <p style="display: block; margin: 0 auto; width:300px; height:100px;"><img src="img/daejinlogo.png"></p>
              <h3>회원정보 수정</h3>
              <form action="UserModifiyProc.php" method="post">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">ID</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="id" value="<?=$row['ID']?>" readonly style="background-color:#E6E6E6;">
                  </div>
                </div>
                <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">Password</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="pw" value="<?=$row['PW']?>">
                  </div>
                </div>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="name" value="<?=$row['Name']?>" readonly style="background-color:#E6E6E6;">
                  </div>
                </div>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">Email</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="email" value="<?=$row['Email']?>">
                  </div>
                </div>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">Address</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="addr" value="<?=$row['Address']?>">
                  </div>
                </div>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">Student ID</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="sid" value="<?=$row['StudentID']?>" readonly style="background-color:#E6E6E6;">
                  </div>
                </div>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">Birthday</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="day" value="<?=$row['Birthday']?>" readonly style="background-color:#E6E6E6;">
                  </div>
                </div>
                <div class="row" style="margin-top: 10px">
                  <a href="#" onclick="history.back(-1); returm=false;">취소</a>
                  <input type="submit" value="정보수정">
                </div>
              </form>
            </div>
        </div>
        <?php }
        }?>
    </body>
</html>