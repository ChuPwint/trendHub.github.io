<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="bg-primary font-roboto">

    <?php
    include "../resources/common/navbar.php";
    include "../../Controller/uiElement/editInfoController.php";
    ?>

    <!-- Question about order -->
    <section class="container w-full mx-auto mt-[120px]">
        <div class="text-center py-5">
            <p class="text-sm md:text-2xl font-semibold py-5">Hello, What can we help you with?</p>
            <input type="text" name="" id="" class="border-2 border-tertiary bg-primary text-xs md:text-xl md:w-80 outline-none px-5 py-1 rounded" placeholder="Question about order">
        </div>
    </section>

    <!-- Common Topics -->
    <section class="container w-full mx-auto px-7 md:px-[200px]">
        <div>
            <p class="text-sm font-semibold md:text-2xl">Common Topics</p>
            <div class="flex justify-evenly mt-5 md:mt-10 flex-wrap">
                <div class="bg-[#FEFEFE] rounded drop-shadow-xl px-5 py-5 flex flex-col items-center space-y-3 md:w-[170px]">
                    <img class="md:w-20 md:h-20" src="../resources/img/help/my_profile.svg" alt="profile">
                    <p class="text-xs md:text-xl">My Profile</p>
                </div>

                <div class="bg-[#FEFEFE] rounded drop-shadow-xl px-5 py-5 flex flex-col items-center space-y-3 md:w-[170px]">
                    <img class="md:w-20 md:h-20" src="../resources/img/help/my_orders.svg" alt="order">
                    <p class="text-xs md:text-xl">My Orders</p>
                </div>


                <div class="bg-[#FEFEFE] rounded drop-shadow-xl px-5 py-5 flex flex-col items-center space-y-3 md:w-[170px]">
                    <img class="md:w-20 md:h-20" src="../resources/img/help/my_points.svg" alt="point">
                    <p class="text-xs md:text-xl">My Points</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="container w-full mx-auto px-7 md:px-[200px]">
        <div class="mt-10 md:mt-20">
            <p class="text-sm font-semibold md:text-2xl">Frequently Asked Questions</p>
            <div class="text-xs md:text-2xl px-5 leading-6 md:leading-10 mt-3">

                <div class="flex items-center space-x-1 cursor-pointer" id="points">
                    <ion-icon class="text-tertiary" name="chevron-forward-outline"></ion-icon>
                    <p><?= $editInfo[0]["question1"] ?></p>
                </div>
                <div class="pl-4 md:pl-7 md:text-lg leading-2 pb-3 hidden" id="points-answer">
                   <?= $editInfo[0]["answer1"]  ?>
                </div>

                <div class="flex items-center space-x-1 cursor-pointer" id="orders">
                    <ion-icon class="text-tertiary" name="chevron-forward-outline"></ion-icon>
                     <p><?= $editInfo[0]["question2"] ?></p>
                </div>
                <div class="pl-4 md:pl-7 md:text-lg leading-2 pb-3 hidden" id="orders-answer">
                <?= $editInfo[0]["answer2"]  ?>
                </div>

                <div class="flex items-center space-x-1 cursor-pointer" id="payments">
                    <ion-icon class="text-tertiary" name="chevron-forward-outline"></ion-icon>
                    <p><?= $editInfo[0]["question3"] ?></p>
                </div>
                <div class="pl-4 md:pl-7 md:text-lg leading-2 pb-3 hidden" id="payments-answer">
                <?= $editInfo[0]["answer3"]  ?>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Admin -->
    <section class="container w-full mx-auto md:px-[200px]">
        <div class="text-center md:flex md:items-center md:space-x-32 md:mt-10 md:flex-wrap">
            <div class="text-sm md:text-2xl font-semibold py-5 md:flex md:flex-wrap">
                <p>Still have some questions?</p>
                <p>To contact our customer services:</p>
            </div>
            <button class="bg-tertiary text-white px-9 py-2 rounded">Contact Admin</button>
        </div>
    </section>

    <?php
    include "../resources/common/footer.php"
    ?>

    <script src="../resources/js/help/help.js"></script>
</body>

</html>