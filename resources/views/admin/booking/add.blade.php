  @section('title', 'Dashboard - Laxmi Tirupati Transport')
  @extends('laoyout.admin')
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
                            <label for="phone" class="text-dark">Phone*</label>
                            <input
                              type="number"
                              class="form-control"
                              id="phone"
                              name="phone"
                              placeholder="+91"
                              value="{{ old('phone') }}"
                            />
                          </div>
                        </div>
                        

                  

                        {{-- <div id="itemsContainer"> --}}
                      
                          <div class="row item-group" id="itemsContainer">
                            <div class="col-lg-4 col-12">
                              <div class="form-group">
                                <label class="text-dark">Item Name*</label>
                                <input type="text" class="form-control" name="booking_items[item_name][]" placeholder="" />
                              </div>
                            </div>
                  
                            <div class="col-lg-4 col-12">
                              <div class="form-group">
                                <label class="text-dark">Per Piece Rate*</label>
                                <input type="text" class="form-control" name="booking_items[per_piece_rate][]" placeholder="" />
                              </div>
                            </div>
                  
                            <div class="col-lg-4 col-12">
                              <div class="form-group">
                                <label class="text-dark">Qty*</label>
                                <input type="number" class="form-control" name="booking_items[qty][]" placeholder="" />
                              </div>
                            </div>
                    
                        {{-- </div>  --}}

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
                              <label for="" class="text-dark">Receipt charge*</label>
                              <input
                                  type="number"
                                  class="form-control"
                                  name="receipt_charge"
                                  value="10"
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
                              placeholder=""
                            />
                          </div>
                        </div>

                        <div class="col-lg-4 col-12">
                          <div class="form-group">
                            <label for="" class="text-dark">Billed By</label>
                            <input
                              type="text"
                              class="form-control"
                              id="billed_by"
                              name="billed_by"
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
                  <button class="btn btn-danger mr-2">
                    <i class="mdi mdi-refresh"></i>Reset
                  </button>
                
                    <button type="button" class="btn btn-success" id="addItem">
                      + Add Item
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
              <input type="text" class="form-control" name="booking_items[item_name][]" placeholder="" />
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label class="text-dark">Per Piece Rate*</label>
              <input type="text" class="form-control" name="booking_items[per_piece_rate][]" placeholder="" />
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label class="text-dark">Qty*</label>
              <input type="number" class="form-control" name="booking_items[qty][]" placeholder="" />
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