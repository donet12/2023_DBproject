<?php
session_start();
	$re_id = $_GET['re_id'];
?>
<html>
	
    <head>
        <title>예약정보 수정</title>
    </head>
    <body>
        <h1>예약정보 수정</h1>
        <form method="POST" action="fix_reservation_action.php">
        <p>
        	
            예약번호 : 
            <input readonly type="text" name="re_id" value = "<?echo $re_id?>"/>
        <p>
         <p>
            고객번호 : 
            <input type="text" name="id" />
        <p>
         <p>
            도서번호 : 
            <input type="text" name="b_id" />
        <p>
        <p>
            예약일자 : 
            <input type="text" name="re_date" />
        <p>
        
        <p><input type="submit" value="수정"></p>
        </form>
    </body>
</html>