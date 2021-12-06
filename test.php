
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bidding";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else
    // echo "Hello";

$sql = "SELECT * FROM user_registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["user_id"]."</td>";
    echo "<td>" . $row["f_name"]."</td>";
    echo "<td>" . $row["l_name"]."</td>";
    echo "<td>" . $row["email"]."</td>";
    echo "<td>" . $row["pass"]."</td>";
    echo "<td>" . $row["dob"]."</td>";
    echo "<td>" . $row["gender"]."</td>";
    echo "<td>" . $row["address"]."</td>";
    echo "<td>" . $row["phone"]."</td>";
    echo "</tr>";
}
echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
