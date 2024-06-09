<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$p_id =$_POST['p_id'];
	$p_name = $_POST['p_name'];
	$p_phone = $_POST['p_phone'];
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "UPDATE 출판사 SET 출판사이름 = '$p_name', 대표전화 = '$p_phone' WHERE 출판사코드='$p_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>