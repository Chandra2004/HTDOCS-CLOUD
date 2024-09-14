<?php
include 'db.php';

header('Content-Type: application/json');

$response = ['status' => 'error', 'message' => 'Invalid input.'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if item_id and rating are set
    if (isset($_POST['item_id']) && isset($_POST['rating'])) {
        $item_id = intval($_POST['item_id']);
        $rating = intval($_POST['rating']);
        
        // Validate that rating is between 1 and 5
        if ($rating >= 1 && $rating <= 5) {
            // Insert rating into the database
            $stmt = $conn->prepare("INSERT INTO ratings (item_id, rating) VALUES (?, ?)");
            $stmt->bind_param("ii", $item_id, $rating);

            if ($stmt->execute()) {
                // Fetch the new average rating
                $avg_sql = "SELECT AVG(rating) as avg_rating FROM ratings WHERE item_id = ?";
                $avg_stmt = $conn->prepare($avg_sql);
                $avg_stmt->bind_param("i", $item_id);
                $avg_stmt->execute();
                $avg_result = $avg_stmt->get_result();
                $avg_row = $avg_result->fetch_assoc();
                $avg_rating = round($avg_row['avg_rating'], 2);

                // Fetch the new number of ratings
                $count_sql = "SELECT COUNT(id) as rating_count FROM ratings WHERE item_id = ?";
                $count_stmt = $conn->prepare($count_sql);
                $count_stmt->bind_param("i", $item_id);
                $count_stmt->execute();
                $count_result = $count_stmt->get_result();
                $count_row = $count_result->fetch_assoc();
                $rating_count = $count_row['rating_count'];

                $response = ['status' => 'success', 'avg_rating' => $avg_rating, 'rating_count' => $rating_count];
            } else {
                $response['message'] = 'Database error: ' . $stmt->error;
            }

            $stmt->close();
        }
    }
}

$conn->close();
echo json_encode($response);
?>
