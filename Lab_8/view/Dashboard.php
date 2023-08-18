<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
        <center>
        <table border="1" width="1500px">
            <tr>
                <td colspan="2">
                    <table width="1000px">
                        <tr>
                            <td align="Left">
                     <h1><b>Adventure Life Tours</b></h1>
                     </td>
                            <td align="Right">
                            Logged in as
                                <a href="View_profile.php"><?=$_SESSION['user']['username']?></a> 
                                <a href="Login.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          <tr>
                <td height="150px" width="200px">
                    Account<br><hr>
                    <ul>
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="View_profile.php">View Profile</a></li>
                        <li><a href="Edit_Profile.php">Edit Profile</a></li>
                        <li><a href="Change_Profile_Picture.php">Change Profile Picture</a></li>
                        <li><a href="Change_Password.Php">Change Password</a></li>
                        <li><a href="Tour_Packages.php.Php">Tour Packages</a></li>
                        <li><a href="Login.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                    <b>Welcome to <?=$_SESSION['user']['username']?></b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                    Explore The World
                    </center>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
<?php
	
	}else{
		header('location: Login.php');
	}
?>