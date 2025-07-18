@section('title','BB')
@extends('laoyout.app')
@section('content')

  <!-- breadcrumb start -->
  <div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">Institute</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Institute</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Institute start -->
  <section class="service-area2 overflow-hidden space" id="service-sec">
    <div class="container">
      <div class="row">
        <div class="title-area text-center">
          <span class="sub-title style2">Our Institute</span>
          <img src="{{url('BB')}}/assets/img/theme-img/title_shape_3.svg" alt="" />
          <h2 class="sec-title">
            BB
            <span class="text-theme">Institute</span> of Aesthetic Medicine
            and Wellness
          </h2>
        </div>
      </div>

      <div class="row gy-5">
        @foreach ($insttue as $val)
        <div class="col-lg-4">
          <div class="service-card">
            <div
              class="service-card_overlay"
              data-bg-src="{{url('BB')}}/assets/img/shape/service_shape2.png"
            ></div>
            <div class="service-card_img">
              <img src="{{url('uploads')}}/<?=$val->icon ?>" alt="" />
              <div
                class="service-card_overlay2"
                data-bg-src="{{url('BB')}}/assets/img/shape/ser_shape.png"
              ></div>
            </div>
            <div class="service-card_icon">
              <i class="fa-light fa-arrow-up-right"></i>
            </div>
            <div class="service-card-content">
              <h3 class="box-title">
                <a href="#"><?=$val->title ?></a>
              </h3>

              <a
                href="#"
                class="th-btn style2"
                data-bs-toggle="modal"
                data-bs-target="#IModal"
                >Read Now<i class="fa-solid fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
        </div>    
        @endforeach
        

     
      </div>
    </div>
    <div
      class="shape-mockup shape-wrapp jump d-none d-xxl-block"
      data-bottom="5%"
      data-left="0%"
    >
      <img src="{{url('BB')}}/assets/img/shape/leaves_6.png" alt="shape" />
    </div>
  </section>

  <!-- contact start -->
  <div
    class="faq-sec overflow-hidden space"
    data-bg-src="{{url('BB')}}/assets/img/bg/faq_bg_1.jpg"
  >
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <form action="" method="POST" class="quote-form ajax-contact">
            <div class="title-area mb-40">
              <span class="sub-title text-white"
                >Contact Us<img
                  src="{{url('BB')}}/assets/img/theme-img/title_right2.svg"
                  alt=""
              /></span>
              <h3 class="sec-title text-white">Need to Make An Enquiry</h3>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  placeholder="Your Name"
                />
                <i class="fal fa-user"></i>
              </div>
              <div class="form-group col-md-6">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                />
                <i class="fal fa-envelope"></i>
              </div>
              <div class="form-group col-md-6">
                <input
                  type="tel"
                  class="form-control"
                  name="number"
                  id="number"
                  placeholder="Phone Number"
                />
                <i class="fal fa-phone"></i>
              </div>
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  name="service"
                  id="service"
                  placeholder="service"
                />
                <i class="fal fa-edit"></i>
              </div>

              <div class="form-group col-12">
                <textarea
                  name="message"
                  id="message"
                  cols="30"
                  rows="3"
                  class="form-control"
                  placeholder="Write message...."
                ></textarea>
                <i class="fal fa-comment"></i>
              </div>
              <div class="form-btn col-12">
                <button class="th-btn style4">
                  Send Messages<i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
              </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
          </form>
        </div>
        <div class="col-xl-6">
          <div class="ps-xl-4">
            <div class="title-area mb-40">
              <span class="sub-title"
                >BB Institute<img
                  src="{{url('BB')}}/assets/img/theme-img/title_right.svg"
                  alt=""
              /></span>
              <h2 class="sec-title">Eligibility</h2>
            </div>
            <ul>
              <li style="font-size: 22px" class="mb-4">BAMS</li>
              <li style="font-size: 22px" class="mb-4">BHMS</li>
              <li style="font-size: 22px" class="mb-4">BUMS</li>
              <li style="font-size: 22px" class="mb-4">BDS</li>
              <li style="font-size: 22px" class="mb-4">MBBS</li>
              <li style="font-size: 22px" class="mb-4">Nursing Graduates</li>
              <li style="font-size: 22px" class="mb-4">Pharma Graduates</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- modal start -->

  <!-- Modal -->
  <div
    class="modal fade"
    id="IModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            CERTIFICATE COURSE IN LASER TREATMENTS
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="pt-4 pb-4">
            <ul>
              <li>Introduction to laser treatments for skin</li>
              <li>Structure of skin And hair</li>
              <li>Fundaments of laser for skin treatment</li>
              <li>Types of lasers used for various skin treatments</li>
              <li>Lasers for tattoo removal</li>
              <li>Lasers for hair reduction</li>
              <li>Lasers for acne treatment</li>
              <li>Lasers for acne scar treatment</li>
              <li>Lasers for pigmentation and broken capillaries</li>
              <li>Lasers for skin tightening and anti aging</li>
              <li>Lasers for skin tightening and anti aging</li>
              <li>Pre and post treatment care</li>
              <li>Contra indications and side effect of lasers</li>
              <li>Post treatment care regimen for patient</li>
              <li>Photo rejuvenation and carbon Laser treatment</li>
              <li>Overview</li>
              <li>Certification</li>
            </ul>
          </div>

          <div>
            <h3 class="text-warning">Course fees-20,000/-</h3>
          </div>

          <div>
            <p>Duration - 3days (10am to 5pm)</p>
            <p>Eligibility- Only medical professionals.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

@endsection