<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Item</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.css" rel="stylesheet">
</head>
<body class="p-8 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Add New Item</h1>
    <form action="process_add_item.php" method="post" class="bg-white p-6 rounded shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Item Name:</label>
            <input type="text" id="name" name="name" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Item</button>
    </form>
    <p class="mt-4"><a href="index.php" class="text-blue-500 underline">Back to Home</a></p>
    <script src="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.js"></script>
</body>
</html>
