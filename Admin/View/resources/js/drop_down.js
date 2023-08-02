// const dropdown = document.getElementById('dropdown');
// const selectedOption = document.getElementById('selectedOption');

// dropdown.addEventListener('change', () => {
//   const selectedValue = dropdown.value;
// });

$(document).ready(function () {
    $("#dropdown").change(function () {
        const selectedValue = $(this).val();
        $.ajax({
            url: '../Merchant List/allMerchant.php',
            method: 'POST',
            data: { sortBy: selectedValue },
            dataType: 'json',
            success: function (response) {
                // Handle the response data here
                console.log("ok");
            }
        });
        // console.log("Selected Value:", selectedValue);
    });
});