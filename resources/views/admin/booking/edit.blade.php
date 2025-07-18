@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('laoyout.admin')
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
                          <label for="" class="text-dark">
                            Phone*</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                            placeholder=""
                               name="phone"
                               value="{{$booking->phone}}"
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
                          <div class="col-12">
                            @foreach(json_decode($booking->item_name, true) ?? [] as $key => $item)
                            <?php $selected = 'DeleteMY-'.$key; ?>
                            <div class="row item-group {{ $selected }}" id="itemsContainer">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label class="text-dark">Item Name*</label>
                                        <input type="text" class="form-control" name="booking_items[item_name][{{ $key }}]" value="{{ $item['item_name'] }}" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label class="text-dark">Per Piece Rate*</label>
                                        <input type="text" class="form-control" name="booking_items[per_piece_rate][{{ $key }}]" value="{{ $item['per_piece_rate'] }}" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label class="text-dark">Quantity*</label>
                                        <input type="text" class="form-control" name="booking_items[qty][{{ $key }}]" value="{{ $item['qty'] }}"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div onclick="document.querySelector('.{{ $selected }}').remove();">
                                        <button type="button" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                 </div>     

                    {{-- </div>  --}}

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
                          readonly
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
                            id="total"
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

    {{-- add--itemas --}}

<script>

  

  $(document).ready(function () {
    $("#addItem").click(function () {
      var newItem = `
        <div class="row item-group">
          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label class="text-dark">Item Name*</label>
              <input type="text" class="form-control" name="item_name[]" placeholder="" />
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label class="text-dark">Per Piece Rate*</label>
              <input type="text" class="form-control" name="per_piece_rate[]" placeholder="" />
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label class="text-dark">Qty*</label>
              <input type="number" class="form-control" name="qty[]" placeholder="" />
            </div>
          </div>

          <button type="button" class="btn btn-danger mb-3 removeItem">Remove</button>
        </div>
      `;

      $("#itemsContainer").append(newItem);
    });

    // Remove Item Button Functionality
    $(document).on("click", ".removeItem", function () {
      $(this).closest(".item-group").remove();
    });
  });
</script>



    <script type="text/javascript">
        $(document).ready(function() {
            // Listen for change events on both select elements
            $('#category_name, #area_name').on('change', function() {
                // Get the selected values for city and area
                var category_name = $('#category_name').val();
                var area_id = $('#area_name').val();

    
                // Check if both values are selected
                if (category_name && area_id) {
                    // Make the AJAX request to fetch the amount
                    $.ajax({
                        url: '{{ route("get-amount-by-city-area") }}', // Replace with your Laravel route
                        type: 'GET',
                        data: {
                            category_name: category_name,
                            area_id: area_id
                        },
                        success: function(response) {
                            // Check if the response contains the 'amount' key
                            if (response.amount !== undefined) {
                                $('#amount').val(response.amount); // Update the amount input field
                            } else {
                                alert('Amount data not found.');
                            }

                console.log(response);

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
    
    

<!--caluction    -->
<script type="text/javascript">
    $(document).ready(function () {
        // Function to calculate the total
        
        function calculateTotal() {
            // Get the values of all relevant fields
            var transportationFare = parseFloat($('#amount').val()) || 0;
            var filledUp = parseFloat($('[name="filled_up"]').val()) || 0;
            var receiptCharge = parseFloat($('[name="receipt_charge"]').val()) || 0;
            var weAttacked = parseFloat($('[name="we_attacked"]').val()) || 0;

            // Calculate the total
            var total = transportationFare + filledUp + receiptCharge + weAttacked;

            // Update the total field
         $('[name="total"]').val(total.toFixed(2)); // Display with two decimal places
        }

        // Add event listeners for all relevant fields
        $('#amount, [name="filled_up"], [name="receipt_charge"], [name="we_attacked"]').on('input', function () {
            calculateTotal();
        });

        // Initial calculation on page load (in case values are pre-filled)
        calculateTotal();
    });
</script>

@endsection