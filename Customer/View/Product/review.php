<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page with Tailwind CSS</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="bg-primary">
    <div class="flex flex-row justify-around container mx-auto px-8 py-8">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-semibold mb-4">Create Review</h1>
            <p class="text-lg font-semibold">Overall Rating</p>
            <div class="flex flex-row">
                <img src="../resources/img/products/star.svg" alt="star">
                <img src="../resources/img/products/star.svg" alt="star">
                <img src="../resources/img/products/star.svg" alt="star">
                <img src="../resources/img/products/star.svg" alt="star">
                <img src="../resources/img/products/star.svg" alt="star">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2" for="message">Review Title</label>
                <textarea class="w-1/2 px-3 py-3 h-16 resize-none border border-tertiary rounded focus:outline-none " id="message" placeholder="Add a headline review"></textarea>
            </div>
            <!-- <p>Add a photo</p>
            <div class="w-20 h-20 bg-secondary rounded-md flex items-center justify-center">
                <p class="text-black text-xl">+</p>
            </div> -->

            <div>
                <label class="block text-gray-700 font-semibold mb-2" for="message">Add a written review:</label>
                <textarea class="w-full px-3 py-3 h-24 resize-none border border-tertiary rounded focus:outline-none " id="message" placeholder="What do you like or dislike?"></textarea>

            </div>
            <button class="bg-tertiary  text-white font-semibold px-4 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300">
                Submit Review
            </button>
        </div>
        <!-- <div>
            <img src="../resources/img/products/review.svg" alt="review">
        </div> -->
    </div>
</body>

</html>