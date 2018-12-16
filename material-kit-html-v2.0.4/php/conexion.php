 <?php
$servername = "localhost:33065";
$username = "root";
$password = "";
 $dbname = "db_colegio";
// Create connection
$conn = new PDO($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 