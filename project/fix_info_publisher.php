<?php
session_start();
	$p_id = $_GET['p_id'];
?>
<html>
	
    <head>
        <title>출판사정보 수정</title>
    </head>
    <body>
        <h1>출판사정보 수정</h1>
        <form method="POST" action="fix_publisher_action.php">
        <p>
        	
            출판사코드 : 
            <input readonly type="text" name="p_id" value = "<?echo $p_id?>"/>
        <p>
         <p>
            출판사이름 : 
            <input type="text" name="p_name" />
        <p>
         <p>
            대표전화 : 
            <input type="text" name="p_phone" />
        <p>
        <p><input type="submit" value="수정"></p>
        </form>
    </body>
</html>