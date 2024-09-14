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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    // Handle image uploads
    $uploadDir = 'assets/img/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $content = preg_replace_callback(
        '/<img[^>]+src="data:image\/([^;]+);base64,([^"]+)"[^>]*>/i',
        function ($matches) use ($uploadDir) {
            $imageType = $matches[1];
            $imageData = base64_decode($matches[2]);
            $imageName = uniqid() . '.' . $imageType;
            $imagePath = $uploadDir . $imageName;
            file_put_contents($imagePath, $imageData);
            return '<img src="' . $imagePath . '" />';
        },
        $content
    );

    $stmt = $conn->prepare("INSERT INTO articles (content) VALUES (?)");
    $stmt->bind_param("s", $content);

    if ($stmt->execute()) {
        echo "New record created successfully <a href='view_articles.php'>View articles</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
