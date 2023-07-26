<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <style>
        /* Custom styles for the scrolling content */
        #team {
            max-height: calc(100vh - 100px);
            /* Set the max-height based on viewport height minus some padding (100px in this case) */
            overflow-y: scroll;
            /* Enable scrolling for the content */
            scrollbar-width: none;
            /* Hide the scrollbar for Firefox */
            -ms-overflow-style: none;
            /* Hide the scrollbar for Internet Explorer/Edge */
        }

        /* Hide the scrollbar for Chrome, Safari, and Opera */
        #team::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
     <!--privacy and policy Modal -->
     <div id="privacy" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center ">
                <div class="bg-white p-6 rounded-lg shadow-lg w-3/4">
                    <h2 class="text-2xl font-bold mb-4 text-center">Privacy & Policy</h2>
                    <div class=" bg-tertiary px-6 py-6 shadow-md rounded-md ">
                        <p class="text-orange-500 py-4">Last Updated: 2023/07/17</p>
                        <div class=" text-center" id="welcome">
                            <p>At [Trend Hub], we value the privacy and security of our users. This Privacy Policy outlines how we collect, use, disclose, and protect the information you provide when using our website or engaging in transactions with us. By accessing or using our website, you agree to the terms and conditions of this Privacy Policy.</p>
                            <br>
                        </div>
                        <div class="text-black h-60 overflow-y-auto" id="team">

                        <p class="font-bold">Information We Collect</p>a. Personal Information: We may collect personal information such as your name, email address, shipping address, billing address, phone number, and payment information when you create an account, place an order, or communicate with us.b. Usage Information: We collect non-personal information about your interactions with our website, including your IP address, browser type, device information, and browsing activities.
                            <br><br>
                            <p class="font-bold">Data Security</p>We take the security of your personal information seriously and employ industry-standard measures to safeguard it against unauthorized access, disclosure, alteration, and destruction. We use secure socket layer (SSL) technology to encrypt data during transmission. However, no method of data transmission or storage is 100% secure, and we cannot guarantee absolute security.
                            <br><br>
                            <p class="font-bold">Use of Information</p>a. Personal Information: We use your personal information to process your orders, provide customer support, send order confirmations and updates, personalize your shopping experience, and communicate with you about our products, promotions, and offers.b. Usage Information: We may use usage information to improve our website, analyze trends, and gather demographic information.
                            <br><br>
                            <p class="font-bold">Changes to this Privacy and Policy</p> We may update this Privacy and Policy page from time to time. Any changes will be posted on this page with a revised date. We encourage you to review this page periodically to stay informed about how we protect your personal information.
                           

                        </div>
                    </div>

                    <div class="mt-4 flex justify-around space-x-4">
                        <button id="accept" class="bg-secondary opacity-50 shadow-md w-1/3 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-300">Accept T & C</button>
                        <button id="decline" class="bg-primary shadow-md w-1/3 border border-secondary text-secondary font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">Decline</button>
                    </div>

                </div>
            </div>

            <script>
                // JavaScript to handle modal open and close and checkbox behavior
                const openModalBtn = document.getElementById('openModalBtn');
                const teamText = document.getElementById('team');
                const modal = document.getElementById('teamModal');
                const acceptBtn = document.getElementById('accept');
                const declineBtn = document.getElementById('decline');
                const checkbox = document.querySelector('.form-checkbox');

                const checkboxTerms = document.querySelector('.form-checkbox#terms');
                const checkboxPrivacy = document.querySelector('.form-checkbox#privacy');
                
                // Automatically check the checkboxes and enable "Register" button
                // Listen for changes in the checkboxes' state
                function updateRegisterBtn() {
                    if (checkboxTerms.checked && checkboxPrivacy.checked) {
                        registerBtn.removeAttribute("disabled");
                        registerBtn.classList.add("opacity-100");
                    } else {
                        registerBtn.setAttribute("disabled", "disabled");
                        registerBtn.classList.add("opacity-50");
                    }
                }

                checkboxTerms.addEventListener('change', updateRegisterBtn);
                checkboxPrivacy.addEventListener('change', updateRegisterBtn);

                // Automatically check the checkboxes and enable "Register" button
               
                updateRegisterBtn(); // Call the function to set the initial state of the "Register" button

                openModalBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });


                acceptBtn.addEventListener('click', () => {
                    checkboxTerms.checked = true;
           
                    checkbox.checked = true;
                    modal.classList.add('hidden');

                });

                declineBtn.addEventListener('click', () => {
                    checkboxTerms.checked = false;
                   
                    modal.classList.add('hidden');

                });

                acceptBtn.setAttribute("disabled", "disabled");
                teamText.addEventListener('scroll', () => {
                    if (teamText.scrollHeight - teamText.scrollTop === teamText.clientHeight) {
                        acceptBtn.removeAttribute("disabled");
                        acceptBtn.classList.add("opacity-100");
                    }
                });
            </script>

     
</body>
</html>