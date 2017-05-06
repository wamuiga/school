<?php
 ini_set('mysql.connect_timeout',300);
 ini_set('default_socket_timeout',300);
?>

<html>
<body>
<form method="post" enctype="multipart/form-data">
    <br/>
  	<input type="file" name="image" />
 		<br/><br/>
 		<input type="submit" name="sumit" value="upload">
</form>
 </body>
</html>

<?php
if(isset($_post['sumit'])){

  	if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
  	{
  		echo "please select an image.";

  	}
  	else
  	{
  		$image= addslashes($_FILES['image']['tmp_image']);
  		$name= addslashes($_FILES['image']['name']);
  		$image= file_get_contents($image);
  		$image= base64_encode($image);
  		saveimage($name, $image);
  	}
}
displayimage();
function saveimage($name, $image)
{
	$con = mysqli_connect("localhost","root","","blood");   
	
	$qry = "INSERT INTO images(image, text) VALUES ('$image','$text')";
	$result = mysql_query($qry, $con);
	if($result)
	{
		//echo "<br/>Image uploaded."; 

	}
	else{
		//echo "<br/>Image not uploaded."; 

	}
}
function displayimage()
 {

    $con = mysqli_connect("localhost","root","","blood");
	
	$qry = "SELECT * FROM images" ;
	$result = mysql_query($qry, $con);

	while ($row = mysql_fetch_array($result) ) 
	{
	echo '<img height="300" width="450" scr="data:image;base64,'.$row[2].'"> ';		
	
   }
     mysql_close($con);
 ?>

