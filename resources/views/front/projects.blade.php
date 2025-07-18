@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')

    <!-- Page title start-->
    <div class="page-title-area header-next">
      <img class="lazyload blur-up bg-img" src="{{ url('swadesh') }}/assets/img/6511175715121.jpg" />
      <div class="container">
        <div class="content text-center">
          <h1 class="color-white">Projects</h1>
          <ul class="list-unstyled">
            <li class="d-inline-block">
              <a href="">Home</a>
            </li>
            <li class="d-inline-block">>></li>
            <li class="d-inline-block active">Projects</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page title end-->
    <div class="projects-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="product-sort-area mb-20" data-aos="fade-up">
              <div class="row align-items-center">
                <div class="col-lg-8">
                  <form action="projects" method="GET">
                    <div class="project-filter-form radius-md pb-10">
                      <div class="row">
                        <div class="col-lg-4 mb-10">
                          <input
                            type="search"
                            name="title"
                            class="form-control"
                            placeholder="Search By Title"
                            value=""
                          />
                        </div>
                        <div class="col-lg-4 mb-10">
                          <input
                            type="search"
                            name="location"
                            class="form-control"
                            placeholder="Search By Location"
                            value=""
                          />
                        </div>
                        <div class="col-lg-3 mb-10">
                          <button
                            class="btn btn-lg btn-primary w-100"
                            type="submit"
                          >
                            <i class="far fa-search"></i> Search
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-4 mb-20">
                  <ul class="product-sort-list text-lg-end list-unstyled">
                    <li class="item">
                      <form action="" method="GET" onchange="submit();">
                        <div class="sort-item d-flex align-items-center">
                          <label class="color-dark me-2">Sort By:</label>
                          <select class="nice-select" name="sort">
                            <option value="new">Newest</option>
                            <option value="old">Oldest</option>
                            <option value="high-to-low">High to Low</option>
                            <option value="low-to-high">Low to High</option>
                          </select>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="row">
              <div
                class="col-lg-4 col-sm-6"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="project-details.html">
                  <div class="card mb-30 product-default">
                    <div class="card-img">
                      <div class="lazy-container ratio ratio-1-3">
                        <img
                          class="lazyload"
                          data-src="{{ url('swadesh') }}/assets/img/project/featured/666abf8a016c2.jpg"
                        />
                      </div>
                      <span class="label"> Under Construction </span>
                    </div>
                    <div class="card-text text-center p-3">
                      <h3 class="card-title product-title color-white mb-1">
                        Crown Jewel Estates
                      </h3>
                      <span class="location icon-start"
                        ><i class="fal fa-map-marker-alt"></i>Hadapsar</span
                      >

                      <span class=""> 50 lac - 1.12 Cr </span>

                      <span class=""> 3034 sq ft </span>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="col-lg-4 col-sm-6"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="project-details.html">
                  <div class="card mb-30 product-default">
                    <div class="card-img">
                      <div class="lazy-container ratio ratio-1-3">
                        <img
                          class="lazyload"
                          data-src="{{ url('swadesh') }}/assets/img/project/featured/666abe2a61978.png"
                        />
                      </div>
                      <span class="label"> Complete </span>
                    </div>
                    <div class="card-text text-center p-3">
                      <h3 class="card-title product-title color-white mb-1">
                        Prestige Trade Center
                      </h3>
                      <span class="location icon-start"
                        ><i class="fal fa-map-marker-alt"></i>Baner</span
                      >

                      <span class="price"> 1 Cr - 1.5 Cr </span>

                      <span class=""> 5000 sq ft </span>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="col-lg-4 col-sm-6"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="project-details.html">
                  <div class="card mb-30 product-default">
                    <div class="card-img">
                      <div class="lazy-container ratio ratio-1-3">
                        <img
                          class="lazyload"
                          data-src="{{ url('swadesh') }}/assets/img/project/featured/6667e1c48d848.jpg"
                        />
                      </div>
                      <span class="label"> Complete </span>
                    </div>
                    <div class="card-text text-center p-3">
                      <h3 class="card-title product-title color-white mb-1">
                        Serenity Grand Residences
                      </h3>
                      <span class="location icon-start"
                        ><i class="fal fa-map-marker-alt"></i>Pune</span
                      >

                      <span class="price"> 1 Cr - 1.5 Cr </span>

                      <span class=""> 5000 sq ft </span>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="col-lg-4 col-sm-6"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="project-details.html">
                  <div class="card mb-30 product-default">
                    <div class="card-img">
                      <div class="lazy-container ratio ratio-1-3">
                        <img
                          class="lazyload"
                          data-src="{{ url('swadesh') }}/assets/img/project/featured/6667e0ba713b1.jpg"
                        />
                      </div>
                      <span class="label"> Under Construction </span>
                    </div>
                    <div class="card-text text-center p-3">
                      <h3 class="card-title product-title color-white mb-1">
                        Central Plaza Mixed-Use
                      </h3>
                      <span class="location icon-start"
                        ><i class="fal fa-map-marker-alt"></i>Hadapsar</span
                      >

                      <span class="price"> 1 Cr - 1.5 Cr </span>

                      <span class=""> 5000 sq ft </span>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="col-lg-4 col-sm-6"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="project-details.html">
                  <div class="card mb-30 product-default">
                    <div class="card-img">
                      <div class="lazy-container ratio ratio-1-3">
                        <img
                          class="lazyload"
                          data-src="{{ url('swadesh') }}/assets/img/project/featured/6667dbfd93016.jpg"
                        />
                      </div>
                      <span class="label"> Complete </span>
                    </div>
                    <div class="card-text text-center p-3">
                      <h3 class="card-title product-title color-white mb-1">
                        Harmony Urban Village
                      </h3>
                      <span class="location icon-start"
                        ><i class="fal fa-map-marker-alt"></i>Hadapsar</span
                      >

                      <span class="price"> 1 Cr - 1.5 Cr </span>

                      <span class=""> 5000 sq ft </span>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="col-lg-4 col-sm-6"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="project-details.html">
                  <div class="card mb-30 product-default">
                    <div class="card-img">
                      <div class="lazy-container ratio ratio-1-3">
                        <img
                          class="lazyload"
                          data-src="{{ url('swadesh') }}/assets/img/project/featured/6667d8a700c18.jpg"
                        />
                      </div>
                      <span class="label"> Complete </span>
                    </div>
                    <div class="card-text text-center p-3">
                      <h3 class="card-title product-title color-white mb-1">
                        Midtown Business Towers
                      </h3>
                      <span class="location icon-start"
                        ><i class="fal fa-map-marker-alt"></i>Pune</span
                      >

                      <span class="price"> 1 Cr - 1.5 Cr </span>

                      <span class=""> 5000 sq ft </span>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="pagination mb-30 justify-content-center">
              <nav>
                <ul class="pagination">
                  <li
                    class="page-item disabled"
                    aria-disabled="true"
                    aria-label="&laquo; Previous"
                  >
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                  </li>

                  <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="projects?page=2">2</a>
                  </li>

                  <li class="page-item">
                    <a
                      class="page-link"
                      href="projects?page=2"
                      rel="next"
                      aria-label="Next &raquo;"
                      >&rsaquo;</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
            <div class="text-center mt-4">
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
        </div>
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