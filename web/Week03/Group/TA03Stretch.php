<?php
  $majors = array("Computer Science"=>"CS", "Web Design and Development"=>"WD", 
                  "Computer Information Technology"=>"CIT", "Computer Engineering"=>"CE");  
  ?>
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="ta03_Stretch.php" onsubmit="return true" id="form" method="POST">
        <p>Name<br>
            <input type="text" placeholder="Name" id="name" name="name"></p>

        <p>Email<br>
            <input type="text" placeholder="Email Address" id="email" name="email"></p>

        <p>Major:<br>
           <?php

			foreach ($majors as $key=>$key_value) {
  			print "<input type='radio' name='major' value='$key' id='$key_value'><label
                for='$key_value'>$key</label><br>";
			}
			?>
            <!-- Major inputs -->
            
        </p>
            <br />

            <!-- Continents inputs -->
            <p>Select the continents you have visited: <br>
                <input type="checkbox" name="continents[]" value="NA" id="NA"><label for="NA">North America</label><br>

                <input type="checkbox" name="continents[]" value="SA" id="SA"><label for="SA">South
                    America</label><br />

                <input type="checkbox" name="continents[]" value="EU" id="EU"><label for="EU">Europe</label><br />

                <input type="checkbox" name="continents[]" value="AS" id="AS"><label for="AS">Asia</label><br />

                <input type="checkbox" name="continents[]" value="AUS" id="AUS"><label for="AUS">Australia</label><br />

                <input type="checkbox" name="continents[]" value="AF" id="AF"><label for="AF">Africa</label><br />

                <input type="checkbox" name="continents[]" value="AN" id="AN"><label for="AN">Antarctica</label><br />
                <p>

                    <br />



                    <input type="textarea" name="comments" value="comments" id="comments"><label for="comments"></label>
                    <br>
                    <input type="submit" id="submitButton">


    </form>


</body>

</html>