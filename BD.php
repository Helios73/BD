<php?

$host = "localhost";
$user = "root";
password = "";
db_name = "quest";

		$connect = mysql_connect($host,$user,$password);

	mysql_select_bd($db_name,$connect);

	if(connect == true) {
	echo "Succes";
	}else{
	echo "FAIL";
	}
?>