<?
require("mysqlconn.php");
$count = $_POST['count'];

if($count == 1)
{
	echo "<br><br><br><center>";

	$empID = $_POST['empID'];
	$empName = $_POST['empName'];
	$empNameOther = $_POST['enames'];
	$job = $_POST['job'];
	$clockIn = $_POST['clockIn'];
	$comments = $_POST['comments'];

	if( ($empID == '') || ($job == '') || (($empName == '')&&($empNameOther == '')) )
		echo "Please enter Staff or Consultant ID/Staff or Consultant Name/select Project you are working on <br>";
	else
	{
		$todate = date("Y-m-d");

		$presql = "select count(*) from AtoxTimeClock where EmpID='$empID' and date(ClockIN) = '".$todate."' and status='Open'";
		$preresult = mysql_query($presql) or die(mysql_error());
		$prerow = mysql_fetch_row($preresult);
		if($prerow[0] > 0)
		{
			$msg = "You have already Clocked In,Please Clock-Out the project for which you have already Clocked-In and Clock-In again";
		}
		else
		{
			if($empName == '')
			{
				$empName = $empNameOther;
			}

			$comments = addslashes($comments);

			$remoteIP = $_SERVER['REMOTE_ADDR'];
			$proxySetIP = $_SERVER['HTTP_X_FORWARDED_FOR'];

			$sql = "insert into AtoxTimeClock(EmpID,EmpName,Job,ClockIn,Comments,Status,ClockOUT,RemoteIP,ProxySetIP) values('$empID','$empName','$job','$clockIn','$comments','Open',NULL,'$remoteIP','$proxySetIP')";
			$result = mysql_query($sql) or die(mysql_error());

			if($result) $msg = "Clock-In Time is set successfully";
		}
	}
	echo "<form method=post><input type=hidden name=count value=2><input type=hidden name=msg value='$msg'><script>document.forms[0].action='index.php';document.forms[0].submit();</script></form>";
}
else
{
?>
<html>

<head>
<title>Atox Time Clock</title>

<script>
function shownames()
{
	var eId = document.forms[0].empID.value;
	if(eId == '')
	{
		alert('Please enter the Staff or Consultant ID first');
		document.forms[0].empID.focus();
		return false;
	}
	else
	{
	if( (eId.length == 4) || (isNumeric(eId)) )
	{ }
	else
	{
		alert('Please enter the valid Staff or Consultant ID');
		document.forms[0].empID.focus();
		return false;
	}
	eId="E"+eId;

	if(eval("document.forms[0]."+eId))
	{
		var empNames = eval("document.forms[0]."+eId+".value");

		var mySplitResult = empNames.split("#");
		var eNamesSelect=document.getElementById("enames")

		if(mySplitResult.length > 0)
		{
			for(i = 0; i < mySplitResult.length; i++){
				eNamesSelect.add(new Option(mySplitResult[i], mySplitResult[i]))
			}
			var eNames = document.getElementById('existingnames');
			eNames.style.display ='block';

			document.forms[0].empName.disabled = true;
			document.forms[0].empName.value = '';
		}
	}
	}
}
function hidenames()
{
	var enames = document.getElementById('existingnames');
	enames.style.display ='none';
}
			function validate1()
			{
				var empID = document.forms[0].empID.value;
				var empName = document.forms[0].empName.value;
				var eId="E"+empID;

				if(empID == '')
				{
					alert('Please enter Staff or Consultant ID');
					document.forms[0].empID.focus();
					return false;
				}
				if( (!isNumeric(empID)) || ( ((empID.length) < 4) || ((empID.length) > 4) ) )
				{
					alert('Please enter only numbers in Staff or Consultant ID field/ Please enter atleast/only 4 digits for Staff or Consultant ID field');
					document.forms[0].empID.focus();
					return false;
				}
				if(eval("document.forms[0]."+eId))
				{ }
				else
				{
				if(empName == '')
				{
					alert('Please enter Staff or Consultant FirstName & Last Initial');
					document.forms[0].empName.focus();
					return false;
				}
				}

				if(document.forms[0].job.options[document.forms[0].job.options.selectedIndex].value == '')
				{
					alert('Please select the Project you are working on');
					document.forms[0].job.focus();
					return false;
				}
				return true;
			}
			function validate2()
			{
				if(document.forms[1].empID.value == '')
				{
					alert('Please enter Staff or Consultant ID');
					document.forms[1].empID.focus();
					return false;
				}
				return true;
			}
			function isNumeric(empID)
			{
				var ValidChars = "0123456789";
				for(var i=0;i<empID.length;i++)
				{
					ch = empID.charAt(i);
					if(ValidChars.indexOf(ch) == -1)
						return false;
				}
				return true;
			}
		</script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79255479-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());

          gtag('config', 'UA-79255479-2');
        </script>

    
    


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.unnamed1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	color: #000000;
}
.header {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: normal;
	color: #000000;
}
-->
</style>
</head>
	<body bgcolor="#144960" onLoad="javascript:hidenames();">
<div align="center">
  <table width="780" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="left" valign="top"><img src="images/topnew.jpg" width="780" height="156" border="0" usemap="#Map"></td>
    </tr>
    <tr>
      <td height="371" align="left" valign="top" bgcolor="#CEDEDF"><div align="left">
          <table width="780" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
			<tr>
                    <td height="45" align="left" valign="top"><div align="center"><span class="unnamed1"><a href='ViewClockedInStaff.php'><b>View Staff  or Consultants who are Clocked-IN</b></a></span></div></td>
            </tr>
			<tr>
			<td align=center><div align="center"><span class="unnamed1"><b><?echo @$_REQUEST['msg']?></b></span><br><br>
					<?if($_REQUEST['msg'] != '') {
							echo "<script>alert('".$msg."')</script>";
					}?>
					<table><p class="fontstyleCopy">
						<form method=post action='index.php' onSubmit='return validate1()'>
						<input type=hidden name='count' value=1>
						<tr><td><span class="unnamed1">Staff or Consultant ID :<br>(Last 4 digits of <b>SSN</b>)</span></td><td><input type=text name='empID'></td></tr>
						<tr><td><span class="unnamed1">Staff or Consultant </br><b>First Name & Last Initial </b>:</span></td><td><input type=text name='empName' onFocus="javascript:shownames();"></td></tr>
						<tr id='existingnames'>
						<?
							$ssql = "SELECT distinct EmpID FROM AtoxTimeClock ORDER BY EmpID";
							$rresult = mysql_query($ssql) or die(mysql_error());
							while($rrow = mysql_fetch_array($rresult))
							{
								$enames = '';$count = 0;
								echo "<input type=hidden name='E".$rrow[0]."' ";
								$sssql = "select distinct EmpName from AtoxTimeClock where EmpID=$rrow[0] order by EmpName";
								$rrresult = mysql_query($sssql) or die(mysql_error());
								while($rrrow = mysql_fetch_array($rrresult))
								{
									if($count == 0)	$enames = $rrrow[0];
									if($count>0)
										$enames = $enames."#".$rrrow[0];
									$count++;
								}
								echo "value='".$enames."'>";
								$rowcount ++;
								$previouseid = $rrow[0];$previousename = $rrow[1];
							}
						?>
							<td>&nbsp;</td><td><span class="unnamed1">Select your name</span><br><select name="enames"></select></td>
						</tr>
						<tr><td><span class="unnamed1"><b>Project</b> you are working on at this moment :</span></td><td>
								<select  name='job'>
									<option value=''>Select One</option>
<!--
									<option value='Web Store'>Web Store</option>
									<option value='Retail Misc. Products'>Retail Misc. Products</option>
									<option value='Payroll'>Payroll</option>
									<option value='Admin Supplies'>Admin Supplies</option>
									<option value='Sales Calls'>Sales Calls</option>
									<option value='Maintenance'>Maintenance</option>
									<option value='Events'>Events</option>
									<option value='Staff-Meetings'>Staff-Meetings</option>
									<option value="Devices (i.e. 510 K)">Devices (i.e. 510 K)</option>
									<option value='Sausalito-Proj.A'>Sausalito-Proj.A</option>
									<option value='Sausalito-Proj.B'>Sausalito-Proj.B</option>
									<option value='Sausalito-Proj.C'>Sausalito-Proj.C</option>
									<option value='Sausalito-Proj.D'>Sausalito-Proj.D</option>
									<option value='Sausalito-Proj.E'>Sausalito-Proj.E</option>
									<option value='Sausalito-Proj.F'>Sausalito-Proj.F</option>
									<option value='Sausalito-Proj.G'>Sausalito-Proj.G</option>
									<option value='Sausalito-Proj.H'>Sausalito-Proj.H</option>
									<option value='Sausalito-Proj.I'>Sausalito-Proj.I</option>
									<option value='Sausalito-Proj.J'>Sausalito-Proj.J</option>
									<option value='Sausalito-Proj.K'>Sausalito-Proj.K</option>
									<option value='Sausalito-Proj.L'>Sausalito-Proj.L</option>
									<option value='Sausalito-Proj.M'>Sausalito-Proj.M</option>
									<option value='Sausalito-Proj.N'>Sausalito-Proj.N</option>
									<option value='Research Support -Gen'>Research Support -Gen</option>
-->
									<?
									$sqlnew = "select projectName from projects order by projectNo desc";
									$resultnew = mysql_query($sqlnew) or die(mysql_error());
									while($rownew = mysql_fetch_row($resultnew))
									{
										echo "<option value='".$rownew[0]."'>".$rownew[0]."</option>";
									}
									?>
								</select></td></tr>
						<tr><td><span class="unnamed1">Comments :</span></td><td><textarea name='comments'></textarea></td></tr>
						<? //date_default_timezone_set('US/Pacific');
						$timestamp = time();
						$clockIn = getdate($timestamp);
						//$clockIn = date('Y-m-d H:i:s');
						//$hours = 7; //before that it is 1,now got to GMT time and converted to PST
						$sql1 = "select ctime from clocktime";
						$result1 = mysql_query($sql1) or die(mysql_error());
						$row1 = mysql_fetch_row($result1);
						$hours = $row1[0]; //increased to 1 hour Day light savings
						$newclockIn = gmdate("Y-m-d H:i:s", mktime($clockIn["hours"] - $hours,
                                                $clockIn["minutes"],
                                                $clockIn["seconds"],
                                                $clockIn["mon"],
                                                $clockIn["mday"],
                                                $clockIn["year"]));

						//date_sub($date, new DateInterval("PT1H"));
						?>
						<tr><td><span class="unnamed1">Project <b>Clock In </b>:</span></td><td><input type=text name='clockIn' readonly value="<?echo $newclockIn ;?>"</td></td></tr>
						<tr><td colspan=2>&nbsp;</td></tr>
						<tr><td colspan=2 align=center><input type=submit value=Submit></td></tr>
						</form>
					</p></table>
			</div></td>
		  </tr>
          <tr>
            <td align="left" valign="top" bgcolor="#45818D">&nbsp;</td>
          </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
			<tr>
			  <td align=center><span class="header"><b>Project Clock-Out Section</b></span></td>
			</tr>
			<tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
			<tr>
              <td align="left" valign="top"> <div align="center"><span class="unnamed1">'To Clock-Out... Please re-enter Your Staff or Consultant ID and Click Submit.</span><br>
                  <table>
                    <form method=post action='TodayOpenTimeClock.php' onSubmit='return validate2()'>
                      <tr>
                        <td><span class="unnamed1">Staff or Consultant ID</span> :</td>
                        <td><input type=text name='empID'></td>
                        <td><input name="submit" type=submit value=Submit></td>
                      </tr>
                    </form>
                  </table>
                </div></td>
            </tr>
			<tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
          </table>
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
<?}?>