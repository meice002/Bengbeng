<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Will You Go Out With Me?</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">Will you go out with me?</h1>
    <div class="flex gap-4">
        <button id="yesBtn" onclick="sayYes()" class="px-6 py-3 text-lg text-white bg-green-500 rounded-md hover:bg-green-600 transition">Yes</button>
        <button id="noBtn" class="px-6 py-3 text-lg text-white bg-red-500 rounded-md hover:-translate-x-[50vw] hover:-translate-y-[50vh] transition-transform relative">No</button>
    </div>

    <script>
        function sayYes() {
            alert("Yay! I'm so happy you said yes! 😊");
        }
    </script>
</body>
</html>