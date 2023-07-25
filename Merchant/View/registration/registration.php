<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <style>
    /* Custom styles for the scrolling content */
    #team {
      max-height: calc(100vh - 100px); /* Set the max-height based on viewport height minus some padding (100px in this case) */
      overflow-y: scroll; /* Enable scrolling for the content */
      scrollbar-width: none; /* Hide the scrollbar for Firefox */
      -ms-overflow-style: none; /* Hide the scrollbar for Internet Explorer/Edge */
    }

    /* Hide the scrollbar for Chrome, Safari, and Opera */
    #team::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body class="merchantBg w-screen h-screen overflow-hidden">
    <div class="flex justify-center items-center p-6">
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
                    <span class="ml-2 text-sm text-gray-700" id="openModalBtn">I agree to Terms & Conditions.</span>
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
    <button type="submit" class="w-full bg-secondary shadow-md text-white font-semibold py-2 px-4 rounded focus:outline-none  focus:ring focus:ring-secondary" id="register">Register</button>
</div>
<div class="col-span-1"></div>
<div class="col-span-1">
    <a href="./login.php" class="text-black text-center text-sm underline">
        <p>Already registered?</p>
    </a>
</div>
<div id="registrationModal" class="hidden  fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-white w-1/3 p-6 shadow-lg rounded-md text-center">
        <h2 class="text-xl font-bold mb-4">Registration To <span class="text-orange-500">TrendHub</span> is complete.</h2>
        <hr>
        <p class="text-gray-600 mt-6">Your merchant account sign-up requires admin approval for access to our platform. The review process may take some time. Please check your email for your approval.</p>
        <button id="closeModal" class="mt-4 w-1/2 bg-secondary text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">Close</button>
    </div>
</div>

<script>
    const registerBtn = document.getElementById("register");
    const registeredModelBox = document.getElementById("registrationModal");
    registerBtn.addEventListener("click", () => registeredModelBox.classList.remove("hidden"));

    // JavaScript to handle the modal
    document.getElementById("closeModal").addEventListener("click", () => {
        document.getElementById("registrationModal").classList.add("hidden");
    });
</script>


    <!--Team and Condition Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-3/4">
            <h2 class="text-2xl font-bold mb-4 text-center">Terms & Conditions</h2>
            <div class=" bg-tertiary px-6 py-6 shadow-md rounded-md ">
             <p class="text-orange-500 py-4">Last Updated: 2023/07/17</p>
             <div class=" " id="welcome">
                <p>Welcome to TrendHUB. These terms govern your relationship with us as a registered merchant and outline the rights and responsibilities associated with your merchant account. These terms also govern the service-based commission structure and one-time registration fees for merchants using our platform. Please read these terms carefully before proceeding with the registration process. If you do not agree with any part of these terms, please refrain from using our platform.</p>
             <br>
            </div>
                <div class="text-black h-60 overflow-y-auto" id="team">
                    
                    Service-Based Commission <br>As a registered merchant on our platform, you acknowledge and agree to the service-based commission structure. A commission of 5% will be charged on the revenue generated by your sales, transactions, or usage of platform services.
                    <br><br>
                    Invoicing and Payment <br> At the end of each billing cycle (typically monthly), the platform will generate an invoice detailing the commission amount owed by the merchant. The invoice will be sent to your account and should be paid within 5 days from the invoice date. The platform will provide payment instructions and methods to facilitate the commission payment process. It is the merchant's responsibility to ensure timely payment of the commission.
                    <br><br>
                    Late Payment Policy <br>In the event of late payment for the service-based commission, the platform may impose a fine or penalty as outlined in the merchant agreement. It is important to submit payment within the specified time-frame to avoid any penalties. The platform reserves the right to suspend or terminate your account for persistent or significant late payments.
                    <br><br>
                    Disputes and Refunds <br> If there are any disputes or concerns regarding the commission calculation or invoicing, please contact our support team within 3 days of receiving the invoice. Refunds or adjustments will be considered on a case-by-case basis, subject to our review and investigation.
                    <br><br>
                    Termination <br>You may terminate your merchant account at any time by providing written notice to the platform. Upon termination, any outstanding commission payments must be settled within 3 days. Failure to settle outstanding payments may result in legal action or collection proceedings.


                </div>
            </div>
           
            <div class="mt-4 flex justify-around space-x-4">
                <button id="accept" class="bg-secondary shadow-md w-1/3 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-300">Accept T & C</button>
                <button id="decline" class="bg-primary shadow-md w-1/3 border border-secondary text-secondary font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">Decline</button>
            </div>
          
        </div>
    </div>

    <script>
    
    const registeredModalBox = document.getElementById("registrationModal");
    const closeModalBtn = document.getElementById("closeModal");

        registerBtn.addEventListener("click", () => registeredModalBox.classList.remove("hidden"));
        closeModalBtn.addEventListener("click", () => registeredModalBox.classList.add("hidden"));
    // JavaScript to handle modal open and close and checkbox behavior
    const openModalBtn = document.getElementById('openModalBtn');
    
    const modal = document.getElementById('modal');
    const acceptBtn = document.getElementById('accept');
    const declineBtn = document.getElementById('decline');
    const checkbox = document.querySelector('.form-checkbox');

    openModalBtn.addEventListener('click', () => {
      modal.classList.remove('hidden');
    });

   
    acceptBtn.addEventListener('click', () => {
            checkbox.checked = true;
            modal.classList.add('hidden');
            registerBtn.removeAttribute("disabled");
        });

        declineBtn.addEventListener('click', () => {
            checkbox.checked = false;
            modal.classList.add('hidden');
            registerBtn.setAttribute("disabled", "disabled");
        });

        // Check if the "Team" text scroll reaches the bottom and enable the buttons
        const teamText = document.getElementById('team');
        teamText.addEventListener('scroll', () => {
            if (teamText.scrollHeight - teamText.scrollTop === teamText.clientHeight) {
                registerBtn.removeAttribute("disabled");
            }
        });
  </script>

    </div>
    </div>
</body>

</html>