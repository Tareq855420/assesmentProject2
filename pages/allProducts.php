<?php

    session_start();
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?pages=login');
    }
?>

<?php include 'pages/includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h2><?php echo $product['name']; ?></h2>
                        <p><?php echo $product['description']; ?></p>
                        <p><?php echo $product['price']; ?></p>
                        <a href="action.php?pages=product-details" class="btn btn-outline-success float-right">View More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
