<?php
session_start();

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_regions"
);
$sql->execute();
$totalRegions = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT * FROM m_townships"
);
$sql->execute();
$totalTsp = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <!-- Include Tailwind CSS -->
    <link href="../resources/lib/tailwind/output.css" rel="stylesheet">

</head>

<body class="bg-secondary h-screen relative">
    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center absolute">
        <div class="absolute left-5 top-2 mt-4 hidden md:block">
            <div class="flex">
                <img src="../resources/img/login/TH Logo 3.png" alt="logo" class="w-12 object-cover">
                <p class="-ml-2 text-sm font-semibold">TrendHub</p>
            </div>
        </div>
        <div class="block md:hidden absolute left-5 top-2 mt-4">
            <img src="../resources/img/login/backIcon.png" alt="back to home" srcset="" class="w-4">
        </div>

        <p class="mt-4 text-xs md:text-base text-center absolute right-5 top-2">
            Already have an account? <a href="./login.php"><button class="bg-tertiary hover:underline text-xs md:text-sm md:w-20 p-1 px-2 py-1 rounded-sm text-textWhite">Sign In</button></a>
        </p>
    </div>
    <div class="flex justify-center items-center flex-col px-5 ">

        <img src="../resources/img/login/TH Logo 3.png" alt="logo" class="w-16 md:w-24 object-cover top-2  relative md:mt-8 mt-12">
        <div class="bg-primary relative  mx-10 md:w-1/2 flex justify-center items-center  shadow-2xl md:mt-5 mt-10 ">
            <div class="hidden md:block w-1/2 p-8 mt-10 mb-10">
                <img src="../resources/img/login/signup.png" alt="Illustration Photo" class="w-full h-full object-cover">
            </div>
            <div class="p-8 md:w-1/2 text-center">
                <h2 class="text-md md:text-2xl font-bold mb-4">
                    <span>Welcome To</span>
                    <span class="text-tertiary">TrendHub</span>
                </h2>

                <form action="../../Controller/registerController.php" method="post">
                    <input type="text" name="username" placeholder="Username" required <?php
                                                                                        if (isset($_SESSION["cUsername"])) { ?> value="<?= $_SESSION["cUsername"] ?>" <?php }
                                                                                                                                                                        ?> class="w-full h-8 py-1 md:py-2 px-3 text-sm rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <div class="flex justify-start"><small class="text-textRed"><?php
                                                                                if (isset($_SESSION["emailError"])) echo $_SESSION["emailError"]
                                                                                ?></small></div>
                    <input type="email" name="email" placeholder="Email" required <?php
                                                                                    if (isset($_SESSION["cEmail"])) { ?> value="<?= $_SESSION["cEmail"] ?>" <?php }
                                                                                                                                                            ?> class="w-full h-8 py-1 md:py-2 px-3 text-sm   rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <div class="w-full flex">
                        <select name="region" id="region" required class="mr-2 h-8 w-1/2 py-1 md:py-2 px-3 text-xs  rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                            <option value="" disabled selected>Region</option>
                            <?php
                            foreach ($totalRegions as $region) { ?>
                                <option value="<?= $region["id"] ?>" <?php
                                                                        if (isset($_SESSION["cRegion"]) && ($region["id"] == $_SESSION["cRegion"])) { ?> selected <?php }
                                                                                                                                                                    ?>><?= $region["name"] ?></option>
                            <?php }
                            ?>
                        </select>

                        <select name="township" id="city" required class="w-1/2 h-8 py-1 md:py-2 px-3  text-xs rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                            <option value="" disabled selected>Township</option>
                            <?php
                            foreach ($totalTsp as $township) { ?>
                                <option value="<?= $township["id"] ?>" <?php
                                                                        if (isset($_SESSION["cTownship"]) && ($township["id"] == $_SESSION["cTownship"])) { ?> selected <?php }
                                                                                                                                                                        ?>><?= $township["name"] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <input type="text" name="address" placeholder="Address" required <?php
                                                                                        if (isset($_SESSION["cAddress"])) { ?> value="<?= $_SESSION["cAddress"] ?>" <?php }
                                                                                                                                                                    ?> class="w-full h-8 py-1 md:py-2 px-3  text-sm rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <input type="tel" name="phone" placeholder="Phone Number" required <?php
                                                                                        if (isset($_SESSION["cPhone"])) { ?> value="<?= $_SESSION["cPhone"] ?>" <?php }
                                                                                                                                                                ?> class="w-full h-8 py-1 md:py-2 px-3  text-sm rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <input type="password" name="password" placeholder="Password" required class="w-full h-8 py-1 md:py-2 px-3  text-sm rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <div class="flex justify-start"><small class="text-textRed"><?php
                                                                                if (isset($_SESSION["pwdError"])) echo $_SESSION["pwdError"]
                                                                                ?></small></div>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required class="w-full h-8 py-1 md:py-2 px-3  text-sm rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <button type="submit" name="register" class="w-full py-1 md:py-2 px-4 text-sm md:text-base bg-tertiary text-white rounded hover:[#FF5500] focus:outline-none focus:ring-2 focus:ring-blue-600">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$_SESSION["pwdError"] = "";
$_SESSION["emailError"] = "";
$_SESSION["cUsername"] = "";
$_SESSION["cEmail"] = "";
$_SESSION["cRegion"] = "";
$_SESSION["cTownship"] = "";
$_SESSION["cAddress"] = "";
$_SESSION["cPhone"] = "";
?>