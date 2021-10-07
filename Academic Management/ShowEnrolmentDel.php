<?php /* 수강신청한 과목을 삭제 */
session_start(); 
include_once('dbconnect.php');

$arr = $_POST['code'];
$sid = $_SESSION['sid'];
for($i=0; $i<count($arr); $i++){
    $Code = $arr[$i];
    $sql = "delete from stenrolment where Code = '$Code' and Studentid = '$sid'";
    if($conn->query($sql)) {
    print "<script language=javascript> alert('수강 취소에 성공하였습니다.'); location.replace('ShowEnrolment.php'); </script>";
    }
    else {
       print "<script language=javascript> alert('수강 취소 과정에서 오류가 발생했습니다.'); location.replace('ShowEnrolment.php'); </script>";
    }     
}
?>