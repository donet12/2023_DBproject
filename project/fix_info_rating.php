<?php
session_start();
	$id = $_GET['id'];
	$b_id =$_GET['b_id'];
?>
<html>
	
    <head>
        <title>평가정보 수정</title>
    </head>
    <body>
        <h1>평가정보 수정</h1>
        <form method="POST" action="fix_rating_action.php">
        <p>
        	
            고객번호 : 
            <input readonly type="text" name="id" value = "<?echo $id?>"/>
        <p>
         <p>
            도서번호 : 
            <input readonly type="text" name="b_id" value = "<?echo $b_id?>"/>
        <p>
         <p>
            평가내용 : 
            <input type="text" name="r_input" />
        <p>
        <p>
            평가점수 : 
            <input type="text" name="r_score" />
        <p>
        <p>
            평가날짜 : 
            <input type="text" name="ra_date" />
        <p>
        
        <p><input type="submit" value="수정"></p>
        </form>
    </body>
</html>