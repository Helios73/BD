<?php

$link = mysqli_connect('localhost','root','','quest');

	if(mysqli_connect_errno())
	{
		echo 'ERROR ('.mysqli_connect_errno().') : '. mysqli_connect_error()	;
		exit();
	}


 if (!($stmt = $mysqli->prepare("INSERT INTO users(id) VALUES (4)"))) {
    echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
}
?>

