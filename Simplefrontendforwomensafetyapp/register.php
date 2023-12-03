<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kk";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
  die("Connection failed:".$conn->connect_error);
}
$NAME=$_POST["NAME"];
$GENDER=$_POST["GENDER"];
$AGE=$_POST["AGE"];
$PHONENO=$_POST["PHONENO"];
$COUNTRY=$_POST["COUNTRY"];
$LOCATION=$_POST["LOCATION"];
$STATUS=$_POST["STATUS"];
$USERID=$_POST["USERID"];
$EMAILID=$_POST["EMAILID"];
$PASSWORD=$_POST["PASSWORD"];
$sql="INSERT INTO register values('$NAME','$GENDER',$AGE,'$PHONENO','$COUNTRY','$LOCATION','$STATUS','$USERID','$EMAILID','$PASSWORD')";
if ($conn->query($sql)===TRUE)
 {
 echo "record inserted successfully";
} else
{
  echo "Error:".$sql."<br>".$conn->connect_error;
}

$conn->close();
?>