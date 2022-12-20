
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
?>

<!Doctype html>
<html>
<head>
     <title> Homepage </title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="banner">
  <div class="navbar">
    <h1 class="logo">VERDANT</h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="#">About</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
  <div class="content">
    <h1>VERDANT CLOTHING</h1>
    <p>Providing quality clothing to people since 1984<br> Press the shop button to get started!</p>
    <div>
      <button type="button"><span></span>SHOP NOW</button>
    </div>
  </div>
</div>


</body>
</html>
