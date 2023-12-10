<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('argon-dashboard-master')}}/assets/css/custom.css">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon-dashboard-master/assets/img/apple-icon.png') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->

  <title>
   SantriCare
  </title>
  <style>body {
    font-family: 'Poppins';
  }
  html,body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
  
  }

  .medicine-b  {
        display: inline-block;
        /* margin-right: 10px;  */
        /* margin: auto; */
        
    }

</style>
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

<body class="santricare">

 
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
              <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">SantriCare</a>
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
          <form id="form" method="POST" enctype="multipart/form-data">
        
              @csrf
                      <!-- Form side(Right) -->
                    <input type="text" id="id" name="id" hidden>
                    <div class="dropdown">
                      {{-- <select id="santri_id2" name="santri_id2" class="select2  mb-4" multiple="multiple" aria-label="Default select example" required></select> --}}
                      <select class="form-control" id="santri_id2" name="santri_id2" placeholder="Select Santri">
                        <option value="" disabled selected>Select Santri</option>
                        @foreach ($santri as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    
                    </div>
                    
                  </div> 
                  <div class="sefield">
                    <input type="text" placeholder="Weight" name="weight" id="weight">
                  </div>
                  <div class="head-form">
                  Vital Signs
                  </div>
                    <div class="sub">
                    <div>
                        <input type="text" placeholder="Blood Pressure" name="blood_presure" id="blood_presure">
                    </div>
                    <div>
                        <input type="text" placeholder="Pulse" id="pulse" name="pulse">
                    </div>
                    <div>
                        <input type="text" placeholder="Body Temperatue" id="body_temprature" name="body_temprature">
                    </div>
                    <div>
                        <input type="text" placeholder="Respiratory" name="respiratory" id="respiratory">
                    </div>
                    </div>
                  <div class="third-form">
                    <div>
                      <input type="text" placeholder="Complaints" name="complaints" id="complaints">
                    </div>
                    <div>
                      <input type="text" placeholder="Physical Check" name="physical_check" id="physical_check">
                    </div>
                    <div>
                      <input type="text" placeholder="Medical Treatment" name="treatment" id="treatment">
                    </div>
                    <div>
                      <input type="text" placeholder="Diagnoses" name="diagnoses" id="diagnoses">
                    </div>
                    <div>
                      <input type="text" placeholder="Therapy / Medicine" name="therapy" id="therapy">
                    </div>
                    <div>
                      <input type="text" placeholder="Recommendation" name="recomendation" id="recomendation">
                    </div>
                  </div>
                          <!-- Ends Form side(Right) -->

                  <!-- ends items left side -->
                  <div class="card-medicine">
                    
                  
                    <div class="search-box">
                      <input type="text" class="form-control" style="border: 1px solid #3a3a3a; color: #010101;" placeholder="Search Drugs by Name" id="searchObat" oninput="searchDrugs()" style="display: inline-block;"/>
                    </div>
                      
                

                  <div class="scrollable-tabs-container">
                    <ul>
                      @foreach ($obat as $item)
                      <li>
                        <a href="#" class="filter-link" data-type="{{ $item->type }}">{{ $item->type }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  
                      
                  @foreach ($obat as $data)
                  <div class="medicine-b selectable drugsContainer" data-type="{{ $data->type }}" data-price="{{ $data->price }}" id="drugsContainer">
                      <ul>
                          <li>
                            <a href="#" data-name="{{ $data->name }}" data-type="{{ $data->type }}" data-price="{{ $data->price }}" id="obat_id_{{ $data->id }}" class="obat-link">
                                  <svg width="60" height="60" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <rect width="70" height="70" fill="url(#pattern0)"/>
                                      <defs>
                                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                              <use xlink:href="#image0_24_45" transform="scale(0.0111111)"/>
                                          </pattern>
                                          <image id="image0_24_45" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEWElEQVR4nO2cTahWRRiAH++1e24qpAS5uQqGq1wY+LeoRNyIEJoFLhRqYYiJQhToRuVuCt0ErQRTMyJIRTAvXG4Lf8HKigqJQlCUFqKphNb1B9SJgffAx+U73znn+5nzzpx5YHYf53vn4T0z58y8cyASiUQikUgkEolEIs54Dngd2A2cAP4AbgHjwD3gBvAbcBTYBSwDBt2F5zf9wJvAN8AjwJRsd4FDwNKqO6KVPmADcLkNuVntB2BF1R3TxALg5y4Kntjs3TGLGjMJ+KDNIaJsuwOspqZj8X4HghvbU2CYGpEAIwXl/A3sA9YDS4AhYAB4FngReAXYCHwN/FfwmnuoieTRAjJ+At4CJpe49lTgPeBqgetvo+aS7wDvyPjdLvZZemfO2G+HkVXUVPIFYHYX/3MR8FeL/7stQ1GtJI/Jrd9thuSNMut/j1MjyaPyu14xlJPZ3r/UDMgaRV4mu1ifWNhizP4Rj0kUZPJEdrWI5TU8JFEoGblzrmXE8zmekSiVnLI5I6Z/KowpOMnIk03WG6QXS6uJB5JTjmTEtwPlDCh6uijCpowYD6OYxKNMTlmcEecvKCXxULLl+YxYr6OQAc+Gi4lr4c3itRu+qkg8zeTG/cmnTWK2u+tqSDyXnJYxNIvbli+oIAlAsuXljNh/RwGhSLa8rXXJNCTJloMZffiICvH56aIZz8jOiqp16dAy2bI2ox8PgGlUQIiS+4BfM/pyrIqAQpRsebdFf97AU8nzZMv/C+AzWcixr75VMUfWnJv155Jku1eSB6XU60lGSa2tGHXNtJwiSvu455XkqcCZnGsYx/VvNt5vW8TyfYfFOqWYXKAWrluSjUPZecnzEJiPIybJONqp5NMlJLuQXeQO3YpDPuzwZWQKcLINyWmz51OqeMn60uWQsSCnELBXmWx6mNlFMnmkZJVqR/TlzMTnHEk2XZSt8vl/Q05AL+UMF6e7KLkbslVK7s85/TSeI/lUDyR3IlulZKSSPq/DsyuQbNqQrVYychwsr7PHZfZOmeFIsikhW7Xk6SWOm9kC7o+BT2Qr3jhuw75KRs5tGI/abl83I/YokGdKtr2yc22ZC5zVnMkpRc/3aWuPgZsFfqdCsuVPBdJMj5oaycj3LkyAbazqMXki9xVIMSFncsq4AjEm5ExOKTKh+NLGtEq2XFQgyIQuGalfqFqSCV1y3qFGH9qoxomvGcsVyDIhZ3LKoNRXVC3NhJrJjRxSIM6EmsmNLFUgz4ScyY18p0CiCTWTG1mhQKQJOZPLbmnFTO4Cs+SrXFWLNaFmciOrMw43Rsk9YLsCyWMhTHxFGJbtoiokj4Q6XLR6vr7hWPIBlwWH2ibI8w4EPwS2UHP65bvO93ok+bzLSnsfeAH4tMTngk1Os4fa17ksAPcNW0b2vry2Pykp91/gK2Cl6yNmvjMTWCOlWkflVJOtFbki22RnZIKz32d+Vc5eRyKRSCQSiUQikUgEB/wP8Ckg7dUSCsQAAAAASUVORK5CYII="/>
                                      </defs>
                                  </svg>
                              </a>
                              <input type="checkbox" class="obat-checkbox" id="obat_checkbox_{{ $data->id }}" name="obat_id[]" value="{{ $data->id }}" style="display: none;">
              
                              <div class="text-title">
                                  <p>{{ $data->name }}</p>
                              </div>
                          </li>
                      </ul>
                  </div>
              @endforeach
                        
                      </div>
                      </div>
                        <div class="total-items">
                          <h6 class="totals">Total Items: <span id="totalItems">0</span></h6>
                          <hr>
                          <h6 class="totals-twice">Total Payable: <span id="totalPayable">0.000</span></h6>
                        </div>
                      
                    <div class="button-option">
                      <ul>
                        <li>
                        <a href="#" onclick="reset()">Cancel</a>
                        </li>
                        <li>
                        <a href="#">Hold</a>
                        </li>
                        <li>
                        <a href="#"  onclick="create()">Payment</a>
                        </li>
                      </ul>
                    </div>
                    </div>
                    <!-- ends items left side -->

                  <!-- Modal strt -->
                    <div class="modal fade" id="modal_form" tabindex="-1" aria-labelledby="modal_formLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" style="width: 560px; ">
                        <div class="modal-content" style="background-color: #FFFFFF;" >
                          <div class="modal-header" style="background-color: #212229;" >
                            <h5 class="modal-title w-100 text-center" id="modal_formLabel">Payment</h5>
                          </div>
                          <div class="modal-body">
                            <form id="form" method="POST">
                              @csrf
                              <div class="mb-4">
                                <label for="recipient-name" class="col-form-label" style="color: #000;">Santri</label>
                              
                              </div>
                              <div class="mb-4"> 
                                <label for="recipient-name" class="col-form-label" style="color: #000;">Total Payable Amount</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                              </div>
                              <div class="mb-4">
                                <label for="recipient-name" class="col-form-label" style="color: #000;">Total Purchased Items</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                              </div>
                              <div class="mb-4">
                                <label for="recipient-name" class="col-form-label" style="color: #000;">Paid By :</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                              </div>
                              <div class="mb-4">
                                <label for="recipient-name" class="col-form-label" style="color: #000;">Paid Ammount :</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                              </div>
                            
                        <!-- Right Side -->
                        <div class="beside-form">
                          <div class="field ">
                            
                           
                            <input type="text" id="pembayaran_id" name="pembayaran_id" hidden>
                        
                              {{-- <select id="santri_id" name="santri_id" class="select2 form-select mb-4" multiple="multiple" aria-label="Default select example" required></select> --}}
                          
                              <select class="form-control" id="santri_id" name="santri_id" placeholder="Select Santri">
                                <option value="" disabled selected>Select Santri</option>
                                @foreach ($santri as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <div class="ammount">
                              <input type="text" class="form-control mb-4" id="total_payment_show" name="total_payment_show" >
                              <input type="text" class="form-control mb-4" id="total_payment" name="total_payment" hidden>
                              </div>
                              <div class="purchasing">
                                <input type="text" class="form-control mb-5 " id="total_purchase_show"   name="total_purchase_show" >
                              <input type="text" class="form-control mb-5 " id="total_purchase"   name="total_purchase" hidden>
                            </div>

                            {{-- <select id="paid_by" name="paid_by" class="select2 form-select mb-4" multiple="multiple" aria-label="Default select example" required></select> --}}
                            <select class="form-control" id="paid_by" name="paid_by" placeholder="Select Santri">
                              <option value="" disabled selected>Santri's Saving</option>
                              {{-- @foreach ($user as $item) --}}
                                  <option value="cash">Cash</option>
                                  <option value="saving">Saving</option>
                              {{-- @endforeach --}}
                          </select>
                            <div class="paid">
                              <input type="text" class="form-control" id="paid_amount" name="paid_amount" placeholder="0">
                            </div>

                          </div>
                        </div>
                        <div class="tap-in">
                        <button type="submit" class="btn btn-secondary" id="btnSave">Paid</button>    
                      </div>
                  
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- Modal ENDS -->


 
 <div class="doc-shape"></div>



   <!-- end wave -->
  <!--   Core JS Files   -->
  <script src="{{ asset('argon-dashboard-master/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon-dashboard-master/assets/js/plugins/chartjs.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <script>
    $(document).ready(function () {
        $('.obat-link').on('click', function (e) {
            e.preventDefault();
            var checkboxId = $(this).attr('id').replace('obat_id_', '');
            var checkbox = $('#obat_checkbox_' + checkboxId);
            checkbox.prop('checked', !checkbox.prop('checked'));
        });
    });

    function searchDrugs() {
        var input, filter, a, i, txtValue;
        input = document.getElementById("searchObat");
        filter = input.value.toUpperCase();
        a = document.getElementsByClassName("obat-link");

        for (i = 0; i < a.length; i++) {
            txtValue = a[i].getAttribute("data-name").toUpperCase();

            if (txtValue.indexOf(filter) > -1) {
                a[i].parentNode.style.display = "inline";
            } else {
                a[i].parentNode.style.display = "none";
            }
        }
    }


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

    // document.getElementById("obat_id_{{ $data->id }}").addEventListener("click", function(event) {
    //     event.preventDefault(); 
    //     var checkbox = document.getElementById("obat_checkbox_{{ $data->id }}");
    //     checkbox.style.display = checkbox.style.display === "none" ? "block" : "none"; // Toggle checkbox visibility
    // });
</script>

  <script>
    function show(anything){
      document.querySelector('.textBox').value = anything;
    }

    let dropdown = document.querySelector('.dropdown');
    dropdown.onclick = function(){
      dropdown.classList.toggle('active');
    }
  </script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var medicineItems = document.querySelectorAll('.selectable');
    medicineItems.forEach(function (item) {
      item.addEventListener('click', function () {
        item.classList.toggle('selected');

        updateTotals();
      });
    });
    function updateTotals() {
      var selectedItems = document.querySelectorAll('.selectable.selected');
      var totalItems = selectedItems.length;
      var totalPayable = calculateTotalPayable(selectedItems);

      document.getElementById('totalItems').innerText = totalItems;
      document.getElementById('totalPayable').innerText = 'Rp' + totalPayable.toFixed(3);
    }
    function calculateTotalPayable(selectedItems) {
      var total = 0;
      selectedItems.forEach(function (item) {
        var price = parseFloat(item.getAttribute('data-price'));
        if (!isNaN(price)) {
          total += price;
        }
      });
      return total;
    }
  });
</script>

 
<script>
    function create(){
        submit_method = 'create';

        // $('#id').val('');

        // $('#form')[0].reset();

        $('#modal_form').modal('show');
        $('.modal-title').text('Payemnt');
        var totalPayable = parseFloat(document.getElementById('totalPayable').innerText.replace('Rp', ''));
        $('#total_payment_show').val(totalPayable).attr('disabled',true);

        var totalItems = parseInt(document.getElementById('totalItems').innerText);
        $('#total_purchase_show').val(totalItems).attr('disabled', true);
        var totalPayable = parseFloat(document.getElementById('totalPayable').innerText.replace('Rp', ''));
        $('#total_payment').val(totalPayable);

        var totalItems = parseInt(document.getElementById('totalItems').innerText);
        $('#total_purchase').val(totalItems);

        $('#btnSave').text('Paid');
        $('#btnSave').attr('disabled', false);
    }

    function reset(){

        $('#form')[0].reset();
        $('#totalPayable').text('');
        $('#totalItems').text('');
        $('#total_payment').val('');
        $('#total_purchase').val('');
        $('#santri_id2').val(null).trigger('change');
        $('#santri_id').val(null).trigger('change');
        $('#paid_by').val(null).trigger('change');
        $('#btnSave').text('Paid');
        $('#btnSave').attr('disabled', false);
    }


    function ajaxSelect2Initiator(elm, modal, url, limit = false) {
            return $('#' + elm).select2({
                width: '100%',
                maximumSelectionLength: limit,
                dropdownParent: modal ? $(this).parent() : '',
                ajax: {
                    url: url,
                    dataType: 'json',
                    type: "GET",
                    delay: 500,
                    quietMillis: 500,
                    data: function(term) {
                        searchData = term.term;
                        return {
                            term: term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: $.map(response, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });
        }

        function ajaxSelect2Initiator2(elm, modal, url, limit = false) {
            return $('#' + elm).select2({
                width: '100%',
                maximumSelectionLength: limit,
                dropdownParent: modal ? $(this).parent() : '',
                ajax: {
                    url: url,
                    dataType: 'json',
                    type: "GET",
                    delay: 500,
                    quietMillis: 500,
                    data: function(term) {
                        searchData = term.term;
                        return {
                            term: term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: $.map(response, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });
        }



    // ajaxSelect2Initiator('santri_id', false, `{{ route('santri.select2') }}`);
    // ajaxSelect2Initiator('paid_by', false, `{{ route('santri.select2') }}`);
    // ajaxSelect2Initiator('santri_id2', false, `{{ route('santri.select2') }}`);

    function submit() {
        var totalItems = parseInt(document.getElementById('totalItems').innerText);
        var totalPayable = parseFloat(document.getElementById('totalPayable').innerText.replace('Rp', ''));
        var id          = $('#id').val();
        var permbayaran_id          = $('#pembayaran_id').val();
        var sanri_id        = $('#santri_id').val();
        var santri_id2        = $('#santri_id2').val();
        var weight        = $('#weight').val();
        var blood_presure        = $('#blood_presure').val();
        var pulse        = $('#pulse').val();
        var body_temprature        = $('#body_temprature').val();
        var respiratory        = $('#respiratory').val();
        var complaints        = $('#complaints').val();
        var physical_check        = $('#physical_check').val();
        var treatment        = $('#treatment').val();
        var diagnoses        = $('#diagnoses').val();
        var therapy        = $('#therapy').val();
        var recomendation        = $('#recomendation').val();
        var obat_id        = $('#obat_id').val();
        
        var total_payment       = $('#total_payment').val();
        var total_purchase      = $('#total_purchase').val();
        var paid_by      = $('#paid_by').val();
        var paid_amount     = $('#paid_amount').val();

        if (paid_amount < total_payment) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'ERROR !',
            text: 'Paid amount must be greater than or equal to total payment.',
            showConfirmButton: false,
            timer: 2000
        });
        $('#btnSave').text('Simpan');
        $('#btnSave').attr('disabled', false);
        return; 
    }

        var url = "{{ route('santri.store') }}";

    
        $('#btnSave').text('Menyimpan...');
        $('#btnSave').attr('disabled', true);
        console.log("Submitting data:", id, sanri_id, total_payment, total_purchase, paid_by, paid_amount);

        $.ajax({
            url: url,
            type: submit_method == 'create' ? 'POST' : 'PUT',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                santri_id: santri_id,
                pembayaran_id:pembayaran_id,
                total_payment : total_payment,
                total_purchase: total_purchase,
                paid_by : paid_by ,
                paid_amount : paid_amount ,
                santri_id2 : santri_id2,
                weight :weight,
                blood_presure : blood_presure,
                pulse : pulse,
                body_temprature : body_temprature,
                respiratory : respiratory,
                complaints :complaints,
                physical_check : physical_check,
                treatment : treatment,
                diagnoses : diagnoses,
                therapy : therapy,
                recomendation : recomendation,
                // obat_id : obat_id,
                obat_id: selectedObats,

            },
            success: function (data) {
                if(data.status) {
                    $('#modal_form').modal('hide');
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    window.location.reload();


                    $('#btnSave').text('Simpan');
                    $('#btnSave').attr('disabled', false);
                }
                else{
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                
                $('#btnSave').text('Simpan');
                $('#btnSave').attr('disabled',false);
            }, 
            error: function(data){
              console.log(data);
                var error_message = "";
                error_message += " ";
                
                $.each( data.responseJSON.errors, function( key, value ) {
                    error_message +=" "+value+" ";
                });

                error_message +=" ";
                Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'ERROR !',
                        text: error_message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                $('#btnSave').text('Simpan');
                $('#btnSave').attr('disabled', false);
            },
        });
    }

    



    $(document).ready(function () {
        $('.filter-link').on('click', function (e) {
            e.preventDefault();
            var selectedType = $(this).data('type');
            
            // Hide all medicine items
            $('.medicine-b').hide();
            
            // Show only items of the selected type
            $('.medicine-b[data-type="' + selectedType + '"]').show();
        });
    });

</script>




  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('argon-dashboard-master/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>