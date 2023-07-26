<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="merchantBg w-screen h-screen overflow-hidden">
    <div class="flex justify-center items-center mt-24 p-6">
        <div class="bg-white w-96 p-6 shadow-lg rounded-md ">
            <h1 class="text-2xl font-bold mb-6 text-center"><span>Welcome to </span><span class="text-orange-500">TrendHub</span></h1>
            <h1 class="text-xl font-semibold mb-6 text-center">Reset Password</h1>
            <h1 class="text-sm mb-6 text-center">  Your new password must be different from previously used password.</h1>
          
            <form>
                <div class="mb-4">
                  
                    <input type="password" id="new-password" name="new-password" class="w-full shadow-lg border border-black rounded py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="New Password">
                </div>
                <div class="mb-4">
                    
                    <input type="password" id="confirm-password" name="confirm-password" class="w-full shadow-lg border border-black rounded py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Confirm Password">
                </div>
                <button type="submit" class="w-full bg-secondary mt-4  shadow-lg text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-secondary"><a href="./login.php">Reset Password</a></button>
            </form>
        </div>
    </div>
</body>

</html>