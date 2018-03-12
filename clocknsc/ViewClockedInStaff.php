<?
require("mysqlconn.php");


	echo "<html>
			<head>
				<title>Atox Time Clock</title>
                
				<script language='javascript' type='text/javascript' src='datetimepicker.js'></script>
                
                <script async src='https://www.googletagmanager.com/gtag/js?id=UA-79255479-3'></script>
				<script>
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments)};
					gtag('js', new Date());

					gtag('config', 'UA-79255479-3');
				</script>
                
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
				



		echo   "</head>
			<body bgcolor='#144960' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'><center><br><br>";
?>  
	<table width="780" border="2" cellpadding="0" cellspacing="0">
		<tr>
			<td height="169" align="center" valign="top">
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
		$sql = "select * from AtoxTimeClock where date(ClockIN) = '$today'";
		//echo $sql;
		$result = mysql_query($sql) or die(mysql_error());
		$statusOpenCount = 0;

		if(mysql_num_rows($result) > 0)
		{


				echo "<table border=1>
					<tr><th><span class='unnamed1'><b>Staff or Consultant ID</b></span></th><th><span class='unnamed1'><b>Staff or Consultant<br>
					First Name & Last Initial</b></span></th><th><span class='unnamed1'><b>Project</b></span></th><th><span class='unnamed1'><b>Clock IN</b></span></th><th><span class='unnamed1'><b>Clock Out</b></span></th></span><th><span class='unnamed1'><b>Comments</b></span></th><th><span class='unnamed1'><b>Clock-Adj. Notes</b></span></th></tr>";

		while($row = mysql_fetch_row($result))
		{
				echo "<tr>
					<td><span class='unnamed1'>".$row[1]."</span></td>
					<td><span class='unnamed1'>".$row[2]."</span></td>
					<td><span class='unnamed1'>".$row[5]."</span></td>
					<td><span class='unnamed1'>".$row[3]."</span></td>
					<input type=hidden name='clockIn[]' value='".$row[3]."'>
					<td>";
				echo "<span class='unnamed1'>".$row[4]."</span> </td><td><span class='unnamed1'>".$row[6]."</span></td><td><span class='unnamed1'>".$row[8]."</span></td>";
				echo "</tr>";
		}
		echo "</table>";
		}//end of if(mysql_num_rows($result) > 0)
		else
		{
			echo "<br><br><span class='unnamed1'><b>No Records found</b></span>";
		}
	echo "<br><br><center><a href=\"javascript:window.location='index.php';\"><span class='unnamed1'>Clock Home</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:history.go(-1);'><span class='unnamed1'>Back</span></a></center>";

	?>
		</div></td>
    </tr>
	    <tr> 
      <td align="left" valign="top" bgcolor="#CEDEDF" >&nbsp;</td>
    </tr>    <tr> 
      <td align="left" valign="top" bgcolor="#CEDEDF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="left" valign="top" bgcolor="#45818D">&nbsp;</td>
    </tr>
  </table>
  </td>
    </tr>
  </table>
</div>
<map name="Map">
  <area shape="rect" coords="710,6,761,23" href="">
</map>
</body>
</html>
