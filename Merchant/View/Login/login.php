<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Login</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>
<body class="merchantBg w-screen h-screen">
    <div class="flex justify-center items-center mt-32 p-6">
<div class="bg-white w-full sm:w-96 p-6 shadow-lg rounded-md ">
    <h1 class="text-2xl font-bold mb-6 text-center"><span>Welcome to </span><span class="text-tertiary">TrendHub</span></h1>
    <h1 class="text-xl font-semibold mb-6 text-center">Login</h1>
    <form>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email"
          class="w-full border border-tertiary rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-blue-300"
          placeholder="Enter your email">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password"
          class="w-full border border-gray-300 rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring focus:ring-blue-300"
          placeholder="Enter your password">
      </div>
      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">Login</button>
    </form>
    <div class="mt-4 text-center">
      <a href="#" class="text-blue-500 underline">Not yet registered?</a>
      <span class="text-gray-500 mx-1">|</span>
      <a href="#" class="text-blue-500 underline">Forgot Password?</a>
    </div>
  </div>
  </div>
</body>
</html>