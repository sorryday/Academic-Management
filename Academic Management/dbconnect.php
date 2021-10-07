<?php /* DB접속 */
$server = "localhost";
$user = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($server, $user, $password, $dbname);
if($conn->connect_error) die("db 접속 오류")
	
?>