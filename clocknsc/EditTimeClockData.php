<?
$STT = 'STT';
if ($STT =='STTT') {
//if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="ALERT"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Please enter the username and password';
    exit;
//} else{  if( $_POST['PHP_AUTH_USER'] == 'admin' && $_POST['PHP_AUTH_PW'] == '4154413204' ) {
} else{  if( $STT == 'STT' ) {


//    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";

require("mysqlconn.php");

$count = $_REQUEST['count'];
if($count == 1)
{
	$set = 0;
	$clockID = $_POST['clockID'];
	$job = $_POST['job'];
	$clockIn = $_POST['clockIn'];
	$clockOut = $_POST['clockOut'];

	for($i = 0;$i<sizeof($clockID);$i++)
	{
		$presql = "select ClockOUT from AtoxTimeClock where ClockID=$clockID[$i]";
		$preresult = mysql_query($presql) or die(mysql_error());
		if( $prerow = mysql_fetch_row($preresult))
			$AclockOut = $prerow[0];

		//echo $clockID[$i].".....".$job[$i].".....".$clockIn[$i].".....".$clockOut[$i].".......".$AclockOut."<br>";

		$sql = "update AtoxTimeClock set ClockIN='$clockIn[$i]',Job='$job[$i]'";
		if( (($clockOut[$i]) && ($AclockOut)) || (($clockOut[$i] == '') && ($AclockOut)) || (($clockOut[$i])&&($AclockOut == '')))
			$sql = $sql . ",ClockOUT='$clockOut[$i]'";

		$sql = $sql . " where ClockID=$clockID[$i]";
		//echo $sql."<br>";
		$result = mysql_query($sql) or die(mysql_error());

		if($result) $set = 1;

		mysql_free_result($preresult);
	}

	if($set == 1)
	{
			$msg = "Atox Time Clock Data is updated successfully";
			echo "<form method=post>
				<input type=hidden name=count value=2>
				<input type=hidden name=msg value='$msg'>
				<input type=hidden name=fromdate value='$fromdate'>
				<input type=hidden name=todate value='$todate'>";
			   for( $j = 0 ;$j<sizeof($empIDs);$j++)
			   {?>
				<input type=hidden name='empIDs[]' value='<?echo $empIDs[$j]?>'>
				<?} ?>
			  <?for( $j = 0 ;$j<sizeof($jobs);$j++)
			   {?>
				<input type=hidden name='jobs[]' value='<?echo $jobs[$j]?>'>
				<?}

				echo "<script>document.forms[0].action='EditTimeClockData.php';document.forms[0].submit();</script></form>";
	}
}
else
{
$fromdate = $_REQUEST['fromdate'];
$todate = $_REQUEST['todate'];
$empIDs = $_REQUEST['empIDs'];
$jobs = $_REQUEST['jobs'];

function get_time_difference( $start, $end )
{
    $uts['start']      =    strtotime( $start );
    $uts['end']        =    strtotime( $end );
    if( $uts['start']!==-1 && $uts['end']!==-1 )
    {
        if( $uts['end'] >= $uts['start'] )
        {
            $diff    =    $uts['end'] - $uts['start'];
            if( $days=intval((floor($diff/86400))) )
                $diff = $diff % 86400;
            if( $hours=intval((floor($diff/3600))) )
                $diff = $diff % 3600;
            if( $minutes=intval((floor($diff/60))) )
                $diff = $diff % 60;
            $diff    =    intval( $diff );
            return( array('days'=>$days, 'hours'=>$hours, 'minutes'=>$minutes, 'seconds'=>$diff) );
        }
        else
        {
            trigger_error( "Ending date/time is earlier than the start date/time", E_USER_WARNING );
        }
    }
    else
    {
        trigger_error( "Invalid date/time data detected", E_USER_WARNING );
    }
    return( false );
}
function total_hours_per_day( $totaltimeinminutes )
{
	if($hours=intval((floor($totaltimeinminutes/60))) )
	{
		//echo "<br>hours is ".$hours;
		$totaltimeinminutes = $totaltimeinminutes % 60;
	}
	$minutes    =    intval( $totaltimeinminutes );
	//echo "<br>minutes is ".$minutes;

	return( array('hours'=>$hours, 'minutes'=>$minutes) );
}



$sqlquery = "select * from AtoxTimeClock where date(ClockIN) >='".$fromdate."' and date(ClockIN) <= '".$todate."'";
if(sizeof($empIDs) > 0)
{
	$sqlquery = $sqlquery . " and empID in(";
	for($i = 0;$i<sizeof($empIDs);$i++)
	{
		if($i == 0)
			$sqlquery = $sqlquery ."'$empIDs[$i]'";
		else
			$sqlquery = $sqlquery .",'$empIDs[$i]'";
	}
	$sqlquery = $sqlquery . ") ";
}

if(sizeof($jobs) > 0)
{
	$sqlquery = $sqlquery . " and Job in(";
	for($i = 0;$i<sizeof($jobs);$i++)
	{
		if($i == 0)
			$sqlquery = $sqlquery ."'$jobs[$i]'";
		else
			$sqlquery = $sqlquery .",'$jobs[$i]'";
	}
	$sqlquery = $sqlquery . ") ";
}

$sqlquery = $sqlquery . " order by date(ClockIN),EmpID,ClockIN,Job ";

//echo $sqlquery;
?>
<html>
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
		</style>
<script>
function validate()
{
		for(var i=0;i<document.forms[0].elements.length;i++)
		{
			if(document.forms[0].elements[i].name == 'job[]')
			{
				if(document.forms[0].elements[i].value == '')
				{
					alert('Please enter the job');document.forms[0].elements[i].focus();return false;
				}
			}
			if(document.forms[0].elements[i].name == 'clockIn[]')
			{
				//alert(document.forms[0].elements[i].name+"..."+document.forms[0].elements[i].value);
				if(document.forms[0].elements[i].value == '')
				{
					alert('Please enter clock In time');document.forms[0].elements[i].focus();return false;
				}
				else
				{
					//var reg = /^([0-9]{4}):([0-9]{2}):([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/;
					var reg = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
					var clockIn = document.forms[0].elements[i].value;

					if(clockIn.match(reg) == null)
					{
						alert('Please enter clockIn in yyyy-mm-dd hh:ii:ss format');document.forms[0].elements[i].focus(); return false;
					}
				}
			}
			if(document.forms[0].elements[i].name == 'clockOut[]')
			{
				//alert(document.forms[0].elements[i].name+"..."+document.forms[0].elements[i].value);
				if(document.forms[0].elements[i].value)
				{
					//var reg = /^([0-9]{4}):([0-9]{2}):([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/;
					var reg = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
					var clockOut = document.forms[0].elements[i].value;

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
</head>
<body bgcolor='#144960' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'><center><br><br>
		<?
$result1 = mysql_query($sqlquery) or die(mysql_error());

if($result1) $num1=mysql_num_rows($result1);
?>
				<div align="center">
				  <table width="780" border="2" cellspacing="0" cellpadding="0">
					<tr>
					  <td align="center" valign="top"><img src="images/topnew.jpg" width="780" height="156" border="0" usemap="#Map"></td>
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
						<?if($num1 > 0) { ?>
						<form method=post action='EditTimeClockData.php' onSubmit='return validate()'>
						<input type=hidden name='count' value=1>
						<input type=hidden name=fromdate value='<?echo $fromdate?>'>
						<input type=hidden name=todate value='<?echo $todate?>'>
						<?for( $j = 0 ;$j<sizeof($empIDs);$j++)
						{?>
							<input type=hidden name='empIDs[]' value='<?echo $empIDs[$j]?>'>
						<?} ?>
						<?for( $j = 0 ;$j<sizeof($jobs);$j++)
						{?>
							<input type=hidden name='jobs[]' value='<?echo $jobs[$j]?>'>
						<?}?>

						<span class='unnamed1'><b><?echo $_POST['msg']?></b><br><br><b>Atox Time Clock Data <?echo $fromdate?> to <?echo $todate?></b></span><br><br>
				<table border=1 width="780">
					<tr>
					<th width="120"><span class='unnamed1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></th>
					<th width="30"><span class='unnamed1'>SNo</span></th>
					<th width="50"><span class='unnamed1'>Staff or Consultant ID</span></th>
					<th width="60"><span class='unnamed1'>Staff or Consultant<br>First Name & Last Initial</span></th>
					<th width="50"><span class='unnamed1'>Project</span></th>
					<th width="130"><span class='unnamed1'>Clock IN</span></th>
					<th width="130"><span class='unnamed1'>Clock Out</span></th>
					<th width="50"><span class='unnamed1'>Total Hours</span></th>
					<th width="30"><span class='unnamed1'>Converted Time</span></th>
					<th width="70"><span class='unnamed1'>Comments</span></th>
					<th width="30"><span class='unnamed1'>Clock-Adj. Notes</span></th>
					<th width="30"><span class='unnamed1'>RemoteIP  ProxySetIP</span></th>
					</tr>
<?
$sno = 1;

// Put data records from mysql by while loop.
while($row=mysql_fetch_array($result1))
{

	if($sno == 1)
	{
		$perdate = substr($row['ClockIN'],0,10);
		$allMinutes = 0;
	}
	else
	{
		if( ($perdate != substr($row['ClockIN'],0,10)) )
		{
			//echo "before going to function am is ".$allMinutes;
			$totalhoursperday = @total_hours_per_day($allMinutes);
			$totaladminhours = sprintf( '%02d:%02d', $totalhoursperday['hours'], $totalhoursperday['minutes'] );

			$convertedtimeinminutes = $totalhoursperday['minutes'];
			$convertedtimeinhours = $totalhoursperday['hours'];
			$convertedtimeindecimals = ceil((10*$convertedtimeinminutes)/60);

			if($convertedtimeindecimals == 10)
			{
					$convertedtimeinhours = $convertedtimeinhours+1;
					$convertedtimeindecimals = 0;
			}

			$convertedtime = $convertedtimeinhours.".".$convertedtimeindecimals;

			echo "<tr><td colspan=6>&nbsp;</td><td><span class='unnamed1'><b>Total Admin Hours</b></span></td>
			<td><span class='unnamed1'><b>$totaladminhours</b></span></td><td align=right><span class='unnamed1'><b>$convertedtime</b></span></td><td>&nbsp;</td><td>&nbsp;</td></tr>";
			//echo "<br>tah is ".$totaladminhours;
			$perdate = substr($row['ClockIN'],0,10);$allMinutes = 0;
		}
	}

	if($row['ClockOUT'])
	{
		if( $diff=@get_time_difference($row['ClockIN'], $row['ClockOUT']) )
		{
			$totaltimeinminutes = ($diff['hours']*60) +  $diff['minutes'];
			//echo "<br>ttim is ".$totaltimeinminutes;
			$totalHours =  sprintf( '%02d:%02d', $diff['hours'], $diff['minutes'] );
			$allMinutes = $allMinutes + $totaltimeinminutes;
			//echo "<br> am is ".$allMinutes;
		}
		else
		{
			$totalHours = 'Error in  calculating';
		}
	}
	else $totalHours = '';

	echo "<tr>
					<td width='120'><span class='unnamed1'>".substr($row['ClockIN'],0,10)."</span></td>
					<input type=hidden name='clockID[]' value=".$row['ClockID'].">
					<td width='30'><span class='unnamed1'>".$sno."</span></td>
					<td width='50'><span class='unnamed1'>".$row['EmpID']."</span></td>
					<td width='60'><span class='unnamed1'>".$row['EmpName']."</span></td>
					<td width='50'><input type=text name='job[]' value='".$row['Job']."' size=20></td>
					<td width='130'><input type=text name='clockIn[]' value='".$row['ClockIN']."'></td>
					<td width='130'><input type=text name='clockOut[]' value='".$row['ClockOUT']."'></td>
					<td width='50'><span class='unnamed1'>$totalHours</span></td>
					<td width='30'>&nbsp;</td>
					<td width='70'><span class='unnamed1'>".$row['Comments']."</span></td>
					<td width='30'><span class='unnamed1'>".$row['ClockAdjNotes']."</span></td>
					<td width='30'><span class='unnamed1'>".$row['RemoteIP']."<br>".$row['ProxySetIP']."</span></td>
		</tr>";


	$sno ++;
	//echo "<br>". $sno."........".$row['ClockID'].".........".$row['EmpID']."..........".$row["Job"].".......".$row['ClockIN']."........".$row['ClockOUT']."...........".$row['Comments']."..........".$row['Status']."............".$totalHours."<br>";
	//$sno ++;
}

$totalhoursperday = @total_hours_per_day($allMinutes);
$totaladminhours = sprintf( '%02d:%02d', $totalhoursperday['hours'], $totalhoursperday['minutes'] );

$convertedtimeinminutes = $totalhoursperday['minutes'];
$convertedtimeinhours = $totalhoursperday['hours'];
$convertedtimeindecimals = ceil((10*$convertedtimeinminutes)/60);

if($convertedtimeindecimals == 10)
{
	$convertedtimeinhours = $convertedtimeinhours+1;
	$convertedtimeindecimals = 0;
}
$convertedtime = $convertedtimeinhours.".".$convertedtimeindecimals;

echo "<tr><td colspan=6>&nbsp;</td><td><span class='unnamed1'><b>Total Admin Hours</b></span></td><td>
<span class='unnamed1'><b>$totaladminhours</b></span></td><td align='right'><span class='unnamed1'><b>$convertedtime</b></span></td><td>&nbsp;</td><td>&nbsp;</td></tr>";

//echo "<br>tah is ".$totaladminhours;

echo "</table></br>";

echo "<br><br><input type=submit value=Submit><br><br><br>";
echo "<script>function exportdatatoexcel() { document.forms[0].action='ExportTimeClockData.php';document.forms[0].submit(); }</script>";
echo "<a href='javascript:exportdatatoexcel();'><span class='unnamed1'><b> Export the above Data to Excel</b></span></a></form>";
echo "<br><br><a href='javascript:window.location=\"http://www.neriumskin.com/clocknsc/admin/\"'><span class='unnamed1'>Admin Home</span></a>";
} // end of if ($num1 > 0)
else
	{
		echo "<span class='unnamed1'><b>No Records found , ".$fromdate." to ".$todate."</b></span><br><br><br><a href='javascript:window.location=\"http://www.neriumskin.com/clocknsc/admin/\"'><span class='unnamed1'>Admin Home</span></a>";
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
  <area shape="rect" coords="710,6,761,23" href="http://www.sttresearch.com/">
</map>
</body>
</html>
<?
exit();
} //end of else of if($count == 1)
} //end of if
else
	{
		header('WWW-Authenticate: Basic realm="My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		echo 'Please enter the username and password';
		exit;

	}
}
?>


