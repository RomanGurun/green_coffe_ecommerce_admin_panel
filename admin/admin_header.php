<!-- =============================================This file is included on dashboard.php =================================== -->
<header class="header">
    <div class="flex">
        <a href="dashboard.php" class="logo"><img src="../img/logo.jpg" alt="" srcset=""></a>
        <nav class="navbar">

            <a href="dashboard.php">dashboard</a>
            <a href="add_products.php">add product</a>
            <a href="view_product.php">view product</a>
            <a href="user_account.php">accounts</a>

        </nav>
        <div class="icons">

            <i class="bx bxs-user" id="user-btn"></i>
            <i class="bx bx-list-plus" id="menu-btn"></i>

        </div>

        <div class="profile-detail">
            <?php
            // ===================================================================================================================
// i think its like connvariable. means connecting to a function

$select_profile=$conn->prepare("SELECT * FROM `admin` WHERE id=?");
$select_profile->execute([$admin_id]);
if($select_profile->rowCount() > 0){
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
// =============================================================================================================================
    // fetch_profile lya sabai id ko name fetch garna milxa
}

?>
            <div class="profile">
                <img src="../image/<?=$fetch_profile['profile']; ?>" alt="" class="logo-img">
 <p><?=  $fetch_profile['name']; ?></p>
 
                <!--====================================================================================================  -->
                <!-- ti madya i fetch profile that is image................. -->
            </div>
<div class="flex-btn">
    <a href="profile.php" class="btn">profile</a>
    <a href="../components/admin_logout.php" onclick="return confirm('logout from this website');" class="btn">logout</a>
</div>

<?php


?>

        </div>
    </div>
</header>