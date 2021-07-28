<!DOCTYPE html>
<html>
<head>
  <title>BMI</title>
</head>

<body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Height(cm): <input type="number" name="Height" value="<?php echo htmlspecialchars($_POST['Height'] ?? '', ENT_QUOTES); ?>"><br>
    Weight(kg): <input type="number" name="Weight" value="<?php echo htmlspecialchars($_POST['Weight'] ?? '', ENT_QUOTES); ?>"><br><br>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $height = $_POST['Height'];
      $weight = $_POST['Weight'];

      if (empty($_POST["Height"])){ // skip if field is empty
     echo "Fill out the fields." . "<br>";
   goto bottom;}

      if (empty($_POST["Weight"])){ // skip if field is empty
     echo "Fill out the fields" . "<br>";
   goto bottom;}

      $mheight = $height/100; //cm to meter
      $BMI = $weight/($mheight**2);
      echo "Your BMI is: " . number_format((float)$BMI, 2, '.', '') . "<br>";
      }

      bottom:
    ?>

    <button type="submit" value="Submit">Submit</button>
    </form>

</body>
</html>
