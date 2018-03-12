<?
require("mysqlconn.php");

$empID = $_POST['empID'];
$count = $_POST['count'];

if($count == "1")
{
	$set = "0";

	foreach($_POST as $key=>$value)
	{
		//echo $key."...........".$value."<br>";
		if(substr($key,0,4) == 'demo')
		{
			$clockID = substr($key,4);
			$clockOut = $value;
		}
		if(substr($key,0,15) == "clock_adj_notes")
		{
			$clockAdjNotes = $value;

			if($clockOut)
			{
				$sql = "update AtoxTimeClock set ClockOUT = '$clockOut',Status='Close',ClockAdjNotes='$clockAdjNotes' where ClockID=$clockID";
				//echo $sql;
				$result = mysql_query($sql) or die(mysql_error());
				if($result) $set = "1";
			}
		}
	}

	if($set == "1")
		echo "<script>
				function opentimeclock()
				{
					document.forms[0].action='TodayOpenTimeClock.php';
					document.forms[0].submit();
				}
			  </script>
	<center><br><br>Clock-Out Time is set Successfully<br><form method=post><input type=hidden name=empID value='".$empID."'><a href='javascript:opentimeclock();'>Back</a></form></center>";
}
else
{

	echo "<html>
			<head>
				<title>Atox Time Clock</title>
				<script language='javascript' type='text/javascript' src='datetimepicker.js'></script>
				<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
				<style type='text/css'>
				<!--
				.unnamed1 {
					font-family: Arial, Helvetica, sans-serif;
					font-size: 12px;
					font-weight: normal;
					color: #000000;
				}
				-->
				</style>";
	?>
	<script>
	function validate()
	{
		for(var i=0;i<document.forms[0].elements.length;i++)
		{
			var clockOut,clockIn;
			if(document.forms[0].elements[i].name == 'clockIn[]')
			{
				clockIn = document.forms[0].elements[i].value;
			}
			if( ((document.forms[0].elements[i].name).substring(0,4)) == 'demo')
			{
				//alert('name is : '+document.forms[0].elements[i].name);
				if(document.forms[0].elements[i].value)
				{
					//var reg = /^([0-9]{4}):([0-9]{2}):([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/;
					var reg = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
					clockOut = document.forms[0].elements[i].value;

					if(clockOut.match(reg) == null)
					{
						alert('Please enter clockOut in yyyy-mm-dd hh:ii:ss format');document.forms[0].elements[i].focus(); return false;
					}
					if(getdiff(clockIn,clockOut))
					{
						alert('ClockOut must be greater than ClockIn');return false;
					}
				}
			}
		}
		return true;
	}
	function getdiff(clockIn,clockOut)
	{
		var yearIn = clockIn.substring(0,4);
		var yearOut = clockOut.substring(0,4);
		var monthIn = parseInt((clockIn.substring(5,7)),10);
		var monthOut = parseInt((clockOut.substring(5,7)),10);
		var dayIn = parseInt((clockIn.substring(8,10)),10);
		var dayOut = parseInt((clockOut.substring(8,10)),10);
		//alert('yearIn : '+yearIn+' , monthIn : '+monthIn+' ,dayIn : '+dayIn);
		//alert('yearOut : '+yearOut+' , monthOut : '+monthOut+' ,dayOut : '+dayOut);
		var hourIn = parseInt((clockIn.substring(11,13)),10);
		var hourOut = parseInt((clockOut.substring(11,13)),10);
		var minIn = parseInt((clockIn.substring(14,16)),10);
		var minOut = parseInt((clockOut.substring(14,16)),10);
		var secIn = parseInt((clockIn.substring(17,19)),10);
		var secOut = parseInt((clockOut.substring(17,19)),10);
		//alert('hourIn : '+hourIn+' , minIn : '+minIn+' , secIn : '+secIn);
		//alert('hourOut : '+hourOut+' , minOut : '+minOut+' , secOut : '+secOut);
		var dateIn = new Date(yearIn,monthIn,dayIn,hourIn,minIn,secIn);
		var dateOut = new Date(yearOut,monthOut,dayOut,hourOut,minOut,secOut);

		//alert('dateIn:'+dateIn);
		//alert('dateOut:'+dateOut);

		var diff = Math.ceil((dateOut.getTime() - dateIn.getTime())/1000);

		if(diff < 0 )
			return true;

		return false;
	}
	</script>
	<?

		echo   "</head>
			<body bgcolor='#144960' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'><center><br><br>";
	if($empID == '')
			echo "<span class='unnamed1'>Please enter Staff or Consultant ID</span><br>";
	else
	{
		echo "<form method=post action='TodayOpenTimeClock.php' onsubmit='return validate();'>
				<input type=hidden name='empID' value='".$empID."'>
				<input type=hidden name='count' value=1>
				<center>";?>
				<div align="center">
				  <table width="780" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td align="left" valign="top"><img src="images/topnew.jpg" width="780" height="156" border="0" usemap="#Map"></td>
					</tr>
					<tr>
					  <td align="left" valign="top" bgcolor="#CEDEDF"><div align="left">
						  <table width="780" border="0" cellspacing="0" cellpadding="0">
							<tr>
							  <td align="left" valign="top">&nbsp;</td>
							</tr>
							  <tr>
								<td height="45" align="left" valign="top">&nbsp;</td>
							  </tr>
							</table>
						  </div></td>
					  </tr>
					  <tr>
						<td align=center bgcolor="#CEDEDF"><div align="center">
	<?
		$today = date("Y-m-d");
		$timestamp = time();
		$tody = getdate($timestamp);
		$yesturdy = gmdate("Y-m-d", mktime($tody["hours"],
					                   $tody["minutes"],
					                   $tody["seconds"],
					                   $tody["mon"],
					                   $tody["mday"]-1,
			                   		   $tody["year"]));

		$sql = "select * from AtoxTimeClock where ( (date(ClockIN) = '$today') or (date(ClockIN) = '$yesturdy' and Status='Open') ) and EmpID='$empID'";
		//echo $sql;
		$result = mysql_query($sql) or die(mysql_error());
		$statusOpenCount = 0;

		if(mysql_num_rows($result) > 0)
		{


				echo "<table border=1>
					<tr><th><span class='unnamed1'><b>Staff or Consultant ID</b></span></th><th><span class='unnamed1'><b>Staff or Consultant<br> First Name & Last Initial</b></span></th><th><span class='unnamed1'><b>Project</b></span></th><th><span class='unnamed1'><b>Clock IN</b></span></th><th><span class='unnamed1'><b>Clock Out</b></span></th><th><span class='unnamed1'><b>Clock-Adj. Notes(if any)</b></span></th></span></tr>";

		while($row = mysql_fetch_row($result))
		{
		echo "<tr>
					<td><span class='unnamed1'>".$row[1]."</span></td>
					<td><span class='unnamed1'>".$row[2]."</span></td>
					<td><span class='unnamed1'>".$row[5]."</span></td>
					<td><span class='unnamed1'>".$row[3]."</span></td>
					<input type=hidden name='clockIn[]' value='".$row[3]."'>
					<td>";
					if($row[7] == 'Open') { $statusOpenCount ++;

					$timestamp = time();
					$clockOut = getdate($timestamp);
					//$hours = 7;//before that it is 1,now got to GMT time and converted to PST
					$sql1 = "select ctime from clocktime";
					$result1 = mysql_query($sql1) or die(mysql_error());
					$row1 = mysql_fetch_row($result1);
					$hours = $row1[0]; //increased to 1 hour Day light savings
					$newclockOut = gmdate("Y-m-d H:i:s", mktime($clockOut["hours"] - $hours,
                                                $clockOut["minutes"],
                                                $clockOut["seconds"],
                                                $clockOut["mon"],
                                                $clockOut["mday"],
                                                $clockOut["year"]));

					echo "<input id='demo".$row[0]."' name='demo".$row[0]."' type='text' size='18' value='".$newclockOut."' readonly>";
					?><!--<a href="javascript:NewCal('demo<?echo $row[0]?>','yyyymmdd',true,24)"><img src='images/cal.gif' width='16' height='16' border='0' alt='Pick a date and time'></a><span class='unnamed1'>(Click here to pick a date and time)</span>-->
					 <?} else echo "<span class='unnamed1'>".$row[4]."</span>";  $taname = "clock_adj_notes".$row[0];?>
					</td><td><?if($row[8] == '') { ?><textarea cols=20 rows=3 name="<?echo $taname?>" ><?echo $row[8]?></textarea><? } else { echo "<span class='unnamed1'>".$row[8]."</span>"; } ?></td>
		<?echo "</tr>";
		}
		echo "</table>";
		if($statusOpenCount > 0)
			echo "<br><br><input type=submit value=Submit></form>";
			//echo "<br><br><span class='unnamed1'>If you don't want to set the clockout time now, for any particular record, please erase the clock out time for that record, and click on submit to set clock out time for other records</span>";
		}//end of if(mysql_num_rows($result) > 0)
		else
		{
			echo "<br><br><span class='unnamed1'><b>No Records found</b></span>";
		}
	} //end of else

	echo "<br><br><center><a href=\"javascript:window.location='index.php';\"><span class='unnamed1'>Clock Home</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:history.go(-1);'><span class='unnamed1'>Back</span></a></center>";
}
?>
        </div></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#45818D">&nbsp;</td>
    </tr>
  </table>
</div>
<map name="Map">
  <area shape="rect" coords="710,6,761,23" href="">
</map>
</body>
</html>
