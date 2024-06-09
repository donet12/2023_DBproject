

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$p_id = $_GET['p_id'];
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "DELETE FROM 출판사 WHERE 출판사코드 = '$p_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("ERROR!");
	}
	header('location: main.php');
	exit();
?>