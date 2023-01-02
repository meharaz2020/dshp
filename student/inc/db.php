<?php

$db = mysqli_connect("localhost", "root","","daffodil");

if ($db) {
	// echo "mysql connect successfully";
}
else{
	die("database connection fail".mysqli_error($db));
}

?>