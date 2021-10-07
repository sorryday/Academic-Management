<?php /* 로그아웃 session을 제거한다 */
session_start();
session_destroy();
print "<script language=javascript> alert('로그아웃합니다.'); location.replace('login.html'); </script>";
?>