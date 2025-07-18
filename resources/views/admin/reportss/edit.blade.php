@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('laoyout.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Create Reports</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Reports</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <?php $rand = rand(); ?>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">

                                       <!-- Report Number -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Report Number*</label>
        <input type="text" class="form-control @error('report_nub') is-invalid @enderror" 
               name="report_nub" value="{{ $reports->report_nub }}">
        @error('report_nub')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Qty Number -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Qty*</label>
        <input type="number" class="form-control @error('qty') is-invalid @enderror" 
               name="qty" value="{{ $reports->qty }}">
        @error('qty')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Owner Name -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Owner Name*</label>
        <input type="text" class="form-control @error('owner_name') is-invalid @enderror" 
               name="owner_name" value="{{ $reports->owner_name }}">
        @error('owner_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Driver Name -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Driver Name*</label>
        <input type="text" class="form-control @error('driver_name') is-invalid @enderror" 
               name="driver_name" value="{{ $reports->driver_name }}">
        @error('driver_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

                                        <!-- Driver Name -->
                                        <div class="col-lg-4 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Vehicle Number*</label>
                                                <input type="text" class="form-control @error('vihicle_number') is-invalid @enderror" 
                                                       name="vihicle_number" value="{{ $reports->vihicle_number }}">
                                                
                                                <!-- Validation Error Message (Inside the form-group) -->
                                                @error('vihicle_number')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        

                                    
<!-- Will Take -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Will Take*</label>
        <input type="text" class="form-control @error('will_take') is-invalid @enderror" 
               name="will_take" value="{{ $reports->will_take }}">
        @error('will_take')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Item Info -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Item Info*</label>
        <input type="text" class="form-control @error('item_info') is-invalid @enderror" 
               name="item_info" value="{{ $reports->item_info }}">
        @error('item_info')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>



<!-- Particular Name -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Particular Name*</label>
        <input type="text" class="form-control @error('particular_name') is-invalid @enderror" 
               name="particular_name" value="{{ old('particular_name', $reports->particular_name ?? '') }}">
        @error('particular_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Date -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Date*</label>
        <input type="date" class="form-control @error('date') is-invalid @enderror" 
               name="date" value="{{ old('date', $reports->date ?? '') }}">
        @error('date')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Village -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Village*</label>
        <input type="text" class="form-control @error('village') is-invalid @enderror" 
               name="village" value="{{ $reports->village }}">
        @error('village')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Transport Fare -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Transport Fare*</label>
        <input type="number" class="form-control @error('transport_fare') is-invalid @enderror" 
               name="transport_fare" id="transport_fare" value="{{ $reports->transport_fare }}">
        @error('transport_fare')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>


                                   <!-- Filling Charge -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Filling Charge*</label>
        <input type="number" class="form-control @error('filling_charge') is-invalid @enderror" 
               name="filling_charge" value="{{ $reports->filling_charge }}">
        @error('filling_charge')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Receipt Charge -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Receipt Charge*</label>
        <input type="number" class="form-control @error('receipt_charge') is-invalid @enderror" 
               name="receipt_charge" value="{{ $reports->receipt_charge }}">
        @error('receipt_charge')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Commission A -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Commission A*</label>
        <input type="number" class="form-control @error('commission_a') is-invalid @enderror" 
               name="commission_a" value="{{ $reports->commission_a }}">
        @error('commission_a')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Market Hamali Charge B -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Market Hamali Charge B*</label>
        <input type="number" class="form-control @error('market_hamali_charge_b') is-invalid @enderror" 
               name="market_hamali_charge_b" value="{{ $reports->market_hamali_charge_b}}">
        @error('market_hamali_charge_b')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Commission Taken C -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Commission Taken C*</label>
        <input type="number" class="form-control @error('commission_taken_c') is-invalid @enderror" 
               name="commission_taken_c" value="{{ $reports->commission_taken_c }}">
        @error('commission_taken_c')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Advance Commission -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Advance Commission*</label>
        <input type="number" class="form-control @error('advance_commission') is-invalid @enderror" 
               name="advance_commission" value="{{ $reports->advance_commission }}">
        @error('advance_commission')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Remaining Commission -->
<div class="col-lg-4 col-12">
    <div class="form-group">
        <label class="text-dark">Remaining Commission*</label>
        <input type="number" class="form-control @error('remaring_commission') is-invalid @enderror" 
               name="remaring_commission" value="{{ $reports->remaring_commission }}">
        @error('remaring_commission')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>


                                        <!-- Total -->
                                        <div class="col-lg-4 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Total*</label>
                                                <input type="number" class="form-control" name="total" id="total">
                                            </div>
                                        </div>

                                        <!-- Status -->
                                        <div class="col-lg-4 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Status*</label>
                                                <select name="status" class="form-control">
                                                    <option value="Y" {{ $reports->status == 'Y' ? 'selected' : '' }}>Active</option>
                                                    <option value="N" {{ $reports->status == 'N' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                            <!-- Add More Button -->



{{--                           
                            <div id="dynamic-fields"></div> --}}

                            
                            {{-- <!-- Submit & Reset Buttons -->
                            <button type="button" id="add-more" class="btn btn-success">
                                <i class="mdi mdi-plus"></i> Add More
                            </button> --}}
                            <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i> Submit</button>
                            <button type="reset" class="btn btn-danger"><i class="mdi mdi-refresh"></i> Reset</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   
    
    <!-- Auto Calculate Total -->
    <script>
        $(document).ready(function () {
            function calculateTotal() {
                var transportFare = parseFloat($('[name="transport_fare"]').val()) || 0;
                var fillingCharge = parseFloat($('[name="filling_charge"]').val()) || 0;
                var receiptCharge = parseFloat($('[name="receipt_charge"]').val()) || 0;
                var commissionA = parseFloat($('[name="commission_a"]').val()) || 0;
                var marketHamaliChargeB = parseFloat($('[name="market_hamali_charge_b"]').val()) || 0;
                var commissionTakenC = parseFloat($('[name="commission_taken_c"]').val()) || 0;
                var advanceCommission = parseFloat($('[name="advance_commission"]').val()) || 0;
                var remainingCommission = parseFloat($('[name="remaring_commission"]').val()) || 0; 
    
                // कुल योग की गणना करें
                var total = transportFare + fillingCharge + receiptCharge + commissionA + marketHamaliChargeB + commissionTakenC + advanceCommission + remainingCommission;
    
                // टोटल इनपुट फील्ड में सेट करें
                $('#total').val(total.toFixed(2));
            }
    
            // जब भी किसी इनपुट वैल्यू में बदलाव हो, टोटल अपडेट करें
            $('[name="transport_fare"], [name="filling_charge"], [name="receipt_charge"], [name="commission_a"], [name="market_hamali_charge_b"], [name="commission_taken_c"], [name="advance_commission"], [name="remaring_commission"]').on('input change keyup', calculateTotal);
    
            // पेज लोड होने पर भी टोटल कैलकुलेट करें (अगर इनपुट में पहले से वैल्यू हो)
            calculateTotal();
        });
    </script>

{{-- 
<script>

function getRandomInt(min = 1, max = 9999) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1) + min);
        }


    $(document).ready(function () {
        // Function to Add New Fields
        $("#add-more").click(function () {
            var number = getRandomInt();
            var newFields = `
                <div class="row dynamic-field">
                    <div class="col-12">
                        <hr>
                    </div>
                    
                    
                    <div class="col-lg-4 col-12">
                    <div class="form-group">
                    <label class="text-dark">QTY*</label>
                    <input type="number" class="form-control qty"  name = "parent[` + number + `][qty]" value="">
                    </div>
                     </div>

                    
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Owner Name*</label>
                            <input type="text" class="form-control owner_name" name = "parent[` + number + `][owner_name]"  value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Will Take*</label>
                            <input type="text" class="form-control will_take"  name = "parent[` + number + `][will_take]"  value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Item Info*</label>
                            <input type="text" class="form-control item_info"  name = "parent[` + number + `][item_info]"  value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Village*</label>
                            <input type="text" class="form-control village" name = "parent[` + number + `][village]"  value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Transport Fare*</label>
                            <input type="number" class="form-control transport_fare" name = "parent[` + number + `][transport_fare]"  value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Filling Charge*</label>
                            <input type="number" class="form-control filling_charge"  name = "parent[` + number + `][filling_charge]" value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Receipt Charge*</label>
                            <input type="number" class="form-control receipt_charge"  name = "parent[` + number + `][receipt_charge]" value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Commission A*</label>
                            <input type="number" class="form-control commission_a"  name = "parent[` + number + `][commission_a]" value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Market Hamali Charge B*</label>
                            <input type="number" class="form-control market_hamali_charge_b" name = "parent[` + number + `][market_hamali_charge_b]"  value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Commission Taken C*</label>
                            <input type="number" class="form-control commission_taken_c" name = "parent[` + number + `][commission_taken_c]" value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Advance Commission*</label>
                            <input type="number" class="form-control advance_commission"  name = "parent[` + number + `][advance_commission]" value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label class="text-dark">Remaining Commission*</label>
                            <input type="number" class="form-control remaining_commission"  name = "parent[` + number + `][remaining_commission]" value="">
                        </div>
                    </div>

                   

                    <!-- Remove Button -->
                    <div class="col-lg-4 col-12 mt-4">
                        <button type="button" class="btn btn-danger remove-field">
                            <i class="mdi mdi-minus"></i> Remove
                        </button>
                    </div>
                </div>
            `;

            $("#dynamic-fields").append(newFields);
        });

        // Remove Fields
        $(document).on("click", ".remove-field", function () {
            $(this).closest(".dynamic-field").remove();
        });

        // Auto Calculate Total for New Fields
        $(document).on("input", ".transport_fare, .filling_charge, .receipt_charge, .commission_a, .market_hamali_charge_b, .commission_taken_c, .advance_commission, .remaining_commission", function () {
            var row = $(this).closest(".dynamic-field");

            var transportFare = parseFloat(row.find(".transport_fare").val()) || 0;
            var fillingCharge = parseFloat(row.find(".filling_charge").val()) || 0;
            var receiptCharge = parseFloat(row.find(".receipt_charge").val()) || 0;
            var commissionA = parseFloat(row.find(".commission_a").val()) || 0;
            var marketHamaliChargeB = parseFloat(row.find(".market_hamali_charge_b").val()) || 0;
            var commissionTakenC = parseFloat(row.find(".commission_taken_c").val()) || 0;
            var advanceCommission = parseFloat(row.find(".advance_commission").val()) || 0;
            var remainingCommission = parseFloat(row.find(".remaining_commission").val()) || 0;

            var total = transportFare + fillingCharge + receiptCharge + commissionA + marketHamaliChargeB + commissionTakenC + advanceCommission + remainingCommission;
            
            row.find(".total").val(total.toFixed(2));
        });
    });
</script> --}}

    

@endsection
