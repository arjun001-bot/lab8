<?php require_once './includes/header.php'; ?>

<h2>Add Record</h2>

<form method="post" action="receive.php">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="address" placeholder="Address" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <input type="text" name="province" placeholder="Province" required><br>
    <input type="text" name="postal_code" placeholder="Postal Code" required><br>
    <button type="submit">Submit</button>
</form>

<hr>

<h2>Delete Record</h2>

<form method="post" action="delete.php">
    <input type="number" name="client_id" placeholder="Enter Client ID" required>
    <button type="submit">Delete</button>
</form>

<br>
<a href="viewrecords.php">View Records</a>

<?php require_once './includes/footer.php'; ?>