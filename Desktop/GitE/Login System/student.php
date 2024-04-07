<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Scores</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 2px solid #333; /* Changed border color and increased thickness */
        border-radius: 8px; /* Added border radius for rounded corners */
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #4CAF50; /* Dark green for header */
        color: white; /* White text for header */
    }
    /* Added new style for odd rows */
    tr:nth-child(odd) {
        background-color: #f2f2f2; /* Light gray background for odd rows */
    }
    /* Added hover effect for rows */
    tr:hover {
        background-color: #d4d4d4; /* Light gray on hover */
    }
</style>
</head>
<body>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'scores');
    if ($conn === FALSE) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM scores";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Student Name</th><th>IT</th><th>English</th><th>Hindi</th><th>AI</th><th>IC</th><th>SE</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['sn']."</td>";
            echo "<td>".$row['it']."</td>";
            echo "<td>".$row['eng']."</td>";
            echo "<td>".$row['hindi']."</td>";
            echo "<td>".$row['ai']."</td>";
            echo "<td>".$row['ic']."</td>";
            echo "<td>".$row['se']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
    
    mysqli_close($conn);
?>

</body>
</html>
