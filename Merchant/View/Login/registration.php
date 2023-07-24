<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="merchantBg w-screen h-screen overflow-hidden">
    <div class="flex justify-center items-center mt-24 p-6">
        <div class="bg-white w-2/3 p-6 shadow-lg rounded-md grid grid-cols-2 gap-4">
            <div class="col-span-2 ">
                <h1 class="text-2xl font-bold mb-6 text-start"><span>Welcome to </span><span class="text-orange-500">TrendHub</span></h1>
            </div>
            <div class="col-span-1">
               
                <input type="text" id="business-name" name="business-name" class="w-full shadow-md  border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Business Name">
            </div>
            <div class="col-span-1">
               
                <input type="text" id="business-license" name="business-license" class="w-full shadow-md  border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Business License">
            </div>
            <div class="col-span-1">
               
                <input type="text" id="name" name="name" class="w-full shadow-md  border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Name">
            </div>
            <div class="col-span-1">
                
                <input type="text" id="address" name="address" class="w-full shadow-md  border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Address">
            </div>
            <div class="col-span-1">
                
                <input type="email" id="email" name="email" class="w-full shadow-md border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Email address">
            </div>
            <div class="col-span-1">
                
                <input type="tel" id="phone" name="phone" class="w-full shadow-md   border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Phone number">
            </div>
            <div class="col-span-1">
                
                <input type="password" id="password" name="password" class="w-full shadow-md  border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Password">
            </div>
            <div class="col-span-1">
               
                <input type="password" id="confirm-password" name="confirm-password" class="w-full shadow-md  border border-secondary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-secondary" placeholder="Confirm Password">
            </div>
            <div class="col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox border border-secondary rounded focus:outline-none focus:ring ">
                    <span class="ml-2 text-sm text-gray-700">I agree to Terms & Conditions.</span>
                </label>
            </div>
            <div class="col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox border border-secondary rounded focus:outline-none focus:ring ">
                    <span class="ml-2 text-sm text-gray-700">I agree to Privacy & Policy.</span>
                </label>
            </div>
            <div class="col-span-1"></div>
            <div class="col-span-1">
                <button type="submit" class="w-full bg-secondary shadow-md   text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-secondary">Register</button>
            </div>
            <div class="col-span-1"></div>
            <div class="col-span-1">
                <a href="#" class="text-black text-center text-sm underline">
                    <p>Already registered?</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>