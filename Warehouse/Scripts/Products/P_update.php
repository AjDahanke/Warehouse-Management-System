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

$sql = "UPDATE product SET P_NAME = '$_POST[UP_name]',P_PRICE = '$_POST[UP_price]',MFG_DATE = '$_POST[UP_md]',EXP_DATE = '$_POST[UP_ed]',P_TYPE = '$_POST[UP_type]',MFR_ID = '$_POST[UP_by]' WHERE PRODUCT_ID = '$_POST[UP_id]'";

if (mysqli_query($conn, $sql))
{	echo "New record updated successfully.";	  }
else
{   echo "Error: " . $sql . "<br>" . $conn->error;   }

mysqli_close($conn);
?>