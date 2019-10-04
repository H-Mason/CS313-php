<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Freeze Dried Treats - Checkout</title>
   <link rel="stylesheet" href="Week03.css">
</head>
<body>
   <h1>Freeze Dried Treats</h1>
   <h2>Checkout</h2><br>
   <div id="checkout">
      <h3>Billing/Delivery Address</h3>
      <form action="Week03Confirmation.php" method="POST">   
         <table>
            <tr>
               <td>Street Address: </td>
               <td><input type="text" name="address" maxlength="90" size="35"></td>
            </tr>
            <tr>
               <td>City: </td>
               <td><input type="text" name="city" maxlength="35" size="35"></td>
            </tr>
            <tr>
               <td>State: </td>
               <td><input type="text" name="state" maxlength="2" size="2"></td>
            </tr>
            <tr>
               <td>Zip Code: </td>
               <td><input type="text" name="zip" maxlength="5" size="5"></td>
            </tr>
         </table><br>
         <div id="addressDiv">
            <input type="submit" name="addressButton" id="addressButton" value="Complete Purchase">
         </div>
      </form>
   </div>
   <div class="buttonDiv">
      <button class="navButton" id="viewCart" onclick="window.location.href='Week03ViewCart.php'">Return to Cart</button>
      <button class="navButton" id="browse" onclick="window.location.href='Week03Browse.php'">Continue Shopping</button>
   </div>
</body>