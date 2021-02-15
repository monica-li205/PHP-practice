<?php 
$f_name = "Monica";
$l_name = "Li";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Name: <?php echo $f_name . ' ' . $l_name; ?> </p>
  <form action="tut1.php" method="get">
    <label>state : </label>
    <input type="text" name="state" /><br>
    <label>Number 1 : </label>
    <input type="text" name="num-1" /><br>
    <label>Number 2 : </label>
    <input type="text" name="num-2" /><br>
    <input type="submit" value="Submit" /><br>
  </form>
  <!-- <?php
    if(isset($_GET) && array_key_exists(''))

    testing testing
  
  ?> -->
</body>

</html>