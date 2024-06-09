
<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='admin_login.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$id = $_POST['id'];
	$name = $_POST['name'];
	$nu = "잘못된 관리자";
	$mm = "잘못된 관리자이름";
	
	if ($id == null || $name == null){
		header('location: start_login.php');
		exit();
	}
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$query = "SELECT * FROM 고객 WHERE 고객번호 = 'admin'";

	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_array($result);
	
	if ($data == null || count($data) == 0){
		msg($nu);
		exit();
	}
	
	$match = ($name == $data['이름']);
	
	if ($match == false){
		msg($mm);
		header('location: start_login.php');
		exit();
	}
	
	session_start();
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
	header("Location: main.php");
?>