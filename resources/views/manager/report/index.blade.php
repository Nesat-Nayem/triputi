@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('manager.layout.index')

@section('content')


  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Reports List</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Reports List
            </li>
          </ol>
        </nav>
      </div>

      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <div class="search-field" style="border: 1px solid #000">
                  <form
                    class="d-flex align-items-center h-100"
                    method="get"
                  >
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <i
                          class="input-group-text border-0 mdi mdi-magnify"
                        ></i>
                      </div>
                      <input
                        type="text"
                        name="search"
                        class="form-control bg-transparent border-0"
                        placeholder="Search..."
                      />
                    </div>
                  </form>
                </div>

                <a href="/Driver/create-reports-driver">
                  <button
                    type="button"
                    class="btn btn-outline-danger btn-icon-text"
                  >
                    <i class="mdi mdi-plus btn-icon-prepend"></i> Add
                    Reports
                  </button>
                </a>
              </div>

              <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Report Nub*</th>
                    <th>Qty*</th>
                    <th>Owner Name*</th>
                    <th>Driver Name*</th>
                    <th>Will Take*</th>
                    <th>Particular Name*</th>
                    <th>Date*</th>
                    <th>Item Info*</th>
                    <th>Village*</th>
                    <th>Vihicle Number*</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $sumtotal = [];
                    ?>
                    @foreach ($reports as $key => $val)
                        
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$val->report_nub}}</td>
                    <td>{{$val->qty}}</td>
                    <td>{{$val->owner_name}}</td>
                    <td>{{$val->driver_name}}</td>
                    <td>{{$val->will_take}}</td>
                    <td>{{$val->particular_name}}</td>
                    <td>{{$val->date}}</td>
                    <td>{{$val->item_info}}</td>
                    <td>{{$val->village}}</td>
                    <td>{{$val->vihicle_number}}</td>
               

                    <?php 
                    $sumtotal[] = $val->total;
                
                ?>
                    {{-- <td>{{ $val->category ? $val->category : 'N/A' }}</td> --}}

                    <td>
                      @if($val->status == 'Y')
                      <div class="badge rounded-pill bg-success text-white">
                          Active
                      </div>
                  @else
                      <div class="badge rounded-pill bg-danger text-white">
                          Inactive
                      </div>
                  @endif
                  </td>
                    <td>
                      <div
                        class="btn-group"
                        role="group"
                        aria-label="Basic example"
                      >
                        <button
                        onclick="openmodel({{$val->id}})"
                          type="button"
                          class="btn btn-inverse-dark btn-icon mx-2"
                          title="View"
                          data-toggle="modal"
                          data-target="#viewModal"
                        >
                          <i class="mdi mdi-eye-circle"></i>
                        </button>

                        <a href="/Driver/reports-driver-edit/{{$val->id}}">
                          <button
                            type="button"
                            class="btn btn-inverse-dark btn-icon mx-2"
                            title="Edit"
                          >
                            <i class="mdi mdi-table-edit"></i>
                          </button>
                        </a>

                        <a href="/Driver/report-driver-delete/{{$val->id}}">
                          <button
                            type="button"
                            class="btn btn-inverse-danger btn-icon mx-2"
                            title="Delete"
                          >
                            <i class="mdi mdi-trash-can"></i>
                          </button>
                        </a>
                      </div>
                    </td>
                  </tr>
                  
                  @endforeach

                </tbody>
              </table>

              <div class="row mt-5 text-center">
                <div class="col-lg-12">
                  {{ $reports->links('pagination.custom') }}
                </div>
              </div>




   {{-- <!-- Grand Total Section -->
   <div class="mt-4">
    <div class="card bg-light p-3 text-center">
        <h4 class="font-weight-bold text-white">Grand Total: ₹ <span id="grandTotal"></span></h4>
    </div>
  </div> --}}

  <div class="mt-4">
    <div class="card bg-light p-3 text-center">
        <label for="filterDate" class="text-dark font-weight-bold">Select Date:</label>
        <input type="date" id="filterDate" class="form-control d-inline-block w-auto mx-2" onchange="filterReportsByDate()">
        <h4 class="font-weight-bold text-dark mt-3">Grand Total: ₹ <span id="grandTotal"><?php 
          print_r(array_sum($sumtotal));
        ?></span></h4>
    </div>
</div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- view modal -->
    <div
      class="modal fade"
      id="viewModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      style="display: none"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">
              View Details
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="contentid">
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
                <i class="mdi mdi-close-octagon menu-icon"></i> Close
            </button>
           
        </div>
        </div>
        
      </div>
      
    </div>

 

    




<script>
function filterReportsByDate() {
    let selectedDate = document.getElementById("filterDate").value; // Get selected date
    let grandTotalElement = document.getElementById("grandTotal"); // Grand Total element

    if (!selectedDate) {
        alert("Please select a date!");
        return;
    }

    $.ajax({
        url: '/admin/filter-reports-by-date',
        method: 'POST',
        data: {
            date: selectedDate,
            _token: '{{ csrf_token() }}' // Laravel ke liye CSRF token
        },
        success: function(response) {
          console.log(response);
            grandTotalElement.innerText = response; // Update grand total
        },
        error: function() {
            alert("Error fetching data. Please try again.");
        }
    });
}




       function openmodel(id) {
    // Make an AJAX request to fetch the booking details
    $.ajax({
        url: '/Driver/get-reports-driver-details/' + id,
        method: 'GET',
        success: function(response) {
            // Update the content of the div with id="contentid"
            $('#contentid').html(response);

            // Dynamically set the print URL for this invoice
            $('#printButton').attr('href', '/admin/reports-envoice/' + id);
        },
        error: function() {
            // Handle any AJAX error
            $('#contentid').html('<p>An error occurred. Please try again later.</p>');
        }
    });
}

    </script>


@endsection