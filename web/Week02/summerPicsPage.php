<?php
    $vLoc = $_GET['vLoc'];
    $pic1;
    $pic2;
    $pic3;
    $pic4;
    $pic5;
    $location;
    switch ($vLoc) {
        case "DC":
            $pic1 = "R01";
            $pic2 = "R02";
            $pic3 = "R03";
            $pic4 = "R04";
            $pic5 = "R05";
            $location = "Washington, DC";
            break;
        case "WI":
            $pic1 = "R06";
            $pic2 = "R07";
            $pic3 = "R08";
            $pic4 = "R09";
            $pic5 = "R10";
            $location = "Madison, WI";
            break;
        case "OR":
            $pic1 = "R11";
            $pic2 = "R12";
            $pic3 = "R13";
            $pic4 = "R14";
            $pic5 = "R15";
            $location = "Portland, OR";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
   <meta charset="utf-8">
   <title>Mason Family Pictures</title>
   <link rel="stylesheet" href="picsPage.css">
   <script>
   </script>
   <style>
   </style>
</head>
<body>
    <header>
        <h1>Mason Family Summer Adventure</h1>
        <ul>
            <li><a href="HomePage.html">Home</a></li>
            <li><a href="AboutHeather.html">About Heather</a></li>
        </ul>
    </header>
    <hr>
    <?php
        print "<h2>$location</h2>";
        print "<table><tr>";
        print "<td><img src='$pic1.jpg' alt='$pic1'></td>";
        print "<td><img src='$pic2.jpg' alt='$pic2'></td>";
        print "<td><img src='$pic3.jpg' alt='$pic3'></td>";
        print "<td><img src='$pic4.jpg' alt='$pic4'></td>";
        print "<td><img src='$pic5.jpg' alt='$pic5'></td>";
        print "</tr></table>";
    ?>
</body>
</html>
