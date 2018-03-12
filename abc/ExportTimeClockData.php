<?

$STT = 'STT';
//if (!isset($_SERVER['PHP_AUTH_USER'])) {
if ($STT =='STTT') {
    header('WWW-Authenticate: Basic realm="ALERT"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Please enter the username and password';
    exit;

} else{  if( $STT == 'STT' ) {
//} else{  if( $_POST['PHP_AUTH_USER'] == 'admin' && $_POST['PHP_AUTH_PW'] == '4154413204' ) {
//} else{  if( $_SERVER['PHP_AUTH_USER'] == 'admin' || $_SERVER['PHP_AUTH_PW'] == 'admin' ) {
//    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";

require("mysqlconn.php");

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

$result1 = mysql_query($sqlquery) or die(mysql_error());

if($result1) $num1=mysql_num_rows($result1);

// Functions for export to excel.
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}
function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}
function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}
function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}

$today = date("m-d-Y");

$fileName = "NSCTimeClockData-".$fromdate."_".$todate.".xls";

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=".$fileName);
header("Content-Transfer-Encoding: binary ");

xlsBOF();

/*
Make a top line on your excel sheet at line 1 (starting at 0).
The first number is the row number and the second number is the column, both are start at '0'
*/


xlsWriteLabel(0,0,"NSC Time Clock Data $fromdate to $todate");


// Make column labels. (at line 3)
xlsWriteLabel(2,0,"Date");
xlsWriteLabel(2,1,"S No");
xlsWriteLabel(2,2,"Staff or Consultant ID");
xlsWriteLabel(2,3,"Staff or Consultant First Name & Last Initial");
xlsWriteLabel(2,4,"Project");
xlsWriteLabel(2,5,"Clock IN");
xlsWriteLabel(2,6,"Clock OUT");
xlsWriteLabel(2,7,"Total Hours");
xlsWriteLabel(2,8,"Converted Time");
xlsWriteLabel(2,9,"Comments");
xlsWriteLabel(2,10,"ClockAdjNotes");
xlsWriteLabel(2,11,"RemoteIP & ProxySetIP");

$xlsRow = 3;
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
			xlsWriteLabel($xlsRow,0,"Total Admin Hours");xlsWriteLabel($xlsRow,7,$totaladminhours);

			$convertedtimeinminutes = $totalhoursperday['minutes'];
			$convertedtimeinhours = $totalhoursperday['hours'];
			$convertedtimeindecimals = ceil((10*$convertedtimeinminutes)/60);

			if($convertedtimeindecimals == 10)
			{
				$convertedtimeinhours = $convertedtimeinhours+1;
				$convertedtimeindecimals = 0;
			}

			$convertedtime = $convertedtimeinhours.".".$convertedtimeindecimals;
			xlsWriteNumber($xlsRow,8,$convertedtime);

			//echo "<br>tah is ".$totaladminhours;
			$xlsRow++;$xlsRow++;
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

xlsWriteLabel($xlsRow,0,substr($row['ClockIN'],0,10));
xlsWriteNumber($xlsRow,1,$sno);
xlsWriteLabel($xlsRow,2,$row["EmpID"]);
xlsWriteLabel($xlsRow,3,$row["EmpName"]);
xlsWriteLabel($xlsRow,4,$row["Job"]);
xlsWriteLabel($xlsRow,5,$row['ClockIN']);
xlsWriteLabel($xlsRow,6,$row['ClockOUT']);
xlsWriteLabel($xlsRow,7,$totalHours);
xlsWriteLabel($xlsRow,9,$row['Comments']);
xlsWriteLabel($xlsRow,10,$row['ClockAdjNotes']);
$twoIps = $row['RemoteIP']." ".$row['ProxySetIP'];
xlsWriteLabel($xlsRow,11,$twoIps);

$xlsRow ++;
$sno ++;
	//echo "<br>". $sno."........".$row['ClockID'].".........".$row['EmpID']."..........".$row["Job"].".......".$row['ClockIN']."........".$row['ClockOUT']."...........".$row['Comments']."..........".$row['Status']."............".$totalHours."<br>";
	//$sno ++;
}

			$totalhoursperday = @total_hours_per_day($allMinutes);
			$totaladminhours = sprintf( '%02d:%02d', $totalhoursperday['hours'], $totalhoursperday['minutes'] );
			xlsWriteLabel($xlsRow,0,"Total Admin Hours");xlsWriteLabel($xlsRow,7,$totaladminhours);

			$convertedtimeinminutes = $totalhoursperday['minutes'];
			$convertedtimeinhours = $totalhoursperday['hours'];
			$convertedtimeindecimals = ceil((10*$convertedtimeinminutes)/60);

			if($convertedtimeindecimals == 10)
			{
				$convertedtimeinhours = $convertedtimeinhours+1;
				$convertedtimeindecimals = 0;
			}

			$convertedtime = $convertedtimeinhours.".".$convertedtimeindecimals;
			xlsWriteNumber($xlsRow,8,$convertedtime);

			//echo "<br>tah is ".$totaladminhours;
			$xlsRow++;$xlsRow++;

xlsEOF();
exit();
} //end of if
else
	{
		header('WWW-Authenticate: Basic realm="ALERT"');
		header('HTTP/1.0 401 Unauthorized');
		echo 'Please enter the username and password';
		exit;

	}
}
?>


