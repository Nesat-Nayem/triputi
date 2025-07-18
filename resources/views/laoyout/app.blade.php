<?php

$data = DB::table('webinfo')->where('id', 5)->select(['image', 'favicon', 'info_one'])->first();
$row = json_decode($data->info_one);


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="{{url('BB')}}/assets/img/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/slick.min.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/odometer-theme-default.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/jquery.flipster.min.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/jquery.datetimepicker.min.css" />
    <link rel="stylesheet" href="{{url('BB')}}/assets/css/style.css" />
  </head>

  <body oncontextmenu="return false;">
    <!-- preloader start -->
    <div class="preloader">
      <div class="preloader-inner">
        <img src="{{url('uploads')}}/<?=$data->image ?>" alt="BB" style="width: 80px" />
        <span class="loader"></span>
      </div>
    </div>

    <!-- mobile menu start -->
    <div class="th-menu-wrapper">
      <div class="th-menu-area">
        <div class="mobile-logo">
          <a href="/"
            ><img src="{{url('uploads')}}/<?=$data->image ?>" alt="BB" style="width: 80px"
          /></a>
          <div class="close-menu">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
          </div>
        </div>
        <div class="th-mobile-menu">
          <ul>
            <li class="active">
              <a href="index.html">Home</a>
            </li>
            <li class="">
              <a href="/about-us">About us</a>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Treatments</a>
              <ul class="sub-menu">
             <?php $services = DB::table('services')->where('status','Y')->get(); ?>
                @foreach ($services as $val)
                <li><a href="/service-details/<?=$val->slug ?>"><?=$val->title ?></a></li>
                @endforeach
              </ul>
            </li>
            <li class="">
              <a href="/institute">Institute</a>
            </li>

            <li class="menu-item-has-children">
              <a href="#">Gallery</a>
              <ul class="sub-menu">
                <li><a href="/image-gallery">Image Gallery</a></li>
                <li><a href="/video-gallery">Video Gallery</a></li>
              </ul>
            </li>
            <li><a href="/contact-us">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- header start -->
    <header class="th-header header-layout1">
      <div class="header-top d-none d-lg-block">
        <div class="container th-container">
          <div
            class="row justify-content-end justify-content-lg-between align-items-center gy-2"
          >
            <div class="col-auto d-none d-lg-block">
              <div class="header-links">
                <ul>
                  <li>
                    <i class="far fa-phone"></i
                    ><a href="#">+<?=$row->phone ?></a>
                  </li>
                  <li>
                    <i class="far fa-envelope"></i
                    ><a href="#"><?= $row->email ?></a>
                  </li>
                  <li>
                    <i class="fa-light fa-clock"></i>Mon - Sat: 8 AM - 15 PM
                    Sunday Off
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-auto">
              <div class="social-links">
                <span class="social-title">Follow Us:</span>
                <a href="<?=$row->facebook ?>"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="<?=$row->twitter ?>"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a href="<?=$row->linkedin ?>"
                  ><i class="fab fa-linkedin-in"></i>
                </a>
                <a href="<?=$row->youtube ?>"
                  ><i class="fab fa-youtube"></i> </a
                ><a href="<?=$row->skype ?>"
                  ><i class="fa-brands fa-skype"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- sticky start -->
      <div class="sticky-wrapper">
        <div class="menu-area">
          <div class="container th-container">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo">
                  <a href="/"
                    ><img src="{{url('uploads')}}/<?= $data->image ?>" alt="BB"
                  /></a>
                </div>
              </div>
              <div class="col-auto mx-xl-auto">
                <nav class="main-menu d-none d-lg-inline-block">
                  <ul>
                    <li class="active">
                      <a href="/">Home</a>
                    </li>
                    <li class="">
                      <a href="/about-us">About us</a>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="#">Treatments</a>
                      <?php $services = DB::table('services')->where('status','Y')->get(); ?>
                      <ul class="sub-menu">
                        @foreach ($services as $val)
                     
                        <li><a href="/service-details/<?= $val->slug ?>"><?=$val->title ?></a></li>
                            
                        @endforeach
                      </ul>
                    </li>
                    <li class="">
                      <a href="/institute">Institute</a>
                    </li>

                    <li class="">
                      <a href="/packages">Packages</a>
                    </li>

                    <li class="menu-item-has-children">
                      <a href="#">Gallery</a>
                      <ul class="sub-menu">
                        <li><a href="/image-gallery">Image Gallery</a></li>
                        <li><a href="/video-gallery">Video Gallery</a></li>
                      </ul>
                    </li>
                    <li><a href="/contact-us">Contact Us</a></li>
                  </ul>
                </nav>
                <button class="th-menu-toggle d-inline-block d-lg-none">
                  <i class="far fa-bars"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="logo-bg"></div>
        </div>
      </div>
    </header>



    @yield('content')



      <!-- footer start -->
      <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-md-6 col-xl-3">
                <?php

$data = DB::table('webinfo')->where('id', 5)->select(['image', 'favicon', 'info_one'])->first();
$row = json_decode($data->info_one);


?>
                <div class="widget footer-widget">
                  <div class="th-widget-about">
                    <div class="about-logo">
                      <a href="/"
                        ><img
                          src="{{url('uploads')}}/<?=$data->image ?>"
                          alt="BB"
                          style="width: 80px"
                      /></a>
                    </div>
                    <p class="about-text">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Libero,
                    </p>
                    <div class="working-time">
                      <span class="title">We Are Available:</span>
                      <p class="desc">Mon-Sat: 08.00 am to 5.00 pm</p>
                    </div>
                    <div class="th-social footer-social">
                      <a href="<?= $row->facebook?>"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a href="<?= $row->twitter ?>"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a href="<?= $row->linkedin ?>"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                      <a href="<?=$row->instagram ?>"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-2">
                <div class="widget widget_nav_menu footer-widget">
                  <h3 class="widget_title">Quick link</h3>
                  <div class="menu-all-pages-container">
                    <ul class="menu">
                      <li><a href="/">Home</a></li>
                      <li><a href="/about-us">About Us</a></li>
                      <li><a href="/service-details">Treatments</a></li>
                      <li><a href="/institute">Institute</a></li>
                      <li><a href="gallery.html">Gallery</a></li>
                      <li><a href="/packages">Pricing Plans</a></li>
                      <li><a href="/contact-us">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-auto">
                <div class="widget footer-widget">
                  <h3 class="widget_title">Contact Details</h3>
                  <div class="th-widget-about">
                    <h4 class="footer-info-title">Phone Number</h4>
                    <p class="footer-info">
                      <i class="fa-sharp fa-solid fa-phone"></i
                      ><a class="text-inherit" href="#"
                        >+<?=$row->phone ?></a
                      >
                    </p>
                    <h4 class="footer-info-title">Email Address</h4>
                    <p class="footer-info">
                      <i class="fas fa-envelope"></i
                      ><a class="text-inherit" href="#"
                        ><?=$row->email ?></a
                      >
                    </p>
                    <h4 class="footer-info-title">Office Location</h4>
                    <p class="footer-info">
                      <i class="fas fa-map-marker-alt"></i><?=$row->location ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-auto">
                <div class="widget footer-widget">
                  <h4 class="widget_title">Newsletter</h4>
                  <div class="newsletter-widget">
                    <p class="md-10">
                      Sign Up to get updates & news about us . Get Latest Deals
                      from Walker's Inbox to our mail address.
                    </p>
                    <div class="footer-search-contact mt-25">
                      <form>
                        <input
                          class="form-control"
                          type="email"
                          placeholder="Enter your email"
                        />
                      </form>
                      <div class="footer-btn mt-10">
                        <button type="submit" class="th-btn style3 fw-btn">
                          Subscribe Now <i class="fa-regular fa-arrow-right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-wrap">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <p class="copyright-text text-white">
                  © 2024
                  <a href="index.html">BB</a>. All Rights Reserved.
                </p>
              </div>
              <div class="col-lg-6">
                <div class="footer-links">
                  <ul>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-left="0%">
          <img src="{{url('BB')}}/assets/img/shape/footer_shape_1.png" alt="shape" />
        </div>
        <div
          class="shape-mockup d-none d-xl-block"
          data-bottom="12%"
          data-right="0%"
        >
          <img src="{{url('BB')}}/assets/img/shape/footer_shape_2.png" alt="shape" />
        </div>
      </footer>
      <div class="scroll-top">
        <svg
          class="progress-circle svg-content"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="
              transition: stroke-dashoffset 10ms linear 0s;
              stroke-dasharray: 307.919, 307.919;
              stroke-dashoffset: 307.919;
            "
          ></path>
        </svg>
      </div>
      <script src="{{url('BB')}}/assets/js/vendor/jquery-3.7.1.min.js"></script>
      <script src="{{url('BB')}}/assets/js/slick.min.js"></script>
      <script src="{{url('BB')}}/assets/js/bootstrap.min.js"></script>
      <script src="{{url('BB')}}/assets/js/jquery.magnific-popup.min.js"></script>
      <script src="{{url('BB')}}/assets/js/jquery-ui.min.js"></script>
      <script src="{{url('BB')}}/assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="{{url('BB')}}/assets/js/isotope.pkgd.min.js"></script>
      <script src="{{url('BB')}}/assets/js/jquery.flipster.min.js"></script>
      <script src="{{url('BB')}}/assets/js/odometer.js"></script>
      <script src="{{url('BB')}}/assets/js/appear-2.js"></script>
      <script src="{{url('BB')}}/assets/js/nice-select.min.js"></script>
      <script src="{{url('BB')}}/assets/js/jquery.datetimepicker.min.js"></script>
      <script src="{{url('BB')}}/assets/js/tilt.min.js"></script>
      <script src="{{url('BB')}}/assets/js/wow.min.js"></script>
      <script src="{{url('BB')}}/assets/js/main.js"></script>
    </body>
  </html>
  