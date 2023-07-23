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
  <link rel="stylesheet" href="../resources/lib/tailwind/output.css <?= time() ?>" rel="stylesheet">
</head>


<style>
    .waveInput{
       
        border-color: #F36823;
        border-radius: 2px;
        padding-left: 20px;
    }
    .inputWidth{
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
        #codModal {
        transition: opacity 0.2s ease-in-out;
        }
    
        #modalOverlay {
        transition: opacity 0.2s ease-in-out;
        }

</style>




<body class="bg-primary font-roboto">


    <div class="w-[1300px] h-[620px] mx-auto relative md:flex-row flex-col-reverse  justify-center flex mt-[80px] shadow-md rounded-lg">
        <div class="w-[900px]  rounded-l-lg">
            <span class=" text-xl my-[20px] font-semibold block ml-10">Payment Method</span>
           <div class="paymentBox flex md:flex-row md:space-x-0 space-x-2 mx-auto md:justify-evenly w-[700px] mt-8 ml-4 ">


            <!-- master card -->
            <div   onclick="showPayMethod(1)" id="pay1" class="pay md:w-[200px] md:h-[110px] w-[100px] h-[50px] border-black  border-2 rounded-md relative">
                <span class="block text-center font-semibold mt-1 md:text-lg text-sm">Card</span>
                <img src="../resources/img/payment/masterCard.png" class="md:w-[160px] w-[80px]  inset-x-0 absolute mx-auto bottom-1 md:bottom-5" alt="">
            </div>

            <!-- cash on delivery -->
            <div id="modalTrigger" onclick="showPayMethod(2)" class="pay cashOnDelivery md:w-[200px] md:h-[110px] w-[100px]  h-[50px] border-black border-2 rounded-md relative">
                <span class="block text-center font-semibold mt-1 md:text-lg text-[10px]">Cash on Delivery</span>
                <img src="../resources/img/payment/cashOnDelivery.png" class="md:w-[160px] w-[80px] inset-x-0 absolute mx-auto md:bottom-4 bottom-0 " alt="">
            </div>

            <!-- wave pay -->
            <div  onclick="showPayMethod(3)" class="pay md:w-[200px] md:h-[110px] w-[100px] h-[50px]  border-black border-2 rounded-md relative">
                <span class="block text-center font-semibold mt-0 md:mt-1 md:text-lg text-[12px]">Wave Pay</span>
                <img src="../resources/img/payment/waePay.png" class="md:w-[100px] w-[50px] inset-x-0 absolute mx-auto md:bottom-4 bottom-1" alt="">
            </div>
           </div>

           <form action="" id="paymentForm">
           <div class=" mt-8 mx-right ml-10 max-w-[750px]" id="content">
       <!-- context -->

<!-- start master card info -->

<!-- end master card info -->













       
      
       <div class="pay3">
        <span class="block pb-4 pt-5">Login with <span class="text-blue-500">Wave Id</span> to make the purchase</span>
        <input required type="number" placeholder="Wave Account Phone Number"
        class="border pl-3 mt-5 h-[40px] border-tertiary rounded-md w-[338px] outline-none bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"/>
        
        <div class="mt-5">
            <input required type="number" placeholder="One Time Password"
            class="border pl-3 h-[40px] border-tertiary rounded-md w-[185px] outline-none  bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"/>  
            <button class="ml-7 h-[40px] w-[120px] bg-tertiary text-white rounded-sm shadow-md">GET OTP</button>
        </div>
        <span class="pt-16 block">OTP SMS will be sent to your WavePay registered Phone Number.</span>
               </div>







            </div>



                <div class="absolute bottom-4 ml-[45px] w-[370px]">
                <button type="submit" class="py-2 px-10 cursor-pointer bg-tertiary text-textWhite rounded-md">Confirm</button>
            </div>
        </form>

    
        <!-- start modal box -->

        <div id="modalBox" class="modal">
            <div id="modalContent" class="modal-content w-[600px] h-[300px] bg-primary">
                <span class="font-semibold block pb-3">Points received</span>
                <hr class="h-[2px] bg-[#00000094] w-[530px] mx-auto">
                <span class="text-center block mt-12">Congratuations! You have successfully</span>
                <span class="text-center block">received 1000 points!</span>
                <button id="closeModalButton" class="mt-4 mx-auto block text-white px-20 py-2 rounded-md bg-tertiary">Ok</button>
                
            </div>
        </div>

        <!-- end modal box -->

        </div>







        <div class="bg-secondary w-[400px] rounded-r-lg justify-center">
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
    
   
    </div>






<!-- First Modal Box -->
<div id="codModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class=" w-[600px] h-[300px] bg-primary shadow-md rounded">
      <span class="font-semibold block pb-2 pt-5 text-lg ml-8">Confirm Delivery</span>
      <hr class="h-[2px] bg-[#00000094] w-[530px] mx-auto">

      <span class="text-center block text-lg py-4">Do you want to proceed Cash on Delivery?</span>
      <button id="modalConfirm" class="mt-4 mx-auto block text-white px-20 py-2 rounded-md bg-tertiary">
        Continue
      </button>
      <button id="modalClose" class="mt-4 mx-auto block text-black px-20 py-2 rounded-md border-solid border-2 border-tertiary  ">
        Cancel
      </button>
    
    </div>
  </div>
  



  <!-- Second Modal Box -->
  <div id="secondModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class=" w-[600px] h-[300px] bg-primary shadow-md rounded">
        <span class="font-semibold block pb-2 pt-5 text-lg ml-8">Points received</span>
    <hr class="h-[2px] bg-[#00000094] w-[530px] mx-auto">

      <p id="secondModalText"></p>
      <button id="secondModalClose" class="mt-4 mx-auto block text-white px-20 py-2 rounded-md bg-tertiary">Ok</button>
   

    </div>
  </div>
  
  <!-- Modal Overlay -->
  <div id="modalOverlay" class="fixed inset-0 bg-black opacity-50 hidden"></div>
  
  

  <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>







    
    
    
  
    
       

        <script src="../resources/js/payment/payment.js"></script>
        <script src="../resources/js/payment/cod.js"></script>

    




    











        
    
    

</body>
    

</html>