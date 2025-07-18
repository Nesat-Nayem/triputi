@section('title','BB')
@extends('laoyout.app')
@section('content')

<!-- breadcrumb start -->
<div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">Skin Treatments</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Skin Treatments</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- section start -->
  <section class="price-area overflow-hidden space">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 wow fadeInLeft">
          <div class="title-area mb-40 text-center text-xl-start">
            <span class="sub-title"
              >Our Treatments<img
                src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                alt=""
            /></span>
            <h2 class="sec-title">BB Institute Provide various Treatments</h2>
          </div>
          <div class="nav nav-tabs pricing-tabs" id="nav-tab" role="tablist">
            <button
              class="nav-link price-list active"
              id="nav-step1-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step1"
              type="button"
            >
              Skin Treatments
            </button>
            <button
              class="nav-link price-list"
              id="nav-step2-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step2"
              type="button"
            >
              Hair Treatments
            </button>
            <button
              class="nav-link price-list"
              id="nav-step3-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step3"
              type="button"
            >
              Laser Treatments
            </button>
            <button
              class="nav-link price-list"
              id="nav-step4-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step4"
              type="button"
            >
              Skin Whitening Treatment
            </button>
            <button
              class="nav-link price-list"
              id="nav-step5-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step5"
              type="button"
            >
              Anti-Aging Treatments
            </button>
            <button
              class="nav-link price-list"
              id="nav-step6-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step6"
              type="button"
            >
              Medical Micropigmentation and Semi-Permanent Makeup
            </button>
            <button
              class="nav-link price-list"
              id="nav-step7-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step7"
              type="button"
            >
              Weight Management
            </button>
            <button
              class="nav-link price-list"
              id="nav-step8-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-step8"
              type="button"
            >
              Homoeopathic Treatment
            </button>
          </div>

          <div class="price-list-area">
            <div class="tab-content" id="nav-tabContent">
              <div
                class="tab-pane fade active show"
                id="nav-step1"
                role="tabpanel"
                aria-labelledby="nav-step1-tab"
              >
                <div
                  class="about-sec overflow-hidden bg-smoke space"
                  id="about-sec"
                >
                  <div class="row gy-4">
                    <div class="col-xl-6 wow fadeInLeft">
                      <div class="img-box1">
                        <div class="img1" style="width: 100%; height: 250px">
                          <img
                            class="tilt-active"
                            src="{{url('Service-image')}}/<?=$Service->image ?>"
                            alt="Skin Treatment"
                            style="
                              width: 100%;
                              height: 100%;
                              object-fit: contain;
                            "
                          />
                        </div>
                        <div class="img3" style="width: 80px; height: 80px">
                          {{-- <img
                            src="{{url('Service-image')}}/<?=$Service->image ?>"
                            alt="Decoration"
                          /> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="ps-xl-4 wow fadeInRight">
                        <div class="title-area mb-25">
                          <span class="sub-title">
                          <?=$Service->title ?>
                            <img
                              src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                              alt=""
                            />
                          </span>
                        </div>
                        <div class="about-wrapper">
                          <div class="row gy-4">
                            <div class="col-lg-12">
                              <div>
                                <p>
                                 <?=$Service->description ?>
                                </p>
                              </div>
                            </div>
                            <?php
                            $text = $Service->video; // HTML और टेक्स्ट दोनों रखें
                            $words = preg_split('/\s+/', $text); // टेक्स्ट को शब्दों में विभाजित करें
                            $limitedWords = array_slice($words, 0, 20); // केवल पहले 20 शब्द लें
                            echo implode(' ', $limitedWords) . '...'; // HTML और टेक्स्ट दोनों दिखाएं
                        ?>
                          </div>
                        </div>
                      </div>
                    </div>

                   
                  </div>
                  <div class="shape-mockup" data-top="0%" data-left="0%">
                    <img src="{{url('BB')}}/assets/img/shape/flower_1_1.png" alt="Shape" />
                  </div>
                  <div
                    class="shape-mockup d-none d-lg-block"
                    data-bottom="0%"
                    data-right="0%"
                  >
                    <img src="{{url('BB')}}/assets/img/shape/flower_1_2.png" alt="Shape" />
                  </div>
                </div>
              </div>
              <!-- Add similar tab-pane divs for other treatments as needed -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shape-mockup jump" data-top="0%" data-right="0%">
      <img src="{{url('BB')}}/assets/img/shape/flower_1_11.png" alt="shape" />
    </div>
  </section>

  <!-- Testimonials start -->
  <div class="overflow-hidden bg-smoke space">
    <div class="container">
      <div class="row">
        <div class="title-area text-center mb-25">
          <span class="sub-title style2">Testimonials</span>
          <img src="{{url('BB')}}/assets/img/theme-img/title_shape_1.svg" alt="" />
          <h2 class="sec-title">Our Customer Feedback</h2>
        </div>
      </div>
      <div
        class="row slider-shadow th-carousel"
        data-slide-show="3"
        data-lg-slide-show="2"
        data-sm-slide-show="1"
        data-xs-slide-show="1"
      >
      @foreach ($testimonial as $val)
      <div class="col-md-6 col-lg-4">
        <div class="testi-grid style3 wow fadeInUp">
          <div class="testi-grid_img">
            <img src="{{url('uploads')}}/<?=$val->image ?>" alt="" />
          </div>
          <h3 class="box-title">
            <?=$val->description ?>
          </h3>
          <div class="testi-grid_profile">
            <div class="media-body">
              <h5 class="testi-grid_name"><?=$val->name?></h5>
              <p class="testi-grid_desig"><?=$val->destination ?></p>
            </div>
          </div>
          <div class="testi-quote">
            <img src="{{url('BB')}}/assets/img/shape/quote_2.png" alt="" />
          </div>
          <div class="testi-shape1">
            <img src="{{url('BB')}}/assets/img/shape/leaf_2.svg" alt="" />
          </div>
          <div class="testi-shape2">
            <img src="{{url('BB')}}/assets/img/shape/flower_1_6.svg" alt="" />
          </div>
        </div>
      </div>
      @endforeach
      
      </div>
    </div>
    <div class="shape-mockup" data-top="0%" data-left="0%">
      <img src="{{url('BB')}}/assets/img/shape/flower_1_1.png" alt="shape" />
    </div>
    <div
      class="shape-mockup d-none d-lg-block"
      data-bottom="0%"
      data-right="0%"
    >
      <img src="{{url('BB')}}/assets/img/shape/flower_1_2.png" alt="shape" />
    </div>
  </div>


@endsection