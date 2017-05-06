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

$name=$_POST['name1'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

if($submit){
  if($name1&&$comment){
  	$insert=mysqli_query("INSERT INTO comment (name1,comment) VALUES ('$name1','$comment') ");
  }
else{
	echo "please fill out the fields";
}

}
 ?>

 <head>
 	<title>comments</title>
 </head>
 
 	<form method="POST">
 		<table>
<tr><td>name:</td><td><input type="text" name="name1"></td></tr> 			
<tr><td colspan="2">comment:</td></tr>
<tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="comment"></td></tr>
 		</table>
 	</form>
<?php
$sql = mysqli_query("SELECT * FROM comment ORDER BY id, name1 DESC");
$result= mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($result)) 
{
	$id=$rows['id'];
	$name=$rows['name1'];
	$comment=$rows['comment'];

	echo $name1 . '<br />' . $comment . '<br />' . '<br />'
;}
?>

 