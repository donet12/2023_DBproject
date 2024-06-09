<?php
session_start();
	$id = $_GET['id'];
?>
<html>
	
    <head>
        <title>고객정보 수정</title>
    </head>
    <body>
        <h1>고객정보 수정</h1>
        <form method="POST" action="fix_customer_action.php">
        <p>
        	
            고객번호 : 
            <input readonly type="text" name="id" value = "<?echo $id?>" />
        <p>
         <p>
            이름 : 
            <input type="text" name="name" />
        <p>
         <p>
            주민번호 : 
            <input type="text" name="ssd" />
        <p>
        <p>
            주소 : 
            <input type="text" name="address" />
        <p>
        <p>
            전화번호  : 
            <input type="text" name="phone" />
        <p><input type="submit" value="수정"></p>
        <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>