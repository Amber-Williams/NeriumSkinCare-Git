<?php

 //include file holds the database connection variables

  $server="72.167.233.102"; //mysql host
  $dusername="atoxclockapp"; //username
  $dpassword="at@xUser1900!"; //password
  $database="atoxclockapp"; // database name

 mysql_connect($server,$dusername,$dpassword);
 @mysql_select_db($database) or die("Error : Unable to connect database");

 ?>