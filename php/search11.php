
<form method="post">
  <input type="text"  name="search"/>
  <input type="submit" name ="submit" value="search"/>
</form>



	<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

	$search = $_POST['search'];

	$sql = "SELECT * FROM you WHERE bloodtype = '$search'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "BLOODTYPE: " . $row["bloodtype"]. 

	         "  CITY: " . $row["city"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}

}
?>



