<!doctype html>
<?php

$db = mysqli_connect('localhost','root','','blood')
 or die('Error connecting to MySQL server.');
   if (isset($_POST["send"]))
 {
 
 
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $bloodtype = trim($_POST['bloodtype']);
  
  
  $city = trim($_POST['city']);
   $phonenumber = trim($_POST['phonenumber']);
  $email = trim($_POST['email']);

   
   $query = "INSERT INTO requst ( firstname, lastname, bloodtype, city, phonenumber, email) values ('$firstname',
    '$lastname','$bloodtype','$city','$phonenumber','$email')";
   mysqli_query($db , $query) or die('Error in inserting.');
}

?>
<style type="text/css">
.form{
font-style: bold;
font-size: 26px;
background-color:rgba(225, 225, 226, 0.58);
text-align: center;
}
.textarea{

background :url(LoveBloodBags.jpg);
}
.sectoins {
  background-attachment: fixed;
  background-color: #6DC7D0;
  background-position: center center;
  border: thin none #473A3A;
}
</style>
<html>
<body>

<section class="section" id="section"> 
   <div class = "textarea">

    <div class="form">
       
<form action="" method="post" >

  <H2><CENTER>SUBMIT  INFORMATION:</CENTER></H2><hr>
<label>firstname:</label><input type="text" name="firstname"  id="firstname" required /><hr>
<label>lastname:</label><input type="text" name="lastname"  id="lastname" required /><hr>
<label>bloodtype:</label><input type="text" name="bloodtype"   id="bloodtype" placeholder="A,B,AB-,O+" /><hr>
  <label>city:</label> <input type="text" name="city" id="city" /><hr>
<div class = "textarea1">
                    <td>     <!--label for="comments" name="comments">why the rquest</label--><br>
                       </td>
    <td>
      <!--textarea  type="text" name="comments" id="comments" rows="auto" cols="auto" placeholder="give a ressons for making the request" ></textarea-->
  </td><hr>
  
  </div>

  <ul> 
    <li>
    <label>phone number:</label><input type="text" name="phonenumber"  id="phonenumber" required />
<label>email:</label><input type="text" name="email"  id="email" required />

</li></ur>
<br><ul><li>
<input type="submit" name="send" value="send"  id="send">
</li></ul>
  </div>
</div> 
<section>
  </body>
</html>