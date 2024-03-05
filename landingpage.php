<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Hello, Coffee.</title>
</head>

    <body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="landingpage.php">
                <img src="img/logow.png" alt="hello coffee Logo" height="70" >
            </a>
            <div class="d-flex justify-content-between" id="navbarNav">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                    <a class="nav-link" href="landingpage.php" style="color:rgb(255,255,255);">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php" style="color:rgb(255,255,255);">About</a>
                    </li>   
                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color:rgb(255,255,255);">Menu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color:rgb(255,255,255);">Apps</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color:rgb(255,255,255); ">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="nav-links">
                <a href="login.php" class="btn btn-outline-primary" style="color:rgb(101,67,33); border-color:rgb(101,67,33); color:rgb(255,255,255)">Log In</a>
                <a href="signup.php" class="btn btn-primary" style="background-color:rgb(101,67,33); border-color:rgb(101,67,33);">Sign Up</a>
            </div>
            
        </div>
    </nav>
    </header>

    <br> <br> 
    
    <div class="container">
        <h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 5rem; color:beige;">Hello. Coffee?</h1>
        <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:beige;">Start your day with a delicious cup of coffee.</h4>
        <br><br>
        <div class="nav-links">
            <button class="btn btn-primary" type="button" style="background-color:rgb(101,67,33); border-color:rgb(101,67,33);">Order Now</button>
            <button type="button" class="btn btn-outline-primary" style="color:rgb(255,255,255); border-color:rgb(101,67,33);">Learn About Us</button>
        </div>
    </div>

    <br> <br> <br> <br>
 

    <div class="container" style="border: 4px solid rgb(101,67,33); border-radius: 5px; background-color: rgb(0,0,0, 0.7);">
        <h3 style="padding-top: 15px; text-align: center; font-family:Georgia; font-size:2rem; color:beige;"><strong>BEST SELLER</strong></h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="img/espresso.jpg" class="rounded mx-auto d-block" alt="Espresso Coffee" style="max-width: 200px; padding-top: 30px; padding-bottom: 30px;">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title" style="color:beige;">Espresso Coffee With Milk</h5>
                                <p class="card-text mb-0" style="color:beige;">PHP70.00 -<strong> Popular Now</strong></p> 
                                <br>
                                <p class="card-text mb-0" style="color:beige; display: inline-block;">ADD TO BASKET</p>
                                <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(101,67,33); width: 30px; height: 30px; border-color:goldenrod;">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="img/cappuccino.jpg" class="rounded mx-auto d-block" alt="Cappuccino Coffee" style="max-width: 200px; padding-top: 30px;padding-bottom: 30px;">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title"style="color:beige;">Cappuccino Coffee With Chocolate</h5>
                                <p class="card-text mb-0" style="color:beige;">PHP150.00</p>
                                <br>
                                <p class="card-text mb-0" style="color:beige; display: inline-block;">ADD TO BASKET</p>
                                <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(101,67,33); width: 30px; height: 30px; border-color:goldenrod;">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="img/latte.jpg" class="rounded mx-auto d-block" alt="Latte art Coffee" style="max-width: 200px; padding-top: 30px; padding-bottom: 30px;">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title" style="color:beige;">Latte art Coffee With Milk</h5>
                                <p class="card-text mb-0" style="color:beige;">PHP120.00</p>
                                <br>
                                <p class="card-text mb-0" style="color:beige; display: inline-block;">ADD TO BASKET</p>
                                <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(101,67,33); width: 30px; height: 30px; border-color:goldenrod;">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="opacity:0;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="opacity:0;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
     
    <br> <br> <br> <br>

    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary" style="color:rgb(214,195,126);">© 2024 Hello, Coffee. Inc</p>

    <!-- <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a> -->

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(214,195,126);">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(214,195,126);">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(214,195,126);">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(214,195,126);">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(214,195,126);">About</a></li>
    </ul>
  </footer>
</div>
</body>
</html>