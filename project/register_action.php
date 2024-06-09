

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='register.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$name = $_POST['name'];
	$address = $_POST['address'];
	$ssd =$_POST['ssd'];
	$phone = $_POST['phone'];
	$dup = "중복된 아이디";
	$randomID = rand(10000,99999 );
	if($name == null){
		header('location: login.php');
		exit();
	}
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$query = "SELECT 고객번호 FROM 고객 WHERE 고객번호 = '$randomID'";

	$result = mysqli_query($conn, $query);
	$count = mysqli_num_rows($result);
	
	

	
	if ($count > 0){
		msg($dup);
		exit();
	}
	$insert_query="INSERT INTO 고객(고객번호, 이름, 주민번호, 주소) VALUES('$randomID','$name','$ssd','$address')";
	mysqli_query($conn,$insert_query);
	foreach ($phone as $phones) {
    $insertPhoneQuery = "INSERT INTO 전화번호 (고객번호, 전화번호) VALUES ('$randomID', '$phones')";
    mysqli_query($conn, $insertPhoneQuery);
}


	echo "회원님의 고객번호는{$randomID}입니다.";
?>
<html>
    <body>
        <form method="POST" action="login.php">
         <button type="submit">로그인 페이지로 이동</button>
        </form>
    </body>
</html>