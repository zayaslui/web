<?php


$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");


echo MYSQL_USER;

echo $dbport;
echo $dbuser;
echo $dbpwd;
echo $dbname;



// $connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// if ($connection->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// } else {
//     printf("Connected to the database");
// }
// $connection->close();

// echo "hola que tal luis,.....asdjflkjasdkjfklajsd.";

// var_dump(getenv());

?>
