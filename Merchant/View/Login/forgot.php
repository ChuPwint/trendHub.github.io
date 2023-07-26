<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Page</title>

    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="merchantBg w-screen h-screen overflow-hidden">\
<div class="flex justify-center items-center mt-24 p-6">
    <div class="bg-white w-full sm:w-96 p-6 shadow-lg rounded-md">
    <h1 class="text-2xl font-bold mb-6 text-center"><span>Welcome to </span><span class="text-orange-500">TrendHub</span></h1>
        <h1 class="text-xl font-semibold mb-6 text-center">Forgot Password</h1>
        <h1 class="text-sm  mb-6 text-center">Please enter your registered email address.</h1>
        <form>
            <div class="mb-4">
               
                <input type="email" id="email" name="email" class="w-full border shadow-lg border-gray-300 rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Email">
            </div>
           
            <button type="submit" class="w-full bg-secondary hover:bg-secondary shadow-lg text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-secondary"> <a href="./verify.php">Reset Password</a></button>
           
        </form>
        <p class="mt-4 text-center">
            <a href="./login.php" class="text-black text-sm underline">Back to Login</a>
        </p>
    </div>
    </div>
</body>

</html>