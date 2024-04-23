<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Host Information</title>
</head>
<body>
    <h1>환영합니다!</h1>
    <?php
        $ip_address = $_SERVER['REMOTE_ADDR'];
        echo "<h3>당신의 IP 주소는: " . $ip_address . "</h3>";

        $HOST_NAME = ($_ENV['HOSTNAME']) ? $_ENV['HOSTNAME'] : php_uname('n');
        echo "<h3>호스트명: " . $HOST_NAME . "</h3>";
    ?>
</body>
</html>
