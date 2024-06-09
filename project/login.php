<!DOCTYPE html>

<html>
    <head>
        <title>고려 도서관 로그인</title>
    </head>
    <body>
        <h1>고려 도서관 로그인</h1>
        <form method="POST" action="login_action.php">
        <p>
            고객번호 : 
            <input type="text" name="id" />
        <p>
        <p>
            이름 : 
            <input type="text" name="name" />
        <p>               
        <p><input type="submit" value="로그인"></p>
        </form>
        <form method="POST" action="register.php">
        <p><input type="submit" value="회원가입"></p>
        </form>
        <form method="POST" action="start_login.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>