<?php include "../../Controller/uiElement/editInfoController.php";

$primaryColor = isset($editInfo[0]["primary_color"]) && !empty($editInfo[0]["primary_color"]) ? $editInfo[0]["primary_color"] : '#FAFAFA';
$tertiaryColor = isset($editInfo[0]["tertiary_color"]) && !empty($editInfo[0]["tertiary_color"]) ? $editInfo[0]["tertiary_color"] : '#F36823';
$startTime = isset($editInfo[0]["h1_color"]) && !empty($editInfo[0]["h1_color"]) ? $editInfo[0]["h1_color"] : '00:00';
$endTime = isset($editInfo[0]["h2_color"]) && !empty($editInfo[0]["h2_color"]) ? $editInfo[0]["h2_color"] : '00:00';
$cardColor = isset($editInfo[0]["price_card_color"]) && !empty($editInfo[0]["price_card_color"]) ? $editInfo[0]["price_card_color"] : '#ffffff';
$buttonColor = isset($editInfo[0]["buy_button_color"]) && !empty($editInfo[0]["buy_button_color"]) ? $editInfo[0]["buy_button_color"] : '#F36823';
$priceColor = isset($editInfo[0]["price_text_color"]) && !empty($editInfo[0]["price_text_color"]) ? $editInfo[0]["price_text_color"] : '#F36823';



date_default_timezone_set('Asia/Yangon');
$currentHour = date('H:i');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="icon" href="../resources/img/header/headerLogo.svg" type="image/icon type">
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>
<style>
    .scrollHide::-webkit-scrollbar {
        display: none;
    }
</style>

<body class="bg-[<?php

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


                    ?>] font-roboto scrollHide ">

    <?php
    include "../resources/common/navbar.php";
    ?>

    <section class="w-full container mx-auto md:mt-[130px] mt-[140px]">
        <!-- Nav Path -->
        <div class="text-textGray py-2 text-xs md:text-sm md:px-7 px-5">
            <span>Home > </span>
            <span>Search Results</span>
        </div>

        <!-- Found Items and Sort -->
        <div class="flex justify-between items-center py-2 border-t-2 border-b-2 border-[#D9D9D9] md:px-7 px-5">
            <div class="text-textGray text-xs md:text-sm">
                <span>47</span>
                <span>items found for</span>
                <span>"laptop"</span>
            </div>

            <div class="flex items-center space-x-2">
                <span class="text-xs md:text-base 
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


                        ?>]">Sort by: </span>
                <select name="" id="" class="border-2 border-[#6A6969] rounded py-1 w-32 md:w-auto">
                    <option value="">Best Match</option>
                    <option value="">Price Low to High</option>
                    <option value="">Price High to Low</option>
                </select>
            </div>
        </div>
    </section>

    <section class="w-full container mx-auto flex md:space-x-2 pt-5">
        <!--Left Side Brand, Price and Banner -->
        <div class="hidden md:block w-80 pr-5 pl-7">
            <!-- Brand -->
            <div>
                <p class="
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


                        ?>]">Brand</p>
                <ul class="
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
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Lenovo</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Dell</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>ASUS</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Acer</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Hp</span></li>
                </ul>
            </div>

            <!-- Price -->
            <div class="mt-5">
                <p class="
                text-[<?php

                        if ($startTime > $endTime) {
                            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        } else {
                            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        }


                        ?>]">Price</p>
                <div>
                    <input type="number" name="" id="" class="outline-none border-2 border-[#6A6969] rounded px-4 w-full" placeholder="Min">
                </div>
                <div class="py-2">
                    <input type="number" name="" id="" class="outline-none border-2 border-[#6A6969] rounded px-4 w-full" placeholder="Max">
                </div>
                <div class="text-right">
                    <button class="
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


                    ?>] px-8 rounded 
                bg-[<?php

                    if ($startTime > $endTime) {
                        if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                            echo "#ffffff";
                        } else {
                            echo $tertiaryColor;
                        }
                    } else {
                        if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                            echo "#ffffff";
                        } else {
                            echo $tertiaryColor;
                        }
                    }

                    ?>] 
                 text-[<?php

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


                        ?>] py-[2px]">Go</button>
                </div>
            </div>

            <?php
            $banner3 = isset($editInfo[0]["banner3"]) && !empty($editInfo[0]["banner3"]) ? $editInfo[0]["banner3"] : '/Storage/banner/bannerP2.svg';
            $banner4 = isset($editInfo[0]["banner4"]) && !empty($editInfo[0]["banner4"]) ? $editInfo[0]["banner4"] : '/Storage/banner/bannerP2.svg';
            $banner5 = isset($editInfo[0]["banner5"]) && !empty($editInfo[0]["banner5"]) ? $editInfo[0]["banner5"] : '/Storage/banner/banner5.svg';


            ?>


            <!-- 1st Banner -->
            <div class="mt-5">
                <img src="../../../<?= $banner3 ?>" alt="banner1">
            </div>

            <!-- 2nd Banner -->
            <div class="mt-2">
                <img src="../../../<?= $banner4 ?>" alt="banner2">
            </div>

        </div>
        <!--Left Side Brand, Price and Banner End -->

        <!--Right Side Products -->
        <div class="flex flex-col space-y-5 md:pr-7 px-5">
            <!-- Bannner -->
            <div class="rounded overflow-hidden">
                <img class="w-full md:h-[170px] object-cover" src="../../../<?= $banner5 ?>" alt="banner">

            </div>

            <!-- product-card -->
            <div class="flex 
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

                        ?>] 
                bg-[<?php

                    if ($startTime > $endTime) {
                        if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    } else {
                        if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    }


                    ?>] px-7 py-2 rounded shadow-md">
                <div>
                    <img class="w-[280px]" src="../resources/img/products/msi_summit.svg" alt="msi">
                </div>

                <div class="pl-5">
                    <p class="text-sm md:text-xl">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core
                        i7-1260P Iris
                        Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>
                    <div class="flex py-2">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/hollow_star.svg" alt="star">
                    </div>
                    <p class="md:text-xl 
                text-[<?php

                        if ($startTime > $endTime) {
                            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        } else {
                            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        }


                        ?>] pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="
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


                    ?>] text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex 
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


                        ?>] 
                bg-[<?php
                    if ($startTime > $endTime) {
                        if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    } else {
                        if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    }


                    ?>] px-7 py-2 rounded shadow-md ">
                <div>
                    <img src="../resources/img/products/msi_summit.svg" alt="msi">
                </div>

                <div class="pl-5">
                    <p class="text-sm md:text-xl">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core
                        i7-1260P Iris
                        Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>
                    <div class="flex py-2">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/hollow_star.svg" alt="star">
                    </div>
                    <p class="md:text-xl 
                text-[<?php

                        if ($startTime > $endTime) {
                            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        } else {
                            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        }


                        ?>] pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="
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

                    ?>] text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex 
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


                        ?>] 
                bg-[<?php

                    if ($startTime > $endTime) {
                        if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    } else {
                        if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    }


                    ?>] px-7 py-2 rounded shadow-md">
                <div>
                    <img src="../resources/img/products/msi_summit.svg" alt="msi">
                </div>

                <div class="pl-5">
                    <p class="text-sm md:text-xl">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core
                        i7-1260P Iris
                        Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>
                    <div class="flex py-2">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/hollow_star.svg" alt="star">
                    </div>
                    <p class="md:text-xl 
                text-[<?php

                        if ($startTime > $endTime) {
                            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        } else {
                            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        }


                        ?>] pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="
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


                    ?>] text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex 
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


                        ?>] 
                bg-[<?php

                    if ($startTime > $endTime) {
                        if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    } else {
                        if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    }


                    ?>] px-7 py-2 rounded shadow-md">
                <div>
                    <img src="../resources/img/products/msi_summit.svg" alt="msi">
                </div>

                <div class="pl-5">
                    <p class="text-sm md:text-xl">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core
                        i7-1260P Iris
                        Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>
                    <div class="flex py-2">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/hollow_star.svg" alt="star">
                    </div>
                    <p class="md:text-xl 
                text-[<?php

                        if ($startTime > $endTime) {
                            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        } else {
                            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        }


                        ?>] pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="
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

                    ?>] text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex 
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


                        ?>] 
                bg-[<?php

                    if ($startTime > $endTime) {
                        if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    } else {
                        if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                            echo "#4d4d4d";
                        } else {
                            echo $cardColor;
                        }
                    }


                    ?>] px-7 py-2 rounded shadow-md">
                <div>
                    <img src="../resources/img/products/msi_summit.svg" alt="msi">
                </div>

                <div class="pl-5">
                    <p class="text-sm md:text-xl">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core
                        i7-1260P Iris
                        Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>
                    <div class="flex py-2">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/full_star.svg" alt="star">
                        <img src="../resources/img/products/hollow_star.svg" alt="star">
                    </div>
                    <p class="md:text-xl 
                text-[<?php

                        if ($startTime > $endTime) {
                            if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        } else {
                            if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
                                echo "#ffffff";
                            } else {
                                echo $priceColor;
                            }
                        }


                        ?>] pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="
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


                    ?>] text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- Pagination -->
            <div class="flex mx-auto">
                <a href="" class="border-2 px-3 py-1 border-textGray flex items-center 
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


                        ?>]"><ion-icon name="chevron-back-outline"></ion-icon></a>
                <a href="" class="border-2 w-9 py-1 border-textGray text-center 
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


                        ?>]">1</a>
                <a href="" class="border-2 w-9 py-1 border-textGray text-center 
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


                        ?>]">2</a>
                <a href="" class="border-2 w-9 py-1 border-textGray text-center 
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


                        ?>]">3</a>
                <a href="" class="border-2 px-3 py-1 border-textGray flex items-center 
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
                        } ?>]"><ion-icon name="chevron-forward-outline"></ion-icon></a>
            </div>
            <!-- Pagination End-->

        </div>
    </section>


    <?php
    include "../resources/common/footer.php"
    ?>

</body>

</html>