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

    $sql = "INSERT INTO manufacturer (MFR_ID, M_NAME, M_TYPE) VALUES ('$_POST[IM_id]','$_POST[IM_name]','$_POST[IM_type]')";

    if (mysqli_query($conn, $sql))
    {	echo "New record created successfully.";	  }
    else
    {   echo "Error: " . $sql . "<br>" . $conn->error;   }

    mysqli_close($conn);
?>
