<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LoveLobby</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/profile.css" />

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>

    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom-2">
    <div class="container-fluid">
        <img src="/img/Lovelobbyy.png" alt="img" class="lovelobby-img mx-3">
        <h2 class="lovelobby-text mt-2">Love<span class="lobby">Lobby</span></h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
            <div class="nav-item">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4 mt-2">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
                </ul>
            </div>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile-pic">
                    <img src="/img/notnot.jpg" alt="Profile Picture">
                </div>
            <!-- You can also use icon as follows: -->
            <!--  <i class="fas fa-user"></i> -->
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="userprofile"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i>Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="LoveLobby"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- account settings -->
    <section class="vh-100" style="background-color: white; padding-bottom: 110px;">
  <div class="container-fluid h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom-2 text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; height: 499px;">
              <img src="/img/notnot.jpg"
                alt="Avatar" class="profile-pic-account img-fluid my-5" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;" />
              <h5>Notnot</h5>
              <p>Daniel Padilla nga pala</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-5">
                <h6>Profile Details</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>Username</h6>
                    <p class="text-muted">Notnot<i class="fas fa-edit edit-icon mx-2" data-toggle="tooltip" data-placement="top" title="Edit Username"></i></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">info@example.com<i class="fas fa-edit edit-icon mx-2" data-toggle="tooltip" data-placement="top" title="Edit Email"></i></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Age</h6>
                    <p class="text-muted">18 Years Old<i class="fas fa-edit edit-icon mx-2" data-toggle="tooltip" data-placement="top" title="Edit Age"></i></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Gender</h6>
                    <p class="text-muted">Male</p>
                  </div>
                </div>
                <h6>Interests</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-2 mb-3">
                    <h6 class="interest-tags">Valorant</h6>
                  </div>
                  <div class="col-4 mb-3">
                    <h6 class="interest-tags">League of Legends</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <footer class="gradient-custom-2 text-light text-center py-2 ">
        <p style>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    

        
    </body>
</html>
