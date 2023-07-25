<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Submission Complete Model Box</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="merchantBg w-screen h-screen overflow-hidden">
<div class="flex justify-center items-center p-6">
<button type="submit" class="w-48 mt-40 bg-secondary shadow-md text-white font-semibold py-2 px-4  rounded focus:outline-none focus:ring focus:ring-secondary" id="submit">Product Submit</button>
</div>
<div id="submitCompleteModal" class="hidden  fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-white w-1/3 p-6 shadow-lg rounded-md text-center">
        <h2 class="text-xl font-bold mb-4">Product Submission is complete.</h2>
        <hr>
        <p class="text-gray-600 mt-6">Your Product Submission is complete. We will verify the information details and notify you about your products approval. Check your notifications for any updates.</p>
        <button id="closeModal" class="mt-4 w-1/2 bg-secondary text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">Close</button>
    </div>
</div>

<script>
    const submitBtn = document.getElementById("submit");
    const submitModelBox = document.getElementById("submitCompleteModal");
    submitBtn.addEventListener("click", () => submitModelBox.classList.remove("hidden"));

    // JavaScript to handle the modal
    document.getElementById("closeModal").addEventListener("click", () => {
        document.getElementById("submitCompleteModal").classList.add("hidden");
    });
</script>
</body>

</html>