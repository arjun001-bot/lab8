<?php 
require_once './includes/header.php';
require_once './db/conn.php';

$sql = "SELECT * FROM client_info";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row["client_id"] . " ";
    echo $row["email"] . " ";
    echo $row["address"] . " ";
    echo $row["city"] . " ";
    echo $row["province"] . " ";
    echo $row["postalcode"] . "<br>";
}

require_once './includes/footer.php';
?>