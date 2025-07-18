@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')

    <!-- Page title start-->
    <div class="page-title-area header-next">
      <img class="lazyload blur-up bg-img" src="{{ url('swadesh') }}/assets/img/6511175715121.jpg" />
      <div class="container">
        <div class="content text-center">
          <h1 class="color-white">Terms &amp; Condition</h1>
          <ul class="list-unstyled">
            <li class="d-inline-block">
              <a href="">Home</a>
            </li>
            <li class="d-inline-block">>></li>
            <li class="d-inline-block active">Terms &amp; Condition</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page title end-->

    <!--====== Start FAQ Section ======-->
    <section class="blog-area blog-1 ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tinymce-content">
              <?=$data->info_one; ?>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="" target="_blank" onclick="adView(7)" class="ad-banner">
            <img
              data-src="{{ url('swadesh') }}/assets/img/advertisements/65bf7088a2c9f.png"
              alt="advertisement"
              style="width: 728px; height: 90px"
              class="lazyload blur-up"
            />
          </a>
        </div>
      </div>
    </section>
    <!--====== End FAQ Section ======-->

    <div
      data-popup_delay="2000"
      data-popup_id="24"
      id="modal-popup-24"
      class="popup-wrapper"
    >
      <div class="popup-four">
        <div class="popup_main-content">
          <div class="left-bg bg-cover">
            <img
              class="lazyload bg-img blur-up"
              src="{{ url('swadesh') }}/assets/img/popups/65bb6bd20536d.png"
            />
          </div>
          <div class="right-content">
            <h1>Get 10% off your first package purchase</h1>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt
            </p>

            <div class="subscribe-form">
              <form
                class="subscriptionForm"
                action="store-subscriber"
                method="POST"
              >
                <input type="hidden" name="_token" value="" />
                <div class="form_group">
                  <input
                    type="email"
                    class="form_control"
                    placeholder="Enter Your Email Address"
                    name="email_id"
                  />
                </div>

                <div class="form_group">
                  <button
                    type="submit"
                    class="popup-main-btn"
                    style="background-color: #3d8774"
                  >
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    @endsection