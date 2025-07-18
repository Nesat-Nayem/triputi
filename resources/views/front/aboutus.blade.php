@section('title','BB')
@extends('laoyout.app')
@section('content')

   <!-- breadcrumb start -->
   <div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">About Us</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <!-- section start -->
  <div class="about-sec overflow-hidden space-top" id="about-sec">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 wow fadeInLeft">
          <div class="img-box1">
            <div class="img1" style="width: 100%; height: 600px">
              <img
                class="tilt-active"
                src="{{url('uploads')}}/<?=$data->image ?>"
                alt="About"
                style="width: 100%; height: 100%"
              />
            </div>

            <div class="img3">
              <img src="{{url('BB')}}/assets/img/shape/flower_1_4.png" alt="About" />
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="ps-xl-4 wow fadeInRight">
            <div class="title-area mb-25">
              <span class="sub-title"
                >About Us<img
                  src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                  alt=""
              /></span>
              <h2 class="sec-title mb-20"><?= $row->title ?></h2>
              <p class="mb-30">
                <?= $row->desc ?>
              </p>
            </div>

            <a href="/contact-us" class="th-btn"
              >Contact Us<i class="fa-regular fa-arrow-right ms-2"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- counter start -->
  <div
    class="overflow-hidden space-top"
    data-pos-for=".choose-area2"
    data-sec-pos="bottom-half"
  >
    <div class="container">
      <div class="counter-sec style4 space-top">
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
    </div>
  </div>

  <!-- section start -->
  <div class="choose-area2 bg-smoke overflow-hidden space">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7">
          <div class="pe-xl-5 me-xl-3">
            <div class="title-area mt-60 mb-25 wow fadeInLeft">
              <span class="sub-title"
                >About Us<img
                  src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                  alt=""
              /></span>
              <h2 class="sec-title">
              <?=$row->title_2 ?>
              </h2>
              <p class="mt-n2 mb-35">
                <?=$row->desc_2 ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="choose-image">
            <div class="img1 wow fadeInRight">
              <img
                src="{{url('uploads')}}/<?=$data->image_2 ?>"
                alt="Choose"
              />
            </div>
            <div class="img2 movingX">
              <img src="{{url('BB')}}/assets/img/shape/flower_1_3.png" alt="image" />
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

  <div class="sec-shape space">
    <span class="sec-shape_img"
      ><img src="{{url('BB')}}/assets/img/logo.png" alt=""
    /></span>
  </div>

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
