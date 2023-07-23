<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-primary font-roboto">

    <section class="w-full container mx-auto">
        <!-- Nav Path -->
        <div class="text-textGray py-2 text-xs md:text-sm">
            <span>Home > </span>
            <span>Search Results</span>
        </div>

        <!-- Found Items and Sort -->
        <div class="flex justify-between items-center py-2 border-t-2 border-b-2 border-[#D9D9D9]">
            <div class="text-textGray text-xs md:text-sm">
                <span>47</span>
                <span>items found for</span>
                <span>"laptop"</span>
            </div>

            <div class="flex items-center space-x-2">
                <span class="text-xs md:text-base">Sort by: </span>
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
        <div class="hidden md:block w-80 px-5">
            <!-- Brand -->
            <div>
                <p>Brand</p>
                <ul>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Lenovo</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Dell</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>ASUS</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Acer</span></li>
                    <li class="flex items-center space-x-1"><input type="checkbox" name="" id="" class="w-4 h-4"><span>Hp</span></li>
                </ul>
            </div>

            <!-- Price -->
            <div class="mt-5">
                <p>Price</p>
                <div>
                    <input type="number" name="" id="" class="outline-none border-2 border-[#6A6969] rounded px-4 w-full" placeholder="Min">
                </div>
                <div class="py-2">
                    <input type="number" name="" id="" class="outline-none border-2 border-[#6A6969] rounded px-4 w-full" placeholder="Max">
                </div>
                <div class="text-right">
                    <button class="bg-tertiary px-8 rounded text-textWhite py-[2px]">Go</button>
                </div>
            </div>

            <!-- 1st Banner -->
            <div class="mt-5">
                <img src="../resources/img/products/banner 1.svg" alt="banner1">
            </div>

            <!-- 2nd Banner -->
            <div class="mt-2">
                <img src="../resources/img/products/banner 1.svg" alt="banner1">
            </div>

        </div>
        <!--Left Side Brand, Price and Banner End -->

        <!--Right Side Products -->
        <div class="flex flex-col space-y-5">
            <!-- Bannner -->
            <div class="rounded overflow-hidden">
                <img class="w-full md:h-[170px] object-cover" src="../resources/img/products/banner2.svg" alt="banner">
            </div>

            <!-- product-card -->
            <div class="flex bg-[#F7F7F7] px-7 py-2 rounded">
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
                    <p class="md:text-xl text-textOrange pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="bg-tertiary text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex bg-[#F7F7F7] px-7 py-2 rounded">
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
                    <p class="md:text-xl text-textOrange pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="bg-tertiary text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex bg-[#F7F7F7] px-7 py-2 rounded">
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
                    <p class="md:text-xl text-textOrange pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="bg-tertiary text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex bg-[#F7F7F7] px-7 py-2 rounded">
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
                    <p class="md:text-xl text-textOrange pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="bg-tertiary text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- product-card -->
            <div class="flex bg-[#F7F7F7] px-7 py-2 rounded">
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
                    <p class="md:text-xl text-textOrange pb-0">Ks 4750000</p>
                    <p class="text-sm md:text-sm text-textGray line-through">Ks 5000000</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-textRed">Only 2 left in stock.</span>
                        <button class="bg-tertiary text-textWhite px-6 py-1 rounded">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- product-card End-->

            <!-- Pagination -->
            <div class="flex mx-auto">
                <a href="" class="border-2 px-3 py-1 border-textGray flex items-center"><ion-icon name="chevron-back-outline"></ion-icon></a>
                <a href="" class="border-2 w-9 py-1 border-textGray text-center">1</a>
                <a href="" class="border-2 w-9 py-1 border-textGray text-center">2</a>
                <a href="" class="border-2 w-9 py-1 border-textGray text-center">3</a>
                <a href="" class="border-2 px-3 py-1 border-textGray flex items-center"><ion-icon name="chevron-forward-outline"></ion-icon></a>
            </div>
            <!-- Pagination End-->

        </div>
    </section>

</body>

</html>