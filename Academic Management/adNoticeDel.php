<?php /*공지사항 삭제*/
session_start(); 
include_once('dbconnect.php');

$no = $_POST['no'];
$type = $_POST['type'];
for($i=0; $i<count($no); $i++){
    $Code = $no[$i];
    $sql = "delete from noticeboard where No = '$Code'";
    if($conn->query($sql)) {
    print "<script language=javascript> alert('삭제하였습니다.'); location.replace('adNoticeList.php?type=$type'); </script>";
    }
    else {
       print "<script language=javascript> alert('오류가 발생했습니다.'); history.back(-1); </script>";
    }     
}
?>