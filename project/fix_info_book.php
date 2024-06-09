<?php
session_start();
	$b_id = $_GET['b_id'];
	$p_id = $_GET['p_id'];
?>
<html>
	
    <head>
        <title>도서정보 수정</title>
    </head>
    <body>
        <h1>도서정보 수정</h1>
        <form method="POST" action="fix_book_action.php">
        <p>
        	
            도서번호 : 
            <input readonly type="text" name="b_id" value = "<?echo $b_id?>"/>
        <p>
         <p>
            제목 : 
            <input type="text" name="b_name" />
        <p>
         <p>
            저자 : 
            <input type="text" name="a_name" />
        <p>
        <p>
            출판년도 : 
            <input type="text" name="year" />
        <p>
        <p>
            장르 : 
            <input type="text" name="genre" />
        <p>
        <p>
            출판사이름 : 
            <input readonly type="text" name="p_id" value = "<?echo $p_id?>"/>
        <p>
        <p><input type="submit" value="수정"></p>
        </form>
    </body>
</html>