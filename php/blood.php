<!doctype html>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<!-- <link href="file:///C|/Users/keven/AppData/Roaming/Adobe/Dreamweaver CC 2017/en_US/Configuration/Temp/Assets/eam2A8B.tmp/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head><script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<style   type="text/css">
.jumbo1{
text-align: center;
padding: 0px;

 
background-size: cover; 
}
#jumbo1 .jumbotron1{

border-radius: 0px;
box-sizing: border-box;
    display: block;
    padding-top: 8px;
    padding-bottom: 8px;
font-size: 24px;
 margin-bottom: 0px;
    
    background-color: rgba(138, 222, 128, 0.58);
 
margin-bottom: 0px;
}
.form{
font-style: bold;
font-size: 26px;

}
.thumbnail{
min-height: 460px;
min-width: 420px;
min-height: fixed;
min-width: fixed;
text-align: center;
background-color: rgba(255, 255, 255, 0.25);
}
.textarea{
padding: 40px;
display: block;
min-width: 460px;
min-height: 250px;
background-color: rgba(255, 255, 255, 0.76);

}
html, body {
  margin: 0 !important;
  padding: 0 !important;
  height: auto; !important;
  width: auto; !important;
}
.form{
font-style: bold;
font-size: 26px;
}



</style>




<body style="padding-top: 70px" min-width="250px">
  <div class="container-fluid">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header" style="background-color: red" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
    
    <div class="collapse navbar-collapse" id="topFixedNavbar1" style="background-color: red">
      <ul class="nav navbar-nav">
       
      
        
         <li class="active"><a href="about.html">log in<span class="sr-only"></span></a></li>
          <li class="active"><a href="about.html">profile<span class="sr-only"></span></a></li>
           <li class="active"><a href="about.html">ABOUT<span class="sr-only"></span></a></li>
      </ul>

    </div>
    <!-- /.navbar-collapse -->
  </div>
 
</nav>


	 <div class="jumbo1"  ><img src="Blood_646x300.jpg"   alt="Third slide image" class="center-block"></div>

    <div class="jumbotron1"  >
<div class="container">

 <div class="thumbnail" class="text-aling"  >
                 
<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>


  

 <li class="active"><a href="about.html">ABOUT<span class="sr-only"></span></a></li>
</div> 

 	
 
 	
  
 	
 
      
            </div>
        </div>

      


<hr><hr>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyCompany. All rights reserved.<br>
          2017   <br>  
          KENYA<br>
                 <a href="kimari@gmail.com">kimari@gmail.com</a>
 developer wamuiga .k. <a href="kelvinwamuiga@gmail.com">kelvinwamuiga@gmail.com</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.3.min.js"></script>
<!-- <script src="file:///C|/Users/keven/AppData/Roaming/Adobe/Dreamweaver CC 2017/en_US/Configuration/Temp/Assets/eam2A8B.tmp/js/bootstrap.js"></script> -->
<script src="js/bootstrap-3.3.7.js"></script>
</div>
</body>
</html>
