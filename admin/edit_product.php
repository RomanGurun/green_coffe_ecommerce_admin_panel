<?php
include '../components/connection.php';
session_start();
$admin_id=$_SESSION['admin_id'];
// session lya login ma store gareko adminid value will be store in a admin_id.
if(!isset($admin_id)){
    header('location: login.php');

}




// delete product 
if(isset($_POST['delete'])){

    $p_id = $_POST['product_id'];
    $p_id = filter_var($p_id,FILTER_SANITIZE_STRING);

    // $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
    // $delete_product->execute([$p_id]);

    // $success_msg[]='product deleted successfully';


$delete_image = $conn->prepare("SELECT * FROM `products` WHERE id=?");
$delete_image->execute(['$p_id']);

$fetch_delete_image = $delete_image->fetch(PDO::FETCH_ASSOC);
if($fetch_delete_image['image'] !=''){


    unlink('../image/'.$fetch_delete_image['image']);
}
    $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
    $delete_product->execute([$p_id]);


    header('location:view_product.php');
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
    <title>green coffee admin panel - edit products page</title>


</head>
<body>
<?php include'admin_header.php'; ?>

<div class="main">
<div class="banner">
    <h1>edit products</h1>
</div>
<div class="title2">
    <a href="dashboard.php">dashboard</a> <span>/ edit products</span>
</div>

<section class="read-post">
    <h1 class="heading">edit product</h1>
  

</section>
<div>


<!-- sweetalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js link -->
<script type="text/javascript" src="script.js"></script>

<!-- alert -->
<?php include'../components/alert.php'; ?>


 </body>
</html>