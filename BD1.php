<?php

$link = mysqli_connect('localhost','root','','quest');

	if(mysqli_connect_errno())
	{
		echo 'ERROR ('.mysqli_connect_errno().') : '. mysqli_connect_error()	;
		exit();
	}

$name1 = $_POST['nick'];
$notes1 = $_POST['notes']; 
$date1 = $_POST['datetime'];

 echo ($name1);
 echo ($notes1);
 echo ($date1);


$result = mysqli_query("INSERT INTO `Users`(`Name`, `Phone`, `Email`) VALUES ('name','phone','email')");
if ($result) {
    echo "Успех";
}
else {
    echo "Неудача";
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>BD zapros</title>
</head>
<body>
<form method="post" action="BD1.php">
    <div class="col-sm-10">
         <div class="form-group label-floating">
           <label class="control-label">Лейбл</label>
             <input type="text" required>
         </div>

         <textarea class="form-control" name="not"></textarea>

         <input class="form-control" type="text"/>


         <button type="submit" class="button" name="submit">Отправить</button>
    </div>

</form>
</html>