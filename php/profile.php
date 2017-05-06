

<?php
$con=mysqli_connect("localhost", "root", "","bloodbank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$firstName = trim($_POST['firstName']);

$bloodtype = trim($_POST['bloodtype']);
$age= trim($_POST['age']);
$weight = trim($_POST['weight']);
$city = trim($_POST['city']);
 

$sql1="INSERT INTO bank (NULL, firstName, bloodtype, age, weight, city)
VALUES ($_POST[firstName]','$_POST[bloodtype]','$_POST[age]','$_POST[weight]','$_POST[city]')";

mysqli_query($con,$sql1);


//echo "Failed to connect to MySQL: " . mysqli_connect_error();


mysqli_close($con);
?>





