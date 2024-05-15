<?php
// Include the database configuration file
require_once 'connection-folder/connection.php';

// Function to fetch all users from the database
function getUsers($conn)
{
    $stmt = $conn->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fetch all users from the database
$users = getUsers($conn);

// Check if form is submitted for CRUD operations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle CRUD operations here
    // You can use $_POST['action'] to determine the action (e.g., add, edit, delete)
    // Perform corresponding database operations based on the action
    // After performing the operation, you may want to refresh the page or display a success message
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <h2>Admin Dashboard</h2>

    <!-- Display CRUD operations form here -->
    <!-- For example, you can use a form with dropdown/select options for CRUD operations -->

    <!-- Display user information in a table -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <!-- <th>Role</th> -->
                <th>Action</th>
                <!-- <th>Add User</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <!-- <td><?php echo $user['role']; ?></td> -->
                    <td>
                        <!-- Edit User Link -->
                        <a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a>

                        <!-- Delete User Link -->
                        <a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a>
                        
                        <!-- Add User Link -->
                    </td>
                </tr>
                
            <?php endforeach; ?>
            <!-- <a href="add_user.php">Add User</a> -->
        </tbody>
    </table>
</body>

</html>