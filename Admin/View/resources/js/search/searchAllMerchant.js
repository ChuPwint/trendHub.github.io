$(document).ready(function () {
    //in all merchant.php
    $("#searchAllMerchant").keyup(function () {
        $.ajax({
            url: "../../Controller/search/searchMerchantController.php",
            type: "POST",
            data: {
                searchText: $(this).val()
            },
            success: function (res) {
                $(".searchResult").empty();
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
