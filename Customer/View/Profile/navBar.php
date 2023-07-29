<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
</head>

<body>
    <!-- Mobile menu button-->
    <div class="fixed bottom-0 left-1/2 transform -translate-x-1/2 flex justify-center space-x-4 bg-blue-500 bg-opacity-50 backdrop-blur-lg p-4 rounded-lg shadow-lg">
      <div class="hover:bg-darkGreenColor hover:text-white p-2 rounded-md cursor-pointer">
            <img id="mobile-user" src="../resources/img/profile/user.png" alt="" class="w-6">
        </div>


        <div class="hover:bg-darkGreenColor hover:text-white p-2 rounded-md cursor-pointer">
            <img id="mobile-wishlist" src="../resources/img/profile/wishlist.png" alt="" class="w-6">
        </div>


        <div class="hover:bg-darkGreenColor hover:text-white p-2 rounded-md cursor-pointer">
            <img id="mobile-order" src="../resources/img/profile/orderhistory.png" alt="" class="w-6">
        </div>

        <div class="hover:bg-darkGreenColor hover:text-white p-2 rounded-md cursor-pointer">
            <img id="mobile-notify" src="../resources/img/profile/notify.png" alt="" class="w-6">
        </div>
        <div class="hover:bg-darkGreenColor hover:text-white p-2 rounded-md cursor-pointer">
            <img id="mobile-logout" src="../resources/img/login/logout1.png" alt="" class="w-6">
        </div>

    </div>
    <!-- Mobile menu button End-->
</body>

</html>