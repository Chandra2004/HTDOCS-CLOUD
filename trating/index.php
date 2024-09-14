<?php
include 'db.php';

// Fetch items from the database
$sql = "SELECT items.*, COUNT(ratings.id) AS rating_count
        FROM items
        LEFT JOIN ratings ON items.id = ratings.item_id
        GROUP BY items.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rating System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .star {
            color: #d1d5db;
            cursor: pointer;
        }

        .star.hovered,
        .star.selected {
            color: #fbbf24;
        }
    </style>
</head>

<body class="p-8 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Items</h1>
    <p class="mb-4"><a href="add_item.php" class="text-blue-500 underline">Add New Item</a></p>
    <ul>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <li class="mb-4 p-4 bg-white rounded shadow">
                <?php
                echo "<h2 class='text-xl font-bold'>" . $row['name'] . "</h2>";

                // Fetch average rating
                $item_id = $row['id'];
                $avg_sql = "SELECT AVG(rating) as avg_rating FROM ratings WHERE item_id = $item_id";
                $avg_result = $conn->query($avg_sql);
                $avg_row = $avg_result->fetch_assoc();
                $avg_rating = round($avg_row['avg_rating'], 2);
                ?>
                <p class="text-gray-600">Average Rating: <span id="avg-rating-<?php echo $item_id; ?>"><?php echo $avg_rating; ?></span></p>
                <p class="text-gray-600">Number of Ratings: <span id="rating-count-<?php echo $item_id; ?>"><?php echo $row['rating_count']; ?></span></p>
                <div class="flex flex-col items-center space-y-4">
                    <div class="flex space-x-1 rating" data-item-id="<?php echo $item_id; ?>">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <svg class="w-10 h-10 star" data-index="<?php echo $i; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.318 4.062h4.27c.969 0 1.371 1.24.588 1.81l-3.452 2.502 1.318 4.062c.3.921-.755 1.688-1.54 1.117L10 13.011l-3.453 2.502c-.784.57-1.839-.196-1.54-1.117l1.318-4.062-3.451-2.502c-.783-.57-.38-1.81.588-1.81h4.27L9.049 2.927z"></path>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <form class="rating-form" data-item-id="<?php echo $item_id; ?>" onsubmit="return submitRating(event, <?php echo $item_id; ?>)">
                        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" />
                        <input type="hidden" name="rating" id="rating-input-<?php echo $item_id; ?>" />
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit Rating</button>
                    </form>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
    <script>
        function submitRating(event, itemId) {
            event.preventDefault();
            const form = event.target;
            const ratingInput = document.getElementById('rating-input-' + itemId);
            const rating = ratingInput.value;

            if (!rating) {
                alert('Please select a rating.');
                return false;
            }

            const formData = new FormData();
            formData.append('item_id', itemId);
            formData.append('rating', rating);

            fetch('rate.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    const avgRatingElement = document.getElementById('avg-rating-' + itemId);
                    avgRatingElement.textContent = data.avg_rating;

                    const ratingCountElement = document.getElementById('rating-count-' + itemId);
                    ratingCountElement.textContent = data.rating_count;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));

            return false;
        }

        const starsContainers = document.querySelectorAll('.rating');

        starsContainers.forEach(container => {
            const stars = container.querySelectorAll('.star');
            const itemId = container.dataset.itemId;
            const ratingInput = document.getElementById('rating-input-' + itemId);

            stars.forEach((star, index) => {
                star.addEventListener('mouseover', () => {
                    stars.forEach((s, i) => {
                        if (i <= index) {
                            s.classList.add('hovered');
                        } else {
                            s.classList.remove('hovered');
                        }
                    });
                });

                star.addEventListener('mouseout', () => {
                    stars.forEach(s => s.classList.remove('hovered'));
                });

                star.addEventListener('click', () => {
                    const rating = index + 1;
                    ratingInput.value = rating;
                    stars.forEach((s, i) => {
                        if (i < rating) {
                            s.classList.add('selected');
                        } else {
                            s.classList.remove('selected');
                        }
                    });
                });
            });
        });
    </script>
</
