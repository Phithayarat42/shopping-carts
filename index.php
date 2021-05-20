<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!--------- css --------->
    <style>
      .btn-info
      {
        background: #4d9f9e;
        color: #fff;
      }
      .h3-p{
        color: #4d9f9e;
      }

    </style>
</head>
<body>
    <br>
    <div class="text-center">
        <h1 class="h3-p">All Products</h1>
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
        <br>
        <!--row 2-->
        <div class="row">
            <!--product 5-->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/5.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Red bouquet</h5>
                            <p class="card-text">Price: THB. 699</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Red bouquet">
                            <input type="hidden" name="Price" value="699">
                        </div>
                    </div>
                </form>            
            </div>
            <!--product 6-->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/6.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pinky bouquet</h5>
                            <p class="card-text">Price: THB. 389</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pinky bouquet">
                            <input type="hidden" name="Price" value="389">
                        </div>
                    </div>
                </form>            
            </div>
            <!--product 7-->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/7.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cute bouquet</h5>
                            <p class="card-text">Price: THB. 599</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Cute bouquet">
                            <input type="hidden" name="Price" value="599">
                        </div>
                    </div>
                </form>            
            </div>
             <!--product 8-->
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/8.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Minimal bouquet</h5>
                            <p class="card-text">Price: THB. 439</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Minimal bouquet">
                            <input type="hidden" name="Price" value="439">
                        </div>
                    </div>
                </form>            
            </div>
        </div>
        <br><br>
    </div>
</body>
</html>