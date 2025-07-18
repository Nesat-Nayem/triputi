@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')

    <!-- Page title start-->
    <div class="page-title-area header-next">
      <img class="lazyload blur-up bg-img" src="{{ url('swadesh') }}/assets/img/6511175715121.jpg" />
      <div class="container">
        <div class="content text-center">
          <h1 class="color-white">Blog</h1>
          <ul class="list-unstyled">
            <li class="d-inline-block"><a href="">Home</a></li>
            <li class="d-inline-block">>></li>
            <li class="d-inline-block active">Blog</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page title end-->

    <div class="blog-area pt-100 pb-70">
      <div class="container">
        <div class="row justify-content-center">

          @foreach ($blog as $value)
              
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <article class="card mb-30">
              <div class="card-image">
                <a
                  href="/blog-details/{{$value->slug}}"
                  class="lazy-container ratio ratio-16-9"
                >
                  <img class="lazyload"
                    src="{{ url('/uploads') }}/<?= $value->image ?>"
                    data-src="{{ url('/uploads') }}/<?=$value->image ?>"/>
                </a>
                <a href="#"> <span class="tag">Buying Guides</span></a>
              </div>
              <div class="content">
                <ul class="info-list justify-content-around">
                  <li><i class="fal fa-user"></i><?=$value->name ?></li>
                  <li><i class="fal fa-calendar"></i><?=$value->created_at ?></li>
                </ul>
                <h3 class="card-title">
                  <a href="/blog-details/{{$value->slug}}">
                   <?=$value->title ?>
                  </a>
                </h3>
                <p class="card-text">
                  <?=$value->short_description ?>
                </p>
                <a href="<?=$value->link ?>" class="card-btn">Read More</a>
              </div>
            </article>
          </div>

          @endforeach
      
    
{{--   
          <div class="text-center mt-4">
            <a
              href="blog-details.html"
              target="_blank"
              onclick="adView(13)"
              class="ad-banner"
            >
              <img
                data-src="{{ url('swadesh') }}/assets/img/advertisements/65bf707d02fb5.png"
                alt="advertisement"
                style="width: 728px; height: 90px"
                class="lazyload blur-up"
              />
            </a>
          </div> --}}
        </div>
        <div
          class="pagination mb-30 justify-content-center"
          data-aos="fade-up"
        ></div>
      </div>
    </div>

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
              <form class="subscriptionForm" action="" method="POST">
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