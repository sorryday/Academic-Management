<?php /* 회원정보 수정 */
session_start();
include_once('dbconnect.php');

$sid = $_SESSION['sid'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$day = $_POST['day'];

$sql = "update user set PW = '$pw', Email = '$email', Address = '$addr' 
		where StudentID = '$sid'";

if($conn->query($sql)) {
    $sql = "update academic set Address = '$addr' where StudentID = '$sid'";
    if($conn->query($sql)) {
	print "<script language=javascript> alert('회원정보를 수정했습니다. 다시 로그인 해주세요.'); location.replace('login.html'); </script>";
    }
    else {
        print "<script language=javascript> alert('오류가 발생했습니다.'); location.replace('UserModifiy.php'); </script>";
    }
}
else {
	print "<script language=javascript> alert('오류가 발생했습니다.'); location.replace('UserModifiy.php'); </script>";
}
?>