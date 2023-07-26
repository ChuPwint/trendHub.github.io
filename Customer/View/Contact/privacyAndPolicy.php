<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy And Policy</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="bg-primary font-roboto">

    <?php
    include "../resources/common/navbar.php";
    ?>

    <!-- Privacy and Policy -->
    <section class="container w-full mx-auto mt-[125px]">
        <div class="flex flex-col space-y-5 items-center bg-[#F5F5F5] py-20">
            <h1 class="md:text-3xl font-semibold">Privacy & Policy</h1>
            <p class="text-sm md:w-[700px] px-10 md:px-0 text-center text-textGray">At [Trend Hub], we value the privacy
                and security of our users. This Privacy Policy outlines how we collect, use, disclose, and protect the
                information you provide when using our website or engaging in transactions with us. By accessing or
                using our website, you agree to the terms and conditions of this Privacy Policy.</p>
        </div>
    </section>

    <!-- Information We Collect  -->
    <section class="container w-full mx-auto">
        <div class="px-8 md:flex md:flex-row-reverse justify-evenly md:px-28 py-11 md:items-center">
            <div>
                <img src="../resources/img/privacyAndPolicy/information.svg" alt="mission">
            </div>

            <div>
                <h1 class="font-bold text-xl md:text-3xl">Information We Collect</h1>
                <p class="text-sm md:text-xl text-textGray md:w-[450px] mt-5">a. Personal Information: We may collect
                    personal information such as your name, email address, shipping address, billing address, phone
                    number, and payment information when you create an account, place an order, or communicate with
                    us. Usage Information: We collect non-personal information about your interactions with our
                    website, including your IP address, browser type, device information, and browsing activities.</p>
            </div>
        </div>
    </section>

    <!-- Data Security -->
    <section class="container w-full mx-auto px-5 md:px-24">
        <div class="text-center py-5 bg-[#F5F5F5] rounded drop-shadow-md px-5 md:px-40 md:py-20">
            <h1 class="font-bold text-xl md:text-3xl">Data Security</h1>
            <p class="text-sm md:text-xl text-textGray mt-5">We take the security of your personal information seriously
                and employ industry-standard measures to safeguard it against unauthorized access, disclosure,
                alteration, and destruction. We use secure socket layer (SSL) technology to encrypt data during
                transmission. However, no method of data transmission or storage is 100% secure, and we cannot guarantee
                absolute security.</p>
        </div>
    </section>

    <!-- Use of Information -->
    <section class="container w-full mx-auto">
        <div class="px-8 md:flex justify-evenly md:px-28 py-11 md:items-center">
            <div>
                <img src="../resources/img/privacyAndPolicy/use_of_information.svg" alt="quality">
            </div>

            <div>
                <h1 class="font-bold text-xl md:text-3xl">Use of Information</h1>
                <p class="text-sm md:text-xl text-textGray md:w-[450px] mt-5">a. Personal Information: We use your
                    personal information to process your orders, provide customer support, send order confirmations and
                    updates, personalize your shopping experience, and communicate with you about our products,
                    promotions, and offers. Usage Information: We may use usage information to improve our website,
                    analyze trends, and gather demographic information.</p>
            </div>
        </div>
    </section>

    <!-- Changes to this Privacy and Policy -->
    <section class="container w-full mx-auto">
        <div class="px-8 md:flex md:flex-row-reverse justify-evenly md:px-28 py-11 md:items-center">
            <div>
                <img src="../resources/img/privacyAndPolicy/changes_to.svg" alt="mission">
            </div>

            <div>
                <h1 class="font-bold text-xl md:text-3xl">Changes to this Privacy and Policy</h1>
                <p class="text-sm md:text-xl text-textGray md:w-[450px] mt-5">We may update this Privacy and Policy page
                    from time to time. Any changes will be posted on this page with a revised date. We encourage you to
                    review this page periodically to stay informed about how we protect your personal information.</p>
            </div>
        </div>
    </section>

    <section class="container w-full mx-auto px-5 md:px-28">
        <div class="text-center py-5 bg-[#F5F5F5] rounded drop-shadow-md px-5 md:px-30">
            <h1 class="font-bold text-xl md:text-3xl">Contact Us</h1>
            <p class="text-sm md:text-xl text-textGray mt-5 md:px-16">Thank you for choosing [Trend Hub]. We hope you enjoy exploring our extensive product rage and have a delightful shopping experience.If you have any quentions or need assistance ,
                please don’t hesitate to reach out to our delicated customer service team.</p>
        </div>
    </section>

    <?php
    include "../resources/common/footer.php"
    ?>

</body>

</html>