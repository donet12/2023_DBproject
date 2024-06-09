<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
session_start();
$id = $_SESSION['id'];
if($id =="admin")
		msg("관리자는 평가가 불가능합니다.");
?>

<html>
	
    <head>
        <title>평가 등록</title>
    </head>
    <body>
        <h1>평가 등록</h1>
        <form method="POST" action="add_rating_action.php">
         <p>
            고객번호 : 
            <input readonly type="text" name="id" value = "<?echo $id?>" />
        <p>
        <p>
            도서번호 : 
            <input type="text" name="b_id" />
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
            <input type="submit" value="등록"></p>
        </form>
        <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>