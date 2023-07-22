<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-secondary md:bg-primary font-roboto">

    <div class="absolute bg-white w-full h-[250px] rounded-br-[70%] rounded-tr-none rounded-bl-none md:hidden z-[-1]">
    </div>

    <section class="container w-full mx-auto md:h-screen flex justify-center items-center px-10 py-20">
        <!-- contact container -->
        <div class="bg-white md:bg-[url('../resources/img/contact/contact_bg.svg')] bg-cover bg-center py-5 rounded-md drop-shadow-xl md:flex md:items-center md:drop-shadow-none md:pl-20 md:space-x-28">
            <!-- left side -->
            <div class="text-center md:text-start px-5 py-5">
                <h1 class="text-xl font-bold md:text-4xl">Contact Us</h1>
                <p class="text-sm pt-5 pb-10 md:text-xl md:w-[350px]">Feel free to contact us any time. We will get back to you as soon as we can!</p>
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" class="resize-none border-2 border-[#F36823] rounded py-2 px-2 outline-none bg-white md:bg-[#F7F7F7] w-full md:w-auto" placeholder="Message"></textarea>
                </form>

                <button type="submit" class="w-full bg-[#F36823] py-2 rounded text-white mt-5 md:w-[277px]">Send</button>
            </div>

            <!-- right side  -->
            <div class="hidden md:block md:w-">
                <div class="px-10 py-10 bg-[#E4E4D2] leading-10 pr-18">
                    <p class="text-3xl font-medium">Info</p>
                    <div class="flex items-center space-x-5 mt-2">
                        <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_message.svg" alt="message">
                        <span class="md:text-sm"><a href="mailto:trendhub2023.shop@gmail.com">trendhub2023.shop@gmail.com </a></span>
                    </div>
                    <div class="flex items-center space-x-5">
                        <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_phone.svg" alt="phone">
                        <span><a href="tel:09403559701">09 40-355-9701</a></span>
                    </div>
                    <div class="flex items-start space-x-5">
                        <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_address.svg" alt="address">
                        <span class="w-[190px] md:text-sm"><a target="_blank" href="https://www.google.com/maps/dir/16.8355994,96.1643746/Yadanar+St,+Yangon/@16.8352103,96.1636821,17.83z/data=!4m8!4m7!1m0!1m5!1m1!1s0x30c19344dcaf12cb:0x9faa458f191e61fe!2m2!1d96.1643481!2d16.8354793?entry=ttu">Address : No.1200, room(6B), Yadanar Street, South Oakkalapa,Yangon, Myanmar</a></span>
                    </div>
                    <div class="flex items-center space-x-5">
                        <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_time.svg" alt="time">
                        <span>09:00 - 17:00</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-[#F36823] md:hidden">
        <div class="px-10 py-10 text-white leading-10">
            <p class="text-3xl font-medium">Info</p>
            <div class="flex items-center space-x-5 mt-2">
                <img src="../resources/img/contact/message.svg" alt="message">
                <span><a href="mailto:trendhub2023.shop@gmail.com">trendhub2023.shop@gmail.com </a></span>
            </div>
            <div class="flex items-center space-x-5">
                <img src="../resources/img/contact/phone.svg" alt="phone">
                <span><a href="tel:09403559701">09 40-355-9701</a></span>
            </div>
            <div class="flex items-start space-x-5">
                <img class="pt-2" src="../resources/img/contact/address.svg" alt="address">
                <span><a target="_blank" href="https://www.google.com/maps/dir/16.8355994,96.1643746/Yadanar+St,+Yangon/@16.8352103,96.1636821,17.83z/data=!4m8!4m7!1m0!1m5!1m1!1s0x30c19344dcaf12cb:0x9faa458f191e61fe!2m2!1d96.1643481!2d16.8354793?entry=ttu">Address : No.1200, room(6B), Yadanar Street, South Oakkalapa,Yangon, Myanmar</a></span>
            </div>
            <div class="flex items-center space-x-5">
                <img src="../resources/img/contact/time.svg" alt="time">
                <span>09:00 - 17:00</span>
            </div>
        </div>
    </section>

</body>

</html>