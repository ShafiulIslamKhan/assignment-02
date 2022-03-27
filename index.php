<?php

    include_once './product_data.php';
    include_once './dev_data.php';
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-02 (Developers Profile)</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <?php foreach ($dev as $profile) : ?>

                <div class="col-md-3 my-2">
                    <div class="card">
                        <img style="height: 300px; object-fit:cover;" src="<?php echo $profile['image'] ?>" alt="">
                        <h2><?php echo $profile['name'] ?></h2>
                        <h4><?php echo $profile['skill'] ?></h4>
                        <h5>Age : <?php echo $profile['age'] ?> years</h5>
                        <p><?php echo $profile['description'] ?></p>
                    </div>
                </div>

            <?php 
                endforeach;
            ?>
        </div>
    </div>
    <hr><hr>   
    
    <div class="container my-5">
        <div class="row">
            <?php foreach ($product as $pr) : ?>

                <div class="col-md-3 my-2">
                    <div class="card">
                        <img style="height: 300px; object-fit:cover;" src="<?php echo $pr['image2'] ?>" alt="">
                        <h2><?php echo $pr['name2'] ?></h2>
                        <h5>Price : <?php echo $pr['price'] ?> bdt</h5>
                    </div>
                </div>

            <?php 
                endforeach;
            ?>
        </div>
    </div>
</body>

</html>

