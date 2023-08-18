

<?php  

$email = "";

if(isset($_COOKIE["cookie_value_email"])) {
    $email = $_COOKIE["cookie_value_email"];
}   
 
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <title>Login Page</title>
</head>
<body>
    
	<form method="post"  name="form" id="formId"  action="../Controller/logincheck.php">
			<center>
    <table border="1" width="1000px">
	    <tr>
            <td>
                <table width="1200px">
                    <tr>
						<td align="Left">
             <h1><b>Adventure Life Tours</b></h1>
            </td>

            <td align="Right">
                  <a href="../index.php">Home</a> 
                <a href="Login.php">Login</a> 
                <a href="Registration.php">Registration</a>
            </td>
                </tr>
                 </table>
            </td>
        </tr>      
        <tr>
            <td colspan="3">
			<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
                    <div class="form-control">
                        <td>Email</td>
                        <td><input type="3" id="emailId" name="email" value= <?php echo $email ?>></td>
                        <td><small id="emailErrorId"></small></td>
                    </div>
				</tr>
                <tr>
                    <div class="form-control">
					<td>Password</td>
					<td><input type="3" id="passwordId" name="password"></td> 
                    <td><small id="passwordErrorId"></small></td>
                </div>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
					
                <tr>
                    <td>
                        <input type="checkbox" name="remember me" value=""> Remember Me
					</td>
                </tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"><a href="forgot password.php">Forgot Password?</td>
                </tr>
			</table>
            </fieldset>
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
		
	</form>

    <script src="login.js"></script>
</body>
</html>