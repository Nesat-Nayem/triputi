@section('title','BB')
@extends('laoyout.app')
@section('content')

   <!-- breadcrumb start -->
   <div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">Packages</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Packages</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- section start -->
  <section class="space">
    <div class="container">
      <div class="title-area text-center">
        <span class="sub-title style2">Pricing Package</span>
        <img src="{{url('BB')}}/assets/img/theme-img/title_shape_1.svg" alt="" />
        <h2 class="sec-title">Choose Your Perfect Package</h2>
      </div>

      <div class="row">
    
        @foreach ($package as $val)
        <div class="col-lg-6 col-xl-4">
          <div class="th-blog blog-single has-post-thumbnail">
            <div class="blog-img">
              <a href="#"
                ><img
                  src="{{url('uploads')}}/<?= $val->image ?>"
                  alt="Blog Image"
              /></a>
            </div>
            <div class="blog-content">
              <h2 class="blog-title">
                <a href="#"><?= $val->title ?> </a>
              </h2>
              <div class="blog-meta">
                <a href="#" class="text-danger fw-bold"
                  ><i class="fas fa-rupee"></i><?=$val->sub_title ?>
                </a>
              </div>
              <hr />

              <ul>
              <?=$val->desc ?>
              </ul>
             
              <a href="/contact-us" class="th-btn"
                >BOOK Now<i class="fa-solid fa-right-long ms-2"></i
              ></a>
            </div>
          </div>
        </div>

        @endforeach

      
       

        <div class="th-pagination text-center">
          <ul>
            <li>
              <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li>
              <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div
      class="shape-mockup jump d-none d-lg-block"
      data-bottom="15%"
      data-left="0%"
    >
      <img src="{{url('BB')}}/assets/img/shape/leaves_1.png" alt="shape" />
    </div>
    <div
      class="shape-mockup jump d-none d-xl-block"
      data-top="5%"
      data-right="0%"
    >
      <img src="{{url('BB')}}/assets/img/shape/leaves_7.png" alt="shape" />
    </div>
  </section>

@endsection