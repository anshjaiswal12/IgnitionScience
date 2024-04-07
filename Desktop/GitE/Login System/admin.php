<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results management system</title>

<style>
body {
    font-family: Verdana, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

form {
    margin: 50px auto;
    padding: 20px;
    max-width: 600px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

h1 {
    text-align: center;
    margin-top: 20px;
}

h3 {
    margin-top: 10px;
    font-size: 1.2em;
}



/* Add any additional styling as needed */

    </style>
    </head>

<body>
    <form action="store.php" method="post"><br>
    <h2><font color="#92D822"><i>Student name</font></i></h2>  <input type="text" name="sn" required><br>
    <h3><font color="##bb33ff">Enter marks of student  </font> </h3>
    Internet Technologies   <input type="number" name="IT" required><br>
    English    <input type="number" name="eng" required><br>
    Hindi    <input type="number" name="hindi" required><br>
    Artificial Intelligence    <input type="number" name="ai" required><br>
    Indian Constitution    <input type="number" name="IC" required><br>
    Software Engineering    <input type="number" name="SE" required>
    <h1><input type="submit" value="submit"></h1>
    </form>
    
</body>
</html>