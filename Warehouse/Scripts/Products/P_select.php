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

$sql = "SELECT PRODUCT_ID, P_NAME, P_PRICE, MFG_DATE, EXP_DATE, P_TYPE, MFR_ID FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{	echo "Product Records - <br>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {	echo "<br>&nbsp&nbsp Product ID : " . $row["PRODUCT_ID"]. "<br>&nbsp&nbsp Name : " . $row["P_NAME"]. "<br>&nbsp&nbsp Price : " . $row["P_PRICE"]. "<br>&nbsp&nbsp MFG Date : " . $row["MFG_DATE"]. "&nbsp&nbsp EXP Date : " . $row["EXP_DATE"]. "<br>&nbsp&nbsp Type : " . $row["P_TYPE"]. "&nbsp&nbsp MFG by : " . $row["MFR_ID"]. "<br>";	 }
}
else
{   echo "No records found.";	}

mysqli_close($conn);
?>