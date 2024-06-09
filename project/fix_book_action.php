<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='fix_info_customer.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$b_id =$_POST['b_id'];
	$b_name = $_POST['b_name'];
	$a_name = $_POST['a_name'];
	$year = $_POST['year'];
	$genre =$_POST['genre'];
	
	$date = DateTime::createFromFormat('Y-m-d', $year);
	$dateString = $date->format('Y-m-d');
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "UPDATE 도서 SET 제목 = '$b_name', 저자 = '$a_name', 출판년도 = '$dateString', 장르 = '$genre' WHERE 도서번호='$b_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>