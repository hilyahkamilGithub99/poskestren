

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/css/custom.css') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon-dashboard-master/assets/img/apple-icon.png') }}">
  <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Results
  </title>
  <style>
    body {
      font-family: 'Poppins';
    }
    html,body {
      width: 100%;
      height: 100%;
      margin: 0px;
      padding: 0px;
      background-color: white;
      overflow: hidden;
    
    }
  </style>
  <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Nucleo Icons -->
    <link href="{{ asset('argon-dashboard-master/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('argon-dashboard-master/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="path/to/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/43af13e25c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('argon-dashboard-master/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('argon-dashboard-master/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
  </head>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand fs-5" href="home.html">POSKESTREN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('santri.index') }}">SantriCare</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"  href="#">ResultCare</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('auth.login') }}">Logout</a>
            </li>
          
          </ul>
        </div>

      </div>
    </nav>

    @if($data != null)
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-color: #424345;">
                <div class="modal-header" style="background-color: #57585e;">
                    <h5 class="title-modal modal-title ms-3" id="santri_id" name="santri_id"></h5>
                    <div class="exits-icon">
                        <h6 class="text-light">
                            <i class="fa-solid fa-book fa-1x" data-bs-dismiss="modal" aria-label="Close"></i>
                        </h6>
                    </div>
                </div>
                <div class="modal-body">
                    Checked on  : <a id="created_at"></a>
                    <div class="announce">
                        <pre>
                          Weight             : <a id="weight" name="weight"></a> <br>
                          Blood Pressure     : <a id="blood_presure" name="blood_presure"></a><br>
                          Pulse              : <a id="pulse"></a> <br>
                          Body Temperature   : <a id="body_temprature"></a> <br>
                          Respiratory        : <a id="respiratory"></a> <br>
                          Complaints         : <a id="complaints"></a><br>
                          Physical Check     : <a id="physical_check"></a><br>
                          Medical Treatment  : <a id="treatment"></a><br>
                          Diagnoses          : <a id="diagnoses"></a> <br>
                          Therapy / Medicine : <a id="therapy"></a>
                                              <br>
                          Recommendation     : <a id="recomendation"></a>
                        </pre>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #e5dddd;">
                    <h6 class="under-t" style="color: #16161a; justify-content: start;">Handled by a VIP specialist: Quansom Hoover</h6>
                </div>
            </div>
        </div>
    </div>
@endif

    
    


      <!-- End Modal -->

      <!-- Result Section -->
      <div class="row mt-3" style="color: white;">
        <div class="col-lg-7 mx-auto">
          <div class="card-result card shadow p-3 bg-body-rounded" style="background-color: #212229; color: white;">
            <div class="card-header pb-0 p-3" style="background-color: #212229;">
              <div class="d-flex justify-content-between">
                <h6 class="mb-1 mt-1 ms-1 mb-2 fw-normal" style="color: white;">Result Care's</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center" style="border: none;">
                <tbody>
                  @foreach ($data as $item )
                  <tr>
                    <td class="w-30" style="border: none;">
                      <div class="d-flex px-1 py-2 align-items-center">
                        <div class="ms-1">
                          <h6 class="text-light text-sm mb-0"><i class="fa-solid fa-circle-user fa-2x"></i></h6>
                        </div>
                        <div class="ms-3">
                          <h6 class="text-light text-sm mb-0">{{ $item->santri->name }}</h6>
                          <h6 class="fw-normal text-sm mb-0" style="color: #a9a6a6;">{{ $item->weight }}, {{ $item->blood_presure }}, {{ $item ->pulse }}, {{ $item->body_temprature }}, {{ $item->respiratory }}</h6>
                        </div>
                        <div class="ms-10">
                          <h6 class="text-light text-sm mb-0" onclick="show('{{ $item->id }}')"><i class="fa-solid fa-chevron-right"></i></h6>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Result Section -->


      

        <!--   Core JS Files   -->
        <script src="{{ asset('argon-dashboard-master/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('argon-dashboard-master/assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('argon-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('argon-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('argon-dashboard-master/assets/js/plugins/chartjs.min.js') }}"></script>
        <script>
          
          function show(id) {
            var url = "{{ route('result.show', ':id') }}";
          url = url.replace(':id', id);

          $.get(url, function(response) {
              response = response.data;

              var date = new Date(response.created_at);
              var day = date.getDate();
              var month = date.getMonth() + 1;
              var year = date.getFullYear();
              var formattedDate = year + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;


              $('#created_at').text(formattedDate);

              $('#id').val(response.id);
              $('#exampleModalLabel').modal('show');
              // $('#santri_id').text(response.santri.name);
              $('#weight').text(response.weight);
              $('#santri_id').text(response.santri.name);
              // $('#created_at').text(response.created_at);
              $('#blood_presure').text(response.blood_presure);
              $('#pulse').text(response.pulse);
              $('#respiratory').text(response.respiratory);
              $('#complaints').text(response.complaints);
              $('#physical_check').text(response.physical_check);
              $('#treatment').text(response.treatment);
              $('#diagnoses').text(response.diagnoses);
              $('#therapy').text(response.therapy);
              $('#recomendation').text(response.recomendation);
              $('#body_temprature').text(response.body_temprature);
              $('.modal-backdrop').remove();
          });
      }





      function filter_data(){
                $('.filter_data').html('<div id="loading"></div>');
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                var brand = get_filter('brand');
                var size = get_filter('size');
                var color = get_filter('color');
                var cat = $('#cat').val();
                var orderby = $('.orderby').val();
                $.ajax({
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/products',
                        type: 'get',
                        data: {minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, size:size, orderby:orderby,color:color, cat:cat},
                        success:function(data){
                            $('.filter_data').html(data);
                        }
                });
            }

          
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('argon-dashboard-master/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>


</html>