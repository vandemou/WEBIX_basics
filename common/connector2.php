<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webix_basics";
$data = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//select data
$sql = "SELECT year, title FROM movie";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["personID"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}
echo json_encode($data);

$conn->close();
?>
