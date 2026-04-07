<?php
// Role router: send user to correct dashboard after login/signup.
header('Content-Type: text/html; charset=utf-8');

$role = $_POST['role'] ?? '';
$name = $_POST['name'];
$img = $_POST["img"];

if ($role === 'seller') {
  $data = "$name,$img";
  $file = fopen("saller/seller.txt","w");
  
    fwrite($file,$data); 

  header('Location: saller/seller_dashboard.php?name=');
  exit;
}

// Buyer dashboard file does not exist in this project yet.
header('Location: buyer/buyer_dashboard.php');
exit;
?>
