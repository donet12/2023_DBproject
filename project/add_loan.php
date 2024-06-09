<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
session_start();
$id = $_SESSION['id'];
if($id =="admin")
		msg("관리자는 대출이 불가능합니다.");
?>

<html>
	
    <head>
        <title>대출하기</title>
    </head>
    <body>
        <h1>대출하기</h1>
        <form method="POST" action="add_loan_action.php">
         <p>
            고객번호 : 
            <input readonly type="text" name="id" value = "<?echo $id?>" />
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
        
        	<input type="submit" value="대출"></p>
        </form>
        <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>