$(document).ready(function () {
    
    $("#file_upload").on("change", function () {
        var fileInput = $(this)[0];

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.p_Image').attr('src', e.target.result);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    });

    $(".closeViewDetailModal").click(function () {
        $(".viewDetailModal").toggle();
      
    });

    $("#logoutBtn").click(function () {
        $("#logoutModal").toggle();
    });

    $("#confirmLogout").click(function () {
        $("#logoutModal").toggle();
    });

    $("#cancelLogout").click(function () {
        $("#logoutModal").toggle();
    });
});