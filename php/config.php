<?php
// Create connection
$conn_string = "host=ec2-54-91-178-234.compute-1.amazonaws.com port=5432 dbname=d5oiuu5n5pjd3a user=ljhinkoxaubwmq password=b74f2b65cdd29955d711d7e813b4bae5f28db37c953ffa13bb363ad2fe6e360a";
$conn = pg_connect($conn_string);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "SUCCESFULLY CONNECTED";
?>