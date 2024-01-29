<?php
include '../components/connection.php';
session_start();
$admin_id=$_SESSION['admin_id'];
// session lya login ma store gareko adminid value will be store in a admin_id.
if(!isset($admin_id)){
    header('location: login.php');

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxicon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="admin_style.css?v=<?php echo time(); ?>">
    <title>green coffee admin panel -register user's page</title>


</head>
<body>
<?php include'admin_header.php'; ?>

<div class="main">
<div class="banner">
    <h1>register user's</h1>
</div>
<div class="title2">
    <a href="dashboard.php">home</a> <span>register user's</span>
</div>

<section class="dashboard">
    <h1 class="heading">register user's </h1>
     <div class="box-container">

    </div>
</section>
</div>    

<!-- sweetalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js link -->
<script type="text/javascript" src="script.js"></script>

<!-- alert -->
<?php include'../components/alert.php'; ?>


 </body>
</html>