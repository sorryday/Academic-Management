<?php /*공지사항 등록*/
session_start();
include_once('dbconnect.php');

$name = $_POST['name'];
$writer = $_POST['writer'];
$date = $_POST['date'];
$con = $_POST['con'];
$type = $_POST['type'];

$sql = "insert into noticeboard(Title, writer, Date, Type, contents) values('$name', '$writer', '$date', '$type', '$con')";

if($conn->query($sql)) {
	print "<script language=javascript> alert('등록을 완료했습니다.'); location.replace('adNoticeList.php?type=$type'); </script>";
}
else {
	print "<script language=javascript> alert('오류가 발생했습니다.'); history.back(-1); </script>";
}
?>