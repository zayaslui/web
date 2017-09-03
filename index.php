<?php
echo "si no funciona es una mierda";

$dbhost = getenv("MYSQL_SERVICE_HOST");

$dbport = getenv("MYSQL_SERVICE_PORT");

$dbuser = getenv("MYSQL_USER");

$dbpwd = getenv("MYSQL_PASSWORD");

$dbname = getenv("MYSQL_DATABASE");

echo $dbport;
echo $dbuser;
echo $dbpwd;
echo $dbname;
var_dump($_ENV);


$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();

echo "hola que tal luis,.....asdjflkjasdkjfklajsd.";

// var_dump(getenv());

?>
