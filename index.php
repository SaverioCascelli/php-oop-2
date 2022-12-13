<?php
include_once __DIR__ . "/db/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "./partials/head.php"; ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($productArr as $product) : ?>
                <div class="card col-6 text-center">
                    <div class=" card-body">
                        <h5 class="card-title"><?php echo $product->name ?></h5>
                        <p class="card-text"><?php echo 'ID: ' . $product->id  ?></p>
                        <p class="card-text"><?php echo 'brand: ' . $product->brand ?></p>
                        <p class="card-text"><?php echo 'Price: &euro; ' . $product->price ?></p>
                        <?php foreach ($product->getfeature() as $key => $element) : ?>
                            <p class="card-text"><?php echo "$key: $element" ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>