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
                <div class="col-md-6 mt-3">
                    <div>
                        <img src="<?php echo $product['image']; ?>" alt="" class="img-fluid" style="height: 300px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body" style="min-height: 300px">
                        <h2 class="font-weight-bold"><?php echo $product['name']; ?></h2>
                        <p><?php echo $product['description']; ?></p>
                        <p><?php echo $product['price']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success">Order Now</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
