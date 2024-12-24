<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<?php include './nav.php'; ?> 
<div class="menu container">
    <div class="row row-cols-3">
        <div class="col">
            <a class="row row-cols-1 single" href="./food/menu.php">
                <div class="col">
                <img src="../assets/icons/food.svg" alt="">
                </div>
                <div class="col">
                    <p>Food</p>
                </div>
            </a>
        </div>
        <div class="col">
            <a class="row row-cols-1 single" href="./user/menu.php">
                <div class="col">
                <img src="../assets/icons/user.svg" alt="">
                </div>
                <div class="col">
                    <p>User</p>
                </div>
            </a>
        </div><div class="col">
            <a class="row row-cols-1 single" href="./order/menu.php">
                <div class="col">
                <img src="../assets/icons/order.svg" alt="">
                </div>
                <div class="col">
                    <p>Order</p>
                </div>
            </a>
        </div>
    </div>
</div>

</body>
</html>