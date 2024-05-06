<?php 
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Categories.php';
require_once __DIR__ . '/Model/Type.php';
require_once __DIR__ . '/data/db.php';

$prodotti = [];


foreach($db as $product){
  
  $prodotti[]=$product;
}

// ERRORI
$productErr = new Product('Croccantini per cuccioli S', 5.99, true);
try{
  $productErr->setDisposability('sono disponibile');
}catch(Exception $e){
    var_dump($e->getMessage());
}
// var_dump($productErr);
// var_dump($prodotti);
// var_dump($prodotti[0]->getProductInfo());
// var_dump($prodotti[1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link css -->
  <link rel="stylesheet" href="./css/my-style.css">

  <title>E-commerce Animali</title>
</head>
<body>
  <div class="container my-5">
    <div class="row row-cols-4 justify-content-center ">
      <?php foreach($prodotti as $product): ?>
        <div class="col my-5 mx-1 rounded-2 my-card"><?php $product->getProductInfo()?>
        <p class="my-3">
          <?php echo $product->categoryName ?? '-'?>
        </p>
        <p class="my-3">
          <?php echo $product->brand ?? '-'?>
        </p>
        <p class="my-3">
          <?php  $product->type?->getType() ?? '-'?>
        </p>
        
        </div>
      <?php endforeach;?>
    </div>
    
  </div>
</body>
</html>