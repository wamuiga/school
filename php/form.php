 <!--?php
$con=mysqli_connect("localhost", "root", "","form");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$firstName = trim($_POST['firstName']);

$lastName = trim($_POST['lastName']);


$sql1="INSERT INTO formm ( firstName, lastName)
VALUES ($_POST[firstName]','$_POST[lastName]')";

mysqli_query($con,$sql1);





//echo "<script language=javascript>window.location = 'thanks.html';</script>";

mysqli_close($con);
?-->


<?php
	//define server connection parameters hers
	
	 $db = mysqli_connect('localhost','root','','bloodbank')
 or die('Error connecting to MySQL server.');

	// receive key and value pairs from form and assign to php variables
 if (isset($_POST["submit"]))
 {
	
	$firstname = trim($_POST['firstname']);
	$bloodtype = trim($_POST['bloodtype']);
	$phone = trim($_POST['phone']);
	

	//create a query string for posted data	
	$query = "INSERT INTO keven (firstname, bloodtype, phone) VALUES ('$firstname','$bloodtype', '$phone')";	
	
	//now insert the query into the database using mysql_query () function
	 mysqli_query($db , $query) or die('Error querying database.');
}
?>