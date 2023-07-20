<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
</head>

<body>
    <div class="flex-1 p-8" id="profile-form-card">
        <!-- Content will be dynamically changed here -->

        <div class="rounded-lg p-12 shadow-lg">
            <img src="../resources/img/profile/profile.png" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto mb-4">
            <p class="mb-4 text-center font-bold">User Name</p>

            <div class="space-y-10">
                <div class="flex flex-row items-center justify-between">
                    <div class="w-1/2 ">
                        <label for="email" class="block text-textWhite mb-2">Email:</label>
                        <input type="text" id="email" class="w-1/2 p-2 border rounded" placeholder="Email">
                    </div>
                    <div class="w-1/2">
                        <label for="age" class="block text-textWhite mb-2">Age:</label>
                        <input type="text" id="age" class="w-1/2 p-2 border rounded" placeholder="Age">
                    </div>
                </div>

                <div class="flex flex-row items-center justify-between space-x-4">
                    <div class="w-1/2">
                        <label for="location" class="block text-textWhite mb-2">Location:</label>
                        <input type="text" id="location" class="w-1/2 p-2 border rounded" placeholder="Location">
                    </div>
                    <div class="w-1/2">
                        <label for="hobbies" class="block text-textWhite mb-2">Hobbies:</label>
                        <input type="text" id="hobbies" class="w-1/2 p-2 border rounded" placeholder="Hobbies">
                    </div>
                </div>

                <div class="flex flex-row items-center justify-between space-x-4">
                    <div class="w-1/2">
                        <label for="occupation" class="block text-textWhite mb-2">Occupation:</label>
                        <input type="text" id="occupation" class="w-1/2 p-2 border rounded" placeholder="Occupation">
                    </div>
                    <div class="w-1/2">
                        <label for="name" class="block text-textWhite mb-2">Name:</label>
                        <input type="text" id="name" class="w-1/2 p-2 border rounded" placeholder="Name">
                    </div>
                </div>

            </div>

            <button class="w-1/2 p-2 bg-tertiary text-white rounded mt-4">Save Profile</button>
        </div>
    </div>
</body>

</html>