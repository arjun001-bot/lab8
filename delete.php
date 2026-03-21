<?php 
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $client_id = $_POST['client_id'];

    $sql = "DELETE FROM client_info WHERE client_id = '$client_id'";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "Deleted!";
        } else {
            echo "No record found.";
        }
    } else {
        echo "Error deleting record.";
    }
}

require_once './includes/footer.php';
?>