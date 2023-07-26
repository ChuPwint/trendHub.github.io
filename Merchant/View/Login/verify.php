<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Password Page</title>

    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="merchantBg w-screen h-screen overflow-hidden">
    <div class="flex justify-center items-center mt-24 p-6">
        <div class="bg-white w-full sm:w-96 p-6 shadow-lg rounded-md">
            <h1 class="text-2xl font-bold mb-6 text-center"><span>Welcome to </span><span class="text-orange-500">TrendHub</span></h1>
            <h1 class="text-xl font-semibold mb-6 text-center">Verify Password</h1>
            <h1 class="text-sm  mb-6 text-center">Please enter the 4 digit code that
                send to your email address.</h1>

            <form>
                <div class="mb-4">
                 
                    <input type="password" id="password" name="password" class="w-full border shadow-lg border-secondary rounded-md py-2 px-3 mt-1 tracking-[1.2em] text-center focus:outline-none focus:ring focus:ring-secondary" placeholder="____">
                </div>
                <button type="submit" class="w-full shadow-lg bg-secondary text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-secondary"><a href="./reset.php"> Verify</a></button>
            </form>
            <p class="mt-4 text-center">
                <a href="./login.php" class="text-black text-sm underline">Back to Login</a>
            </p>
        </div>
    </div>
</body>

</html>