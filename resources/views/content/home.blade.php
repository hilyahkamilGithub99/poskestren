<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/css/custom.css') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
   Home
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <!-- Nucleo Icons -->
  <link href="{{ asset('argon-dashboard-master/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('argon-dashboard-master/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/43af13e25c.js" crossorigin="anonymous"></script>
  <link href="{{ asset('argon-dashboard-master/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('argon-dashboard-master/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">

 
   <!-- Waves -->
   <div class="shape"></div>
   <!-- end wave -->
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand fs-5" href="#">POSKESTREN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('santri.index') }}">SantriCare</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('result.index') }}">ResultCare</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('auth.login') }}">Logout</a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
   
    <div class="container-fluid py-3 mt-4">
      <div class="row">
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4  ms-12">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold mb-1">TODAY'S CARE</p>
                    <h5 class="font-weight-bolder ">
                      @if ($formattedCountToday != null)
                        {{ $formattedCountToday }} Santri 's
                      @else
                        0
                      @endif
                    </h5>
                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon-heart">
                 <img src="{{ asset('argon-dashboard-master/assets/img/invited.png') }}" alt="icon" style=" height: 40px; width: 40px;">
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold mb-1">TOTAL Care</p>
                    <h5 class="font-weight-bolder">
                      @if ($formattedCount != null)
                      {{ $formattedCount }} Santri 's
                      @else
                      0
                      @endif
                      
                    </h5>
                  
                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon-heart">
                             <img src="{{ asset('argon-dashboard-master/assets/img/heartcirc-removebg-preview.png') }}" alt="icon" style="color: white; height: 40px; width: 40px;" >
                            </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

        
         <!-- Start 3d1 -->
         <div class="doctor-img">
         <img src="{{ asset('argon-dashboard-master/assets/img/3d1-removebg-preview.png') }}" alt="3d1" style="height: 230px; ">
        </div>
         <!-- End 3d1 -->
        <div class="row mt-6">
          <div class="col-lg-7 mx-auto">
            <div class="card ">
              <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between ">
                  <h6 class="mb-1 mt-2 ms-4 ">Result Care's</h6>
                  <a href="{{ route('result.index') }}">
                    <h6 class="mb-1 mt-2 ms-4" style="text-decoration: none;">See Details</h6>
                  </a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center ">
                  <tbody>
                    <tr>
                      <td class="w-30">
                        <div class="d-flex px-1 py-2 mt- align-items-center">
                          <div class="ms-3">
                            <h6 class="text-sm mb-0">No</h6>
                          </div>
                          <div class="ms-5">
                            <h6 class="text-sm mb-0">Name</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h6 class="text-sm mb-0">Medical Treatment</h6>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h6 class="text-sm mb-0">Result</h6>
                        </div>
                      </td>
                  @if ($data != null)
                  @php
                  $no = 1;
                @endphp
                  @foreach ($data as  $item)

                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-1 py-2 align-items-center">
                        <div class="ms-4">
                          <h6 class="text-sm mb-0">{{ $no++ }} </h6>
                        </div>
                        <div class="ms-5">
                          <h6 class="text-sm mb-0">{{ $item->santri->name }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <h6 class="text-sm mb-0">{{ $item->treatment }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <h6 class="text-sm mb-0">{{ $item->diagnoses }}</h6>
                      </div>
                    </td>
                   
                  </tr>
                  @endforeach

                   
                  @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>


                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Waves -->
      <div class="doc-shape">
        <!-- <img src="../assets/img/wrapshape.png" alt="shape" style="height: 700px; width: 100%; position: absolute; margin-top: 100px;" > -->
      </div>
     


   <!-- end wave -->
  <!--   Core JS Files   -->
  <script src="{{ asset('argon-dashboard-master/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/plugins/chartjs.min.j') }}s"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
 
  
  </script>
  <script>
    function reset(){

        $('#form')[0].reset();
        
    }
    
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('argon-dashboard-master/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>