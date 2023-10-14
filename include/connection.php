<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "bazaarsodai_mrk14837";
$mysql_db_password = "j+AV$~=pL2x)";
$mysql_db_database = "bazaarsodai_mrk14837";

$con = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
    $mysql_db_database);
if (!$con) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
?>