<?php
session_start();

$notifications = $_SESSION["notificationMessages"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>

</head>

<body>
    <div class="container mx-auto mt-8 p-4" id="notification">
        <h2 class="text-2xl font-semibold mb-4 flex justify-center">Notifications</h2>

        <?php


        foreach ($notifications as $notification) {
        ?>


            <div class="w-full mx-auto mt-8">
                <div class="bg-white shadow-lg rounded-lg px-6 py-4 mb-4">
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-lg">
                        <?= ($notification['message']); ?>
                    </div>
                    <div class="text-gray-500 text-sm mt-2">
                        From:<?= ($notification['from']); ?>, Date: <?= ($notification['create_date']); ?>
                    </div>
                </div>
            </div>
        <?php } ?>



    </div>


</body>

</html>