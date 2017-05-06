<?php

$output = NULL; 

if(isset($_post['submit'])){
 $mysqli = NEW MYSQLI("localhost","root","","blood");

 $search = $mysqli->real_escape_string($_post['search']);


$resultset = $mysqli->query(" SELECT * FROM  'you' WHERE 'city' LIKE '%{$search}%' ");

if($resultset->num_rows > 0){
  while ( $rows = $resultset->fetch_assco()) {

    $city = $rows['city'];
    

    $output = "city : '$city'<br /><br /><br />";

    # code...
  }
}
else{

  $output = "no  result";
}

}

?>
<?php  echo $output; ?><div class="form">
<form method="post" >
  <input type="TEXT"  name="search"/>
  <input type="SUBMIT" name ="submit"  value="search"/>
</form>
 </div>
