@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('manager.layout.index')

@section('content')


 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Create Bookings</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Create Bookings
            </li>
          </ol>
        </nav>
      </div>

      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <form method="POST" enctype="multipart/form-data">
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
                            value="{{old('will_sand')}}"
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
                            value="{{old('will_take')}}"
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
                            value="{{old('item_name')}}"
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <?php $category = DB::table('category')->where('type','Area')->where('status','Y')->get(); ?>
                          <label for=""  class="text-dark">
                            Category*</label
                          >
                          <select name="category" class="form-control" id="">
                            @foreach ($category as $val)
                            
                            <option><?=$val->title ?></option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <?php $citys = DB::table('ares')->where('status','Y')->get(); ?>
                        <div class="form-group">
                          <label for="" class="text-dark"> City*</label>
                          <select class="form-control" name="city" id="city_name">
                            @foreach ($citys as $val)
                            
                            <option><?=$val->city_name ?></option>
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
                            value="{{old('qty')}}"
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
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark"> Status*</label>
                          <select name="status" class="form-control" id="">
                            <option value="Y">Active</option>
                            <option value="N">In Active</option>
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
        // Listen for change on the select box
        $('#city_name, #area_name').change(function() {
          console.log(';hgfhafd');
            var city_id = $('#city_name').val();   // Get selected city ID
            var area_id = $('#area_name').val();   // Get selected area ID

            // If both city and area are selected, send the AJAX request
            if (city_id && area_id) {
                $.ajax({
                    url: '{{ route("get-amount-by-city-area") }}', // Your Laravel route to handle the request
                    type: 'GET',
                    data: {
                        city_id: city_id,
                        area_id: area_id
                    },
                    success: function(response) {
                      console.log(response);
                        // Assuming the response returns the 'amount' field
                        $('#amount').val(response.amount);  // Set the amount in the input box
                    },
                    error: function() {
                        // Handle errors (e.g., if no data is found or there is a server error)
                        alert('Error fetching amount data.');
                    }
                });
            }
        });
    });
</script>

@endsection