<!doctype html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
<title>kimari_sed_so</title>
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css"><link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">

<link href="keven.css" rel="stylesheet" type="text/css">

<script>
function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     


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

</head>
<body bgcolor="#070707"  style="padding-top: 70px" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"  >
 
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(255, 255, 255, 0.55);" 
              style="color: rgb(14, 14, 14);">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color: #080808;">.HOME.</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a class="page-scroll" href="#about" style="color: #080808;">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="takepart.php" style="color: #080808;">Take part</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio" style="color: #080808;">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" style="color: #080808;">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section>
<div class="jumbo2"  >
<div class="hehe">

  <h1 style="color: #ffffff;"><CENTER>WELCOME TO THE BLooD DoNaTiON community.</CENTER></h1>
  <CENTER>
  <a href="request.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">MAKE A DONATION REQUEST</a>
    <CENTER> 
     
</div>
</hr>

   <div class="form" style="color: #ffffff;">
<form method="post">
     <h1>Search for donor near you</h1>
  <input type="text"  name="search" placeholder=" enter blood type"/>
  <input type="submit" name ="submit" value="search"/>
                 
  <?php
$output = NULL; 
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
      while($row = mysqli_fetch_assoc($result))
       {
          echo "<hr > BLOODTYPE : " . $row["bloodtype"].  

              "<hr> CITY : " . $row["city"]. "<hr>";

      }
  }
   else 
  {
    $output = "0 results:";
  }

}
?>
<?php  echo $output; ?>
</form>
  
<br>
<hr>
<H2 style="color: #ffffff;"><CENTER>TAKE PART TODAY <br>DONATE BLOOD SAVE A LIFE<br>WE VALUE EDUCTION AND AS A TESTIMENT TO OUR WILL.WE DECIDED 
    TO ENDORSE THIS PROJECT DUE TO ITS GREAT BENEFIT TO SOCIETY AND 
    THE YOUTH IN THE FIGHT TO COMBAT IGNORANCE.:</CENTER></H2><hr>
               
              
            </div>
        </div>
    </header>
</div>
</section>

<section id="info" >
<H2><CENTER>MORE INFORMATION:</CENTER></H2>
<button class="tablink" onclick="openCity('IHUB', this, 'red')" id="defaultOpen">DONATION PROCESS</button>
<button class="tablink" onclick="openCity('KUCCPS', this, 'green')">WHERE TO DONATE</button>
<button class="tablink" onclick="openCity('C4DLAB', this, 'blue')">FUN FACTS</button>
<button class="tablink" onclick="openCity('STRATHMORE', this, 'orange')">EVENTS</button>

<div id="IHUB" class="tabcontent">
  <div class="header-content" style="background-color: rgba(42, 74, 73, 0.75);">
  <h3>DONATION PROCESS</h3>
  <p>WE VALUE EDUCTION AND AS A TESTIMENT TO OUR WILL.WE DECIDED 
    TO ENDORSE THIS PROJECT DUE TO ITS GREAT BENEFIT TO SOCIETY AND 
    THE YOUTH IN THE FIGHT TO COMBAT IGNORANCE.</p><p>We will ask you to read our Welcome leaflet which explains the importance of blood safety.
 It’s important to read this whenever you attend
 because advice does change. We will give you 500ml of fluid just before you give blood.
  Drinking this over about 5 minutes will help with 
 your well-being during and after donation.</p>
<h3>2. Health screening</h3>
<p>We make sure it is safe for you to donate, and 
  that your blood donation is safe for a patient to receive.</p>
<ul>
<p>When you are comfortable on the chair we will ask you to confirm your name, address and date of birth.</p>
<p>We examine your arm and place a cuff on your arm to maintain a small amount 
  of pressure during donation (this does not measure blood pressure).</p>
<p>We then examine your arm to find a suitable vein and clean it with an antiseptic sponge.</p>
<ol>
<li>We will insert a needle in your arm which will collect your blood into a blood
 bag with your unique donor number.</li>
<li>You should not feel any discomfort or pain. If you do, tell a member of staff.</li>
<li>A scale weighs the blood and stops when you have donated 470ml (or just under a pint).
 This usually takes between 5-10 minutes.</li>
<li>The needle will be removed and a sterile dressing applied to your arm.</li></p>
</div></div>

<div id="KUCCPS" class="tabcontent">
  <div class="header-content" style="background-color: rgba(42, 74, 73, 0.75);">
  <h3>WHERE TO DONATE</h3>
  <p>Being in the same line of duty of providing useful 
    information to individuals wishing to persue a higher
     education.We saw this as a great opportunity to help out 
     people even more.As they say,the more the merrier</p>
     <p>WE VALUE EDUCTION AND AS A TESTIMENT TO OUR WILL.WE DECIDED 
    TO ENDORSE THIS PROJECT DUE TO ITS GREAT BENEFIT TO SOCIETY AND 
    THE YOUTH IN THE FIGHT TO COMBAT IGNORANCE.</p><p>We will ask you 
    to read our Welcome leaflet which explains the importance of blood safety.
 It’s important to read this whenever you attend
 because advice does change. We will give you 500ml of fluid just before you give blood.
  Drinking this over about 5 minutes will help with 
 your well-being during and after donation.</p>
<h3>2. Health screening</h3>
<p>We make sure it is safe for you to donate, and 
  that your blood donation is safe for a patient to receive.</p>
<ul>
<p>When you are comfortable on the chair we will ask you to confirm your name, address and date of birth.</p>
<p>We examine your arm and place a cuff on your arm to maintain a small amount 
  of pressure during donation (this does not measure blood pressure).</p>
<p>We then examine your arm to find a suitable vein and clean it with an antiseptic sponge.</p>
<ol>
<li>We will insert a needle in your arm which will collect your blood into a blood
 bag with your unique donor number.</li>
<li>You should not feel any discomfort or pain. If you do, tell a member of staff.</li>
<li>A scale weighs the blood and stops when you have donated 470ml (or just under a pint).
 This usually takes between 5-10 minutes.</li>
<li>The needle will be removed and a sterile dressing applied to your arm.</li></p> 
</div></div>

<div id="C4DLAB" class="tabcontent">
  <div class="header-content" style="background-color: rgba(42, 74, 73, 0.75);">
  <h3>FUN  FACTS</h3>
  <p>Knowledge is power.We saw this website would be 
    of great aid to thousands and it would be a failure on our
     part if we did not aid them in making it a reality.</p><p>We will ask you to read our Welcome leaflet which explains the importance of blood safety.
 It’s important to read this whenever you attend
 because advice does change. We will give you 500ml of fluid just before you give blood.
  Drinking this over about 5 minutes will help with 
 your well-being during and after donation.</p>
<h3>2. Health screening</h3>
<p>We make sure it is safe for you to donate, and 
  that your blood donation is safe for a patient to receive.</p>
<ul>
<p>When you are comfortable on the chair we will ask you to confirm your name, address and date of birth.</p>
<p>We examine your arm and place a cuff on your arm to maintain a small amount 
  of pressure during donation (this does not measure blood pressure).</p>
<p>We then examine your arm to find a suitable vein and clean it with an antiseptic sponge.</p>
<ol>
<li>We will insert a needle in your arm which will collect your blood into a blood
 bag with your unique donor number.</li>
<li>You should not feel any discomfort or pain. If you do, tell a member of staff.</li>
<li>A scale weighs the blood and stops when you have donated 470ml (or just under a pint).
 This usually takes between 5-10 minutes.</li>
<li>The needle will be removed and a sterile dressing applied to your arm.</li></p>
</div></div>

<div id="STRATHMORE" class="tabcontent">
  <div class="header-content" style="background-color: rgba(42, 74, 73, 0.75);">
  <h3>EVENTS</h3>


  <div class="thumbnail2" class="text-aling"  >
  <div class="jumbo">
<h2 style="text-align:center" >my Profile</h2>
<div class="card" style="background-color: #fdfdfd;">
  <div class="imgcontainer">
    <img src="house_md_actor_dr_gregory_house_face_hugh_laurie_2019_3840x2400.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container1" width="310px">
    <form action="" method="post" >
      <a href="#">
        <i class="fa fa-facebook"></i></a> 
<label>firstname:</label><br><input type="text" name="firstname"  id="firstname" required  placholder="jone dow"/><hr>
<label>lastname:</label><br><input type="text" name="lastname"  id="lastname" required placeholder="jone dow" /><hr>
<label>bloodtype:</label><br><input type="text" name="bloodtype"   id="bloodtype" placeholder="A,B,AB-,O+" /><hr>
</form>  
      <a href="myprofile.html"><button class="button">..make a user profile..</button></a>
</div>
</div>
</div>
</div>
</div>
</div>

</section>

<CENTER>
  <a href="commentbox.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">give use your comments.</a>
    <CENTER> 



<section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">.......</h2>
                    <h3 class="section-subheading text-muted">..</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="471147-blood-donation-gettyimages-crop.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="471147-blood-donation-gettyimages-crop.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="471147-blood-donation-gettyimages-crop.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="471147-blood-donation-gettyimages-crop.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="471147-blood-donation-gettyimages-crop.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="471147-blood-donation-gettyimages-crop.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">BLOOD DONATION_KENYA.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image" >
                                <img class="img-circle img-responsive" src="shharc-blood-bank.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" >
                                <img class="img-circle img-responsive" src="shharc-blood-bank.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image" >
                                <img class="img-circle img-responsive" src="shharc-blood-bank.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" >
                                <img class="img-circle img-responsive" src="shharc-blood-bank.jpg" alt="" style="max-width: 100%;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" >
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><br><hr>

<footer1 class="text-center">
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
</footer1>

</div>
<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap-3.3.7.js"></script>

