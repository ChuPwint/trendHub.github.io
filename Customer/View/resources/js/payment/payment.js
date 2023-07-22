function showPayMethod(payNumber) {
    const contentDiv = document.getElementById("content");
    const pay = document.querySelectorAll(".pay");
  
   
    pay.forEach((pay) => {
      pay.classList.remove("selected");
    });
  
   
    pay[payNumber - 1].classList.add("selected");
  
    switch (payNumber) {
      case 1:
       
        contentDiv.innerHTML = `    <div class="pay1">
        <div class="flex justify-between">
        <div class="rounded-lg w-[360px] h-[220px] bg-[#E2E2E2]">
            <span class="text-[#7D7B7B] text-sm block mt-16 px-[20px] ">Card Number</span>
            <input required
            type="number" placeholder="0000 0000 0000 0000"
            class=" w-[165px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
            style="border-bottom: 1px solid #7d7b7b;"
          />
<div class="flex">

<div>
    <span class="text-[#7D7B7B] text-sm mx-[20px] block mt-4 ">Holder Name</span>
    <input required
    type="text" placeholder="Name Here"
    class="w-[145px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
    style="border-bottom: 1px solid #7d7b7b;"
  />
  

 </div>
<div>

<span class="text-[#7D7B7B] text-sm mx-[20px] block mt-4">Expire</span>
<input required
type="date" placeholder=""
class="w-[145px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
style="border-bottom: 1px solid #7d7b7b;"
/>
</div>

</div>
          
          
        </div>

        <div class="rounded-lg w-[360px] h-[220px] bg-[#E2E2E2] relative">
            <div class="w-full h-[50px] mt-7 bg-[#C0BBBB]">
                
            </div>
        <div class="absolute right-0 top-5">
            <span class="text-[#7D7B7B] text-sm block text-right mt-16 px-[20px] ">Cvc</span>
            <input required
            type="number" placeholder="000" 
            class="  w-[35px] outline-none mx-[20px] bg-transparent [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
            style="border-bottom: 1px solid #7d7b7b;"
          />
        </div>
        </div>
       </div>
       
       <div class="absolute bottom-14 w-[370px] ml-[25px] ">
       <input required type="checkbox" class=" w-[20px] h-[20px]">
       <span class="text-md">Save this card.</span>
       <span class="block ml-6 text-sm mb-3">Lorem ipsum dolor sit amet consectetur. Volutpat elit faucibus in in. </span>
       </div>
        </div>
       `;
        break;
      case 2:
        contentDiv.innerHTML = `<div class="pay2"> 
        
        
        </div>`;
        break;
      case 3:
        contentDiv.innerHTML = `

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

     `;
        break;
      default:
        contentDiv.innerHTML = "No pay selected";
        break;
    }
  }
  
  
  showPayMethod(1);



  // start modal box
  const form = document.getElementById('paymentForm');
  const confirmButton = document.getElementById('confirmButton');
  const modalBox = document.getElementById('modalBox');
  const closeModalButton = document.getElementById('closeModalButton');

  // Function to check if the input fields are filled
  function checkInputs() {
      const inputs = form.querySelectorAll('input[required]');
      let allInputsFilled = true;

      inputs.forEach(input => {
          if (input.value.trim() === '') {
              allInputsFilled = false;
          }
      });

      return allInputsFilled;
  }

  // Event listener for form submission
  form.addEventListener('submit', function (event) {
      event.preventDefault();

      // Check if all required input fields are filled
      if (checkInputs()) {
          // Show the modal box if all inputs are filled
          modalBox.style.display = 'flex';
      }
  });

  // Event listener for the close modal button
  closeModalButton.addEventListener('click', function () {
      modalBox.style.display = 'none';
  });

  // Event listener to enable the confirm button when all required inputs are filled
  form.addEventListener('input', function () {
      confirmButton.disabled = !checkInputs();
  });

  // Event listener to hide the modal box when clicking outside of it
  document.addEventListener('click', function (event) {
      if (event.target === modalBox) {
          modalBox.style.display = 'none';
      }
  });





  