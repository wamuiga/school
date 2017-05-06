<?php
$msg ="";

if(isset($_POST['upload'])){

	$target = "images/".basename($_FILES['image']['name']);

	$db = mysqli_connect("localhost","root","","photos");


	$image = $_FILES['image']['name'];
	$text =  $_POST['text'];

	$sql = "INSERT INTO images (image, text) VALUES ('$image','$text')";
	mysqli_query($db, $sql);

	if(move_uploaded_file($_FILES['tmp_name']['name'], $target)){

		$msg = "image upload successful.";
	}
	else{
		$msg = "image not able to upload.";
	}
}
?>

<head>
<title>image upload</title>
</head>
<body>
<div id="content">
<form action="post" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<textarea name="text" cols="40" rows="4" placeholder="say something..."></textarea>
		</div>
		<div>
			<input type="file" name="image" />
				<input type="submit"  name="upload" value="upload Image">
			</div>
		</form>
	</div>

<?php
	$db = mysqli_connect("localhost","root","","photos");
	$sql = "SELECT * FROM images";
	$result = mysqli_query($db, $sql); 
	while ($row = mysqli_fetch_array($result))
	 {
		echo "<div id='img_div'>";
		echo "<img scr='images/".$row['image']."'>";
		echo "<p>".$row['text']."</p>";
		echo "</div>";
	}

?>

	




	