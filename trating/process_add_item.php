<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    // Validate input
    if (!empty($name)) {
        // Insert item into the database
        $stmt = $conn->prepare("INSERT INTO items (name) VALUES (?)");
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            echo "Item added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please provide a name for the item.";
    }
}

$conn->close();
?>
<p><a href="add_item.php">Add Another Item</a></p>
<p><a href="index.php">Back to Home</a></p>
