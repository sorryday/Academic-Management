<!doctype html>
<?php session_start(); ?>
<html>
    <head>
        <title>Notice Print</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <style>
        body{
            background-color: #F2F2F2;
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
        /* 왼쪽에 배치할 navbar */
        .bar {
            background-color: #E6E6E6;
            height: 100%;
            text-align: center;
            text-decoration: none;
            padding: 50px;
        }
        .bar a {
            font-size: x-large;
            line-height: 3;
            color: #0404B4;
        }
        .bar h1 {
            background-color: #848484;
            color: white;
            padding: 15px;
            width: 200px;
            margin: auto;
            border-radius: 20px;
        }
        /* 오른쪽에 배치할 content */
        .table {
            background-color: #FAFAFA;
            height: 100%;
        }
        .table table{
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            margin: auto;
            margin-top: 60px;
            width: 1000px;
        }
        .table table th, .table table td {
            border: 1px solid #A4A4A4;
            padding: 8px;
            background-color: white;
        }
        .table table th {
            padding-top: 12px;
            padding-bottom: 12px;
            color: black;
            background-color: #E6E6E6;
            text-align: center;
        }
        .table table td{
            font-size: medium;
        }
        .table table td name:hover {
            color: blue;
        }
        .btn {
            background-color: #A9F5BC;
            border: 1px solid black;
            width: 60px;
            padding: 3px;
            margin-top: 10px;
            font-size: large;
        }
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
    </style>
    <body>
        <?php
        include_once('dbconnect.php');        
        if(!isset($_SESSION['uname']) || !isset($_SESSION['sid']) ) {
        print "<script language=javascript> alert('로그인을 해주세요.'); location.replace('login.html'); </script>";
        }
        else{
            $name = $_SESSION['uname'];
            $no = $_GET['no'];
            $type = $_GET['type'];
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
        <!-- 왼쪽에 배치한 navbar -->
        <div class="bar" style="width: 20%;float: left">
            <h1><?=$type?>공지</h1>
            <br>
            <a href="adNoticeList.php?type=일반">일반공지</a><br>
            <a href="adNoticeList.php?type=학사">학사공지</a><br>
            <a href="adNoticeList.php?type=장학">장학공지</a><br>
            <a href="adNoticeList.php?type=취업">취업공지</a><br>
        </div>
        <!-- 정보를 듸어줄 table -->
        <div class="table" style="width: 80%; float: right;">
            <h3><?=$type?>공지</h3>
            <?php $sql = "select * from noticeboard where No = '$no'";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                ?>
            <table>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <th>제목</th>
                <td colspan="3"><?= $row['Title']?></td>
            </tr>
            <tr>
                <th>작성자</th>
                <td><?= $row['writer']?></td>
                <th>작성일</th>
                <td><?= $row['Date']?></td>
            </tr>
            <tr>
                <td colspan="4" style="height:500px; vertical-align: top;"><pre style="background-color:white;border:none"><?= $row['contents']?></pre></td>
            </tr>
            <tr>
                <td colspan="4"style="border:none;background-color: #FAFAFA; text-align:right;"><a href="adNoticeModify.php?type=<?= $type?>&no=<?= $row['No']?>" class="btn">수정</a></td>    
            </tr>
            <?php } ?>
            </table>
            <?php }
            else{
                echo "저장된 계시물이 없습니다.<br>";
            } ?>
        </div>
        <?php }?>
    </body>
</html>





















