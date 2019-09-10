<?php

$link = mysqli_connect('localhost','root','','quest');

	if(mysqli_connect_errno())
	{
		echo 'ERROR ('.mysqli_connect_errno().') : '. mysqli_connect_error()	;
		exit();
	}

if (!$mysqli->query("INSERT INTO users VALUES (seven), (six), (nine)")) {
    echo "Не удалось выполнитьnвставку: (" . $mysqli->errno . ") " . $mysqli->error;
}
?>

