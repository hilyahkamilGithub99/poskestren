
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon-dashboard-master') }}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('argon-dashboard-master') }}/assets/img/favicon.png">
  <title>
    POSKESTREN
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('argon-dashboard-master') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('argon-dashboard-master') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('argon-dashboard-master') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('argon-dashboard-master') }}/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ asset('argon-dashboard-master') }}/pages/dashboard.html">
        POSKESTREN
      </a>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
  <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-4 border-radius-lg" style="background-image: url('{{ asset('argon-dashboard-master/assets/img/login.png') }}'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-2"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome to Poskestren!</h1>
            <p class="text-lead text-white">Segera cek dan konsultasikan kesehatanmu disini!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">

            @if(session()->has("danger"))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('danger') }}

            </div>
            @endif
            @if(session()->has("warning"))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('warning') }}
           
            </div>
            @endif
            @if(session()->has("success"))                        
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}

            </div>
            @endif

            <div class="card-body">
              <form action="{{ route('auth.login.process') }}" method="POST" id="loginForm">
                @csrf
                <div class="mb-3">
                    <input type="text" name="cred" class="form-control" placeholder="Username" aria-label="Username">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                <div class="form-check form-check-info text-start">
                    <input class="form-check-input" type="checkbox" value="" id="showPassword" checked>
                    <label class="form-check-label" for="showPassword">
                        <a href="javascript:;" class="text-dark font-weight-bolder">Show Password</a>
                    </label>
                </div>
                <div class="text-center">
                    <button name="submit" type="submit" class="btn btn bg-gradient-dark w-100 my-4 mb-2">LOG IN</button>
                </div>
            </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-10">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company - Afkaaruna
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft Afkaaruna Project.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="{{ asset('argon-dashboard-master') }}/assets/js/core/popper.min.js"></script>
  <script src="{{ asset('argon-dashboard-master') }}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('argon-dashboard-master') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('argon-dashboard-master') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    document.getElementById('showPassword').addEventListener('change', function () {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('argon-dashboard-master') }}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>