<!DOCTYPE html>
<html lang="en">
<head>
    


    <form method="post" action="index.php">
    <h2>Input Validation</h2>
    <h5>Mahin Noor Imam Poroma (20-43667-2)</h5>


    <br>

    <fieldset>
    <legend>NAME</legend>
    <input type="text" id="name" name="name" >
    </fieldset>    <br>
     
    <fieldset>
    <legend>EMAIL</legend>
    <input type="email" id="email" name="email" placeholder="EMAIL ">
    </fieldset> <br>
     
     
    

     <fieldset>
     <legend>DATE OF BIRTH</legend>
     <input type="number" id="dob-day" name="dob-day" min="1" max="31" placeholder="DD" >
     <input type="number" id="dob-month" name="dob-month" min="1" max="12" placeholder="MM" >
     <input type="number" id="dob-year" name="dob-year" min="1900" max="2023" placeholder="YYYY">
     </fieldset>   <br>
     
  
     <fieldset>
     <legend>GENDER</legend>
     <input type="radio" id="male" name="gender" value="male">
        Male
        <input type="radio" id="female" name="gender" value="female">
        Female
        <input type="radio" id="other" name="gender" value="other">
        Other</fieldset> <br>
        
     <fieldset> 
      <legend>DEGREE</legend>
      <input type="checkbox" id="ssc" name="ssc" value="ssc">
      SSC
      <input type="checkbox" id="hsc" name="hsc" value="hsc">
      HSC
      <input type="checkbox" id="bsc" name="bsc" value="bsc">
      BSc
      <input type="checkbox" id="msc" name="msc" value="msc">
      MSc
     </fieldset> <br>
      
      <fieldset>
        <legend>BLOOD GROUP</legend>
      <select id="bloodGroup" name="bloodGroup">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
      </fieldset>
     
   

   <br> <br>  <br> <br>

      <input type="submit" value="Submit">


    <title>Assignment Web Tech MID</title>
    </form>    
</head>
<body>
    
</body>
</html>


<br> <br> <br> <br> 

<?php
if($_SERVER["REQUEST_METHOD"]== "POST")
{
  $userName = $_POST["name"];
  $email = $_POST["email"];
  $day = $_POST["dob-day"];
  $month = $_POST["dob-month"];
  $year = $_POST["dob-year"];

  if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
  }

  if (isset($_POST['ssc'])) {
    $ssc = $_POST['ssc'];
  }

  if (isset($_POST['hsc'])) {
    $hsc = $_POST['hsc'];
  }

  if (isset($_POST['bsc'])) {
    $bsc = $_POST['bsc'];
  }

  if (isset($_POST['msc'])) {
    $msc = $_POST['msc'];
  }

   

  $bloodGroup = $_POST["bloodGroup"];
   
  $isValidName = true;
  $errorMsgName = "";

  //Check name
if (empty($userName)) {
  $isValidName = false;
  $errorMsgName = "Name cannot be empty.";
}


$words = explode(" ", $userName);
if (count($words) < 2) {
  $isValidName = false;
  $errorMsgName = "Name must contain at least two words.";
}

$firstChar = substr($userName, 0, 1);
if (!ctype_alpha($firstChar)) {
  $isValidName = false;
  $errorMsgName = "Name must start with a letter.";
}


if (!preg_match('/^[a-zA-Z.\-\s]+$/', $userName)) {
  $isValidName = false;
  $errorMsgName = "Name can only contain letters, period, and dash.";
}


  //Check email
  $isValidEmail = true;
  $errorMsgEmail = "";

  if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $isValidEmail = false;
    $errorMsgEmail = "Email Invalid";
  }


//Check Date Of Birth
$isValidDob = true;
$errorMsgDob = "";

if (empty($day) || empty($month) || empty($year)) {
  $isValidDob = false;
  $errorMsgDob = "Date of birth cannot be empty.";
}

if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year) ||
    $day < 1 || $day > 31 ||
    $month < 1 || $month > 12 ||
    $year < 1953 || $year > 1998) {
    $isValid = false;
    $errorMsgDob = "Invalid date of birth.";
}



//Check Gender
$isValidGen= true;
$errorMsgGen = "";

if (empty($gender)) {
  $isValidGen = false;
  $errorMsgGen = "Please select a gender.";
}


//Check Degree

$isValidDeg= true;
$errorMsgDeg = "";

$count = 0;
if (!empty($ssc))
{$count++;}
if (!empty($hsc))
{$count++;}
if (!empty($bsc))
{$count++;}
if (!empty($msc))
{$count++;}


if ($count <2   ) {
  $isValidDeg = false;
  $errorMsgDeg = "Please select at least two degrees.";
}


//Check BloodGroup
$isValidBG= true;
$errorMsgBG = "";

if(empty($bloodGroup))
{
  $isValidBG= false;
  $errorMsgBG = "Please Enter a Blood Group";
}







//Validation Messages Print
if (!$isValidName) {
  echo "Validation error: " . $errorMsgName;
}

else if (!$isValidEmail) {
  echo "Validation error: " . $errorMsgEmail;
}

else if (!$isValidDob) {
  echo "Validation error: " . $errorMsgDob;
}

else if (!$isValidGen) {
  echo "Validation error: " . $errorMsgGen;
}

else if (!$isValidDeg) {
  echo "Validation error: " . $errorMsgDeg;
}


else if (!$isValidBG) {
  echo "Validation error: " . $errorMsgBG;
}
else {

  echo "All information are correct !" ;
}
}

?>








