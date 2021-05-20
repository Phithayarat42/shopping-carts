<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<!--------- css --------->
    <style>
      .jumbotron
      {
        background: #dbf4f3; 
      }
      .btn-cart
      {
        background: #4d9f9e;
        color: #fff;
      }
      .btn-info
      {
        background: #4d9f9e;
        color: #fff;
      }

    </style>
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4">Welcome to<br>Flower Store</h1>
        <p class="lead">Our shop has many types of flowers for you to choose from.</p>
        <a class="btn btn-cart" href="index.php" role="button">Shopping Now</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img src="images/fw.png" class="card-img-top">
                </div>         
            </div>
            <div class="col-lg-4">
                <div>
                    <img src="images/flowers.png" class="card-img-top">
                </div>         
            </div>
            <div class="col-lg-4">
                <div>
                    <img src="images/fw.png" class="card-img-top">
                </div>         
            </div>
        </div>
    </div>
     <!--------- title --------->
     <div>
        <p class="text-center">Related Product</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!--product 1-->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/1.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sunflowers bouquet</h5>
                            <p class="card-text">Price: THB. 299</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Sunflowers bouquet">
                            <input type="hidden" name="Price" value="299">
                        </div>
                    </div>
                </form>            
            </div>
            <!--product 2-->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/2.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Puple tulip bouquet</h5>
                            <p class="card-text">Price: THB. 599</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Puple tulip bouquet">
                            <input type="hidden" name="Price" value="599">
                        </div>
                    </div>
                </form>            
            </div>
            <!--product 3-->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/3.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pink tulip bouquet</h5>
                            <p class="card-text">Price: THB. 399</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pink tulip bouquet">
                            <input type="hidden" name="Price" value="399">
                        </div>
                    </div>
                </form>            
            </div>
             <!--product 4-->
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/4.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cosmos bouquet</h5>
                            <p class="card-text">Price: THB. 459</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Cosmos bouquet">
                            <input type="hidden" name="Price" value="459">
                        </div>
                    </div>
                </form>            
            </div>
        </div>
        </div>
    </div>
    <br><br>
</body>
</html>
