<?php 
	 
 if(isset($_POST['submit'])){ 
   if(isset($_GET['go'])){ 
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
  //connect  to the database 
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());    //-select  the database to use 
  $mydb=mysql_select_db("blood"); 
    //-query  the database table 
    $sql="SELECT  ID, firstname, lastname FROM you WHERE firstname LIKE '%" . $name .  "%' OR lastname LIKE '%" . $name ."%'"; 
    //-run  the query against the mysql query function 
    $result=mysql_query($sql); 
    //-create  while loop and loop through result set 
    while($row=mysql_fetch_array($result)){ 
            $firstname  =$row['FirstName']; 
            $lastname=$row['LastName']; 
           $ID=$row['ID']; 
    //-display the result of the array 
    echo "<ul>\n"; 
    echo "<li>" . "<a  href=\"search_go.php?id=$ID\">"   .$firstname . " " . $lastname .  "</a></li>\n"; 
    echo "</ul>"; 
    } 
   } 
    else{     echo  "<p>Please enter a search query</p>";     } 
   } 
    } 

?> 

<?php

require_once 'db/about.php';
if(isset($_GET['keywords'])){

$keywords = $db->escape_string($_GET['keywords']);

$query = $db->query("
SELECT bloodtype,city
FROM you
WHERE body LIKE '%{$keywords}%'
OR title LIKE '%{$keywords}%'
  ");

?>

<div class ="result-count">
  Found <?php echo $query->num_rows; ?>result.

</div>

<?php

if($query->num_rows){

while ($r = $query->fetch_object()) {
  ?>
  <div class="result">
    
  </div>
   }
}

}

?>
