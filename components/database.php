<?php
$mysqli = new mysqli("edudb-02.nameserver.sk", "em1t", "Limonada03", "ronanhost");
if ($mysqli->connect_error) {
    exit('We are having trouble connection to our servers. Please try again later.');
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");
?>