<?php /* 학생의 성적 등록 */
session_start();
include_once('dbconnect.php');

$code = $_POST['code'];
$score = $_POST['score'];
$sid = $_POST['sid'];
$name = $_POST['Name'];

for($i=0; $i<count($code); $i++){
    $Code = $code[$i];
    $Score = $score[$i];
    $sql = "update stenrolment set stScore = '$Score' where Code = '$Code' and Studentid = '$sid'";

    if($conn->query($sql)) {
        print "<script language=javascript> alert('등록되었습니다.'); location.replace('adShowAchieveProc1.php?sid=$sid & name=$name'); </script>";
    }
    else {
        print "<script language=javascript> alert('오류가 발생했습니다.'); location.replace('adShowAchieve.php'); </script>";
    }
}
?> 