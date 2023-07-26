function openModal(modalId) {
    $(`#${modalId}`).removeClass('hidden');
  }


  function closeModal(modalId) {
    $(`#${modalId}`).addClass('hidden');
  }


  $('.open-modal').on('click', function() {
    const modalId = $(this).data('modal-id');
    openModal(modalId);
  });

  $('[id^="closeModalButton"]').on('click', function() {
    const modalId = $(this).closest('[id^="modal"]').attr('id');
    closeModal(modalId);
  });


  $('[id^="closeModal"]').on('click', function() {
    const modalId = $(this).closest('[id^="modal"]').attr('id');
    closeModal(modalId);
  });