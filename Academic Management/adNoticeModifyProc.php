<?php /* 공지사항 수정*/
session_start();
include_once('dbconnect.php');

$type = $_POST['type'];
$no = $_POST['no'];
$name = $_POST['name'];
$con = $_POST['con'];

$sql = "update noticeboard set Title = '$name', contents = '$con' where No = '$no'";

if($conn->query($sql)) {
	print "<script language=javascript> alert('수정되었습니다.'); location.replace('adNoticeList.php?type=$type'); </script>";
}
else {
	print "<script language=javascript> alert('오류가 발생했습니다.'); history.back(-1); </script>";
}
?>