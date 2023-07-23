const modalTrigger = document.getElementById('modalTrigger');
const codModal = document.getElementById('codModal');
const modalClose = document.getElementById('modalClose');
const modalConfirm = document.getElementById('modalConfirm');
const modalOverlay = document.getElementById('modalOverlay');
const secondModal = document.getElementById('secondModal');
const secondModalText = document.getElementById('secondModalText');
const secondModalClose = document.getElementById('secondModalClose');

function showModal() {
  codModal.classList.remove('hidden');
  modalOverlay.classList.remove('hidden');
}

function hideModal() {
  codModal.classList.add('hidden');
  modalOverlay.classList.add('hidden');
}

function showSecondModal() {
  // Update the text content in the second modal here
  // For example, let's assume you want to change the text to "This is the content of the second modal box."
  secondModalText.innerHTML= `    <span class="text-center block mt-12">Congratuations! You have successfully</span>
  <span class="text-center block">received 1000 points!</span>
 
  `;
  

  secondModal.classList.remove('hidden');
  modalOverlay.classList.remove('hidden');
}

function hideSecondModal() {
  secondModal.classList.add('hidden');
  modalOverlay.classList.add('hidden');
  hideModal(); // Automatically close the first modal when the second modal is closed
}

modalTrigger.addEventListener('click', showModal);
modalClose.addEventListener('click', hideModal);
modalConfirm.addEventListener('click', showSecondModal);
modalOverlay.addEventListener('click', hideModal);
secondModalClose.addEventListener('click', hideSecondModal);

window.addEventListener("click", (event) => {
    if (event.target === codModal) {
        hideModal();
    }
});

window.addEventListener("click", (event) => {
    if (event.target === secondModal) {
        hideSecondModal();
    }
});