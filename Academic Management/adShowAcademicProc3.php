<?php /* 학생의 학사정보 수정 */
session_start();
include_once('dbconnect.php');

$grade = $_POST['grade'];
$pro = $_POST['pro'];
$col = $_POST['col'];
$depart = $_POST['depart'];
$codepart = $_POST['codepart'];
$sid = $_POST['sid'];
$name = $_POST['name'];

$sql = "update academic set Grade = '$grade', Professor = '$pro', College = '$col', Department = '$depart', CoDepartment = '$codepart' where StudentID = '$sid'";

    if($conn->query($sql)) {
        print "<script language=javascript> alert('수정되었습니다.'); location.replace('adShowAcademicProc1.php?name=$name&sid=$sid'); </script>";
    }
    else {
        print "<script language=javascript> alert('오류가 발생했습니다.'); location.replace('adShowAcademic.php'); </script>";
    }

?>