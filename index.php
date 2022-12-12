<?php
include_once __DIR__ . "./Models/product.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "./partials/head.php"; ?>
</head>

<body>

    <?php
    $cats = [
        $mia = new Product(1, 'micio miao', '4cats', 1.22),
        $mew = new Product(2, 'micio miaw', '4cats', 1.32)
    ];

    $mia->toggleAvaiable();

    var_dump($cats);
    ?>
</body>

</html>