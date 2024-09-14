<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Editor</title>
    <!-- Include Quill styles -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Include TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Flowbite -->
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-2xl p-8 bg-white rounded-lg shadow-lg">
        <form action="submit.php" method="POST" onsubmit="return submitForm()">
            <div id="editor-container" class="h-64 mb-4 border border-gray-300 rounded"></div>
            <input type="hidden" name="content" id="content">
            <button type="submit" class="w-full py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 transition duration-150 ease-in-out">
                Submit
            </button>
        </form>
        <a href="view_articles.php" class="block mt-4 text-center text-blue-600 hover:underline">
            Baca Artikel Lainnya
        </a>
    </div>
    
    <!-- Include Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{ 'header': 1 }, { 'header': 2 }],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],
            [{ 'indent': '-1'}, { 'indent': '+1' }],
            [{ 'size': ['small', false, 'large', 'huge'] }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [{ 'align': [] }],
            ['link', 'image', 'video']
        ];

        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        function submitForm() {
            var content = document.querySelector('#content');
            content.value = quill.root.innerHTML.trim();
            if (content.value === "" || content.value === "<p><br></p>") {
                alert("Please write something before submitting.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
