<?php session_start(); 
	
	
	if(isset($_POST['Submit'])){
		
		$logins = array('nerium' => 'rx711','username1' => 'password1','username2' => 'password2');
		
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:../../rx_1products");
			exit;
		} else {
			
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="../../css/stylelogin.css" rel="stylesheet">
<style>
.table {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
.a1 {
	display: block;
    
    margin: 0 0 2em 0;
    max-width: 80%;
   margin-left: auto;
  margin-right: auto;
   
  height: auto;
}

.a12 {
  display: block;
  margin-left: auto;
  margin-right: auto;
    width:auto;
}
.b1{
    display: block;
    max-width: 20%;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
</style>
</head>
<body>

<img src="newlogo.gif" class="b1"><br/><br/>
<img src="rxbanner.png" class="a1"><br/><br/>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top" ><h3>Login Page</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>