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

    // sql to delete a record
    $sql = "DELETE FROM manufacturer WHERE MFR_ID = '$_POST[DM_id]'";

    if (mysqli_query($conn, $sql))
    {	echo "Record removed successfully.";	  }
    else
    {   echo "Error: " . $sql . "<br>" . $conn->error;   }

    mysqli_close($conn);
?>
