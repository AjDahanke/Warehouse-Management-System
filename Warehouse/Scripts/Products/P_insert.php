<?php
$servername = "sql204.epizy.com";
$username = "epiz_31711445";
$password = "ntPZMuWTt7CKCL";
$dbname = "epiz_31711445_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{   die("Connection failed: " . mysqli_connect_error());   }

$sql = "INSERT INTO product (PRODUCT_ID, P_NAME, P_PRICE, MFG_DATE, EXP_DATE, P_TYPE, MFR_ID) VALUES ('$_POST[IP_id]','$_POST[IP_name]','$_POST[IP_price]','$_POST[IP_md]','$_POST[IP_ed]','$_POST[IP_type]','$_POST[IP_by]')";

if (mysqli_query($conn, $sql))
{	echo "New record created successfully.";	  }
else
{   echo "Error: " . $sql . "<br>" . $conn->error;   }

mysqli_close($conn);
?>

