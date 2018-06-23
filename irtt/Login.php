 <?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "irttcheck";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{	echo "<h1>Success Login</h1>";}

$sql = "INSERT INTO login (FirstName, LastName, UserName,Password)
VALUES ('John', 'Doe', 'john','12453')";

if ($conn->query($sql) == TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 