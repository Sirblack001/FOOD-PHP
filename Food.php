<?php
$mysqli= new mysqli('localhost','root','mypassword');

if(!$mysqli){
    die('Could not connect: '.mysqli_error($mysqli));
}
echo 'Connected successfully to mySQL.<BR>';

if(!$mysqli->query("CREATE DATABASE Food")===TRUE){
    echo"<p>Database for Food Created</p>";
}
else{ echo "Error creating Food database:".mysqli_error($mysqli)."<br>";

}
$mysqli->select_db("Food");
Echo("Selected Food Database");

$query= "CREATE TABLE Food_Table 
(FOOD_TYPE varchar(17) PRIMARY KEY, GRAM INT, Username varchar(50), SALE_PRICE DECIMAL(10,2), SALE_DATE DATE)";

if($mysqli->query($query)==TRUE) {
    echo "<p>Database table 'Food Table' created</p>";
}
else {
    echo "<p>Error:</p>".mysqli_error($mysqli);
}
$query="INSERT INTO 'food'.'food_table'('FOOD_TYPE','GRAM',' Username', 'SALE_PRICE', 'SALE_DATE')

VALUES
('Jollof-rice','2g', 'Olivia','N4000', DATE);";

if ($mysqli->query($query)===TRUE){
    echo"<p>Database Updated successfully.</p>";
}
else{
echo "<p>Database Error:</p>".mysqli_error($mysqli);
echo $query;

}

$mysqli->close();

?>