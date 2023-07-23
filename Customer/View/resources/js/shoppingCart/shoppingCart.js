var minusBtn = document.getElementsByClassName("minusBtn");
var plusBtn = document.getElementsByClassName("plusBtn");
var quantity = document.getElementsByClassName("quantityInput");
var stock = 10;

for (let index = 0; index < minusBtn.length; index++) {
    minusBtn[index].addEventListener("click", () => {
        var qtyVal = quantity[index].value;
        var isOne = (Number(qtyVal) - 1 == 1);
        qtyVal = (isOne) ? enableOrDisable(minusBtn[index], plusBtn[index], isOne) : qtyVal - 1;
    });

    plusBtn[index].addEventListener("click", () => {
        var qtyVal = quantity[index].value;
        var isStock = (Number(qtyVal) + 1 == stock);
        qtyVal = (isStock) ? enableOrDisable(plusBtn[index], minusBtn[index], isStock) : qtyVal + 1;
    });
}

/*
*Create:Choo Pwint Chal(2023/07/23)
*Update:Choo Pwint Chal(2023/07/23)
*disable a button/ enable a button and make the button opacity 50 
*Parameter: 
*No Return
*/
function enableOrDisable (){
    minusBtn[index].disabled = false;
    minusBtn[index].classList.remove("bg-opacity-50");
    minusBtn[index].classList.remove("text-gray-200");
    minusBtn[index].classList.add("font-semibold");
}