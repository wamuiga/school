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


   
   $query = "INSERT INTO you ( firstname, lastname, bloodtype, city, weight, age) values ('$firstname','$lastname','$bloodtype','$city','$weight','$age')";
   mysqli_query($db , $query) or die('Error in inserting.');
}

?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="view port$mysql_id = mysql_connect('localhost', 'root', '');
mysql_select_db('bloodbank', $mysql_id);
" content="width=device-width, initial-scale=1.0">
<title></title>
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->


    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">


<style type="text/css">
.sectoins {
  background-attachment: fixed;
  background-color: #6DC7D0;
  background-position: center center;
  border: thin none #473A3A;
}
.form{
font-style: bold;
font-size: 26px;
background-color:rgba(238, 238, 238, 0.88);
text-align: center;
}
.jumbo1{
text-align: center;
padding: 40px;
background :url(slide-82.jpg);
 
 
}
#jumbo1 .jumbotron{

border-radius: 20px;
padding: 40px;
font-size: 24px;
background-color: rgba(228, 220, 178, 0.39);
color: yellow;
  

}
.textarea{

background :url(Blood-Bank-Market.png);
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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header" style="background-color: red" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
    
    <div class="collapse navbar-collapse" id="topFixedNavbar1" style="background-color: red">
      <ul class="nav navbar-nav">
       
        
         <li class="active"><a href="home1.php">BACK<span class="sr-only"></span></a></li>
      </ul>
     
     
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>






<div class="container-fluid" height="55px">

<div class="jumbo1">

 


</div><hr><hr>
<section class="section" id="section"> 
   
   <div class = "textarea">
    <div class="form">

<form action="" method="post" >

<label>firstname:</label><input type="text" name="firstname"  id="firstname" required /><hr>
<label>lastname:</label><input type="text" name="lastname"  id="lastname" required /><hr>
<label>bloodtype:</label><input type="text" name="bloodtype"   id="bloodtype" placeholder="A,B,AB-,O+" /><hr>
  <label>age:</label><input type="text" name="age" id="age"/><hr>
  <label>weight:</label> <input type="text" name="weight" id="weight" placeholder="KG"/><hr>
  <label>city:</label> <input type="text" name="city" id="city" /><hr> 
 

<input type="submit" name="send" value="send"  id="send">


  </div>
</div> 
  
  </section>

</div>
<hr><hr>
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
