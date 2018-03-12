<?

$STT = 'STT';

if ($STT =='STT') {

require("../mysqlconn.php");

$fromPage = $_POST["fromPage"];
$action = $_POST["action"];
$adminoption = $_POST["adminoption"];

if($fromPage == "index")
{
?>
	<html>
	<head>
	<title>Clock Admin</title>
	</head>
	<body>
	<center>
	<table><tr><td>
	<?
	if($adminoption == 'AO')
	{
		$dataabbname = $_POST['chpwoption'];
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$renewpassword = $_POST['renewpassword'];

		$sql = "select password,dataname from adminpasswords where dataabbname='$dataabbname'";
		echo "sql is ".$sql;
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_row($result);
		if(md5($oldpassword) == $row[0])
		{
			$dataname = $row[1];
			if($newpassword == $renewpassword)
			{
				$sqlsql = "update adminpasswords set password='".md5($newpassword)."' where dataabbname='$dataabbname'";
				echo "sqlsql is ".$sqlsql;
				$resultresult = mysql_query($sqlsql) or die(mysql_error());
				if($resultresult)
				{
					$msg = "The password for <b>".$dataname."</b> is changed successfully";
					$fromPage = "chpwoption";
				}
			}
			else
			{
				$msg = "The both new passwords should be same";
				$fromPage = "chpwoption";
			}
		}
		else
		{
			$msg = "The existing password you have entered is wrong";
			$fromPage = "chpwoption";
		}
	}
	else
	{
	if($action == "add")
	{
		$projectName = $_POST['projectName'];
		$presql = "select count(projectno) from projects where projectname='$projectName'";
		$preresult = mysql_query($presql) or die(mysql_error());
		$prerow = mysql_fetch_row($preresult);
		if($prerow[0] > 0)
			$msg = " '".$projectName."' is already in the list of projects";

		$sql = "insert into projects (projectname) values('$projectName')";
		$result = mysql_query($sql) or die(mysql_error());
		if($result)
		{
			$msg = "The project <b>".$projectName."</b> is added successfully";
		}
		$fromPage = "addoption";
	}
	else if($action == "rename")
	{
		$projectNewName = $_POST['projectNewName'];
		$projectExistingName = $_POST['pN1'];

		$presql = "select projectno from projects where projectname='$projectExistingName'";
		$preresult = mysql_query($presql) or die(mysql_error());
		$prerow = mysql_fetch_row($preresult);
		if($prerow[0] > 0) { }
		else
		{
			$msg = " '".$projectExistingName."' is not in the list of projects";
		}
		$sql = "update projects set projectname='$projectNewName' where projectNo=$prerow[0]";
		$result = mysql_query($sql) or die(mysql_error());
		if($result)
		{
			$msg = "The project <b>".$projectExistingName."</b> is updated successfully";
		}
		$fromPage = "renameoption";
	}
	else if($action == "adjust")
	{
		$clockadjustment = $_POST["clockadjustment"];
		$sql1 = "update clocktime set ctime=".$clockadjustment;
		$result1 = mysql_query($sql1) or die(mysql_error());
		if($result1)
		{
					$msg = "The clock time is updated successfully";
		}
		$fromPage = "adjustoption";
	}
	else if($action == "clockdata")
	{
		$fromdate = $_REQUEST['date1'];
		$todate = $_REQUEST['date2'];
		$empIDs = $_REQUEST['empIDs'];
		$jobs = $_REQUEST['jobs'];?>
        <form method=post>
          	<input type=hidden name=fromdate value='<?echo $fromdate?>'>
            <input type=hidden name=todate value='<?echo $todate?>'>
            <input type=hidden name='username' value='<?echo $username?>'>
            <input type=hidden name='password' value='<?echo $password?>'>
			<?for( $j = 0 ;$j<sizeof($empIDs);$j++)
			{?>
				<input type=hidden name='empIDs[]' value='<?echo $empIDs[$j]?>'>
			<?} ?>
			<?for( $j = 0 ;$j<sizeof($jobs);$j++)
			{?>
				<input type=hidden name='jobs[]' value='<?echo $jobs[$j]?>'>
			<?} $url = '../EditTimeClockData.php';?>
			<script>
				document.forms[0].action='<?echo $url?>';
				document.forms[0].submit();
			</script>
        </form>
    <?
	}
	}
	echo "<form method=post><input type=hidden name=fromPage value='$fromPage'><input type=hidden name=msg value='$msg'><script>document.forms[0].action='index.php';document.forms[0].submit();</script></form>";
	?>
	</td></tr></table>
	</center>
	</body>
	</html>
	<?
}
else
{
?>
<html>
<head>
<title>Clock Admin </title>
<style type="text/css">
<!--
.ONE {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
}
.ONE1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #000000;
}
.two {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #993300;
}
-->
</style>
<script>
function HideCHPWDetails() {
	var x = document.getElementById('chpasswords');
	x.style.display  = 'none';
	document.forms[0].adminoption.checked = false;
	}
function ShowCHPWDetails() {
	document.forms[0].adminoption.checked = true;
	var x = document.getElementById('chpasswords');
	x.style.display = 'block';
	HideCTDetails();
	HideCDDetails();
	HideRPDetails();
	HidePNDetails();
	}
function HidePNDetails() {
	var x = document.getElementById('newproject');
	x.style.display  = 'none';
	}
function ShowPNDetails() {
	var x = document.getElementById('newproject');
	x.style.display = 'block';
	HideCTDetails();
	HideCDDetails();
	HideRPDetails();
	HideCHPWDetails();
	}
function HideRPDetails() {
	var x = document.getElementById('renameproject');
	x.style.display  = 'none';
	}
function ShowRPDetails() {
	var x = document.getElementById('renameproject');
	x.style.display = 'block';
	HideCTDetails();
	HideCDDetails()
	HidePNDetails();
	HideCHPWDetails();
	}
function HideCTDetails() {
	var x = document.getElementById('adjustclock');
	x.style.display  = 'none';
	}
function ShowCTDetails() {
	var x = document.getElementById('adjustclock');
	x.style.display = 'block';
	HidePNDetails();
	HideCDDetails();
	HideRPDetails();
	HideCHPWDetails();
	}
function HideCDDetails() {
	var x = document.getElementById('clockdata');
	x.style.display  = 'none';
	}
function ShowCDDetails() {
	var x = document.getElementById('clockdata');
	x.style.display = 'block';
	HidePNDetails();
	HideCTDetails();
	HideRPDetails();
	HideCHPWDetails();
	}
function validate()
{
	if(document.forms[0].action[0].checked)
	{
		if(document.forms[0].projectName.value == '')
		{
			alert('Please enter the project name');
			document.forms[0].projectName.focus();
			return false;
		}
	}
	if(document.forms[0].action[1].checked)
	{
		if(document.forms[0].pN1.options.selectedIndex == '-1')
		{
			alert('Please select the project name which has to be renamed');
			return false;
		}
		if(document.forms[0].projectNewName.value == '')
		{
			alert('Please enter the new project name');
			document.forms[0].projectNewName.focus();
			return false;
		}
	}
	if(document.forms[0].adminoption.checked)
	{
		var che = 0;
		for(var i=0;i<document.forms[0].chpwoption.length;i++)
		{
			if(document.forms[0].chpwoption[i].checked)
			{ che = 1;break; }
		}
		if(che == 0) {alert('Please select atleast one option for Change Passwords');return false;}

		if(document.forms[0].oldpassword.value == '')
		{
			alert('Please enter the Existing Password');
			document.forms[0].oldpassword.focus();
			return false;
		}
		if(document.forms[0].newpassword.value == '')
		{
			alert('Please enter the New Password ');
			document.forms[0].newpassword.focus();
			return false;
		}
		if(document.forms[0].renewpassword.value == '')
		{
			alert('Please enter New Password again');
			document.forms[0].renewpassword.focus();
			return false;
		}
		if(document.forms[0].newpassword.value != document.forms[0].renewpassword.value)
		{
			alert('Both passwords should be same');
			document.forms[0].newpassword.focus();
			return false;
		}
	}
	return true;
}
function chpasswords()
	{
		if(document.forms[0].adminoption.checked)
			ShowCHPWDetails();
		else
			HideCHPWDetails();
	}
</script>
<script language='javascript' type='text/javascript' src='../datetimepicker.js'></script>
</head>
<?if($fromPage == "addoption") {?>
<body onLoad='javascript:ShowPNDetails();HideRPDetails();HideCTDetails();HideCDDetails();HideCHPWDetails();' bgcolor="#CEDEDF">
<? } else if($fromPage == "renameoption") {?>
<body onLoad='javascript:HidePNDetails();ShowRPDetails();HideCTDetails();HideCDDetails();HideCHPWDetails();' bgcolor="#CEDEDF">
<? } else if($fromPage == "adjustoption") {?>
<body onLoad='javascript:HidePNDetails();HideRPDetails();ShowCTDetails();HideCDDetails();HideCHPWDetails();' bgcolor="#CEDEDF">
<? } else if($fromPage == "chpwoption") {?>
<body onLoad='javascript:HidePNDetails();HideRPDetails();HideCTDetails();HideCDDetails();ShowCHPWDetails();' bgcolor="#CEDEDF">
<? } else { ?>
<body onLoad='javascript:HidePNDetails();HideRPDetails();HideCTDetails();HideCDDetails();HideCHPWDetails();' bgcolor="#CEDEDF">
<? } ?>
<center>
<form action="index.php" method="post"  onSubmit='javascript:return validate();'>
<input type="hidden" name="fromPage" value="index">
<table height="32%" valign="top" align=center><tr>
<td valign="top">
<table>
	<tr><td colspan=3>&nbsp;</tr>
	<tr><td colspan=3>&nbsp;</tr>
	<tr><td colspan=3>&nbsp;</tr>
	<tr><td colspan=3><B><SPAN class="ONE"><?echo $_POST['msg']?></SPAN> </B></td></tr>
	<tr><td colspan=3>&nbsp;</tr>
	<tr>
		<td colspan=3 align=center><input type=radio value="add" name="action" onClick="javascript:ShowPNDetails();"
		<?if($fromPage == "addoption") echo " checked"; ?>
		><B><SPAN class="ONE1">Add New Project</SPAN> </B></td>
	</tr>
	<tr id="newproject">
		<?
			$sql = "select projectName from projects order by projectNo desc";
			$result = mysql_query($sql) or die(mysql_error());
			echo "<td><table><tr><td><B><SPAN class='ONE'>Existing projects</span></b></td><td></tr><tr><td><select name='pN' multiple size=4>";
			while($row=mysql_fetch_row($result))
			{
				echo "<option>".$row[0]."</option>";
			}
			echo "</select></td></tr></table></td>";
			//mysql_free_result();
		?>
		<td><input type="text" name="projectName"></td>
		<td><input type=submit value='ADD'></td>
	</tr>
	<tr>
		<td colspan=3 align=center><input type=radio value="rename" name="action" onClick="javascript:ShowRPDetails();"
		<?if($fromPage == "renameoption") echo " checked"; ?>
		><B><SPAN class="ONE1">Rename Existing Project</SPAN> </B></td>
	</tr>
	<tr id="renameproject">
		<?
			$sql = "select projectName from projects order by projectNo desc";
			$result = mysql_query($sql) or die(mysql_error());
			echo "<td><table><tr><td><B><SPAN class='ONE'>Existing projects</span></b><br><span class='ONE'>Select a project</span></td><td></tr><tr><td><select name='pN1' size=4>";
			while($row=mysql_fetch_row($result))
			{
				echo "<option>".$row[0]."</option>";
			}
			echo "</select></td></tr></table></td>";
		?>
		<td><SPAN class="ONE">New Name:</span><br><input type="text" name="projectNewName"></td>
		<td><input type=submit value='Rename'></td>
	</tr>
	<tr>
		<td colspan=3 align=center><input type=radio value="adjust" name="action" onClick="javascript:ShowCTDetails();"
		<?if($fromPage == "adjustoption") echo " checked"; ?>
		><B><SPAN class="ONE1">Adjust the Clock time</SPAN> </B></a></td>
	</tr>
	<tr id="adjustclock">
		<?
			$sql1 = "select ctime from clocktime";
			$result1 = mysql_query($sql1) or die(mysql_error());
			$row1 = mysql_fetch_row($result1);

			$timestamp = time();
			$clockIn = getdate($timestamp);
			$hours = $row1[0];
			$newclockIn = gmdate("Y-m-d H:i:s", mktime($clockIn["hours"] - $hours,
			                        $clockIn["minutes"],
			                        $clockIn["seconds"],
			                        $clockIn["mon"],
			                        $clockIn["mday"],
			                        $clockIn["year"]));

		echo "<td colspan=2 align=center><B><SPAN class='ONE'>Current Clock Time : ".$newclockIn."</span></b><br>";
		echo "<table>";
		?>
		<tr>
		<td>
		<input type=radio name="clockadjustment" value="7"><B><SPAN class="ONE">PDT </span></b>&nbsp;&nbsp;
		<input type=radio name="clockadjustment" value="8"><B><SPAN class="ONE">PST</span></b>
		</td>
		<td>
		<input type=radio name="clockadjustment" value="6"><B><SPAN class="ONE">MDT </span></b>&nbsp;&nbsp;
		<input type=radio name="clockadjustment" value="7"><B><SPAN class="ONE">MST</span></b>
		</Td>
		<td>
		<input type=radio name="clockadjustment" value="5"><B><SPAN class="ONE">CDT </span></b>&nbsp;&nbsp;
		<input type=radio name="clockadjustment" value="6"><B><SPAN class="ONE">CST</span></b>
		</td>
		<td>
		<input type=radio name="clockadjustment" value="4"><B><SPAN class="ONE">EDT </span></b>&nbsp;&nbsp;
		<input type=radio name="clockadjustment" value="5"><B><SPAN class="ONE">EST</span></b>
		</Td>
		</tr>
		<?echo "</table></td>";?>
		<td><input type=submit value='ADJUST TIME'></td>
	</tr>
	<tr>
		<td colspan=3 align=center><input type=radio value="clockdata" name="action" onClick="javascript:ShowCDDetails();"><B><SPAN class="ONE1">Atox Time Clock</span></b></td>
	</tr>
	<tr id='clockdata'>
			<?$today = date('Y-m-d');?>
			<td colspan=3 align=center>
			<table>
				<TR>
						<TD align="right"><B><SPAN class="ONE">From Date:</SPAN> </B></TD>
						<TD align="left">
						<input id='demo1' name='date1' type='text' size='10' value='<?echo $today;?>'><SPAN class="ONE"><B>(YYYY-MM-DD)</b></span><br>
	<a href="javascript:NewCal('demo1','yyyymmdd',false,24)"><img src='../images/cal.gif' width='16' height='16' border='0' alt='Pick a date'></a><SPAN class="ONE">(Click here to pick a date)</span>
						</TD>
						<TD align="right"><SPAN class="ONE"><B>To Date: </B></SPAN></TD>
						<TD align="left">
						<input id='demo2' name='date2' type='text' size='10' value='<?echo $today;?>'><SPAN class="ONE"><B>(YYYY-MM-DD)</b></span><br>
	<a href="javascript:NewCal('demo2','yyyymmdd',false,24)"><img src='../images/cal.gif' width='16' height='16' border='0' alt='Pick a date'></a><SPAN class="ONE">(Click here to pick a date)</span>
						</TD>
				</TR>
				<tr>
					<td>
						<SELECT MULTIPLE SIZE=3 name='empIDs[]'>
							<?php
							$sql = "SELECT distinct EmpID,EmpName FROM AtoxTimeClock ORDER BY EmpID";
							$rs = mysql_query($sql) or die(mysql_error());
							while($row = mysql_fetch_array($rs))
							{
								echo "<option value='".$row[0]."'>".$row[0]." - ".$row[1]."</option>";
							}
							?>
						</select>
					</td>
					<TD align="right"><B><SPAN class="ONE">Project:</span></b></TD>
					<TD align="left">
						<select  name='jobs[]' multiple size=3>
						<?
						$sqlnew = "select projectName from projects order by projectNo desc";
						$resultnew = mysql_query($sqlnew) or die(mysql_error());
						while($rownew = mysql_fetch_row($resultnew))
						{
							echo "<option value='".$rownew[0]."'>".$rownew[0]."</option>";
						}
						?>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type=hidden name='username' value='<?echo $username?>'>
						<input type=hidden name='password' value='<?echo $password?>'>
						<input type=submit value='Clock Data'>
					</td>
				</tr>
			</table>
			</td>
		</tr>
</table>
</td>
</tr>
</table>
<table height="68%" valign=top align=right>
<tr>
<td>
<input type="checkbox" value="AO" name="adminoption" onclick="javascript:chpasswords();"><B><SPAN class="ONE1">Change Passwords</span></b>
</td>
</tr>
<tr id="chpasswords">
	<td>
		<table>
			<tr>
				<td><input type=radio value="APCdata" name="chpwoption"><B><SPAN class="ONE">Atox Project Clock Data</span></b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><B><SPAN class="ONE">Existing Password : </span></b>&nbsp;&nbsp;<input type=password name="oldpassword"></td>
			</tr>
			<tr>
				<td><B><SPAN class="ONE">New Password : </span></b>&nbsp;&nbsp;<input type=password name="newpassword"></td>
			</tr>
			<tr>
				<td><B><SPAN class="ONE">Confirm Password : </span></b>&nbsp;&nbsp;<input type=password name="renewpassword"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><input type=submit value=Update></td>
			</tr>
		</table>
	</td>
</tr>
</table>
</center>
</body>
</html>
<?
}
}
?>