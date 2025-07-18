@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')



<div class="pt-60 pb-70 border-top header-next">
    <div class="container">
      <div class="row g-4">
        <div
          class="col-lg-12 mb-5"
          style="
            border: 1px dotted red;
            padding: 20px;
            border-radius: 10px;
            background: #f2f2f299;
          "
        >
          <h4 class="mb-4">Home Loan EMI Calculator</h4>
          <p style="text-align: justify">
            A home loan EMI calculator is a tool that helps you calculate your
            monthly instalments (EMIs) with just one click. Home loan
            calculator is really helpful and can be used easily by any
            individual who wants to know their Home Loan EMIs in advance.
          </p>
          <p style="text-align: justify">
            To calculate your Home loan EMI, you need to enter the loan
            amount, interest rate, and the tenure of the loan. Please insert
            decimals using the dot notation, e.g. 5.9
          </p>
        </div>
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
                    <label for="loan">Loan balance</label>
                    <input
                      type="text"
                      name="loan"
                      class="form-control"
                      id="loan"
                      placeholder="Enter Loan balance"
                    />
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="interest">Interest rate (%)</label>
                    <input
                      type="text"
                      name="interest"
                      class="form-control"
                      id="interest"
                      placeholder="%"
                    />
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label for="years">Loan term (years)</label>
                    <input
                      type="text"
                      name="years"
                      class="form-control"
                      id="years"
                      placeholder="years"
                    />
                  </div>
                </div>

                <div class="col-md-12">
                  <button
                    type="submit"
                    class="btn btn-lg btn-primary"
                    title="Send message"
                  >
                    Calculate
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
            <div class="text-center">
              <h4>Your EMI Per Month will be</h4>
              <h3 class="text-success fw-bold">INR 405.53</h3>
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
