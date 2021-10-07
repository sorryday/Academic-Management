<?php /* 로그인 처리 session을 만든다 */
session_start(); 
include_once('dbconnect.php');

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select * from user where ID = '$id' and PW = '$pw'";

$result = $conn->query($sql);
if($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$_SESSION['sid'] = $row['StudentID'];
    $_SESSION['uname'] = $row['Name'];
    $type = $row['Usertype'];
    $admin = 'admin';
    if(strcmp($type,$admin)) {
        echo ("<script>location.href='MainPage.php';</script>");
    }
    else {
       echo ("<script>location.href='adMainPage.php';</script>");
    }
    
}
else
    print "<script language=javascript> alert('로그인에 실패하였습니다. 아이디 혹은 비밀번호를 확인해주세요.'); location.replace('login.html'); </script>";
?>