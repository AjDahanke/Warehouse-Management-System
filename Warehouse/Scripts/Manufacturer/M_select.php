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

    $sql = "SELECT MFR_ID, M_NAME, M_TYPE FROM manufacturer";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {	echo "Manufacturer Records - <br>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {	echo "<br>&nbsp&nbsp Manufacturer ID : " . $row["MFR_ID"]. "<br>&nbsp&nbsp Name : " . $row["M_NAME"]. "<br>&nbsp&nbsp Type : " . $row["M_TYPE"]. "<br>";	 }
    }
    else
    {   echo "No records found.";	}

    mysqli_close($conn);
?>
