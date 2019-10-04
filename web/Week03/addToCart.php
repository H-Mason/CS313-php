<?php
    session_start();

    function addToCart() {
        $iceCreamQuantity = 0;
        $skittlesQuantity = 0;
        $taffyQuantity = 0;
        $werthersQuantity = 0;
        //check for which button was clicked, and set the right variable to that amount
        if (isset($_POST['iceCreamCart'])) {
            $iceCreamQuantity = $_POST['iceCream'];
        }
        if (isset($_POST['skittlesCart'])) {
            $skittlesQuantity = $_POST['skittles'];
        }
        if (isset($_POST['taffyCart'])) {
            $taffyQuantity = $_POST['taffy'];
        }
        if (isset($_POST['werthersCart'])) {
            $werthersQuantity = $_POST['werthers'];
        }
        //check if session already has the quantity of each treat
        //and add the new amount to the session
        if($iceCreamQuantity > 0) {
            if(!isset($_SESSION['iceCreamQuantity'])) {
                $_SESSION['iceCreamQuantity'] = $iceCreamQuantity;
            }
            else {
                $_SESSION['iceCreamQuantity'] += $iceCreamQuantity;
            }
        }
        if($skittlesQuantity > 0) {
            if(!isset($_SESSION['skittlesQuantity'])) {
                $_SESSION['skittlesQuantity'] = $skittlesQuantity;
            }
            else {
                $_SESSION['skittlesQuantity'] += $skittlesQuantity;
            }
        }
        if($taffyQuantity > 0) {
            if(!isset($_SESSION['taffyQuantity'])) {
                $_SESSION['taffyQuantity'] = $taffyQuantity;
            }
            else {
                $_SESSION['taffyQuantity'] += $taffyQuantity;
            }
        }
        if($werthersQuantity > 0) {
            if(!isset($_SESSION['werthersQuantity'])) {
                $_SESSION['werthersQuantity'] = $werthersQuantity;
            }
            else {
                $_SESSION['werthersQuantity'] += $werthersQuantity;
            }
        }
   }
   addToCart();
   //send back to the browse page
   header('Location: Week03Browse.php');
?>