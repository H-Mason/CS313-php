<?php
   session_start();
   $message = " ";
   $street;
   $city;
   $state;
   $zip;

   if ($_POST['address'] == null || $_POST['city'] == null || $_POST['state'] == null || $_POST['zip'] == null) {
      $message = "Invalid Address Entered";
   }
   else {
      $street = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
      $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
      $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
      $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Freeze Dried Treats - Order Confirmation</title>
   <link rel="stylesheet" href="Week03.css">
</head>
<body>
   <h1>Freeze Dried Treats</h1>
   <h2>Order Confirmation</h2><br>
   <?php
      if($_SESSION['orderTotal'] > 0 ) {
         print("<div id='confirmation'>");
         print("<h3>Your Order</h3>");
         if (isset($_SESSION['iceCreamQuantity']) && $_SESSION['iceCreamQuantity'] > 0) {
            $iceCreamTotal = ($_SESSION['iceCreamQuantity'] * 16);
            print("<fieldset>");;
            print($_SESSION['iceCreamQuantity'] . " quarts of Ice Cream: $" . $iceCreamTotal . "<br>");
            print("</fieldset>");
         }
         if (isset($_SESSION['skittlesQuantity']) && $_SESSION['skittlesQuantity'] > 0) {
            $skittlesTotal = ($_SESSION['skittlesQuantity'] * 16);
            print("<fieldset>");
            print($_SESSION['skittlesQuantity'] . " quarts of Skittles: $" . $skittlesTotal . "<br>");
            print("</fieldset>");
         }
         if (isset($_SESSION['taffyQuantity']) && $_SESSION['taffyQuantity'] > 0) {
            $taffyTotal = ($_SESSION['taffyQuantity'] * 14);
            print("<fieldset>");
            print($_SESSION['taffyQuantity'] . " quarts of Taffy: $" . $taffyTotal . "<br>");
            print("</fieldset>");
         }
         if (isset($_SESSION['werthersQuantity']) && $_SESSION['werthersQuantity'] > 0) {
            $werthersTotal = ($_SESSION['werthersQuantity'] * 14);
            print("<fieldset>");
            print($_SESSION['werthersQuantity'] . " quarts of Werthers: $" . $werthersTotal . "<br>");
            print("</fieldset>");
         }
         print("<p class='confirmation'>Total Purchase: $" . $_SESSION['orderTotal'] . "</p><br>");
         print("</div>");
         print("<div>");
         print("<h3>Shipping Address</h3>");
         print("<p class='confirmation'>");
         if ($message != " ") {
            print($message);
         }
         else {
            
            print($street . "<br>");
            print($city . ", " . $state . " " . $zip . "<br>");
         }
         print("</p>");
         print("</div>");
      }
      else {
         print("<div id='confirmation'>");
         print("<h3>Your Order</h3>");
         print("<h3>NO ITEMS PURCHASED<h3>");
         print("</div>");
      }
   ?>
   <div class="buttonDiv">
      <button class="navButton" id="browse" onclick="window.location.href='Week03Browse.php'">Continue Shopping</button>
   </div>

</body>