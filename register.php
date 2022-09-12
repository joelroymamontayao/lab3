<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<div class="header">
	<h2>Registered</h2>
</div>
<div class="content">

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname, middlename, lastname, gender, username, email, password FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Firstname: " . $row["firstname"] . "<br>";
    echo "Middlename: " . $row["middlename"] . "<br>";
    echo "Lastname: " . $row["lastname"] . "<br>";
    echo "Gender: " . $row["gender"] . "<br>";
    echo "Username: " . $row["username"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Password: " . $row["password"] . "<br>";
    echo "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</div>

</body>
</html>
