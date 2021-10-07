<!doctype html>
<?php session_start(); ?>
<html>
    <head>
        <title>Academic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color: #FAFAFA;
            height: 100vh;
            margin: 0;
        }
        /* navbar */
        ul{
            list-style-type: none;
            background-color: #98d499;
            overflow: hidden;
            margin: 0;
            padding: 0;
            position: static;
            z-index: 5;
        }
        li{
            float: left;
            border-left: 1px solid #6E6E6E;
            
        }
        li a {
            text-decoration: none;
            display: block;
            padding: 14px 16px;
            color: white;
            text-align: center;
            font-size: large;
            height: 60px; 
        }
        li a:hover{
            background-color: #F5A9BC;
        }
        .submenu {
            display: none;
            position:absolute;
            z-index: 1;
        }
        .submenu{
            background-color: #CEF6F5;
            width: 300px;
        }
        .submenu a{
            text-decoration: none;
            color: black;
            display: block;
            padding: 15px 16px;
            text-align: center;
            line-height: 2;
        }
        .menus {
            width: 300px;
            height: 60px;
        }
        .menus:hover .submenu{
            display: block;
        }
        /* 왼쪽에 배치하는 navbar */
        .bar {
            background-color: #E6E6E6;
            height: 100%;
            text-align: center;
            text-decoration: none;
            padding: 50px;
        }
        .bar h1 {
            background-color: #848484;
            color: white;
            padding: 15px;
            width: 200px;
            margin: auto;
            border-radius: 20px;
        }
        .bar a {
            font-size: x-large;
            line-height: 3;
            color: #0404B4;
        }
        /* 오른쪽에 배치하는 content */
	    .table h3 {
            background-color: #848484;
            color: white;
            padding: 10px;
            width: 130px;
            margin-left: 80px;
            border-radius: 20px;
            text-align: center;
            margin-top: 50px;
        }
        .table {
            background-color: #FAFAFA;
            height: 100%;
        }
        .container {
            border-radius: 5px;
            transform: translate(-50%,-50%);
            background-color: white;
            padding: 30px;
            width: 500px;
            height: 350px;
            margin: auto;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.3);
            margin-left: 50%;
            margin-top: 250px;
        }
        .btn {
            background-color: #A9BCF5;
            border: 1px solid black;
            width: 60px;
            padding: 3px;
            margin-top: 5px;
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
        input[type=submit]:hover, a:hover {
            background-color: #00FFFF;
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
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        h4 {
            margin-bottom: 30px; 
            margin-top: 40px;
            text-align: center;
        }  
    </style>
    <body>
        <?php
        include_once('dbconnect.php');        
        if(!isset($_SESSION['uname']) || !isset($_SESSION['sid']) ) {
        print "<script language=javascript> alert('로그인을 해주세요.'); location.replace('login.html'); </script>";
        }
        else{
            $name = $_SESSION['uname'];
            $sid = $_SESSION['sid'];
        ?>
        <!-- navbar -->
        <ul>          
            <li style="float: right" class="menus"><a href="javascript:void(0)">회원정보</a>
                <div class="submenu">
                    <a href="UserModifiy.php">회원정보 수정</a>
                    <a href="logout.php">로그아웃</a>
                </div>
            </li>
            <li style="float: right" class="menus"><a href="javascript:void(0)">학적정보</a>
                <div class="submenu">
                    <a href="adShowEnrolment.php">수강강좌</a>
                    <a href="adShowAchieve.php">성적</a>
                    <a href="adShowAcademic.php">학사정보</a>
                </div>
            </li>
            <li  style="float: right" class="menus"><a href="javascript:void(0)">공지사항</a>
                <div class="submenu">
                    <a href="adNoticeList.php?type=일반">일반공지</a>
                    <a href="adNoticeList.php?type=학사">학사공지</a>
                    <a href="adNoticeList.php?type=장학">장학공지</a>
                    <a href="adNoticeList.php?type=취업">취업공지</a>
                </div>
            </li>            
            <a href="adMainPage.php"><li><img src="img/daejinlogo1.png" style="width: 230px; margin-top: 10px; padding: 5px;"></li></a>
            <p style="margin-top: 15px; font-size:x-large">&emsp;&emsp;<span class="material-icons"> account_circle </span> <?=$name?></p>
        </ul>
        <!-- 왼쪽에 배치되는 navbar -->
        <div class="bar" style="width: 20%;float: left">
            <h1>학사정보</h1>
            <br>
            <a href="adShowEnrolment.php">수강강좌</a><br>
            <a href="adShowAchieve.php">성적</a><br>
            <a href="adShowAcademic.php">학사정보</a><br>
        </div>
        <!-- 학생의 이름 학번정보를 입력받는 곳 -->
        <form action="adShowAcademicProc1.php" method="get" name="del">
            <div class="table" style="width: 80%; float: right;">
                <h3>학사정보</h3>
            <div class="container">
              <h4 style="font-family: 'Noto Sans KR', sans-serif;">찾으실 학생의 이름과 학번을 적어주세요</h4>
                <div class="row">
                  <div class="col-25">
                    <label for="fname">Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="name">
                  </div>
                </div>
                <div class="row" style="margin-top: 10px">
                  <div class="col-25">
                    <label for="lname">StudentID</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="sid">
                  </div>
                </div>
                <div class="row" style="margin-top: 10px">
                  <input type="submit" value="확인">
                </div>
            </div>
            </div>
        </form>
        <?php }?>
    </body>
</html>

















