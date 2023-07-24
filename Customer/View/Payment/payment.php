<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- font awesome icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- tailwind link -->
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>


<style>
    .waveInput {

        border-color: #F36823;
        border-radius: 2px;
        padding-left: 20px;
    }

    .inputWidth {
        width: 190px;
    }

    .selected {
        border: 2px solid tomato;
    }

    /* CSS to center the modal box */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: #fefefe;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
</style>




<body class="bg-primary font-roboto">


    <div class="md:w-[1300px] md:h-[620px] mx-auto relative md:flex md:justify-between mt-[80px] shadow-md rounded-lg">

        <div class="bg-secondary md:w-[400px] rounded-r-lg z-0 order-2">
            <div class="w-[330px] h-[230px] bg-primary mx-auto mt-7 rounded-md shadow-md relative">
                <span class="text-lg font-semibold pl-5 pt-4 block">Order Summary</span>
                <span class=" block mt-[18px] pl-5">Subtotal</span>
                <span class="absolute right-[20px] top-[68px] ">$324</span>
                <span class=" block mt-[18px] pl-5">Delivery</span>
                <span class="absolute right-[20px] top-[111px] ">$2324</span>
                <hr class="h-[1px] w-[290px] bg-black mx-auto mt-3">
                <span class=" block mt-[18px] pl-5">Grand Total</span>
                <span class="absolute right-[20px] top-[167px] ">$2648</span>

            </div>


        </div>

        <div class="w-auto rounded-l-lg">
            <span class=" text-xl my-[20px] font-semibold block ml-10">Payment Method</span>
            <div class="paymentBox flex md:justify-center justify-start md:space-x-4 space-x-2  w-auto mt-8 md:mr-[70px] ml-10  ">


                <!-- master card -->
                <div id="pay1" class="pay md:w-[200px] md:h-[110px]  w-[100px] h-[55px] border-[#F36823]  border-2 rounded-md relative">
                    <span class="block text-center md:text-lg text-sm font-semibold mt-1">Card</span>
                    <img src="../resources/img/payment/masterCard.png "
                        class="md:w-[160px] inset-x-0 absolute mx-auto bottom-1  md:bottom-5 w-[80px] " alt="">
                </div>

                <!-- cash on delivery -->
                <div id="pay2" class="pay cashOnDelivery md:w-[200px] md:h-[110px] w-[100px] h-[55px] border-black border-2 rounded-md relative">
                    <span class="block text-center font-semibold mt-1 md:text-lg text-[12px]">Cash on Delivery</span>
                    <img src="../resources/img/payment/cashOnDelivery.png"
                        class="w-[160px] inset-x-0 absolute mx-auto md:bottom-4 bottom-0" alt="">
                </div>

                <!-- wave pay -->
                <div id="pay3" class="pay md:w-[200px] md:h-[110px] w-[100px] h-[55px] border-black border-2 rounded-md relative">
                    <span class="block text-center font-semibold mt-1 md:text-lg text-sm">Wave Pay</span>
                    <img src="../resources/img/payment/waePay.png" class=" w-[50px] md:w-[100px] inset-x-0 absolute mx-auto bottom-1 md:bottom-4"
                        alt="">
                </div>
            </div>

            <form action="" id="paymentForm">
                <div class=" mt-8 mx-right ml-10 max-w-[750px]" id="content">
                    <!-- context -->

                    <!-- Card -->
                    <div class="pay1">
                        <div class="flex md:justify-between justify-start flex-col space-x-0 md:space-x-8 md:flex-row md:space-y-0 space-y-4">
                            <div class="rounded-lg w-[360px]   md:mx-0 h-[220px] bg-[#E2E2E2]">
                                <span class="text-[#7D7B7B] text-sm block mt-16 px-[20px] ">Card Number</span>
                                <input required type="number" placeholder="0000 0000 0000 0000"
                                    class=" w-[165px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                    style="border-bottom: 1px solid #7d7b7b;" />
                                <div class="flex">

                                    <div>
                                        <span class="text-[#7D7B7B] text-sm mx-[20px] block mt-4 ">Holder Name</span>
                                        <input required type="text" placeholder="Name Here"
                                            class="w-[145px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                            style="border-bottom: 1px solid #7d7b7b;" />


                                    </div>
                                    <div>
                                        <span class="text-[#7D7B7B] text-sm mx-[20px] block mt-4">Expire</span>
                                        <input required type="date" placeholder=""
                                            class="w-[145px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                            style="border-bottom: 1px solid #7d7b7b;" />
                                    </div>

                                </div>


                            </div>

                            <div class="rounded-lg w-[360px] h-[220px] bg-[#E2E2E2] relative">
                                <div class="w-full h-[50px] mt-7 bg-[#C0BBBB]">

                                </div>
                                <div class="flex flex-col items-end">
                                    <span class="text-[#7D7B7B] text-sm block text-right mt-16 px-[20px] ">Cvc</span>
                                    <input required type="number" placeholder="000"
                                        class="  w-[35px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                        style="border-bottom: 1px solid #7d7b7b;" />
                                </div>
                            </div>
                        </div>

                        <!-- <div class="w-[370px] ml-[25px] ">
                            <input required type="checkbox" class=" w-[20px] h-[20px]">
                            <span class="text-md">Save this card.</span>
                            <span class="block ml-6 text-sm mb-3">Lorem ipsum dolor sit amet consectetur. Volutpat elit
                                faucibus in in. </span>
                        </div> -->
                        <div class="py-5">
                            <input  type="checkbox" class=" w-[15px] h-[15px]">
                            <span class="text-md">Save this card.</span>
                            <br>
                            <span class="pl-5">Lorem ipsum dolor
                                faucibus in in. </span>
                        </div>
                    </div>

                    <!-- Wave  -->
                    <div class="pay3 hidden">
                        <span class="block pb-4 pt-5">Login with <span class="text-blue-500">Wave Id</span> to make the
                            purchase</span>
                        <input required type="number" placeholder="Wave Account Phone Number"
                            class="border pl-3 mt-5 h-[40px] border-tertiary rounded-md w-[338px] outline-none bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                        <div class="mt-5">
                            <input required type="number" placeholder="One Time Password"
                                class="border pl-3 h-[40px] border-tertiary rounded-md w-[185px] outline-none  bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                            <button class="ml-7 h-[40px] w-[120px] bg-tertiary text-white rounded-sm shadow-md">GET
                                OTP</button>
                        </div>
                        <span class="pt-16 block">OTP SMS will be sent to your WavePay registered Phone Number.</span>
                    </div>



                </div>



                <div id="confirm" class="pl-10 submit">
                    <button  class="px-10 py-2 mt-4 bg-tertiary text-white rounded">Confirm</button>
                </div>
            </form>


     

            <div class="cod bg-white w-400px drop-shadow-2xl absolute top-[30%] left-[30%] px-10 py-10 z-10 hidden">
                <span class="font-semibold block pb-3">Confirm Delivery</span>
                <hr class="h-[2px] bg-[#00000094] w-[500px] mx-auto">
                <span class="text-center block mt-12">Do you want to proceed Cash on Delivery?</span>
                <button id="confirmCod"
                class="mt-4 mx-auto block px-20 py-2 rounded-md bg-tertiary text-white">Confirm</button>


                <button id="closeModalButton"
                    class="mt-4 mx-auto block px-20 py-2 rounded-md border border-tertiary text-black">Cancel</button>
            </div>


            <div class="points bg-white w-400px drop-shadow-2xl absolute top-[30%] left-[30%] px-10 py-10 z-10 hidden">
                <span class="font-semibold block pb-3">Points received</span>
                <hr class="h-[2px] bg-[#00000094] w-[500px] mx-auto">
                <span class="text-center block mt-12">Congratuations! You have successfully</span>
                <span class="text-center block">received 1000 points!</span>
                <button id="closePoints"
                    class="mt-4 mx-auto block text-white px-20 py-2 rounded-md bg-tertiary">Ok</button>
            </div>

            

            <!-- end modal box -->

        </div>







     

    </div>



















    <script>
        $(document).ready(function () {
    $("#pay1").click(function (){
      $("#pay1").addClass("border-[#F36823]");
      $("#pay1").removeClass("border-black");
      $("#pay2").addClass("border-black");
      $("#pay2").removeClass("border-[#F36823]");
      $("#pay3").addClass("border-black");
      $("#pay3").removeClass("border-[#F36823]");
      $(".pay1").show();
      $(".cod").hide();
      $(".pay3").hide();
      $(".submit").show();
    })

  
  
    $("#pay2").click(function (){
      $("#pay2").addClass("border-[#F36823]");
      $("#pay2").removeClass("border-black");
      $("#pay1").addClass("border-black");
      $("#pay1").removeClass("border-[#F36823]");
      $("#pay3").addClass("border-black");
      $("#pay3").removeClass("border-[#F36823]");
      $(".pay1").hide();
      $(".pay3").hide();
      $(".cod").show();
      $("#pay1").addClass("disabled:opacity-75");
      $("#pay3").addClass("disabled:opacity-75");
      $(".submit").hide();
    })
  
    $("#pay3").click(function (){
        
      $("#pay3").addClass("border-[#F36823]");
      $("#pay3").removeClass("border-black");
      $("#pay1").addClass("border-black");
      $("#pay1").removeClass("border-[#F36823]");
      $("#pay2").addClass("border-black");
      $("#pay2").removeClass("border-[#F36823]");
      $(".pay3").show();
      $(".pay1").hide();
      $(".cod").hide();
      $(".submit").show();
    })

    $("#confirmCod").click(function(){
        $(".cod").hide();
        $(".points").show();
    })

    $("#confirm").click(function (){
        $(".points").show();
    })
  
    $("#closePoints").click(function (){
      $(".points").hide();
    })
    $("#closeModalButton").click(function(){
        $(".cod").hide();
    })



    
  });




  






    </script>

</body>


</html>