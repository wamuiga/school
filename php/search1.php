<?php
$mysqli = NEW MYSQLI ("localhost","root","","blood");

$resultset = $mysqli->query("SELECT  you.bloodtype AS bloodtype,
	FROM you
	WHERE you.bloodtype = 'AB+'");

while($rows =  $resultset->fetch_assoc() ){
  $you = $rows['bloodtype'];

echo  "<p>you: $bloodtype</p>";

}
echo $resultset->num_rows;
?>