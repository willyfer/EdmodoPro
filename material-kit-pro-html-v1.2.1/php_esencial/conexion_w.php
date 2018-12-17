 <?php
$servername = "localhost:33065";
$username = "root";
$password = "";
 $dbname = "db_colegio";
// Create connection
// 
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	 $conn->exec("SET CARACTER SET utf8");
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

// Check connection
 
?> 