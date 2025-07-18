@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')

<div class="pt-60 pb-70 border-top header-next">
    <div class="container">
      <div class="row g-4">
        <h4>Home Loan Eligibility Calculator</h4>
        <p style="margin: 0">How much am I eligible to borrow?</p>
        <div class="col-lg-8">
          <div
            style="
              border: 1px dotted red;
              padding: 20px;
              border-radius: 10px;
              background: #f2f2f299;
            "
          >
            <form id="" action="" method="post">
              <input type="hidden" name="_token" value="" />
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="loan">Home Loan Required:</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"
                        >₹</span
                      >
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Loan Amount"
                        aria-label=""
                        aria-describedby="basic-addon1"
                      />
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="loan">Net income per month</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"
                        >₹</span
                      >
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Excluding LTA and medical allowances"
                        aria-label=""
                        aria-describedby="basic-addon1"
                      />
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="loan">Existing loan commitments</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"
                        >₹</span
                      >
                      <input
                        type="number"
                        class="form-control"
                        placeholder="per month"
                        aria-label=""
                        aria-describedby="basic-addon1"
                      />
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="interest">Loan Tenure</label>
                    <input
                      type="number"
                      name="interest"
                      class="form-control"
                      id="interest"
                      placeholder="(in years)"
                    />
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="loan">Rate of Interest</label>
                    <div class="input-group mb-3">
                      <input
                        type="number"
                        class="form-control"
                        placeholder="9.5"
                        aria-label=""
                        aria-describedby="basic-addon1"
                      />
                      <span class="input-group-text" id="basic-addon1"
                        >%</span
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <button
                    type="submit"
                    class="btn btn-lg btn-primary"
                    title="Send message"
                  >
                    Check Eligibility
                  </button>
                  <button
                    type="submit"
                    class="btn btn-lg btn-primary"
                    title="Send message"
                  >
                    Reset All
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div
            style="
              border: 1px dotted red;
              padding: 20px;
              border-radius: 10px;
              background: #f2f2f299;
            "
          >
            <div class="text-center mb-5">
              <h4>You are Eligible for this loan</h4>
              <h3 class="text-success fw-bold">₹ 100000 at EMI ₹ 3134</h3>
            </div>
            <div class="text-center">
              <h4>You are Eligible for a maximum loan of</h4>
              <h3 class="text-success fw-bold">₹ 223382 at EMI ₹ 7000</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Go to Top -->
  <div class="go-top"><i class="fal fa-angle-double-up"></i></div>

  <!-- WhatsApp Chat Button -->
  <div id="WAButton"></div>

@endsection


