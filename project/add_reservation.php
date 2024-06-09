<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
session_start();
$id = $_SESSION['id'];
if($id =="admin")
		msg("관리자는 예약이 불가능합니다.");
?>
<html>
	
    <head>
        <title>도서 예약</title>
    </head>
    <body>
        <h1>도서 예약</h1>
        <form method="POST" action="add_reservation_action.php">
        <p>
        	
            고객번호 : 
            <input type="text" name="id" value = "<?echo $id?>"/>
        <p>
         <p>
            도서번호 : 
            <input type="text" name="b_id" />
        <p>
         <p>
            예약일자 : 
            <input type="text" name="re_date" />
        <p>
        
        	<input type="submit" value="추가"></p>
        </form>
        <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>