<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Freeze Dried Treats - View Cart</title>
   <link rel="stylesheet" href="Week03.css">
</head>
<body>
   <h1>Freeze Dried Treats</h1>
   <h2>Cart</h2><br>
   <div id="items">
      <?php
         $total = 0;
         if (isset($_SESSION['iceCreamQuantity']) && $_SESSION['iceCreamQuantity'] > 0) {
            $iceCreamTotal = ($_SESSION['iceCreamQuantity'] * 16);
            print("<form action='removeFromCart.php' method='POST'>");
            print("<fieldset>");
            print("<input type='submit' name='iCAmount' class='cartButton' value='Remove 1 Quart'>");
            print($_SESSION['iceCreamQuantity'] . " quarts of Ice Cream: $" . $iceCreamTotal . "<br>");
            print("</fieldset>");
            print("</form>");
            $total += $iceCreamTotal;
         }
         if (isset($_SESSION['skittlesQuantity']) && $_SESSION['skittlesQuantity'] > 0) {
            $skittlesTotal = ($_SESSION['skittlesQuantity'] * 16);
            print("<form action='removeFromCart.php' method='POST'>");
            print("<fieldset>");
            print("<input type='submit' name='sAmount' class='cartButton' value='Remove 1 Quart'>");
            print($_SESSION['skittlesQuantity'] . " quarts of Skittles: $" . $skittlesTotal . "<br>");
            print("</fieldset>");
            print("</form>");
            $total += $skittlesTotal;
         }
         if (isset($_SESSION['taffyQuantity']) && $_SESSION['taffyQuantity'] > 0) {
            $taffyTotal = ($_SESSION['taffyQuantity'] * 14);
            print("<form action='removeFromCart.php' method='POST'>");
            print("<fieldset>");
            print("<input type='submit' name='tAmount' class='cartButton' value='Remove 1 Quart'>");
            print($_SESSION['taffyQuantity'] . " quarts of Taffy: $" . $taffyTotal . "<br>");
            print("</fieldset>");
            print("</form>");
            $total += $taffyTotal;
         }
         if (isset($_SESSION['werthersQuantity']) && $_SESSION['werthersQuantity'] > 0) {
            $werthersTotal = ($_SESSION['werthersQuantity'] * 14);
            print("<form action='removeFromCart.php' method='POST'>");
            print("<fieldset>");
            print("<input type='submit' name='wAmount' class='cartButton' value='Remove 1 Quart'>");
            print($_SESSION['werthersQuantity'] . " quarts of Werthers: $" . $werthersTotal . "<br>");
            print("</fieldset>");
            print("</form>");
            $total += $werthersTotal;
         }
         $_SESSION['orderTotal'] = $total;
         print("<p class='confirmation'>Total: $" . $total . "</p>");
      ?>
   </div>
   <div class="buttonDiv">
      <button class="navButton" id="browse" onclick="window.location.href='Week03Browse.php'">Continue Browsing</button>
      <button class="navButton" id="checkout" onclick="window.location.href='Week03Checkout.php'">Checkout</button>
   </div>
</body>