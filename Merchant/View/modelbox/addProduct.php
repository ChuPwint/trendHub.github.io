<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
<link rel="stylesheet" href="../resources/css/background/background.css">
<script src="../resources/lib/jquery3.6.0.js"></script>
  <title>New Product Detail Card</title>
</head>
<body class="merchantBg w-screen h-screen overflow-hidden">
<div class="w-1/2 mx-auto bg-white rounded-lg overflow-hidden mt-5 shadow-lg ">
<h2 class="text-2xl font-bold mb-4 px-6 py-3">New Product Details</h2>
    <div class="px-6 py-4 grid grid-cols-2 gap-4">
      <div class="col-span-1">
      
        <form>
            <div class="bg-secondary p-4">
          <div class="mb-4">
            <label for="category" class="block font-medium text-white">Category:</label>
            <select id="category" name="category" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md focus:border-secondary">
              <!-- Add options for categories here -->
              <option value="category1">Category 1</option>
              <option value="category2">Category 2</option>
              <!-- Add more options if needed -->
            </select>
          </div>
          <div class="mb-4">
            
            <input type="text" id="productName" name="productName" placeholder="Product Name:" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md  focus:border-secondary" required>
          </div>
          <div class="mb-4">
          
            <input type="text" id="brand" name="brand" placeholder="Brand:" class="block w-full mt-1 p-2 border border-secondary rounded-md  shadow-md focus:border-secondary" required>
          </div>
          <div class="mb-4">
            
            <input type="number" id="sellPrice" name="sellPrice" placeholder="Sell Price:" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md  focus:border-secondary" required>
          </div>
          <div class="mb-4">
        
            <input type="number" id="buyPrice" name="buyPrice" placeholder="Buy Price:" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md  focus:border-secondary" required>
          </div>
          <div class="mb-4">

            <input type="number" id="quantity" name="quantity" placeholder="Quantity:" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md focus:border-secondary" required>
          </div>
        </div>
        </div>

        <div class="col-span-1">
          <div class="mb-4">
            <label for="productDetail" class="block font-medium">Product Detail:</label>
            <textarea id="productDetail" name="productDetail" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md focus:border-secondary" rows="3" required></textarea>
          </div>
          <div class="mb-4">
            <label for="productDescription" class="block font-medium">Product Description:</label>
            <textarea id="productDescription" name="productDescription" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md  focus:border-secondary" rows="5" required></textarea>
          </div>
          <div class="mb-4">
            <label for="productPhoto" class="block font-medium">Upload Product Photo:</label>
            <input type="file" id="productPhoto" name="productPhoto" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md  focus:border-secondary" accept="image/*" required>
          </div>
          <button type="submit" class="w-full py-2 px-4 mt-4 bg-secondary text-white font-semibold rounded-md shadow-md hover:bg-secondary">Add Product</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
