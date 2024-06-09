<?php
session_start();
	$l_id = $_GET['l_id'];
?>
<html>
	
    <head>
        <title>대출/반납정보 수정</title>
    </head>
    <body>
        <h1>대출/반납정보 수정</h1>
        <form method="POST" action="fix_loan_action.php">
        <p>
        	
            대출번호 : 
            <input readonly type="text" name="l_id" value = "<?echo $l_id?>"/>
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
            대출일자 : 
            <input type="text" name="l_date" />
        <p>
        <p>
            반납일자 : 
            <input type="text" name="r_date" />
        <p>
        
        <p><input type="submit" value="수정"></p>
        </form>
    </body>
</html>