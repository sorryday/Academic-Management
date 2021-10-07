<!doctype html>
<?php session_start(); ?>
<html>
    <head>
        <title>Main Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color: #F2F2F2;
            height: 100%;
            width: 100%
            margin: 0;
            background-image: url(img/sakura.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content {
            background-color: rgba(232,206,206,0.5);
            width: 1800px;
            margin: auto;
            padding: 30px;
            height: 2600px;
            margin-top: 100px;
            margin-bottom: 100px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.3);
        }
        /*navbar*/
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
        /*사진*/
        .carousel {
            width: 1500px;
            margin: 15px auto;
            margin-top: 60px;
            margin-bottom: 70px;
        }
        .carousel-inner img {
        width: 100%; 
        margin: auto;
        }

        .carousel-caption h3 {
            color: #fff !important;
        }

        @media (max-width: 600px) {
            .carousel-caption {
                display: none; 
            }
        }
        .bg-1 {
        background: #2d2d30;
        color: #bdbdbd;
        }
        .bg-1 h3 {color: #fff;}
        .bg-1 p {font-style: italic;}
        .nav-tabs li a {
            color: #777;
        }
        /*명함*/
        .flex {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 100px;
        }
        .flex > img {
            height: 300px;
            margin: 10px 25px 10px 25px;
            flex: 1;
            border: 1px solid #ccc;
        }
        .flex > img:hover {
            transform: rotate(2deg);
        }
        .flex a {
            font-size: xxx-large;
            text-decoration: none;
        }
        /*영상*/
        #Vid {
            width: 100%;
            margin-left: -350px;       
        }
        #video {           
            width:400px;
            margin: 0 auto;
            margin-top: 50px;
        }
        #screen {  
            width:1100px; 
            height:700px; 
            margin-bottom: 30px;
        }
        #screen iframe {
            width:1100px; 
            height:700px; 
        }
        #screen .top_img { 
            width:1100px; 
            height:700px; 
            cursoor:pointer; 
            background:#A4A4A4;
            text-align: center;
            font-size: xx-large;
        }
        #screen .top_img + iframe { 
            display:none 
        }
        dl.movs { 
            width:200px;
            float:left; 
            border:solid 1px #ccc;
        }
        dl.movs + dl.movs {
            margin-left:20px;
        }
        dl.movs dd.desc, dl.movs dd.url {
            display:none;
        }
        dl.movs img {
            width: 200px;
        }
        #list {
            position: absolute;
            left: 50%;
            margin-left: -350px;
        }
        /*부가적인 스타일*/
        hr {
            border: 1px solid #848484;
            width: 1700px;
            margin: auto;
        }
        .container {
            width: 100%;
            height: 150px;
            text-align: center;
            background-color: rgba(255, 181, 235, 0.7);
        }
        .container h4 {
            margin-top: 70px;
            margin-right: 300px;
            font-family: 'Jua', sans-serif;
        }
        .container img{
            float: left;
            margin-left: 40px;
            margin-top: 65px;
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
                    <a href="Enrolment.php">수강신정</a>
                    <a href="ShowEnrolment.php">수강강좌</a>
                    <a href="ShowAchieve.php">성적</a>
                    <a href="ShowAcademic.php">학사정보</a>
                </div>
            </li>
            <li  style="float: right" class="menus"><a href="javascript:void(0)">공지사항</a>
                <div class="submenu">
                    <a href="NoticeList.php?type=일반">일반공지</a>
                    <a href="NoticeList.php?type=학사">학사공지</a>
                    <a href="NoticeList.php?type=장학">장학공지</a>
                    <a href="NoticeList.php?type=취업">취업공지</a>
                </div>
            </li>           
            <a href="MainPage.php"><li><img src="img/daejinlogo1.png" style="width: 230px; margin-top: 10px; padding: 5px;"></li></a>
            <p style="margin-top: 15px; font-size:x-large">&emsp;&emsp;<span class="material-icons"> account_circle </span> <?=$name?></p>
        </ul>
        <div class="content">
        <!-- 슬라이드 -->
            <div id="slideshow" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
        </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">     
                    <img src="img/deajinphoto1.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="item">
                    <img src="img/deajinphoto2.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="item">
                    <img src="img/deajinphoto3.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="img/deajinphoto4.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <!-- 슬라이드 컨트롤러 -->
            <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <!-- 카드 메뉴 -->
        <h1 style="text-align: center; padding: 20px; font-family: 'Jua', sans-serif;">MENU</h1>
        <div class="flex">
            <img src="img/postit.png"><a href="NoticeList.php?type=일반" style="position: absolute; top:1400px; margin-left: 95px">공지사항</a>
            <img src="img/postit.png"><a href="ShowAcademic.php" style=" position: absolute; top:1400px; margin-left: 500px">학적정보</a>
            <img src="img/postit.png"><a href="UserModifiy.php" style="position: absolute; top:1400px; margin-left: 900px">회원정보</a>
        </div>
        <hr>
        <!-- 영상 모음 -->
        <h1 style="text-align: center; padding: 20px; font-family: 'Jua', sans-serif;">학교 홍보 영상</h1>
        <div id="Vid">
        <div id="video">
            <div id="screen">
                <div class="top_img"></div>
                <iframe src="https://youtube.com/embed/BUjwZKkAd3c?rel=0"></iframe>
            </div>
        </div>
        <div id="list">
            <dl class="movs">
                <dd class="thumb"><a href="#"><img src="https://img.youtube.com/vi/BUjwZKkAd3c/0.jpg" alt=""></a>
                <dd class="url"><iframe src="https://youtube.com/embed/BUjwZKkAd3c?rel=0"></iframe></dd>
            </dl>

        <dl class="movs">
            <dd class="thumb"><a href="#"><img src="https://img.youtube.com/vi/IExFv2dNaZw/0.jpg" alt=""></a>
            <dd class="url"><iframe src="https://youtube.com/embed/IExFv2dNaZw?rel=0"></iframe></dd>
        </dl>

        <dl class="movs">
            <dd class="thumb"><a href="#"><img src="https://img.youtube.com/vi/68mOIRpIqxw/0.jpg" alt=""></a>
            <dd class="url"><iframe src="https://youtube.com/embed/68mOIRpIqxw?rel=0"></iframe></dd>
            </dl>
        </div>
        </div>
        <script>
            function currentDiv(n) {
              showDivs(slideIndex = n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
              }
              x[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " w3-opacity-off";
            }
             function changeImg(imgfile) {
                document.getElementById("toon").src = imgfile;
            }
            $('#screen .top_img').on('click', function(e) { 
              e.preventDefault();
              var $item_top = $("#screen").find("iframe").attr("src");
              $('#screen .top_img').fadeOut("slow");
              $('#screen iframe').show().attr("src",$item_top + "&autoplay=1");
             });
                $('#list .movs a').on('click', function(e) { 
              e.preventDefault();
              var $itemx = $(this).parents("dl.movs") 
              var $itemx_tit = $itemx.find("dt").html();
              var $itemx_desc = $itemx.find("dd.desc").html();
              var $itemx_url = $itemx.find("dd.url iframe").attr("src"); 
              var $sc_top = $(document).scrollTop();
              var $player_top = $('#video').offset().top 
              $('#screen .top_img').hide();
              $('#screen iframe').attr("src",$itemx_url + "&autoplay=1");
              $('#screen iframe').show();
              $('#text dt').html( $itemx_tit );
              $('#text dd').html( $itemx_desc ); 
              if ( $player_top < $sc_top) { 
                $('html, body').animate({ scrollTop: $video_top }, "slow");
                }
              else { return false } 
         });
        </script>
        </div>
        <div class="container">
            <img src="img/daejinlogo1.png">
            <h4>Design by 이민재, 송승현</h4>
        </div>
        <?php } ?>
    </body>
</html>





















