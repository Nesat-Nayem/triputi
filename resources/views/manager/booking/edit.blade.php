@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('manager.layout.index')

@section('content')


 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Edit Bookings</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit Bookings
            </li>
          </ol>
        </nav>
      </div>

      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <form method="POST" enctype="multipart/form-data" action="{{ url('/manager/bookin-edit-manager/' . $booking->id) }}">
                @csrf
          <div class="card">
            <div class="card-body">
              
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            will Send*</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                            name="will_sand"
                            value="{{$booking->will_sand}}"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            will Take*</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                            placeholder=""
                               name="will_take"
                               value="{{$booking->will_take}}"
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark"> Date*</label>
                          <input
                            type="date"
                            class="form-control"
                            id=""
                            name="date"
                               value="{{$booking->date}}"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Item Name*</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                            placeholder=""
                                    name="item_name"
                               value="{{$booking->item_name}}"
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for=""  class="text-dark">
                            Category*</label
                          >
                          <select name="category" class="form-control" id="category_name">
                            <option value="" disabled>Select Service Category</option>
                            @php
                                $categories = DB::table('category')
                                                ->where('type', 'Area')
                                                ->where('status', 'Y')
                                                ->get();
                            @endphp
                            @foreach($categories as $category)
                                <option value="{{ $category->title }}" {{ $booking->category == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <?php $citys = DB::table('ares')->where('status', 'Y')->get(); ?>
                        <div class="form-group">
                          <label for="city" class="text-dark">City*</label>
                          <select class="form-control" name="city" >
                            @foreach ($citys as $val)
                              <option>{{ $val->city_name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      

                      <div class="col-lg-4 col-12">
                        <?php $areas = DB::table('ares')->where('status','Y')->get(); ?>
                        <div class="form-group">
                          <label for="" class="text-dark"> Area*</label>
                          <select class="form-control" name="area" id="area_name">
                            @foreach ($areas as $val)
                            
                            <option><?=$val->area_name ?></option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Pin Code*</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                            name="pincode"
                            placeholder=""
                            value="{{$booking->pincode}}"
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark"> Qty*</label>
                          <input
                            type="number"
                            class="form-control"
                            id=""
                            name="qty"
                            value="{{$booking->qty}}"

                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Transportation fare*</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id="amount"
                            value="{{$booking->transportation_fare}}"
                            name="transportation_fare"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Filled up*</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id=""
                            value="{{$booking->filled_up}}"
                            name="filled_up"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Receipt charge*</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id=""
                            value="{{$booking->receipt_charge}}"
                            name="receipt_charge"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            we attacked*</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id=""
                            value="{{$booking->we_attacked}}"
                            name="we_attacked"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">Total*</label>
                          <input
                            type="number"
                            class="form-control"
                            id=""
                            name="total"
                            value="{{$booking->total}}"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark"> Status*</label>
                          <select name="status" id="status" class="form-control" required>
                            <option value="" disabled>Select Status</option>
                            <option value="Y" {{ isset($booking) && $booking->status == 'Y' ? 'selected' : '' }}>Active</option>
                            <option value="N" {{ isset($booking) && $booking->status == 'N' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">
                  <i class="mdi mdi-content-save"></i> Submit
                </button>
                <button class="btn btn-danger">
                  <i class="mdi mdi-refresh"></i>Reset
                </button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Listen for change events on both select elements
            $('#category_name, #area_name').on('change', function() {
                // Get the selected values for city and area
                var category_name = $('#category_name').val();
                var area_id = $('#area_name').val();

                console.log('hello');
    
                // Check if both values are selected
                if (city_id && area_id) {
                    // Make the AJAX request to fetch the amount
                    $.ajax({
                        url: '{{ route("get-amount-by-city-area") }}', // Replace with your Laravel route
                        type: 'GET',
                        data: {
                            city_id: city_id,
                            area_id: area_id
                        },
                        success: function(response) {
                            // Check if the response contains the 'amount' key
                            if (response.amount !== undefined) {
                                $('#amount').val(response.amount); // Update the amount input field
                            } else {
                                alert('Amount data not found.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            alert('Error fetching amount data.');
                        }
                    });
                } else {
                    // Clear the amount field if either city or area is not selected
                    $('#amount').val('');
                }
            });
        });
    </script>
    


@endsection