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
                <a href="login.php" class="btn btn-outline-primary disabled" aria-disabled="true" style="color:rgb(255,255,255); border-color:rgb(101,67,33);">Log In</a>
                <a href="signup.php" class="btn btn-primary" style="background-color:rgb(101,67,33); border-color:rgb(101,67,33);">Sign Up</a>
            </div>
            
            
        </div>
    </nav>
    </header>

    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Log In</h5>
                <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                    Remember Me
                    </label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" style="background-color:rgb(101,67,33); border-color:rgb(101,67,33);">Continue</button>
                </div>
                <hr class="my-4">
                <div class="d-grid mb-2">
                    <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit" style="background-color: #ea4335; color:beige">
                    <i class="bi bi-google me-2"></i> Log in with Google
                    </button>
                </div>
                <div class="d-grid">
                    <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit" style="background-color: #3b5998; color:beige;">
                    <i class="bi bi-facebook me-2"></i> Log in with Facebook
                    </button>
                </div>
                <br>
                <div class="member text-center mt-1"> 
                    <span>Don't have an account?</span> <a class="text-decoration-none" href="signup.php">Sign up here</a> 
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>


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