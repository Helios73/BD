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

<!DOCTYPE html>
<html>
<head>
	<title>BD zapros</title>
</head>
<body>

<form action="insert.php" method="post">
            Name: <input type="varchar" name="Name">
            <br>
            Phone: <input type="varchar" name="Phone">
            <br>
            <input type="submit" value="insert">
            Email: <input type="varchar" name="email">

</form>

</body>
</html>