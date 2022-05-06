<html>
    <head>
        <title>Order Accepted<title>
    </head>
<?php
//note all values from the form are posted to this php program from the textfields in the form

$GRAM = $_POST['GRAM'];
$Username =$_POST['Username'];

$GRAM = mysqli_real_escape_string($_POST['GRAM'],$GRAM);
$Username = mysqli_real_escape_string($_POST['Username'],$Username);


$query = "INSERT INTO Food_Table (GRAM,Username) VALUES('$GRAM','$Username')";

echo($query."<br>");

$mysqli = new mysqli('localhost', 'root', 'password', 'food');

//check connection
if(mysqli_connect_errno()){
    printf("Connection failed: %s\n",mysqli_connect_errno());
    exit();
}
else{
echo 'Connected successfully to mySQL. <BR>';
}

//receving new orders

if($result = $mysqli->query($query)){
    echo"<p>You have successfully entered $Gram $Username into the database.</p>";

}
else{
    echo"Error Processing new orders. Please try again";
}
$mysqli->close();

?>
</html>