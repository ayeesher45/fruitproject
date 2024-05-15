<?php
// Include the database configuration file
require_once 'connection-folder/connection.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];
    // $newRole = $_POST['new_role']; // Assuming role is selected from a dropdown

    // Insert new user into the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $newUsername);
    $stmt->bindParam(':password', $newPassword); // You should hash passwords for security
    // $stmt->bindParam(':role', $newRole);
    if ($stmt->execute()) {
        // Redirect to the admin dashboard page after adding user
        header("Location: admin-dashboard.php");
        exit();
    } else {
        // Handle insertion failure
        $error = "Failed to add user. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h2>Add New User</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="new_username">Username:</label><br>
        <input type="text" id="new_username" name="new_username"><br><br>
        <label for="new_password">Password:</label><br>
        <input type="password" id="new_password" name="new_password"><br><br>
        <label for="new_role">Role:</label><br>
        <!-- <select id="new_role" name="new_role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br> -->
        <input type="submit" value="Add User">
    </form>
</body>
</html>
