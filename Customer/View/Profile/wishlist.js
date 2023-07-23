// Function to display the Wishlist content
//Start Wishlist content
function showWishlist() {
    profileFormCard.innerHTML = `
    <!-- Wishlist Card -->
    <div class="rounded-lg p-6 shadow-lg">
    
      <table class="w-full border-collapse text-sm">
        <thead class=" bg-secondary text-textBlack p-2 px-4  rounded-t-lg">
          <tr>
            <th class="px-4 py-2">Thumbnail</th>
            <th class="px-4 py-2">Product</th>
            <th class="px-4 py-2">Price</th>
            <th class="px-4 py-2">Add to Cart</th>
            <th class="px-4 py-2">Remove</th>
            <th class="px-4 py-2">Share</th>
          </tr>
        </thead>
        <tbody id="wishlist-items">
          <!-- Wishlist items will be dynamically added here using JavaScript -->
        </tbody>
      </table>`;
    // Populate Wishlist Card with Data
    const wishlistItems = document.getElementById("wishlist-items");
    wishlistData.forEach((item) => {
      const wishlistRow = createWishlistRow(item);
      wishlistItems.appendChild(wishlistRow);
    });
  }
  
  // Sample Wishlist Data (replace this with your actual data)
  const wishlistData = [
    {
      id: 1,
      thumbnail: "../resources/img/orderHistory/product1.png",
      product: "White Shirt",
      price: "$349.00",
    },
    {
      id: 2,
      thumbnail: "../resources/img/orderHistory/product2.png",
      product: "Red T_Shirt",
      price: "$35.99",
    },
    {
      id: 2,
      thumbnail: "../resources/img/orderHistory/product3.png",
      product: " LEATHER MONOGRAMBELT",
      price: "$140.00",
    },
    {
      id: 2,
      thumbnail: "../resources/img/orderHistory/product4.png",
      product: "The One Bag",
      price: "$100.00",
    },
  
    // Add more wishlist items as needed
  ];
  
  // Function to create a row for each wishlist item
  function createWishlistRow(item) {
    const row = document.createElement("tr");
  
    // Thumbnail
    const thumbnailCell = document.createElement("td");
    thumbnailCell.classList.add("px-4", "py-2");
    thumbnailCell.innerHTML = `<img src="${item.thumbnail}" alt="Product Thumbnail" class="w-16 h-16 rounded">`;
    row.appendChild(thumbnailCell);
  
    // Product
    const productCell = document.createElement("td");
    productCell.classList.add("px-4", "py-2");
    productCell.textContent = item.product;
    row.appendChild(productCell);
  
    // Price
    const priceCell = document.createElement("td");
    priceCell.classList.add("px-4", "py-2");
    priceCell.textContent = item.price;
    row.appendChild(priceCell);
  
    // Add to Cart
    const addToCartCell = document.createElement("td");
    addToCartCell.classList.add("px-2", "py-1", "w-32", "text-xs");
    const addToCartBtn = document.createElement("button");
    addToCartBtn.textContent = "Add to Cart";
    addToCartBtn.classList.add(
      "px-4",
      "py-2",
      "bg-tertiary",
      "text-white",
      "rounded"
    );
    addToCartCell.appendChild(addToCartBtn);
    row.appendChild(addToCartCell);
  
    // Remove
    const removeCell = document.createElement("td");
    removeCell.classList.add("px-4", "py-2");
    // Inserting SVG icon inline
    removeCell.innerHTML = `
      <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_723_1035)">
      <path d="M11.798 3.82969L10.4833 5.9375H20.5167L19.202 3.82969C19.0982 3.66641 18.9252 3.5625 18.7384 3.5625H12.2547C12.0679 3.5625 11.8949 3.65898 11.7911 3.82969H11.798ZM21.9699 1.85547L24.5094 5.9375H29.3393C30.2596 5.9375 31 6.73164 31 7.71875C31 8.70586 30.2596 9.5 29.3393 9.5H28.7857V32.0625C28.7857 35.343 26.3085 38 23.25 38H7.75C4.69152 38 2.21429 35.343 2.21429 32.0625V9.5H1.66071C0.740402 9.5 0 8.70586 0 7.71875C0 6.73164 0.740402 5.9375 1.66071 5.9375H6.49062L9.03013 1.84805C9.74978 0.697656 10.9607 0 12.2547 0H18.7384C20.0324 0 21.2433 0.697656 21.9629 1.84805L21.9699 1.85547ZM5.53571 9.5V32.0625C5.53571 33.3762 6.52522 34.4375 7.75 34.4375H23.25C24.4748 34.4375 25.4643 33.3762 25.4643 32.0625V9.5H5.53571ZM11.0714 14.25V29.6875C11.0714 30.3406 10.5732 30.875 9.96428 30.875C9.35536 30.875 8.85714 30.3406 8.85714 29.6875V14.25C8.85714 13.5969 9.35536 13.0625 9.96428 13.0625C10.5732 13.0625 11.0714 13.5969 11.0714 14.25ZM16.6071 14.25V29.6875C16.6071 30.3406 16.1089 30.875 15.5 30.875C14.8911 30.875 14.3929 30.3406 14.3929 29.6875V14.25C14.3929 13.5969 14.8911 13.0625 15.5 13.0625C16.1089 13.0625 16.6071 13.5969 16.6071 14.25ZM22.1429 14.25V29.6875C22.1429 30.3406 21.6446 30.875 21.0357 30.875C20.4268 30.875 19.9286 30.3406 19.9286 29.6875V14.25C19.9286 13.5969 20.4268 13.0625 21.0357 13.0625C21.6446 13.0625 22.1429 13.5969 22.1429 14.25Z" fill="#746A6A"/>
      </g>
      <defs>
      <clipPath id="clip0_723_1035">
      <rect width="31" height="38" fill="white"/>
      </clipPath>
      </defs>
      </svg>
         `;
    row.appendChild(removeCell);
  
    // Share
    const shareCell = document.createElement("td");
    shareCell.classList.add("px-4", "py-2");
  
    // Inserting SVG icon inline
    shareCell.innerHTML = `
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7623 15.025 18.637C15.0417 18.5117 15.0667 18.3993 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.646 7.1 14.788C6.75 14.93 6.38333 15.0007 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.071 7.1 9.213C7.45 9.355 7.76667 9.55067 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.48767 15.025 5.363C15.0083 5.23833 15 5.11733 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92933 16.9 7.788C16.55 7.64667 16.2333 7.45067 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5127 8.975 11.638C8.99167 11.7633 9 11.884 9 12C9 12.1167 8.99167 12.2377 8.975 12.363C8.95833 12.4883 8.93333 12.6007 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3543 16.9 16.213C17.25 16.0717 17.6167 16.0007 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22Z" fill="black"/>
         </svg>
         `;
    row.appendChild(shareCell);
    row.style.backgroundColor = "#F0F0F0";
    row.style.marginTop = "10px";
    return row;
  }
  //End Wishlist content