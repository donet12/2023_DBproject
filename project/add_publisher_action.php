

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$p_id = $_POST['p_id'];
	$p_name = $_POST['p_name'];
	$p_phone = $_POST['p_phone'];
	
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$query = "INSERT INTO 출판사(출판사코드, 출판사이름, 대표전화) VALUES('$p_id', '$p_name', '$p_phone')";
	
	$result = mysqli_query($conn, $query);
	$count = mysqli_num_rows($result);
	
	if ($count > 0){
		msg("중복입니다.");
		exit();
	}
	if ($result == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>