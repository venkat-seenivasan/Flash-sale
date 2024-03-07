<?php
// Connect to your database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch product names from the database based on the entered letters
if (isset($_GET['term'])) {
    $term = $_GET['term'];
    $query = "SELECT ename FROM tb_offer WHERE sta='Premium' AND ename LIKE '$term%'";
    $result = mysqli_query($conn, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row['ename'];
    }
    echo json_encode($data);
}
?>
