<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Documents </title>
</head>
<body>

<form action="C-2.php" method="post" class="container-sm">
  <label for="quantity">Quantity</label>
  <input type="text" name="quantity" required>
<br>
  <label for="price">Price</label>
  <input type="text" name="price" required>
<br>
  <input type="submit" value="Add" class="btn btn-success">

</form>
  
</body>
</html>

<?php 

$quantity = $_POST["quantity"] ;
$price = $$_POST["price"] ;
$total = null;

?>