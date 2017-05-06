<!doctype html>
<?php

$db = mysqli_connect('localhost','root','','blood')
 or die('Error connecting to MySQL server.');
   if (isset($_POST["send"]))
 {
 
 
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $bloodtype = trim($_POST['bloodtype']);
  $age = trim($_POST['age']);
  $weight = trim($_POST['weight']);
  $city = trim($_POST['city']);
   $phonenumber = trim($_POST['phonenumber']);
  $email = trim($_POST['email']);

   
   $query = "INSERT INTO you ( firstname, lastname, bloodtype, city, weight, age, phonenumber, email) values ('$firstname',
    '$lastname','$bloodtype','$city','$weight','$age','$phonenumber','$email')";
   mysqli_query($db , $query) or die('Error in inserting.');
}

?>





<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="view port$mysql_id = mysql_connect('localhost', 'root', '');
mysql_select_db('bloodbank', $mysql_id);
" content="width=device-width, initial-scale=1.0">
<title></title>
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
        
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
.sectoins {
  background-attachment: fixed;
  background-color: #6DC7D0;
  background-position: center center;
  border: thin none #473A3A;
}
img.avatar {
    width: 100%;
    border-radius: 50%;
     
}

.jumbo2{
text-align: center;
padding: 40px;
background :url( 471147-blood-donation-gettyimages-crop.jpg);
 font-style: bold;
 font-size: 28px;
 font :white;
min-height: 430px;
max-width: 2004px;
 background-size: cover;
}

.container1 {
  padding: 0 15px;
   max-width: 310px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  padding: ;

}
.form{
font-style: bold;
font-size: 26px;
background-color:rgba(225, 225, 226, 0.58);
text-align: center;
}
.jumbo1{
text-align: center;
padding: 15px;
text-align: center;
padding: 40px;
background :url(slide-82.jpg);
 
 vertical-align: center;
 padding-left: 15px;
 font-style: bold;
font-size: 16px;
margin: auto;
  max-width: 650px;
  font-family: arial;
 
}
#jumbo1 .jumbotron{

border-radius: 20px;
padding: 40px;
font-size: 24px;
background-color: rgba(228, 220, 178, 0.39);
color: yellow;
  

}
.textarea{

background :url(LoveBloodBags.jpg);
}
button {
    background-color: rgba(228, 220, 178, 0.79);
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
 color: #0c1715;
    background-color: rgb(236, 42, 42);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: rgba(119, 253, 233, 0.43);
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body bgcolor="#070707"  style="padding-top: 70px" >

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(196, 196, 246, 0.55);" 
              style="color: rgb(14, 14, 14);">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="home1.php" style="color: #fff;">.HOME.</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a class="page-scroll" href="#about" style="color: #fff;">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="takepart.php" style="color: #fff;">Take part</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio" style="color: #fff;">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" style="color: #fff;">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="container-fluid" height="55px">
<div class="jumbo2"  >
  
            <div class="header-content-inner">
                <h1 id="homeHeading">WELCOME TO THE KENYA BLOOD D.......... </h1>
                
               
                <a href="#more_infor" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Find Out More</a>
                        
  
    </div>

</div>
</div>



<hr>
<section class="section" id="section"> 
   <div class = "textarea">

    <div class="form">
       
<form action="" method="post" >

  <H2><CENTER>SUBMIT  INFORMATION:</CENTER></H2><hr>
<label>firstname:</label><input type="text" name="firstname"  id="firstname" required /><hr>
<label>lastname:</label><input type="text" name="lastname"  id="lastname" required /><hr>
<label>bloodtype:</label><input type="text" name="bloodtype"   id="bloodtype" placeholder="A,B,AB-,O+" /><hr>
  <label>age:</label><input type="text" name="age" id="age"/><hr>
  <label>weight:</label> <input type="text" name="weight" id="weight" placeholder="KG"/><hr>
  <label>city:</label> <input type="text" name="city" id="city" /><hr> 
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
 <hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyCompany. All rights reserved.<br>
          2017   <br>  
          KENYA<br>
                 
 developer wamuiga .k. <a href="kelvinwamuiga@gmail.com">kelvinwamuiga@gmail.com</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<hr>


<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap-3.3.7.js"></script>




</body>
</html>
