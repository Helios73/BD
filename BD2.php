<?php

$link = mysqli_connect('localhost','root','','quest');

	if(mysqli_connect_errno())
	{
		echo 'ERROR ('.mysqli_connect_errno().') : '. mysqli_connect_error()	;
		exit();
	}

$result = mysqli_query("INSERT INTO `Users`(`Name`, `Phone`, `Email`) VALUES ('name','phone','email')");
if ($result) {
    echo "Успех";
}
else {
    echo "Неудача";
} 

?>
<html>
<head>
 <title>Запись в БД через форму на php</title>
</head>
<body>
 <form method="POST" action="">
  <input name="name" type="text">
  <input name="text" type="text">
  <input type="submit" value="Отправить">
 </form>
</body>
</html>
