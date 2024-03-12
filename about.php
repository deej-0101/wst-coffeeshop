<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hello, Coffee.</title>
</head>

    <body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="landingpage.php">
                <img src="img/logow.png" alt="hello coffee Logo" height="70">
            </a>
            <div class="d-flex justify-content-between" id="navbarNav">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                    <a class="nav-link" href="landingpage.php" style="color:rgb(255,255,255);">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color:rgb(255,255,255);">About</a>
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
                <a href="login.php" class="btn btn-outline-primary disabled" aria-disabled="true" style="color:rgb(255,255,255); border-color:rgb(101,67,33);">Log In</a>
                <a href="signup.php" class="btn btn-primary" style="background-color:rgb(101,67,33); border-color:rgb(101,67,33);">Sign Up</a>
            </div>
            
            
        </div>
    </nav>
    </header>
 
    <section id="about" class="about">
      <div class="container">
        <br><br>
        <div class="row content">
          <div class="col-lg-5">
          <h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 4rem; color:beige;">About Us</h1>
          <br>
          <p style="color: beige;">
              If you’re looking for a place to enjoy a nice cup of coffee while you study, then you can’t go wrong with <strong>Hello, coffee.</strong> 
              We have a wide selection of coffees and pastries to choose from. The coffee beans we use are all made with high-quality and locally-farmed coffee beans. 
              Our place is good for people who wants to hang out, study, or just want some peace. 
          </p>
          <!-- <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:beige;">Start your day with a delicious cup of coffee.</h4> -->
          </div>
          <div class="col-lg-7">
          <img src="img/coffeeshop.jpg" class="rounded mx-auto d-block" alt="cafe" style="max-width: 100%; border-radius:5px;">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <br><br><br><br>

    <section id="about-list" class="about-list">
      <div class="container">

        <div class="row" style="background-color:rgb(0,0,0,0.5); padding:30px;">
        <h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 2rem; color:beige; text-align: center;"> - Benefits and Features - </h1>
        <br><br><br>
          <div class="col-3 d-flex justify-content-center text-center">
            <div class="icon-bi mt-5 mt-lg-0">
                <i class="bi bi-receipt" style="font-size: 50px; color:rgb(140, 95, 50);"></i>
              <h5 style="color:beige;">Affordable price for high quality products</h5>
            </div>
          </div>

          <div class="col-3 d-flex justify-content-center text-center">
            <div class="icon-bi mt-5 mt-lg-0">
                <i class="bi bi-cup-hot" style="font-size: 50px; color:rgb(140, 95, 50);"></i>
              <h5  style="color:beige;">Wide selection of coffees and pastries</h5>
            </div>
          </div>
        
          <div class="col-3 d-flex justify-content-center text-center">
            <div class="icon-bi mt-5 mt-lg-0">
                <i class="bi bi-people" style="font-size: 50px; color:rgb(140, 95, 50);"></i>
              <h5  style="color:beige;">Area is spacious enough for everyone</h5>
            </div>
          </div>

          <div class="col-3 d-flex justify-content-center text-center">
            <div class="icon-bi mt-5 mt-lg-0">
                <i class="bi bi-wifi" style="font-size: 50px; color:rgb(140, 95, 50);"></i>
              <h5  style="color:beige;">Offers free Wi-Fi for all</h5>
            </div>
          </div>
        
          
          
        </div>

      </div>
    </section>


    <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary" style="color:rgb(255,255,255);">© 2024 Hello, Coffee. Inc</p>

    <!-- <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a> -->

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(255,255,255);">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(255,255,255);">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(255,255,255);">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(255,255,255);">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color:rgb(255,255,255);">About</a></li>
    </ul>
  </footer>
</div>
</body>
</html>