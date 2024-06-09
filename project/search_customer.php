<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
?>

<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>고객번호</th>
            <th>이름</th>
            <th>주민번호</th>
            <th>주소</th>
            <th>전화번호</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");

        if ($id == "admin") {
            $query = "SELECT DISTINCT 고객번호, 이름, 주민번호, 주소 FROM 고객 NATURAL JOIN 전화번호";
        } else {
            $query = "SELECT DISTINCT 고객번호, 이름, 주민번호, 주소 FROM 고객 NATURAL JOIN 전화번호 WHERE 고객번호='$id'";
        }
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>";

            $phoneQuery = "SELECT 전화번호 FROM 전화번호 WHERE 고객번호 = '$row[0]'";
            $phoneResult = mysqli_query($conn, $phoneQuery);

            if ($phoneResult) {
                $phoneNumbers = array();
                while ($phoneRow = mysqli_fetch_assoc($phoneResult)) {
                    $phoneNumbers[] = $phoneRow['전화번호'];
                }
                echo implode(', ', $phoneNumbers);
            } else {
                echo "전화번호 조회 오류: " . mysqli_error($conn);
            }

            echo "</td></tr>";
        }
        ?>
    </table>
    <form method="POST" action="main.php">
        <button type="submit">뒤로가기</button>
    </form>
</div>
