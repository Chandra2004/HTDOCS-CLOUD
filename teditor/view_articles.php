<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "text_editor_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, content FROM articles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Articles</title>
    <style>
        .article {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Articles</h1>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='article'>";
            echo "<h2>Article ID: " . $row["id"]. "</h2>";
            echo "<div>" . $row["content"]. "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <a href="index.html">make articles</a>
</body>
</html>
