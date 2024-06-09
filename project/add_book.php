<?php
session_start();
	$id = $_GET['id'];
?>
<html>
	
    <head>
        <title>도서정보 추가</title>
    </head>
    <body>
        <h1>도서정보 추가</h1>
        <form method="POST" action="add_book_action.php">
        <p>
        	
            도서번호 : 
            <input type="text" name="b_id"/>
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
            출판사코드 : 
            <input type="text" name="p_id" />
        <p>
        	<input type="submit" value="추가"></p>
        </form>
        <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>