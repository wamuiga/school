   <?php

    ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="blood"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

// Password Hashing
$mypassword = hash("sha512", $mypassword);

//SQL injection protection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($myusername);
$mypassword = mysqli_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);

$ar=mysqli_fetch_array($result);
if($ar['user_type']=='admin')
{
 header('Location: admin.php');
}
else
{
 header('Location: index.html');
}

// Count table rows.
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

    $_SESSION["login"] = ("usernameEntered");
    header("location:index.html");
}

else {
    echo "Wrong Username or Password";
}
ob_end_flush();
?>