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
          <div class="col-lg-6">
          <h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 5rem; color:beige;">About Us</h1>
            <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:beige;">Start your day with a delicious cup of coffee.</h4>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About List Section ======= -->
    <section id="about-list" class="about-list">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-bi mt-5 mt-lg-0">
                <i class="bi bi-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("img/bg2.jpg"); background-size:contain; background-repeat:no-repeat;'></div>
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