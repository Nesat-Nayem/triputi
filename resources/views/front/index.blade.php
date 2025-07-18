@section('title','BB')

@extends('laoyout.app')
@section('content')

      <!-- hero start -->
      <section
      class="th-hero-wrapper hero-1"
      id="hero"
      data-bg-src="{{url('BB')}}/assets/img/bg/hero_bg_shape.png"
    >
      <div
        class="hero-slider-1 th-carousel"
        data-fade="true"
        data-slide-show="1"
        data-md-slide-show="1"
        data-arrows="true"
        data-xl-arrows="true"
        data-ml-arrows="true"
        data-lg-arrows="true"
      >
        @foreach ($banners as $val)
            
        <div class="th-hero-slide">
          <div class="container">
            <div class="row align-items-end">
              <div class="col-lg-6 col-xl-7">
                <div class="hero-style1">
                  <span
                    class="sub-title"
                    data-ani="slideindown"
                    data-ani-delay="0.2s"
                    ><img
                      src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                      alt="shape"
                    />{{$val->title}}</span
                  >
                  <h1
                    class="hero-title"
                    data-ani="slideindown"
                    data-ani-delay="0.3s"
                  >
                  <?= $val->description ?>
                  </h1>
                  <div
                    class="btn-group justify-content-center justify-content-lg-start"
                    data-ani="slideindown"
                    data-ani-delay="0.4s"
                  >
                    <a href="/contact-us" class="th-btn"
                      >Contact Us<i class="fa-regular fa-arrow-right ms-2"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5">
                <div
                  class="th-hero-img"
                  data-ani="slideinup"
                  data-ani-delay="0.2s"
                >
                @if (isset($val->image))
                <img src="{{url('uploads')}}/{{$val->image}}" alt="" />
                  @endif
                    <div
                    class="th-hero-shape"
                    data-ani="slideinright"
                    data-ani-delay="0.4s"
                  ></div>
                  <div
                    class="th-hero-shape2"
                    data-ani="slideinright"
                    data-ani-delay="0.7s"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @endforeach
      </div>
      <div
        class="shape-mockup movingX d-none d-xl-block"
        data-top="12%"
        data-left="2%"
      >
        <img src="{{url('BB')}}/assets/img/shape/flower_shape.svg" alt="shape" />
      </div>
      <div class="shape-mockup shape2 jump" data-bottom="10%" data-left="0%">
        <img src="{{url('BB')}}/assets/img/shape/flower_1_3.svg" alt="shape" />
      </div>
    </section>

    <!-- services start -->
    <section class="service-area2 overflow-hidden space" id="service-sec">
      <div class="container">
        <div class="row">
          <div class="title-area text-center">
            <span class="sub-title style2">What We Do</span>
            <img src="{{url('BB')}}/assets/img/theme-img/title_shape_1.svg" alt="" />
            <h2 class="sec-title">Professional Spa and Beauty Service</h2>
          </div>
        </div>
        <div
          class="row slider-shadow th-carousel number-dots"
          id="serviceSlide"
          data-slide-show="4"
          data-lg-slide-show="3"
          data-md-slide-show="2"
          data-sm-slide-show="2"
          data-dots="true"
          data-xl-dots="true"
          data-ml-dots="true"
          data-lg-dots="true"
          data-md-dots="true"
        >


        @foreach ($Service as $val)
        <div class="col-md-6 col-lg-6 col-xl-4">
          <div class="service-box wow fadeInUp">
            <div class="service-box_icon">
              <div class="global-icon">
                <img src="{{url('Service-image')}}/<?=$val->icon ?>" alt="Icon" />
              </div>
            </div>
            <h3 class="box-title">
              <a href="service-details/<?=$val->slug ?>"><?=$val->title ?></a>
            </h3>
          </div>
        </div>
        @endforeach
         
         
        
        </div>
      </div>
      <div
        class="shape-mockup jump d-none d-xl-block"
        data-bottom="0%"
        data-left="0%"
      >
        <img src="{{url('BB')}}/assets/img/shape/leaves_1.png" alt="shape" />
      </div>
      <div
        class="shape-mockup jump d-none d-xl-block"
        data-top="20%"
        data-right="0%"
      >
        <img src="{{url('BB')}}/assets/img/shape/leaves_7.png" alt="shape" />
      </div>
    </section>

    <!-- courses start -->
    <div class="about-sec overflow-hidden bg-smoke space" id="about-sec">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 wow fadeInLeft">
            <div class="img-box1">
              <div class="img1" style="width: 100%; height: 400px">
                <img
                  class="tilt-active"
                  src="{{url('BB')}}/assets/img/normal/1.jpg"
                  alt="About"
                  style="width: 100%; height: 100%; object-fit: contain"
                />
              </div>
              <div class="img2">
                <img
                  class="tilt-active"
                  src="{{url('BB')}}/assets/img/normal/2.avif"
                  alt="About"
                  style="width: 100%; height: 300px"
                />
              </div>
              <div class="img3" style="width: 80px; height: 80px">
                <img src="{{url('BB')}}/assets/img/shape/leaf-1-1.png" alt="About" />
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="ps-xl-4 wow fadeInRight">
              <div class="title-area mb-25">
                <span class="sub-title"
                  >Courses<img
                    src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                    alt=""
                /></span>
                <h2 class="sec-title mb-20">Courses For Doctors</h2>
              </div>
              <div class="about-wrapper">
                <div class="row gy-4">
                 
                  @foreach ($course as $val)
                  <div class="col-lg-6">
                    <div class="about-info">
                      <a href="/institute">
                        <h3 class="about-info_title h6">
                          <img
                            src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                            alt=""
                          />
                          <?=$val->title ?>
                        </h3>
                      </a>
                    </div>
                  </div>

                  @endforeach
                  
                
                </div>
              </div>

              <a href="/institute" class="th-btn"
                >Discover More<i class="fa-regular fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
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

    <!-- counter start -->
    <div class="overflow-hidden">
      <div class="container">
        <div class="counter-sec space-top">
          <div class="th-counterup wow fadeInLeft">
            <div class="inner">
              <div class="icon">
                <img src="{{url('BB')}}/assets/img/icon/counter_1_1.svg" alt="" />
              </div>
              <div class="content">
                <h3 class="counter">
                  <span class="odometer" data-count="<?=$row1233->number1 ?>">00</span>
                  <span class="counter-number">+</span>
                </h3>
                <p class="counter-card_text">Years of Experience</p>
              </div>
            </div>
          </div>
          <div class="th-counterup wow fadeInLeft">
            <div class="inner">
              <div class="icon">
                <img src="{{url('BB')}}/assets/img/icon/counter_1_2.svg" alt="" />
              </div>
              <div class="content">
                <h3 class="counter">
                  <span class="odometer" data-count="<?=$row1233->number2 ?>">00</span>
                  <span class="counter-number"></span>
                </h3>
                <p class="counter-card_text">Total Doctor Courses</p>
              </div>
            </div>
          </div>
          <div class="th-counterup wow fadeInLeft">
            <div class="inner">
              <div class="icon">
                <img src="{{url('BB')}}/assets/img/icon/counter_1_3.svg" alt="" />
              </div>
              <div class="content">
                <h3 class="counter">
                  <span class="odometer" data-count="<?=$row1233->number3 ?>">00</span>
                  <span class="counter-number"></span>
                </h3>
                <p class="counter-card_text">Total Beauticians Courses</p>
              </div>
            </div>
          </div>
          <div class="th-counterup wow fadeInLeft">
            <div class="inner">
              <div class="icon">
                <img src="{{url('BB')}}/assets/img/icon/counter_1_4.svg" alt="" />
              </div>
              <div class="content">
                <h3 class="counter">
                  <span class="odometer" data-count="<?=$row1233->number4 ?>">00</span>
                  <span class="counter-number">+</span>
                </h3>
                <p class="counter-card_text">Specialists Team</p>
              </div>
            </div>
          </div>
        </div>
        <div class="sec-shape mb-5">
          <span class="sec-shape_img"
            ><img src="{{url('BB')}}/assets/img/logo.png" alt="logo" style="width: 45px"
          /></span>
        </div>
      </div>
    </div>

    <!-- courses start -->
    <div class="about-sec overflow-hidden bg-smoke space" id="about-sec">
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div class="ps-xl-4 wow fadeInRight">
              <div class="title-area mb-25">
                <span class="sub-title"
                  >Courses<img
                    src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                    alt=""
                /></span>
                <h2 class="sec-title mb-20">Courses For Beauticians</h2>
              </div>
              <div class="about-wrapper">
                <div class="row gy-4">
                  @foreach ($course as $val)
                  <div class="col-lg-6">
                    <div class="about-info">
                      <a href="/institute">
                        <h3 class="about-info_title h6">
                          <img
                            src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                            alt=""
                          /><?=$val->title_2 ?>
                        </h3>
                      </a>
                    </div>
                  </div>
                  @endforeach
                 
           
                </div>
              </div>

              <a href="/institute" class="th-btn"
                >Discover More<i class="fa-regular fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInLeft">
            <div class="img-box1">
              <div class="img1" style="width: 100%; height: 400px">
                <img
                  class="tilt-active"
                  src="{{url('BB')}}/assets/img/normal/about_1.jpg"
                  alt="About"
                  style="width: 100%; height: 100%"
                />
              </div>

              <div class="img3">
                <img
                  src="{{url('BB')}}/assets/img/shape/leaf-1-1.png"
                  alt="About"
                  style="width: 100px"
                />
              </div>
            </div>
          </div>
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

    <!-- Package start -->
    <section class="overflow-hidden space-bottom space">
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title style2">Pricing Package</span>
          <img src="{{url('BB')}}/assets/img/theme-img/title_shape_1.svg" alt="" />
          <h2 class="sec-title">Choose Your Perfect Package</h2>
        </div>
        <div class="row gy-4 align-items-center">
          @foreach ($package as $val)
          <div class="col-xl-6">
            <div class="price-card wow fadeInLeft">
              <div class="price-card_img">
                <img src="{{url('uploads')}}/<?= $val->image ?>" alt="" />
                <!-- <h4 class="price-card_price">
                  <span class="currency">$</span> 46
                  <span class="duration">Per Day</span>
                </h4> -->
              </div>
              <div class="price-card_content">
                <h3 class="box-title"><?= $val->title ?></h3>
                <hr class="style1" />
                <div class="available-list">
                  <ul>
                    <li>
                      <img
                        src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                        alt=""
                      />Body Treatments
                    </li>
                    <li>
                      <img
                        src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                        alt=""
                      />Sauna Relax
                    </li>
                    <li>
                      <img
                        src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                        alt=""
                      />Backbone Therapy
                    </li>
                    <li>
                      <img
                        src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                        alt=""
                      />Geothermal Spa
                    </li>
                    <li class="unavailable">
                      <img
                        src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                        alt=""
                      />Body Relaxation
                    </li>
                    <li class="unavailable">
                      <img
                        src="{{url('BB')}}/assets/img/theme-img/title_left.svg"
                        alt=""
                      />Aroma Therapy
                    </li>
                  </ul>
                  <div class="price-btn">
                    <a href="/packages" class="th-btn"
                      >Book Now<i class="fa-solid fa-arrow-right ms-2"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
         
        </div>
        <div
          class="btn-group justify-content-center justify-content-lg-center mt-5"
        >
          <a href="/packages">
            <button class="th-btn">
              Explore More
              <i class="fa-solid fa-arrow-right ms-2"></i>
            </button>
          </a>
        </div>
      </div>
      <div
        class="shape-mockup jump d-none d-lg-block"
        data-top="0%"
        data-left="0%"
      >
        <img src="{{url('BB')}}/assets/img/shape/leaves_3.png" alt="shape" />
      </div>
      <div
        class="shape-mockup jump d-none d-xl-block"
        data-bottom="15%"
        data-right="0%"
      >
        <img src="{{url('BB')}}/assets/img/shape/leaves_2.png" alt="shape" />
      </div>
    </section>

    <!-- appointment start -->
    <div
      class="appointment-area space"
      id="contact-sec"
      data-bg-src="{{url('BB')}}/assets/img/bg/appointment_bg_1.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="appointment-content">
              <div
                class="title-area mb-25 text-center text-lg-start wow fadeInLeft"
              >
                <span class="sub-title"
                  >Make An Appointment<img
                    src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                    alt=""
                /></span>
                <h2 class="sec-title">Send Message Us</h2>
              </div>
              <div class="appointment-form wow fadeInUp">
                <form method="POST">
                  @csrf
                  <div class="row">
                    <div class="form-group col-md-6">
                      <i class="fa-light fa-user"></i>
                      <input
                        type="text" placeholder="First Name" class="form-control" name="f_name" />
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa-light fa-user"></i>
                      <input
                        type="text"
                        placeholder="Last Name"
                        class="form-control"
                        name="l_name"
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa-light fa-envelope"></i>
                      <input
                        type="text"
                        placeholder="Email"
                        class="form-control"
                        name="email"
                      />
                    </div>
                    <div class="col-md-6 form-group">
                      <i class="fa-light fa-phone"></i>
                      <input
                        type="text"
                        placeholder="phone"
                        class="form-control"
                        name="phone"
                      />
                    </div>
  
                    <div class="form-group col-12">
                      <textarea
                        id=""
                        class="form-control"
                        placeholder="Message"
                        name="message"
                      ></textarea>
                      <i class="fa-light fa-edit"></i>
                    </div>
                    <div
                      class="btn-group justify-content-center justify-content-lg-start"
                    >
                      <button class="th-btn" type="submit">
                        Submit<i class="fa-solid fa-arrow-right ms-2"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="appointment-video">
                <a
                  href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                  class="video-play-btn play-btn popup-video"
                  ><i class="fa-sharp fa-solid fa-play"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials start -->
    <div class="position-relative overflow-hidden space">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="testimonial-wrapper wow fadeInUp">
              <div
                class="th-carousel number-dots"
                data-asnavfor="#testiSlide"
                id="tesitslide-img"
                data-slide-show="1"
                data-dots="true"
                data-xl-dots="true"
                data-ml-dots="true"
                data-lg-dots="true"
                data-md-dots="true"
                data-fade="true"
              >
              @foreach ($testimonial as $val)
                <div>
                  <div class="testi-slide-img">
                    <img src="{{url('uploads')}}/{{$val->image}}" alt="" />
                  </div>
                </div>
                @endforeach
               
              </div>
              <div class="testi-shape">
                <img src="{{url('BB')}}/assets/img/shape/flower_1_5.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight">
            <div class="title-area text-center">
              <span class="sub-title style2">Testimonials</span>
              <img src="{{url('BB')}}/assets/img/theme-img/title_shape_1.svg" alt="" />
              <h2 class="sec-title">Our Customer Feedback</h2>
            </div>
            <div class="testi-item-slide">
              <div
                class="th-carousel"
                id="testiSlide"
                data-slide-show="1"
                data-fade="true"
                data-asnavfor=" #tesitslide-img"
              >
              @foreach ($testimonial as $val)
                <div>
                  <div class="testi-item">
                    @if (isset($val->image))
                    <div class="testi-item_img">
                      <img src="{{url('uploads')}}/{{$val->image}}" alt="" />
                    </div>
                    @endif
                    <h3 class="box-title">
                     {{$val->description}}
                    </h3>
                    <div class="testi-item_profile">
                      <div class="media-body">
                        <h4 class="testi-item_name">{{$val->name}}</h4>
                        <p class="testi-item_desig">{{$val->destination}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
               
              </div>
              <div class="testi-quote">
                <img src="{{url('BB')}}/assets/img/shape/quote.png" alt="" />
              </div>
              <div class="testi-shape1">
                <img src="{{url('BB')}}/assets/img/shape/leaf.svg" alt="" />
              </div>
              <div class="testi-shape2">
                <img src="{{url('BB')}}/assets/img/shape/flower_1_4.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="shape-mockup jump d-none d-xxl-block"
        data-top="30%"
        data-right="0%"
      >
        <img src="{{url('BB')}}/assets/img/shape/leaves_4.png" alt="shape" />
      </div>
    </div>

@endsection
