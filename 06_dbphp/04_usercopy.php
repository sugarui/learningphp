<?php
ini_set("display_errors", "1");
include_once('./01_db.php');
if(!empty($_POST['name'])){
    $sql = 'INSERT INTO `learn01` (`name`, `create`) VALUES (\''.mysql_real_escape_string($_POST['name']).'\', NOW())';
    $result = mysql_query($sql);
    if (!$result) {
        $message  = '오류: ' . mysql_error() . "\n";
        $message .= '쿼리: ' . $sql;
        die($message);
    } 
}
?>
<html>
    <body>
        <form action="./04_usercopy.php" method="POST">
            <label>이름</label><input name="name" type="input" />
        </form>
<?php
    $sql  = "SELECT * FROM `learn01` ORDER BY id DESC LIMIT 10";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)) {
        echo htmlspecialchars("{$row['id']},{$row['name']},{$row['create']}")."<br />";
    }
?>
    </body>
</html>