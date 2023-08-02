$(document).ready(function () {
    //in all merchant.php
    $("#dropdown").change(function () {
        $.ajax({
            url: "../../Controller/dropDown/sortAllMerchantController.php",
            type: "POST",
            data: {
                sortBy: $(this).val(),
                searchText: $("#searchAllMerchant").val()
            },
            cache: false,
            success: function (res) {
                $(".searchResult").empty();
                //console.log(res);
                let allMerchants = JSON.parse(res);
                let num = 1;
                for (const merchant of allMerchants) {
                    let license = (merchant.m_licene != null) ? merchant.m_licene : "-";
                    $(".searchResult").append(
                        `
                            <tr class="bg-[#fffafa]">
                                <td class="p-3 text-center">${num++}</td>
                                <td class="p-3 text-center">${merchant.m_bname}</td>
                                <td class="mName p-3 text-center">${merchant.m_name}</td>
                                <td class="mEmail p-3 text-center">${merchant.m_email}</td>
                                <td class="p-3 text-center">${merchant.m_phone}</td>
                                <td class="p-3 text-center">${merchant.m_address}</td>
                                <td class="p-3 text-center">${license}</td>
                                <td class="p-3 text-center">${merchant.create_date}</td>
                                <td class="p-3 text-center ">
                                    <span class="banModal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md" onclick="banMerchant('${merchant.m_name}', '${merchant.m_email}')">BAN</span>
                                </td>
                            </tr>
                        `
                    )
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    });

});
