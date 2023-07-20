<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Tailwind CSS -->
    <link href="./assets/tailwind/output.css" rel="stylesheet">

</head>

<body class="bg-secondary h-screen relative">
    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center">
        <div class=" absolute left-5 top-2 mt-4 hidden md:block  ">
            <div class="flex">
                <img src="./assets/images/TH Logo 3.png" alt="logo" class="w-12 object-cover ">
                <p class="-ml-2 text-sm font-semibold ">TrendHub</p>
            </div>
        </div>
        <div class="block md:hidden absolute left-5 top-2 mt-4 ">
            <img src="./assets/images/backIcon.png" alt="back to home" srcset="" class="w-4">
        </div>

        <p class="mt-4 text-xs md:text-base text-center absolute right-5 top-2">
            Not a member?
            <a href="/signup"><button class="bg-tertiary hover:underline text-xs md:text-sm md:w-20 p-1 rounded-sm text-textWhite">Sign up</button></a>
        </p>
    </div>
    <div class="flex justify-center items-center">
        <img src="./assets/images/TH Logo 3.png" alt="logo" class="w-16 md:w-24 object-cover top-16 absolute md:left-1/2">
        <div class="bg-primary absolute top-20 right-1/4 flex justify-center items-center w-1/2 shadow-2xl mt-12">
            <div class="hidden md:block w-1/2 p-8 mt-10 mb-10">
                <img src="./assets/images/login.png" alt="Illustration Photo" class="w-full h-full object-cover">
            </div>
            <div class="p-8 md:w-1/2 text-center">
                <h2 class="text-md md:text-2xl font-bold mb-4"><span>Welcome to</span>
                    <span class="text-tertiary">TrendHub</span>
                </h2>
                <p class="text-sm md:text-lg font-medium mb-4 ">Login</p>
                <form action="#" method="POST">
                    <input type="text" name="username" placeholder="Username" required class="w-full py-1 md:py-2 px-3 rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <input type="password" name="password" placeholder="Password" required class="w-full py-1 md:py-2 px-3 rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                    <button type="submit" class="w-full py-1 md:py-2 px-4 text-sm md:text-base bg-tertiary text-white rounded hover:[#FF5500] focus:outline-none focus:ring-2 focus:ring-blue-600">Login</button>
                    <p class="text-decoration-line: underline text-xs md:text-sm text-medium ">Forget your password?</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>