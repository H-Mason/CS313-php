<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Freeze Dried Treats</title>
   <link rel="stylesheet" href="Week03.css">
</head>
<body>
   <h1>Freeze Dried Treats</h1><br>
   <div id="forSale">
      <fieldset>
         <button class="cartButton">Add to Cart</button>
         <select class="quantity" name="iceCream" id="iceCream">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
         </select>
         Quart of Ice Cream $16<br>
      </fieldset>
      <fieldset>
         <button class="cartButton">Add to Cart</button>
         <select class="quantity" name="skittles" id="skittles">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
         </select>
         Quart of Skittles $16<br>
      </fieldset>
      <fieldset>
         <button class="cartButton">Add to Cart</button>
         <select class="quantity" name="taffy" id="taffy">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
         </select>
         Quart of Salt Water Taffy $14<br>
      </fieldset>
      <fieldset>
         <button class="cartButton">Add to Cart</button>
         <select class="quantity" name="werthers" id="werthers">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
         </select>
         Quart of Werther's $14
      </fieldset>
   </div>
   <div id="buttonDiv"><button id="viewCart" onclick="window.location.href='Week03ViewCart.php'">View Cart</button></div>
</body>