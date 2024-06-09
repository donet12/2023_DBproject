

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$id = $_GET['id'];
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "DELETE FROM 전화번호 WHERE 고객번호 = '$id'";
	$query1 = "DELETE FROM 고객 WHERE 고객번호 = '$id'";
	$r = mysqli_query($conn, $query);
	$r1 = mysqli_query($conn, $query1);
	if ($r == false) {
		msg("ERROR!");
	}
	if ($r1 == false) {
		msg("ERROR!");
	}
	header('location: login.php');
	exit();
?>