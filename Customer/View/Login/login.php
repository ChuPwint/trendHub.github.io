<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Tailwind CSS -->
    <link href="../resources/lib/tailwind/output.css" rel="stylesheet">

</head>

<body class="bg-secondary h-screen relative">
    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center absolute">
        <div class=" absolute left-5 top-2 mt-4 hidden md:block  ">
            <div class="flex">
                <img src="../resources/img/login/TH Logo 3.png" alt="logo" class="w-12 object-cover ">
                <p class="-ml-2 text-sm font-semibold ">TrendHub</p>
            </div>
        </div>
        <div class="block md:hidden absolute left-5 top-2 mt-4 ">
            <img src="../resources/img/login/backIcon.png" alt="back to home" srcset="" class="w-4">
        </div>

        <p class="mt-4 text-xs md:text-base text-center absolute right-5 top-2">
            Not a member?
            <a href="./signup.php"><button class="bg-tertiary hover:underline px-2 py-1 text-xs md:text-sm md:w-20 p-1 rounded-sm text-textWhite">Sign up</button></a>
        </p>
    </div>
    <div class="flex justify-center items-center flex-col px-5 ">

        <img src="../resources/img/login/TH Logo 3.png" alt="logo" class="w-16 md:w-24 object-cover top-2  relative md:mt-8 mt-12">
        <div class="bg-primary relative   mx-10 md:w-1/2 flex justify-center items-center  shadow-2xl md:mt-5 mt-10 ">
            <div class="hidden md:block w-1/2 p-8 mt-10 mb-10">
                <img src="../resources/img/login/login.png" alt="Illustration Photo" class="w-full h-full object-cover">
            </div>
            <div class="p-8 md:w-1/2 text-center">
                <h2 class="text-md md:text-2xl font-bold mb-4 "><span>Welcome to</span>
                    <span class="text-tertiary">TrendHub</span>
                </h2>
                <p class="text-sm md:text-lg font-medium mb-4 ">Login</p>
                <small class="text-textRed"><?php 
                    if(isset($_SESSION["registerd"])) echo $_SESSION["registerd"];
                    if(isset($_SESSION["wrongEmail"])) echo $_SESSION["wrongEmail"];
                    if(isset($_SESSION["needVerify"])) echo $_SESSION["needVerify"];       
                ?></small>
                <form action="../../Controller/loginController.php" method="POST">
                    <input type="text" name="email" placeholder="Email" required class="w-full py-1 md:py-2 px-3 rounded border border-borderOrange mb-4 focus:outline-none focus:ring-2">
                    <small class="text-textRed"><?php 
                    if(isset($_SESSION["wrongPassword"])) echo $_SESSION["wrongPassword"];
                ?></small>
                    <input type="password" name="password" placeholder="Password" required class="w-full py-1 md:py-2 px-3 rounded border border-borderOrange mb-4 focus:outline-none focus:ring-2">
                    <button name="login" type="submit" class="w-full py-1 md:py-2 mb-10 mt-4 px-4 text-sm md:text-base bg-tertiary text-white rounded hover:[#FF5500] focus:outline-none focus:ring-2">Login</button>
                    <a href="./forgotPassword.php">
                        <p class="text-decoration-line: underline text-xs md:text-sm text-medium py-8">Forget your password?</p>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php 
$_SESSION["registerd"] = ""; 
$_SESSION["wrongEmail"] = "";
$_SESSION["wrongPassword"] = "";
$_SESSION["needVerify"] = "";
?>




