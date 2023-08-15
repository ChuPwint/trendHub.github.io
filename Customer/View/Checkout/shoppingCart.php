<?php

session_start();

if (isset($_SESSION["cartItemsDetails"])) $cartItemsDetails = $_SESSION["cartItemsDetails"];
if (isset($_SESSION["cartItems"])) $cartItems = $_SESSION["cartItems"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" href="../resources/img/header/headerLogo.svg" type="image/icon type">

    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/itemDetail.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/shoppingCart/shoppingCart.js" defer></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>

    <style>
        .cart_item{
            display: none;
        }
    </style>
</head>
<?php
include "../../Controller/uiElement/editInfoController.php";
$primaryColor = isset($editInfo[0]["primary_color"]) && !empty($editInfo[0]["primary_color"]) ? $editInfo[0]["primary_color"] : '#FAFAFA';
$tertiaryColor = isset($editInfo[0]["tertiary_color"]) && !empty($editInfo[0]["tertiary_color"]) ? $editInfo[0]["tertiary_color"] : '#F36823';
$startTime = isset($editInfo[0]["h1_color"]) && !empty($editInfo[0]["h1_color"]) ? $editInfo[0]["h1_color"] : '00:00';
$endTime = isset($editInfo[0]["h2_color"]) && !empty($editInfo[0]["h2_color"]) ? $editInfo[0]["h2_color"] : '00:00';
$cardColor = isset($editInfo[0]["price_card_color"]) && !empty($editInfo[0]["price_card_color"]) ? $editInfo[0]["price_card_color"] : '#ffffff';
$buttonColor = isset($editInfo[0]["buy_button_color"]) && !empty($editInfo[0]["buy_button_color"]) ? $editInfo[0]["buy_button_color"] : '#F36823';
$priceColor = isset($editInfo[0]["price_text_color"]) && !empty($editInfo[0]["price_text_color"]) ? $editInfo[0]["price_text_color"] : '#F36823';
$titleColor = isset($editText[0]["title_color"]) && !empty($editText[0]["title_color"]) ? $editText[0]["title_color"] : '#000000';
date_default_timezone_set('Asia/Yangon');
$currentHour = date('H:i');
?>
<style>
    .scrollHide::-webkit-scrollbar {
        display: none;
    }
</style>

<?php
include "../resources/common/navbar.php";

?>

<body class="
    bg-[<?php

        if ($startTime > $endTime) {
            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                echo "#000000";
            } else {
                echo $primaryColor;
            }
        } else {
            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                echo "#000000";
            } else {
                echo $primaryColor;
            }
        }



        ?>] font-roboto scrollHide">


    <p class="px-5 py-4 mt-32 md:px-10 md:pt-8 font-bold text-xl 
    text-[<?php

            if ($startTime > $endTime) {
                if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $titleColor;
                }
            } else {
                if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $titleColor;
                }
            }



            ?>]">Items in cart</p>
    <div class="md:p-10 min-h-[250px]">
        <!--start of container -->
        <div class="px-4 py-4 
    bg-[<?php

        if ($startTime > $endTime) {
            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                echo "#3d3d3d";
            } else {
                echo $primaryColor;
            }
        } else {
            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                echo "#3d3d3d";
            } else {
                echo $primaryColor;
            }
        }



        ?>] shadow-md">
            <div id="noItem" class="<?= (count($_SESSION["cartItemsDetails"]) == 0) ? "block" : "hidden" ?> text-2xl text-center font-bold
    text-[<?php if ($startTime > $endTime) {
                if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            } else {
                if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            } ?>]

            ">No items yet!</div>
            <!-- start of product and summary container -->
            <div class="md:flex md:justify-between">
                <!--start of products card container -->
                <div class="md:w-[70%]">
                    <!-- start of cards -->
                    <?php if (isset($_SESSION["cartItemsDetails"])) {
                        foreach ($cartItemsDetails as $itemDetail) {?>
                            <div class="itemCard relative bg-white shadow-md m-5 p-4 flex">
                                <div class="flex items-center">
                                    <img class=" w-16" src="../../..<?= $itemDetail["p_path"] ?>" alt="">
                                </div>
                                <div class="ml-5 md:flex md:items-center">
                                    <p class="pName pb-3 w-48 break-words md:ml-3"><?= $itemDetail["p_name"] ?></p>
                                    <?php
                                    foreach ($cartItems as $cartItem) {
                                        if ($cartItem["productID"] == $itemDetail["id"]) $price =  $cartItem["qty"] * $itemDetail["sell_price"];
                                    }
                                    ?>
                                    <p class="pPrice pt-3 pb-3 w-48 break-words md:hidden"><?= number_format($price) ?>Ks</p>
                                    <div class="font-semibold pt-1 md:ml-3">
                                    <?php
                                        foreach ($cartItems as $cartItem) {
                                            if ($cartItem["productID"] == $itemDetail["id"]) $value =  $cartItem["qty"];
                                        }
                                        ?>
                                        <button class="minusBtn cursor-pointer mr-1 px-1 bg-productCardBgColor font-semibold rounded-md disabled bg-opacity-50 text-gray-200">-</button>
                                        <input type="number" name="qty" value="<?= $value ?>" class="quantityInput text-xl text-center w-10 py-1 rounded-md bg-productCardBgColor">
                                        <button pID="<?= $itemDetail["id"] ?>" class="plusBtn cursor-pointer ml-1 px-1 font-semibold text-center bg-productCardBgColor rounded-md">+</button>
                                    </div>
                                    <p id="desktopPrice" class="pt-3 pb-3 w-48 break-words hidden md:block md:ml-16"><?= number_format($price) ?> Ks</p>
                                    <div><ion-icon class="desktopHeart text-gray-400 hidden md:mr-28 ml-5 md:block w-7 md:text-3xl cursor-pointer" name="heart"></ion-icon></div>
                                    <div><img class="dTrashImg hidden md:block w-7 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt=""></div>
                                </div>
                                <ion-icon class="mobileHeart text-gray-400 text-2xl md:hidden w-7 absolute right-3 top-3 cursor-pointer" name="heart"></ion-icon>
                                <img class="mTrashImg md:hidden w-7 absolute right-3 bottom-3 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt="">
                            </div>
                    <?php }
                    } ?>

                    <!-- end of cards -->

                </div>
                <!--end of products card container -->

                <!-- start of order summary container -->
                <div id="orderCard" class="md:w-[28%] <?= (count($_SESSION["cartItemsDetails"]) == 0) ? "hidden" : "block" ?>">
                    <!-- start of order summary card -->
                    <div class="p-4 m-5 
    bg-[<?php

        if ($startTime > $endTime) {
            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                echo "#4f4f4f";
            } else {
                echo $secondaryColor;
            }
        } else {
            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                echo "#4f4f4f";
            } else {
                echo $secondaryColor;
            }
        }



        ?>] text-lg md:text-xl">
                        <p class="hidden font-medium 
    text-[<?php

            if ($startTime > $endTime) {
                if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            } else {
                if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            }



            ?>] mb-5 text-lg md:block">Order Summary</p>
                        <!-- start of prices -->
                        <div class="flex justify-between items-center mb-5 
    text-[<?php

            if ($startTime > $endTime) {
                if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            } else {
                if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            }



            ?>]">
                            <div>
                                <p class="mb-3">Sub-total</p>
                                <p>Delivery</p>
                            </div>
                            <div>
                                <p class="mb-3 subTotal">$800</p>
                                <p class="deliPrice">$80</p>
                            </div>
                        </div>
                        <hr class="border border-dashed border-gray-400">
                        <div class="flex justify-between items-center mt-5 
    text-[<?php

            if ($startTime > $endTime) {
                if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            } else {
                if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $navColor;
                }
            }



            ?>] ">
                            <p>Grand Total</p>
                            <p class="totalPrice">$880</p>
                        </div>
                        <!-- end of prices -->
                        <div class="flex justify-center mt-6 mb-4">
                            <a href="./checkout.php"><button class="
    bg-[<?php

        if ($startTime > $endTime) {
            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                echo "#000000";
            } else {
                echo $buttonColor;
            }
        } else {
            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                echo "#000000";
            } else {
                echo $buttonColor;
            }
        }



        ?>] rounded-md px-8 py-2 
    text-[<?php

            if ($startTime > $endTime) {
                if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $buttonText;
                }
            } else {
                if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                    echo "#ffffff";
                } else {
                    echo $buttonText;
                }
            }



            ?>]">Proceed to Checkout (<span class="itemAmount">3</span>)</button></a>
                        </div>
                    </div>
                    <!-- end of order summary card -->
                </div>
                <!-- end of order summary container -->
            </div>
            <!-- end of product and summary container -->
            <div id="totalItem" class="hidden md:<?= (count($_SESSION["cartItemsDetails"]) == 0) ? "hidden" : "block" ?> md:font-bold md:p-4 md:text-lg md:w-[70%] md:text-right ">
                Total: <span class="itemAmount"><?=
                                                (isset($_SESSION["cartItems"])) ? count($_SESSION["cartItems"]) : 0;
                                                ?></span> items
            </div>
        </div>
        <!--end of container -->
    </div>


    <script>
        $(document).ready(function (){
            $(".plusBtn").on("click", function(){
                var productId = $(this).attr("pID");
            // console.log(productId);
            // var $plustBtn = $(".plusBtn[pID='" + productId + "']");
            })
        })
    </script>
</body>
<?php include "../resources/common/footer.php" ?>

</html>