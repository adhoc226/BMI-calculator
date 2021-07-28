<!DOCTYPE html>
<html>
<head>
  <title>BMI</title>
</head>

<body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Height(cm): <input type="float" name="Height" value="<?php echo htmlspecialchars($_POST['Height'] ?? '', ENT_QUOTES); ?>"><br>
    Weight(kg): <input type="float" name="Weight" value="<?php echo htmlspecialchars($_POST['Weight'] ?? '', ENT_QUOTES); ?>"><br><br>
    <button type="submit" value="Submit">Submit</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $height = $_POST['Height'];
      $weight = $_POST['Weight'];
      $mheight = $height/100; //cm to meter
      $BMI = $weight/($mheight**2);
      echo number_format((float)$BMI, 2, '.', '');
      }
    ?>

</body>
</html>
