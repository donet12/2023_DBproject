<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='fix_info_customer.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$id =$_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$ssd =$_POST['ssd'];
	$phone = $_POST['phone'];
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "UPDATE 고객 SET 이름 = '$name', 주소 = '$address', 주민번호 = '$ssd' WHERE 고객번호 = '$id'";
	$query1 = "UPDATE 전화번호 SET 전화번호= '$phone' WHERE 고객번호 = '$id'";
	$r = mysqli_query($conn, $query);
	$r1 = mysqli_query($conn, $query1);
	if ($r == false) {
		msg("잘못된 입력");
	}
	if ($r1 == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>