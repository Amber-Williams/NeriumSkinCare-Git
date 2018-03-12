<?

echo "111111111111testing this ...........working again";



require("mysqlconn.php");



$sql = "alter table AtoxTimeClock add RemoteIP varchar(50) not null";

$result = mysql_query($sql) or die(mysql_error());



$sql1 = "alter table AtoxTimeClock add ProxySetIP varchar(50) not null";

$result1 = mysql_query($sql1) or die(mysql_error());



echo "222222222222testing this ...........working again and again";

?>