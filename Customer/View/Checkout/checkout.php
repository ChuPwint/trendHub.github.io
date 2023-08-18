<?php
session_start();
include "../../Controller/regionAndTownshipController.php";


$subTotal = (isset($_SESSION["subTotal"])) ? $_SESSION["subTotal"] : false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check Out</title>
	<link rel="icon" href="../resources/img/header/headerLogo.svg" type="image/icon type">

	<link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<script src="../resources/js/checkout/checkout.js" defer></script>
	<script src="../resources/lib/jquery3.6.0.js"></script>
</head>
<?php
include "../resources/common/navbar.php";
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

<body class="scrollHide 
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



	?>] font-roboto">

	<p class="px-5 mt-36 md:mt-28 md:px-10 md:pt-8 font-bold text-xl 
    text-[<?php

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



			?>]">Delivery Information</p>
	<div class="md:p-10">
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
			<!-- start of delivery information and order summary container -->
			<div class="md:flex md:justify-between md:p-5">
				<!-- start of delivery information container -->
				<form class="md:py-4 md:px-10 py-4 px-4">
					<div class="md:space-y-12">
						<div class="md:pb-3">
							<h2 class="md:text-xl font-semibold 
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



				?>]">Contact Information</h2>
							<p class="md:mt-1 mt-2
         text-[<?php

				if ($startTime > $endTime) {
					if (strtotime($currentHour) >= strtotime($startTime) || strtotime($currentHour) < strtotime($endTime)) {
						echo "#ffffff";
					} else {
						echo "#757575";
					}
				} else {
					if (strtotime($currentHour) >= strtotime($startTime) && strtotime($currentHour) < strtotime($endTime)) {
						echo "#ffffff";
					} else {
						echo "#757575";
					}
				}



				?>]">Check your delivery information carefully before proceeding.</p>

							<div class="md:mt-6 mt-4">
								<div>
									<label for="name" class="block font-medium 
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



				?>] ">Name</label>
									<div class="mt-2">
										<input type="text" name="deliverName" class="border border-1 p-2 
        border-[<?php

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



				?>] w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="John Doe" readonly>
									</div>
								</div>

								<div class="mt-3">
									<label for="phone" class="block font-medium 
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



				?>]">Phone Number</label>
									<div class="mt-2">
										<input type="text" name="phone" class="border border-1 p-2 
         border-[<?php

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



					?>] w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="09123456">
									</div>
								</div>

								<div class="mt-3">
									<label for="email" class="block font-medium
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



				?>]">Email address</label>
									<div class="mt-2">
										<input name="email" type="email" class="border border-1 p-2 
        border-[<?php

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



				?>] w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="trendhub123@gmail.com">
									</div>
								</div>

								<div class="mt-3">
									<label for="region" class="block font-medium 
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



				?>]">Region</label>
									<div class="mt-2">
										<select name="region" class="border border-1 p-2 
        border-[<?php

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



				?>] w-full rounded-md outline-none py-1.5 placeholder:text-gray-400">
											<?php
											foreach ($totalRegions as $region) { ?>
												<option value="<?= $region["id"] ?>" <?php
																						if (isset($_SESSION["cRegion"]) && ($region["id"] == $_SESSION["cRegion"])) { ?> selected <?php }
																																													?>><?= $region["name"] ?></option>
											<?php }
											?>
										</select>
									</div>
								</div>



								<div class="mt-3">
									<label for="township" class="block font-medium 
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



				?>]">Township</label>
									<div class="mt-2">
										<select name="township" class="border border-1 p-2 
        border-[<?php

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



				?>] w-full rounded-md outline-none py-1.5 placeholder:text-gray-400">
											<?php
											foreach ($totalTsp as $township) { ?>
												<option value="<?= $township["id"] ?>" <?php
																						if (isset($_SESSION["cTownship"]) && ($township["id"] == $_SESSION["cTownship"])) { ?> selected <?php }
																																										?>><?= $township["name"] ?></option>
											<?php }
											?>
										</select>
									</div>
								</div>

								<div class="mt-3">
									<label for="address" class="block font-medium 
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



				?>]">Address</label>
									<div class="mt-2">
										<input type="text" name="region" class="border border-1 p-2 
        border-[<?php

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



				?>] w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="12/A ABC Street DE Apartment 3rd floor">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-6 flex items-center justify-center">
						<button id="saveDeliInfoBtn" type="submit" class="rounded-md 
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



			?>] md:px-6 py-2 px-10 font-semibold text-white">Save and Deliver Here</button>
					</div>
				</form>
				<!-- end of delivery information container -->
				<!-- start of order summary container -->
				<div class="md:w-[30%]">
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



			?>] text-lg">
						<p class="hidden font-medium mb-5 text-lg md:block 
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



				?>]">Order Summary</p>
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
								<p class="mb-3"><?= number_format($subTotal) ?> Ks</p>
								<p>$80</p>
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



				?>]">
							<p>Grand Total</p>
							<p>$880</p>
						</div>
						<!-- end of prices -->
						<div class="flex justify-center mt-6 mb-4">
							<a href="../Payment/payment.php"><button id="placeOrderBtn" class="
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



			?>] bg-opacity-50 rounded-md px-8 py-2 
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



				?>]">Place Order</button></a>
						</div>
					</div>
					<!-- end of order summary card -->
				</div>
				<!-- end of order summary container -->
			</div>
			<!-- end of delivery information and order summary container -->
		</div>
		<!--end of card container -->
	</div>
</body>

</html>
<?php
include "../resources/common/footer.php";
?>