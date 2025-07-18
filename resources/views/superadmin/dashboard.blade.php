
@extends('superadmin.layout.common')
@section('content')

    <!-- Start Status area -->
    <div class="notika-status-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-b-15">
            <div
              class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30"
              style="background: #82e0aa"
            >
            <?php $totalcustomers = DB::table('cusotmers')->count(); ?>
              <div class="website-traffic-ctn">
                <h2><span class="counter">{{ $totalcustomers }}</span></h2>
                <p>Total Customers</p>
              </div>
              <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-b-15">
            <div
              class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30"
              style="background: #f8c471"
            >
              <div class="website-traffic-ctn">
                <h2><span class="counter">10</span></h2>
                <p>Todays Delivery</p>
              </div>
              <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-b-15">
            <div
              class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30"
              style="background: #aed6f1"
            >
              <div class="website-traffic-ctn">
                <h2><span class="counter">50,000</span></h2>
                <p>Total On Going</p>
              </div>
              <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-b-15">
            <div
              class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30"
              style="background: #d5f5e3"
            >
              <div class="website-traffic-ctn">
                <h2><span class="counter">10</span></h2>
                <p>New Work</p>
              </div>
              <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-b-15">
            <div
              class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30"
              style="background: #85c1e9"
            >
              <div class="website-traffic-ctn">
                <h2><span class="counter">10</span></h2>
                <p>Total Payments</p>
              </div>
              <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-b-15">
            <div
              class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30"
              style="background: #48c9b0"
            >
              <div class="website-traffic-ctn">
                <h2><span class="counter">50,000</span></h2>
                <p>Total Received Payments</p>
              </div>
              <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Status area-->

    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
            <div class="sale-statistic-inner notika-shadow mg-tb-30">
              <div class="curved-inner-pro">
                <div class="curved-ctn">
                  <h2>Sales Statistics</h2>
                  <p>Vestibulum purus quam scelerisque, mollis nonummy metus</p>
                </div>
              </div>
              <div
                id="curved-line-chart"
                class="flot-chart-sts flot-chart"
              ></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mg-t-30">
            <div class="email-statis-inner notika-shadow">
              <div class="email-ctn-round">
                <div class="email-rdn-hd">
                  <h2>Statistics</h2>
                </div>
                <div class="email-statis-wrap">
                  <div class="email-round-nock">
                    <input
                      type="text"
                      class="knob"
                      value="0"
                      data-rel="55"
                      data-linecap="round"
                      data-width="130"
                      data-bgcolor="#E4E4E4"
                      data-fgcolor="#00c292"
                      data-thickness=".10"
                      data-readonly="true"
                    />
                  </div>
                  <div class="email-ctn-nock">
                    <p>Total Customers</p>
                  </div>
                </div>
                <div class="email-round-gp">
                  <div class="email-round-pro">
                    <div class="email-signle-gp">
                      <input
                        type="text"
                        class="knob"
                        value="0"
                        data-rel="75"
                        data-linecap="round"
                        data-width="90"
                        data-bgcolor="#E4E4E4"
                        data-fgcolor="#00c292"
                        data-thickness=".10"
                        data-readonly="true"
                        disabled
                      />
                    </div>
                    <div class="email-ctn-nock">
                      <p>Total Products</p>
                    </div>
                  </div>
                  <div class="email-round-pro">
                    <div class="email-signle-gp">
                      <input
                        type="text"
                        class="knob"
                        value="0"
                        data-rel="35"
                        data-linecap="round"
                        data-width="90"
                        data-bgcolor="#E4E4E4"
                        data-fgcolor="#00c292"
                        data-thickness=".10"
                        data-readonly="true"
                        disabled
                      />
                    </div>
                    <div class="email-ctn-nock">
                      <p>Total Sales</p>
                    </div>
                  </div>
                  <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                    <div class="email-signle-gp">
                      <input
                        type="text"
                        class="knob"
                        value="0"
                        data-rel="45"
                        data-linecap="round"
                        data-width="90"
                        data-bgcolor="#E4E4E4"
                        data-fgcolor="#00c292"
                        data-thickness=".10"
                        data-readonly="true"
                        disabled
                      />
                    </div>
                    <div class="email-ctn-nock">
                      <p>Total Amount</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sale Statistic area-->

    @endsection
