<!DOCTYPE HTML>  
<html>
<head>
<style type="text/css">
.form{
font-style: bold;
font-size: 26px;
background :url(LoveBloodBags.jpg);
text-align: center;
}

</style>
</head>
<body>  

<?php

// define variables and set to empty values

$name = $email  = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
   
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      
    }
  }
  if (empty($_POST["email"])) {
   
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
    }
  }
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<?php
echo "<h2>Comment:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";

?>

</body>
</html>