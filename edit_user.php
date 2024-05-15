<?php
// Include the database configuration file
require_once 'connection-folder/connection.php';

// Check if user ID is provided in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch user details from the database based on the provided user ID
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists
    if (!$user) {
        // Redirect to the admin dashboard page if user does not exist
        header("Location: admin-dashboard.php");
        exit();
    }
} else {
    // Redirect to the admin dashboard page if user ID is not provided
    header("Location: admin-dashboard.php");
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $updatedUsername = $_POST['updated_username'];
    $updatedPassword = $_POST['updated_password'];
    // $updatedRole = $_POST['updated_role']; // Assuming role is selected from a dropdown

    // Update user in the database
    $stmt = $conn->prepare("UPDATE users SET username = :username, password = :password WHERE id = :id");
    $stmt->bindParam(':username', $updatedUsername);
    $stmt->bindParam(':password', $updatedPassword); // You should hash passwords for security
    // $stmt->bindParam(':role', $updatedRole);
    // $stmt->bindParam(':id', $userId);
    if ($stmt->execute()) {
        // Redirect to the admin dashboard page after updating user
        header("Location: admin-dashboard.php");
        exit();
    } else {
        // Handle update failure
        $error = "Failed to update user. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="updated_username">Username:</label><br>
        <input type="text" id="updated_username" name="updated_username" value="<?php echo htmlspecialchars($user['username']); ?>"><br><br>
        <label for="updated_password">Password:</label><br>
        <input type="password" id="updated_password" name="updated_password" value="<?php echo htmlspecialchars($user['password']); ?>"><br><br>
        <!-- <label for="updated_role">Role:</label><br>
        <select id="updated_role" name="updated_role">
            <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="user" <?php if ($user['role'] == 'user') echo 'selected'; ?>>User</option>
        </select><br><br> -->
        <input type="submit" value="Update User">
    </form>
</body>
</html>
