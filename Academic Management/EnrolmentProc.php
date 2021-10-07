<?php /* 수강신청 */
session_start(); 
include_once('dbconnect.php');

$sid = $_SESSION['sid'];
$code = $_GET['code']; 
$sub = $_GET['sub'];
$major = $_GET['major'];
$score = $_GET['score'];
$pro = $_GET['pro'];
$time = $_GET['time'];

$sql = "select * from stenrolment where Studentid = '$sid' and Code = '$code'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    print "<script language=javascript> alert('이미 신청한 과목입니다.'); location.replace('Enrolment.php'); </script>";
}
else {
    $sql = "insert into stenrolment(Studentid, Code, Subject, Major, Score, Professor, Time) 
    values($sid, '$code', '$sub', '$major', $score, '$pro', '$time')";
    if($conn->query($sql)) {
    print "<script language=javascript> alert('신청 완료했습니다.'); location.replace('Enrolment.php'); </script>";
    }
    else {
        print "<script language=javascript> alert('신청 과정중 실패하였습니다. 다시 시도해주세요.'); location.replace('Enrolment.php'); </script>";
    }     
}
?>
