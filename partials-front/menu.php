<?php include('admin/config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Home</title>

</head>

<body>
  <header>
    <h3>Sylhet Food Hub</h3>


    <ul class="navbar">
      <li><a href="<?php echo SITEURL; ?>index.php">Home</a></li>
      <li><a href="<?php echo SITEURL; ?>categories.php">Categories</a></li>
      <div class="dropdown">
        <a class="dropdown-toggle" href="#">Resturant</a>
        <div class="dropdown-content">
          <a href="#">Panshi</a>
          <a href="#">Pachvai </a>

        </div>
      </div>
      </li>
      <div class="dropdown">
        <a class="dropdown-toggle" href="#">Food</a>
        <div class="dropdown-content">
          <a href="#">Panshi food</a>
          <a href="#">Pachvai food</a>

        </div>
      </div>

      <li><a href="<?php echo SITEURL; ?>login.php">Logout</a></li>
      <!-- <li><a href="#" class="cart"><i class='bx bxs-cart-download'></i></a></li> -->
    </ul>


  </header>
</body>

</html>