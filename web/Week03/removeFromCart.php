<?php
    session_start();

    function removeFromCart() {
        
        //check for which button was clicked, and decrement the amount by 1 
        //unless it's less than 1
        if (isset($_POST['iCAmount'])) {
            if ($_SESSION['iceCreamQuantity'] > 0) {
                $_SESSION['iceCreamQuantity'] -= 1;
            }
        }
        if (isset($_POST['sAmount'])) {
            if ($_SESSION['skittlesQuantity'] > 0) {
                $_SESSION['skittlesQuantity'] -= 1;
            }
        }
        if (isset($_POST['tAmount'])) {
            if ($_SESSION['taffyQuantity'] > 0) {
                $_SESSION['taffyQuantity'] -= 1;
            }
        }
        if (isset($_POST['wAmount'])) {
            if ($_SESSION['werthersQuantity'] > 0) {
                $_SESSION['werthersQuantity'] -= 1;
            }
        }
   }
   removeFromCart();
   //send back to the cart page
   header('Location: Week03ViewCart.php');
?>