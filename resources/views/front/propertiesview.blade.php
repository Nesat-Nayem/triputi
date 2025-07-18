@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')

@section('header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection


<style>
    #amenity svg{
        width: 20px;
    }
    #amenity strong{
        display: flex !important;
    align-items: center;
    gap: 5px;
    }
</style>

<div class="product-single pt-100 pb-70 border-top header-next">
    <div class="container">
      <div class="row gx-xl-5">
        <div class="col-lg-9 col-xl-8">
          <div class="property_details_card mb-40">
            <div class="row mb-40">
              <div class="col-md-12 text-end mb-4">
                @if ($row->property_type == "latest_properties")
                <div class="badge bg-danger text-capitalize">@if(isset($row->category->title)){{ $row->category->title }}@endif</div>
                @elseif($row->property_type == "land_plot")
                <div class="badge bg-danger text-capitalize">@if(isset($row->plot_category))
                    @if($row->plot_category == "na_plot")
                        {{ 'NA Plot' }}
                        @else
                        {{ 'Agriculture Plot' }}
                    @endif
                    @endif
                </div>
                @endif
              </div>
              <div class="col-md-8">
                <h3 class="product-title">
                  <a href="javascript:void(0)">Prime Commercial Building for Sale</a>
                </h3>
                <div class="product-location icon-start">
                  <i class="fal fa-map-marker-alt"></i>
                  <span>{{ $row->location }} </span>
                  {{-- <span> Pune, Maharashtra </span> --}}
                </div>
              </div>
              <div class="col-md-4">
                <div class="product-price mb-10">
                  <span class="new-price">Price: {{ $row->price }}</span>
                </div>
              </div>
            </div>

            <div class="product-single-gallery mb-40">
              <div class="row">
                @if (isset($row->thumbnail))

                <div class="col-lg-8">
                  <div>
                    <img
                      src="{{ url('') }}/{{ $row->thumbnail }}"
                      alt="img"
                      style="width: 100%; height: 350px"
                    />
                  </div>
                </div>

                @endif
                @if(isset($row->gallery))

                @php
                    $gallery = json_decode($row->gallery);
                @endphp


                <div class="col-lg-4">
                  <div class="row">
                    @foreach ($gallery as $item)
                    <div class="col-lg-6 mb-10">
                      <img
                        src="{{ url('') }}/{{ $item }}"
                        alt="img"
                        style="width: 100%; height: 100px"
                      />
                    </div>
                    @endforeach

                  </div>
                </div>



                @endif
              </div>
            </div>
            <div class="mb-4" style="display: flex; justify-content: end">
              <div style="display: flex; gap: 15px">
                <a
                  href=""
                  class="share-icon"
                  data-bs-toggle="modal"
                  data-bs-target="#socialMediaModal"
                  style="
                    width: 50px;
                    height: 50px;
                    background: red;
                    color: #fff;
                    border-radius: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                >
                  <i class="fa fa-share-alt"></i>
                </a>
                <a
                  href="wishlist.html"
                  data-tooltip="tooltip"
                  data-bs-placement="top"
                  data-bs-original-title="Add favorite"
                  style="
                    width: 50px;
                    height: 50px;
                    background: red;
                    color: #fff;
                    border-radius: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                >
                  <i class="fa fa-heart"></i>
                </a>
                <a
                  href="compare.html"
                  data-tooltip="tooltip"
                  data-bs-placement="top"
                  data-bs-original-title="Compare"
                  style="
                    width: 50px;
                    height: 50px;
                    background: red;
                    color: #fff;
                    border-radius: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                >
                  <i class="fa fa-compass"></i>
                </a>
                <a
                  href=""
                  data-tooltip="tooltip"
                  data-bs-placement="top"
                  data-bs-original-title="Print"
                  style="
                    width: 50px;
                    height: 50px;
                    background: red;
                    color: #fff;
                    border-radius: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                >
                  <i class="fa fa-file-pdf"></i>
                </a>
              </div>
            </div>

            <div class="mb-40" style="background: #fff; padding: 10px">
              <div class="row">
                <div class="col-lg-6 col-6">
                  <ul
                    class="product-info p-0 list-unstyled d-flex align-items-center mt-10 mb-30"
                  >
                    <li
                      class="icon-start"
                      data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="2 Beds"
                    >
                      <i class="fal fa-bed"></i>
                      <span>{{ $row->bedrooms }} Bedrooms</span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-6">
                  <ul
                    class="product-info p-0 list-unstyled d-flex align-items-center mt-10 mb-30"
                  >
                    <li
                      class="icon-start"
                      data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="2 Baths"
                    >
                      <i class="fal fa-shower"></i>
                      <span>{{ $row->bathrooms }} Bathrooms</span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-6">
                  <ul
                    class="product-info p-0 list-unstyled d-flex align-items-center mt-10 mb-30"
                  >
                    <li
                      class="icon-start"
                      data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Min-Max Area"
                    >
                      <i class="fal fa-building"></i>
                      <span
                        >Min-Max Area :- <span> {{ $row->arrea }} sq.ft</span></span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-6">
                  <ul
                    class="product-info p-0 list-unstyled d-flex align-items-center mt-10 mb-30"
                  >
                    <li
                      class="icon-start"
                      data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Furnished Status"
                    >
                      <i class="fal fa-home-alt"></i>
                      <span
                        >Furnished Status :- <span>{{ $row->furnished_status }}</span></span
                      >
                    </li>
                  </ul>
                </div>

                <div class="col-lg-6 col-6">
                  <ul
                    class="product-info p-0 list-unstyled d-flex align-items-center mt-10 mb-30"
                  >
                    <li
                      class="icon-start"
                      data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Construction Age"
                    >
                      <i class="fal fa-gamepad"></i>
                      <span
                        >Construction Age :-
                        <span>{{ $row->construction_age }} Years </span></span
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>


            @if(isset($row->amenity) && $row->amenity !== "null" )

            <div class="row" class="mb-40">
              <h4 class="mb-4">Property Amenities:-</h4>


<?php


// Decode JSON into an array
$ids = json_decode($row->amenity, true);

// Query with whereIn condition
$result = DB::table('amenity')
    ->whereIn('id', $ids)
    ->get();


    foreach ($result as $key => $value) {
    ?>
        <div class="col-lg-6 col-sm-6 col-md-4 mb-20" id="amenity">
                <strong class="mb-1 text-dark d-block"
                  ><?= $value->icon_code ?>{{ $value->name }}</strong>
        </div>
    <?php } ?>



            </div>


            @endif


            <hr />
            <div class="row">
              <div class="col-lg-6">
                <button
                  class="btn btn-primary rounded-pill"
                  style="font-size: 12px"
                  data-bs-toggle="modal"
                  data-bs-target="#contactModal"
                >
                  Get Contact Owner
                </button>
                <button
                  class="btn btn-outline btn-sm rounded-pill"
                  style="font-size: 12px"
                  data-bs-toggle="modal"
                  data-bs-target="#contactModal"
                >
                  Get Phone No.
                </button>
              </div>
            </div>
          </div>

          {{-- <div class="property_details_card mb-40">
            <h4 class="mb-20">More Details</h4>
            <div class="mb-40">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Price Breakup</p>
                    </td>
                    <td>
                      <h6>
                        ₹3.1 Cr | ₹15,50,000 Approx. Registration Charges |
                        ₹8,000 Monthly
                      </h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Booking Amount</p>
                    </td>
                    <td>
                      <h6>₹25.0 Lac</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Address</p>
                    </td>
                    <td>
                      <h6>
                        b wing 801, Malad West, Mumbai - Western Mumbai,
                        Maharashtra
                      </h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Landmarks</p>
                    </td>
                    <td>
                      <h6>
                        few steps to malad metro station, scools and goregan
                        sports club near
                      </h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Furnishing</p>
                    </td>
                    <td>
                      <h6>Furnished</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Flooring</p>
                    </td>
                    <td>
                      <h6>Vitrified, Ceramic Tiles</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Type of Ownership</p>
                    </td>
                    <td>
                      <h6>Freehold</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Overlooking</p>
                    </td>
                    <td>
                      <h6>Main Road</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Age of Construction</p>
                    </td>
                    <td>
                      <h6>5 to 10 years</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Additional Rooms</p>
                    </td>
                    <td>
                      <h6>None of these</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Water Availability</p>
                    </td>
                    <td>
                      <h6>24 Hours Available</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Status of Electricity</p>
                    </td>
                    <td>
                      <h6>No/Rare Powercut</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Lift</p>
                    </td>
                    <td>
                      <h6>4</h6>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style="font-weight: 300">Authority Approval</p>
                    </td>
                    <td>
                      <h6>Municipal Corporation of Greater Mumbai</h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="product-desc mb-40">
              <h3 class="mb-20">Property Description</h3>
              <p class="summernote-content"></p>
              <p>
                Welcome to luxury living at its finest! This stunning
                penthouse offers the pinnacle of elegance and sophistication.
                With 4 bedrooms, 4.5 baths, and a sprawling 3115 of living
                space, this designer masterpiece is sure to impress. Step
                outside onto the huge open terrace and be captivated by the
                breathtaking sunset views. Entertain friends and family in
                style with the summer kitchen and jacuzzi, creating memories
                that will last a lifetime. The masterful layout and one-story
                living make this penthouse a truly unique find. Discover the
                renowned Brickell City Centre shops just steps away.
                Experience the best of luxury living in Brickell. Don't miss
                your chance to own this remarkable penthouse!
              </p>
              <a href="#" data-bs-toggle="modal" data-bs-target="#descModal"
                >Read More</a
              >
            </div>

            <div class="row">
              <div class="col-lg-6">
                <button
                  class="btn btn-primary rounded-pill"
                  style="font-size: 12px"
                  data-bs-toggle="modal"
                  data-bs-target="#contactModal"
                >
                  Get Contact Owner
                </button>
              </div>
            </div>
          </div> --}}

          <!-- <div class="property_details_card mb-40">
            <div
              class="mb-30"
              style="display: flex; justify-content: space-between"
            >
              <h4>About Project</h4>
              <a href="properties.html" style="font-size: 12px">
                Explore Project <i class="far fa-arrow-right"></i>
              </a>
            </div>

            <div class="row g-4 mb-40">
              <div class="col-lg-3">
                <img
                  src="{{ url('swadesh') }}/assets/img/property/1.png"
                  alt="img"
                  style="width: 100px; height: 100px"
                />
              </div>
              <div class="col-lg-3">
                <h4>Chirag Bhagat Grandeur</h4>
              </div>
              <div class="col-lg-3">
                <div style="border-left: 1px solid #b3afaf; padding: 20px">
                  <p style="margin-bottom: 0">Price</p>
                  <h6>Call For Price</h6>
                </div>
              </div>
              <div class="col-lg-3">
                <div style="border-left: 1px solid #b3afaf; padding: 20px">
                  <p style="margin-bottom: 0">Unit</p>
                  <h6>83 Units</h6>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <button
                  class="btn btn-outline btn-sm rounded-pill"
                  style="font-size: 12px"
                >
                  Follow Project
                </button>
                <a
                  href="compare-projects.html"
                  class="btn btn-outline btn-sm rounded-pill"
                  style="font-size: 12px"
                >
                  Compare Projects
                </a>
              </div>
            </div>
          </div> -->

          {{-- <div class="property_details_card mb-40">
            <div
              class="mb-30"
              style="display: flex; justify-content: space-between"
            >
              <h4>{{ $row->title }}</h4>
            </div>

            <section class="product-area featured-product">
              <div class="container">
                <div class="row">
                  <div class="col-12 aos-init aos-animate" data-aos="fade-up">
                    <div
                      class="swiper product-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    >
                      <div
                        class="swiper-wrapper"
                        id="swiper-wrapper-cd5832d796aafc4d"
                        aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px)"
                      >
                        <div
                          class="swiper-slide swiper-slide-active"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 326px; margin-right: 24px"
                        >
                          <div>
                            <div
                              class="product-default radius-md mb-30 aos-init aos-animate"
                              data-aos='"fade-up"'
                              data-aos-delay='"100"'
                            >
                              <figure class="product-img">
                                <a
                                  href=""
                                  class="lazy-container ratio ratio-1-1"
                                >
                                  <img
                                    class="ls-is-cached lazyloaded"
                                    src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                    data-src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                  />
                                </a>
                              </figure>
                              <div class="product-details">
                                <h3 class="product-title">
                                  <a
                                    href="property-details.html"
                                    style="font-size: 14px"
                                    >₹ {{ $row->price }} | {{ $row->arrea }} sqft</a
                                  >
                                </h3>

                                <span
                                  class="product-location icon-start"
                                  style="font-size: 12px"
                                >
                                  <i class="fal fa-map-marker-alt"></i>
                                  {{ $row->location }}
                                </span>
                              </div>
                              <span
                                class="label"
                                style="font-size: 12px; color: #fff"
                                >



                                </span
                              >
                            </div>
                            <!-- product-default -->
                          </div>
                        </div>

                        <div
                          class="swiper-slide swiper-slide-active"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 326px; margin-right: 24px"
                        >
                          <div>
                            <div
                              class="product-default radius-md mb-30 aos-init aos-animate"
                              data-aos='"fade-up"'
                              data-aos-delay='"100"'
                            >
                              <figure class="product-img">
                                <a
                                  href=""
                                  class="lazy-container ratio ratio-1-1"
                                >
                                  <img
                                    class="ls-is-cached lazyloaded"
                                    src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                    data-src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                  />
                                </a>
                              </figure>
                              <div class="product-details">
                                <h3 class="product-title">
                                  <a
                                    href="property-details.html"
                                    style="font-size: 14px"
                                    >₹ 2.28 Cr | 1150 sqft</a
                                  >
                                </h3>

                                <span
                                  class="product-location icon-start"
                                  style="font-size: 12px"
                                >
                                  <i class="fal fa-map-marker-alt"></i>
                                  Hadapsar
                                </span>
                              </div>
                              <span
                                class="label"
                                style="font-size: 12px; color: #fff"
                                ><a
                                  href=""
                                  style="font-size: 12px; color: #fff"
                                >
                                  Sale
                                </a></span
                              >
                            </div>
                            <!-- product-default -->
                          </div>
                        </div>

                        <div
                          class="swiper-slide swiper-slide-active"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 326px; margin-right: 24px"
                        >
                          <div>
                            <div
                              class="product-default radius-md mb-30 aos-init aos-animate"
                              data-aos='"fade-up"'
                              data-aos-delay='"100"'
                            >
                              <figure class="product-img">
                                <a
                                  href=""
                                  class="lazy-container ratio ratio-1-1"
                                >
                                  <img
                                    class="ls-is-cached lazyloaded"
                                    src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                    data-src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                  />
                                </a>
                              </figure>
                              <div class="product-details">
                                <h3 class="product-title">
                                  <a
                                    href="property-details.html"
                                    style="font-size: 14px"
                                    >₹ 2.28 Cr | 1150 sqft</a
                                  >
                                </h3>

                                <span
                                  class="product-location icon-start"
                                  style="font-size: 12px"
                                >
                                  <i class="fal fa-map-marker-alt"></i>
                                  Hadapsar
                                </span>
                              </div>
                              <span
                                class="label"
                                style="font-size: 12px; color: #fff"
                                ><a
                                  href=""
                                  style="font-size: 12px; color: #fff"
                                >
                                  Rent
                                </a></span
                              >
                            </div>
                            <!-- product-default -->
                          </div>
                        </div>

                        <div
                          class="swiper-slide swiper-slide-active"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 326px; margin-right: 24px"
                        >
                          <div>
                            <div
                              class="product-default radius-md mb-30 aos-init aos-animate"
                              data-aos='"fade-up"'
                              data-aos-delay='"100"'
                            >
                              <figure class="product-img">
                                <a
                                  href=""
                                  class="lazy-container ratio ratio-1-1"
                                >
                                  <img
                                    class="ls-is-cached lazyloaded"
                                    src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                    data-src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                  />
                                </a>
                              </figure>
                              <div class="product-details">
                                <h3 class="product-title">
                                  <a
                                    href="property-details.html"
                                    style="font-size: 14px"
                                    >₹ 2.28 Cr | 1150 sqft</a
                                  >
                                </h3>

                                <span
                                  class="product-location icon-start"
                                  style="font-size: 12px"
                                >
                                  <i class="fal fa-map-marker-alt"></i>
                                  Hadapsar
                                </span>
                              </div>
                              <span
                                class="label"
                                style="font-size: 12px; color: #fff"
                                ><a
                                  href=""
                                  style="font-size: 12px; color: #fff"
                                >
                                  Rent
                                </a></span
                              >
                            </div>
                            <!-- product-default -->
                          </div>
                        </div>

                        <div
                          class="swiper-slide swiper-slide-active"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 326px; margin-right: 24px"
                        >
                          <div>
                            <div
                              class="product-default radius-md mb-30 aos-init aos-animate"
                              data-aos='"fade-up"'
                              data-aos-delay='"100"'
                            >
                              <figure class="product-img">
                                <a
                                  href=""
                                  class="lazy-container ratio ratio-1-1"
                                >
                                  <img
                                    class="ls-is-cached lazyloaded"
                                    src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                    data-src="{{ url('swadesh') }}/assets/img/property/featureds/6666db80c26f7.jpg"
                                  />
                                </a>
                              </figure>
                              <div class="product-details">
                                <h3 class="product-title">
                                  <a
                                    href="property-details.html"
                                    style="font-size: 14px"
                                    >₹ 2.28 Cr | 1150 sqft</a
                                  >
                                </h3>

                                <span
                                  class="product-location icon-start"
                                  style="font-size: 12px"
                                >
                                  <i class="fal fa-map-marker-alt"></i>
                                  Hadapsar
                                </span>
                              </div>
                              <span
                                class="label"
                                style="font-size: 12px; color: #fff"
                                ><a
                                  href=""
                                  style="font-size: 12px; color: #fff"
                                >
                                  Sale
                                </a></span
                              >
                            </div>
                            <!-- product-default -->
                          </div>
                        </div>
                      </div>
                      <!-- Slider pagination -->
                      <div
                        class="swiper-pagination position-static mb-30 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
                        id="product-slider-pagination"
                      >
                        <span
                          class="swiper-pagination-bullet swiper-pagination-bullet-active"
                          tabindex="0"
                          role="button"
                          aria-label="Go to slide 1"
                          aria-current="true"
                        ></span
                        ><span
                          class="swiper-pagination-bullet"
                          tabindex="0"
                          role="button"
                          aria-label="Go to slide 2"
                        ></span>
                      </div>
                      <span
                        class="swiper-notification"
                        aria-live="assertive"
                        aria-atomic="true"
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div> --}}

          {{-- <div class="property_details_card mb-40">
            <div
              class="mb-30"
              style="display: flex; justify-content: space-between"
            >
              <h4>About Malad West</h4>
              <a href="properties.html" style="font-size: 12px">
                Explore Locality <i class="far fa-arrow-right"></i>
              </a>
            </div>

            <div class="row g-4 mb-40">
              <div class="col-lg-3">
                <div class="product-video mb-40">
                  <div class="lazy-container radius-lg ratio ratio-16-11">
                    <img
                      class="lazyloaded"
                      src="{{ url('swadesh') }}/assets/img/property-city/66669e7016717.jpg"
                      data-src="{{ url('swadesh') }}/assets/img/property/video/666be88bc1ad0.png"
                    />
                    <a
                      href="https://www.youtube.com/watch?v=mrpiPK8_up0"
                      class="video-btn youtube-popup p-absolute"
                    >
                      <i class="fas fa-play"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="d-flex mb-30" style="gap: 30px">
                  <div>
                    <div class="d-flex" style="gap: 10px">
                      <h5 style="margin-bottom: 0">4.1</h5>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half text-warning"></i>
                    </div>
                    <p style="font-size: 12px">380 Reviews</p>
                  </div>
                  <div>
                    <div class="d-flex" style="gap: 10px">
                      <h5 style="margin-bottom: 0">Rank 236</h5>
                    </div>
                    <p style="font-size: 12px">out of 3015 localities</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Environment
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Neighbourhood
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.2
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Roads
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          3.8
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Safety
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.3
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Cleanliness
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          3.6
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Commuting
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          3.7
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Public Transport
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.3
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Parking
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          3.7
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Connectivity
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Traffic
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          2.9
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Places of Interest
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.5
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Schools
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.5
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Hospitals
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.5
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Restaurants
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.5
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="mb-20">
                      <div
                        style="display: flex; justify-content: space-between"
                      >
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          Markets
                        </p>
                        <p
                          style="
                            margin-bottom: 0;
                            font-size: 12px;
                            color: #000;
                          "
                        >
                          4.5
                        </p>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-40">
              <div class="col-lg-12">
                <!-- Carousel Wrapper -->
                <div
                  id="institutesCarousel"
                  class="carousel slide"
                  data-bs-ride="carousel"
                >
                  <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Educational Institutes</h6>
                              <h6><i class="far fa-industry"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Veer Bhagat Singh Vidyalaya
                                </li>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Rajiv Gandhi Institute Of Technology
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Shopping Centers</h6>
                              <h6><i class="far fa-shopping-bag"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Hypercity
                                </li>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Croma
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Nearby Localities</h6>
                              <h6><i class="far fa-location"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Kanchpada, Mumbai
                                </li>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Rathodi, Mumbai
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Second Slide -->
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Hospital</h6>
                              <h6><i class="far fa-hospital"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Choksi Hospital
                                </li>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Surana Hospital & Research Center
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Bank</h6>
                              <h6><i class="far fa-building"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Saraswat Bank
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Commercial Hub</h6>
                              <h6><i class="far fa-building"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Andheri Midc
                                </li>

                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Nesco It Park
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Third Slide -->
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Tourist Spot</h6>
                              <h6><i class="far fa-building"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Church Malad West
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="card p-3" style="height: 200px">
                            <div
                              class="mb-20"
                              style="
                                display: flex;
                                justify-content: space-between;
                              "
                            >
                              <h6>Airport</h6>
                              <h6><i class="far fa-plane"></i></h6>
                            </div>
                            <div>
                              <ul>
                                <li
                                  style="
                                    font-size: 12px;
                                    font-weight: 300;
                                    display: flex;
                                    gap: 10px;
                                    margin-bottom: 10px;
                                  "
                                >
                                  <i
                                    class="fas fa-check"
                                    style="
                                      font-size: 8px;
                                      font-weight: 300;
                                      width: 20px;
                                      height: 20px;
                                      background: #3d8774;
                                      border-radius: 50px;
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      color: #fff;
                                    "
                                  ></i>
                                  Chhatrapati Shivaji Maharaj Inte...
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Carousel Controls -->
                  <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#institutesCarousel"
                    data-bs-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#institutesCarousel"
                    data-bs-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>

            <div class="row mb-40">
              <p style="color: #000; font-size: 14px; text-align: justify">
                Malad West is a prominent and up market residential locality
                in the western suburbs, situated on the western line of the
                Mumbai Suburban Railway. It is a green and serene locality
                situated along the Malad Creek and surrounded by mangroves.
                The residential development in Malad West majorly comprises of
                multi- storey apartments, and villas; and is driven by
                proximity to Mindspace and other IT parks, along with
                excellent connectivity to other parts of Mumbai. Also, it is
                located adjacent to other prominent locations of western
                Mumbai such as Malad East, Kandivali West, and Goregaon West.
                Many completed, as well as under-construction high-rise
                residential projects in the area are Transcon Auris Serenity,
                Shreeji Atlantis, Royal Oasis, Sheth Irene, and Gurukrupa
                Marina Enclave.
              </p>
            </div>
          </div> --}}

          <div class="property_details_card mb-40">
            <div
              class="mb-30"
              style="display: flex; justify-content: space-between"
            >
              <h4>Chirag Bhagat Grandeur Reviews & Ratings</h4>
            </div>

            <section class="testimonial-area pb-70">
              <div class="overlay-bg d-none d-lg-block">
                <img
                  class="blur-up lazyloaded"
                  data-src="{{ url('swadesh') }}/assets/img/6572e7c01c264.png"
                  src="{{ url('swadesh') }}/assets/img/6572e7c01c264.png"
                />
              </div>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-12">
                    <div
                      class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                      id="testimonial-slider-1"
                    >
                      <div
                        class="swiper-wrapper"
                        id="swiper-wrapper-ccf616a96fc585e8"
                        aria-live="polite"
                        style="
                          transform: translate3d(-939px, 0px, 0px);
                          transition-duration: 0ms;
                        "
                      >
                        <div
                          class="swiper-slide pb-30 swiper-slide-duplicate aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="3"
                          role="group"
                          aria-label="4 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyloaded"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e090d7f3613.png"
                                  src="{{ url('swadesh') }}/assets/img/clients/64e090d7f3613.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  As someone who values efficiency, I
                                  appreciated how organized and informative
                                  this car listing website is. The search
                                  filters helped me narrow down my options
                                  quickly.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">John Martinez</h6>
                                  <span class="designation"
                                    >IT Consultant</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 90%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(4.5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 swiper-slide-duplicate swiper-slide-prev aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="4"
                          role="group"
                          aria-label="5 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyloaded"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e090a46f9b5.png"
                                  src="{{ url('swadesh') }}/assets/img/clients/64e090a46f9b5.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  I had an amazing experience using this car
                                  listing website. The user-friendly interface
                                  made it so easy for me to find the perfect
                                  car that suited my needs.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Hames Rodrigo</h6>
                                  <span class="designation"
                                    >Marketing Executive</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 100%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 swiper-slide-active aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="0"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyloaded"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e091afd6994.png"
                                  src="{{ url('swadesh') }}/assets/img/clients/64e091afd6994.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  I found the estaty website to be quite
                                  useful overall. It helped me find some
                                  interesting options for my next project.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Jennifer Lee</h6>
                                  <span class="designation"
                                    >Freelance Photographer</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 100%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 swiper-slide-next aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="1"
                          role="group"
                          aria-label="2 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyloaded"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e091760ae84.png"
                                  src="{{ url('swadesh') }}/assets/img/clients/64e091760ae84.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  "I had been dreading the process of
                                  searching for a new home, but this website
                                  made it surprisingly enjoyable. The
                                  intuitive layout made navigation a breeze.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Michael Collins</h6>
                                  <span class="designation"
                                    >Marketing Manager</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 86%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(4.3) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="2"
                          role="group"
                          aria-label="3 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyloaded"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e09132e765f.png"
                                  src="{{ url('swadesh') }}/assets/img/clients/64e09132e765f.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  I'm usually quite skeptical about online
                                  purchases, but this estaty listing website
                                  exceeded my expectations. The transparency
                                  in providing vehicle histories
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Emily Parker</h6>
                                  <span class="designation">Teacher</span>
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 100%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="3"
                          role="group"
                          aria-label="4 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyloaded"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e090d7f3613.png"
                                  src="{{ url('swadesh') }}/assets/img/clients/64e090d7f3613.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  As someone who values efficiency, I
                                  appreciated how organized and informative
                                  this car listing website is. The search
                                  filters helped me narrow down my options
                                  quickly.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">John Martinez</h6>
                                  <span class="designation"
                                    >IT Consultant</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 90%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(4.5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 swiper-slide-duplicate-prev aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="4"
                          role="group"
                          aria-label="5 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyload"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e090a46f9b5.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  I had an amazing experience using this car
                                  listing website. The user-friendly interface
                                  made it so easy for me to find the perfect
                                  car that suited my needs.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Hames Rodrigo</h6>
                                  <span class="designation"
                                    >Marketing Executive</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 100%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 swiper-slide-duplicate swiper-slide-duplicate-active aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="0"
                          role="group"
                          aria-label="1 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyload"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e091afd6994.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  I found the estaty website to be quite
                                  useful overall. It helped me find some
                                  interesting options for my next project.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Jennifer Lee</h6>
                                  <span class="designation"
                                    >Freelance Photographer</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 100%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(5) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="swiper-slide pb-30 swiper-slide-duplicate swiper-slide-duplicate-next aos-init aos-animate"
                          data-aos="fade-up"
                          data-swiper-slide-index="1"
                          role="group"
                          aria-label="2 / 5"
                          style="width: 439.5px; margin-right: 30px"
                        >
                          <div class="slider-item">
                            <div class="client-img">
                              <div class="lazy-container ratio ratio-1-1">
                                <img
                                  class="lazyload"
                                  data-src="{{ url('swadesh') }}/assets/img/clients/64e091760ae84.png"
                                />
                              </div>
                            </div>
                            <div class="client-content mt-30">
                              <div class="quote">
                                <p class="text">
                                  "I had been dreading the process of
                                  searching for a new home, but this website
                                  made it surprisingly enjoyable. The
                                  intuitive layout made navigation a breeze.
                                </p>
                              </div>
                              <div
                                class="client-info d-flex flex-wrap gap-10 align-items-center justify-content-between"
                              >
                                <div class="content">
                                  <h6 class="name">Michael Collins</h6>
                                  <span class="designation"
                                    >Marketing Manager</span
                                  >
                                </div>
                                <div class="ratings">
                                  <div class="rate">
                                    <div
                                      class="rating-icon"
                                      style="width: 86%"
                                    ></div>
                                  </div>
                                  <span class="ratings-total">(4.3) </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span
                        class="swiper-notification"
                        aria-live="assertive"
                        aria-atomic="true"
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div class="row">
              <div class="col-lg-6">
                <button
                  class="btn btn-outline btn-sm rounded-pill"
                  style="font-size: 12px"
                  data-bs-toggle="modal"
                  data-bs-target="#reviewModal"
                >
                  Write a review
                </button>
              </div>
            </div>
          </div>

          {{-- <div class="property_details_card mb-40">
            <div
              class="mb-30"
              style="display: flex; justify-content: space-between"
            >
              <h4>Landmarks Near Chirag Bhagat Grandeur</h4>
            </div>

            <div class="row g-3">
              <div class="col-lg-6">
                <div class="card p-3" style="height: 200px">
                  <div
                    class="mb-20"
                    style="display: flex; justify-content: space-between"
                  >
                    <h6>Educational Institute</h6>
                    <h6><i class="far fa-industry"></i></h6>
                  </div>
                  <div>
                    <ul>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Veer Bhagat Singh Vidyalaya (0.4 Km)
                      </li>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Rajiv Gandhi Institute Of Technology (8.1 Km)
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card p-3" style="height: 200px">
                  <div
                    class="mb-20"
                    style="display: flex; justify-content: space-between"
                  >
                    <h6>Shopping Centre</h6>
                    <h6><i class="far fa-shopping-bag"></i></h6>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        <li
                          style="
                            font-size: 12px;
                            font-weight: 300;
                            display: flex;
                            gap: 10px;
                            margin-bottom: 10px;
                          "
                        >
                          <i
                            class="fas fa-check"
                            style="
                              font-size: 8px;
                              font-weight: 300;
                              width: 20px;
                              height: 20px;
                              background: #3d8774;
                              border-radius: 50px;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              color: #fff;
                            "
                          ></i>
                          Hypercity (2.2 Km)
                        </li>
                        <li
                          style="
                            font-size: 12px;
                            font-weight: 300;
                            display: flex;
                            gap: 10px;
                            margin-bottom: 10px;
                          "
                        >
                          <i
                            class="fas fa-check"
                            style="
                              font-size: 8px;
                              font-weight: 300;
                              width: 20px;
                              height: 20px;
                              background: #3d8774;
                              border-radius: 50px;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              color: #fff;
                            "
                          ></i>
                          Croma (1.3 Km)
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul>
                        <li
                          style="
                            font-size: 12px;
                            font-weight: 300;
                            display: flex;
                            gap: 10px;
                            margin-bottom: 10px;
                          "
                        >
                          <i
                            class="fas fa-check"
                            style="
                              font-size: 8px;
                              font-weight: 300;
                              width: 20px;
                              height: 20px;
                              background: #3d8774;
                              border-radius: 50px;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              color: #fff;
                            "
                          ></i>
                          Inorbit Mall (2.6 Km)
                        </li>
                        <li
                          style="
                            font-size: 12px;
                            font-weight: 300;
                            display: flex;
                            gap: 10px;
                            margin-bottom: 10px;
                          "
                        >
                          <i
                            class="fas fa-check"
                            style="
                              font-size: 8px;
                              font-weight: 300;
                              width: 20px;
                              height: 20px;
                              background: #3d8774;
                              border-radius: 50px;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              color: #fff;
                            "
                          ></i>
                          Bhag Laxmi Jewellers (0.7 Km)
                        </li>

                        <li
                          style="
                            font-size: 12px;
                            font-weight: 300;
                            display: flex;
                            gap: 10px;
                            margin-bottom: 10px;
                          "
                        >
                          <i
                            class="fas fa-check"
                            style="
                              font-size: 8px;
                              font-weight: 300;
                              width: 20px;
                              height: 20px;
                              background: #3d8774;
                              border-radius: 50px;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              color: #fff;
                            "
                          ></i>
                          D Mart (1.1 Km)
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card p-3" style="height: 200px">
                  <div
                    class="mb-20"
                    style="display: flex; justify-content: space-between"
                  >
                    <h6>Hospital</h6>
                    <h6><i class="far fa-hospital"></i></h6>
                  </div>
                  <div>
                    <ul>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Choksi Hospital (0.7 Km)
                      </li>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Surana Hospital & Research Centre (8.1 Km)
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card p-3" style="height: 200px">
                  <div
                    class="mb-20"
                    style="display: flex; justify-content: space-between"
                  >
                    <h6>Commercial Hub</h6>
                    <h6><i class="far fa-building"></i></h6>
                  </div>
                  <div>
                    <ul>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Andheri Midc (9.3 Km)
                      </li>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Nesco It Park (5.6 Km)
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card p-3" style="height: 200px">
                  <div
                    class="mb-20"
                    style="display: flex; justify-content: space-between"
                  >
                    <h6>Tourist Spot</h6>
                    <h6><i class="far fa-building"></i></h6>
                  </div>
                  <div>
                    <ul>
                      <li
                        style="
                          font-size: 12px;
                          font-weight: 300;
                          display: flex;
                          gap: 10px;
                          margin-bottom: 10px;
                        "
                      >
                        <i
                          class="fas fa-check"
                          style="
                            font-size: 8px;
                            font-weight: 300;
                            width: 20px;
                            height: 20px;
                            background: #3d8774;
                            border-radius: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                          "
                        ></i>
                        Church Malad West (0.7 Km)
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>

        <?php $agent = DB::table('users')->where('id',$row->user_id)->first();

        // echo "<pre>";
        //     print_r();
        //     echo "</pre>";

        ?>

        <div class="col-lg-3 col-xl-4">
          <aside class="sidebar-widget-area mb-10" data-aos="fade-up">

            @if (isset($agent))


            <div class="widget widget-form radius-md mb-30">
              <div>
                <h4>Contact Agent</h4>
              </div>
              <div class="user mb-20">
                <div class="user-img">
                  <div class="lazy-container ratio ratio-1-1 rounded-pill">
                    <a href="agent/rendall">
                      <img
                        class="lazyload"
                        {{-- src="{{ url('swadesh') }}/assets/img/blank-user.jpg" --}}
                        data-src="{{ url('') }}/uploads/<?=$agent->image ?>"
                      />
                    </a>
                  </div>
                </div>
                <div class="user-info">

                  <h4 class="mb-0">
                    <a href="javascript:void(0)"> {{ $agent->name }} </a>
                  </h4>
                  <a
                    class="d-block"
                    href="tel: +91<?=$agent->phone ?>
                                      "
                  >
                    +91<?=$agent->phone ?>
                  </a>
                </div>
              </div>

              <button
                class="btn btn-md btn-primary w-100"
                data-bs-target="#contactModal"
                data-bs-toggle="modal"
              >
                Get Phone No
              </button>
            </div>

            <div class="widget widget-form radius-md mb-30">
              <a href="">
                <div class="text-center">
                  <i class="fal fa-download"></i> Download Brochure
                </div>
              </a>
            </div>


            @endif

            {{-- <div class="widget widget-form radius-md mb-30">
              <div class="mb-30">
                <h4>Top Agent in this Locality</h4>
              </div>
              <div
                class="mb-30"
                style="display: flex; gap: 10px; align-items: center"
              >
                <div>
                  <img
                    src="{{ url('swadesh') }}/assets/img/agents/6669432319a9c.png"
                    alt="agent"
                    style="width: 80px; height: 80px; border-radius: 100px"
                  />
                </div>
                <div>
                  <h6 style="margin-bottom: 0">Anup Sanghavi</h6>
                  <p style="font-size: 12px">Propshop Realty</p>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 text-center">
                  <h6 style="margin-bottom: 0">96</h6>
                  <p style="font-size: 10px; color: #000">
                    Properties for sale
                  </p>
                </div>
                <div class="col-lg-4 text-center">
                  <h6 style="margin-bottom: 0">3</h6>
                  <p style="font-size: 10px; color: #000">
                    Properties for rent
                  </p>
                </div>
                <div class="col-lg-4 text-center">
                  <h6 style="margin-bottom: 0">
                    3 <i class="fas fa-star text-warning"></i>
                  </h6>
                  <p style="font-size: 10px; color: #000">CRISIL Rating</p>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <a
                    href="vendor-profile.html"
                    class="btn btn-primary rounded-pill"
                    style="font-size: 12px"
                  >
                    View Profile
                  </a>
                  <a
                    href="properties.html"
                    class="btn btn-outline btn-sm rounded-pill"
                    style="font-size: 12px"
                  >
                    View Properties
                  </a>
                </div>
              </div>
            </div> --}}

            <div class="widget widget-recent radius-md mb-30">
              <h3 class="title">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#products"
                  aria-expanded="true"
                  aria-controls="products"
                >
                  Related Property
                </button>
              </h3>
              <div id="products" class="collapse show">
                <div class="accordion-body p-0">
                  <div class="product-default product-inline mt-20">
                    <figure class="product-img">
                      <a
                        href="property/commercial-building-in-high-traffic-area"
                        class="lazy-container ratio ratio-1-1 radius-md"
                      >
                        <img
                          class="lazyload"
                          src="{{ url('swadesh') }}/assets/images/placeholder.png"
                          data-src="{{ url('swadesh') }}/assets/img/property/featureds/6666c12e28972.jpg"
                        />
                      </a>
                    </figure>
                    <div class="product-details">
                      <h5 class="product-title">
                        <a href="property-details.html"
                          >Kumar Codename Fireworks 2 BHK</a
                        >
                      </h5>
                      <div class="product-price">
                        <span class="">78.28 Lac - <span>1.05 Cr</span></span>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <span
                          class="product-location icon-start"
                          data-tooltip="tooltip"
                          data-bs-placement="top"
                          title="Location"
                        >
                          <i class="fal fa-map-marker-alt"></i>
                          Hadapsar
                        </span>

                        <ul
                          class="product-info p-0 list-unstyled d-flex align-items-center"
                        >
                          <li
                            class="icon-start"
                            data-tooltip="tooltip"
                            data-bs-placement="top"
                            title="Area"
                          >
                            <i class="fal fa-vector-square"></i>
                            <span>728 - 828-sq.ft.</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- product-default -->
                </div>
              </div>
            </div>
            {{-- <div class="text-center mb-3 mt-3">
              <a
                href=""
                target="_blank"
                onclick="adView(11)"
                class="ad-banner"
              >
                <img
                  data-src="{{ url('swadesh') }}/assets/img/advertisements/65bf704fb05c6.png"
                  alt="advertisement"
                  style="width: 300px; height: 600px"
                  class="lazyload blur-up"
                />
              </a>
            </div> --}}
          </aside>
        </div>
      </div>

      <section class="product-area featured-product pb-70">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="section-title title-inline mb-40 aos-init"
                data-aos="fade-up"
              >
                <h2 class="title">Premium Properties in Similar Projects</h2>
              </div>
            </div>
            <div class="col-12" data-aos="fade-up">
              <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    @foreach ($property as $key => $value)

                  <div class="swiper-slide">
                    @include('front/particals/box', $value)

                  </div>
                  @endforeach

                </div>
                <!-- Slider pagination -->
                <div
                  class="swiper-pagination position-static mb-30"
                  id="product-slider-pagination"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div
    class="modal fade"
    id="socialMediaModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="socialMediaModalTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Share On</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="actions d-flex justify-content-around">
            <div class="action-btn">
              <a
                class="facebook btn"
                href="https://www.facebook.com/sharer/sharer.php?u=property/prime-commercial-building-for-rent&src=sdkpreparse"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <br />
              <span> Facebook </span>
            </div>
            <div class="action-btn">
              <a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fcodecanyon8.kreativdev.com%2Festaty%2Fproperty%2Fprime-commercial-building-for-rent"
                class="linkedin btn"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <br />
              <span> Linkedin </span>
            </div>
            <div class="action-btn">
              <a
                class="twitter btn"
                href="https://twitter.com/intent/tweet?text=property/prime-commercial-building-for-rent"
                ><i class="fab fa-twitter"></i
              ></a>
              <br />
              <span> Twitter </span>
            </div>
            <div class="action-btn">
              <a
                class="whatsapp btn"
                href="whatsapp://send?text=property/prime-commercial-building-for-rent"
                ><i class="fab fa-whatsapp"></i
              ></a>
              <br />
              <span> Whatsapp </span>
            </div>
            <div class="action-btn">
              <a
                class="sms btn"
                href="sms:?body=property/prime-commercial-building-for-rent"
                class="sms"
                ><i class="fas fa-sms"></i
              ></a>
              <br />
              <span> SMS </span>
            </div>
            <div class="action-btn">
              <a
                class="mail btn"
                href="mailto:?subject=Digital Card&body=Check out this digital card property/prime-commercial-building-for-rent."
                ><i class="fas fa-at"></i
              ></a>
              <br />
              <span> Mail </span>
            </div>
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
  <!-- Footer-area start -->

  <!-- desc modal -->

  <div
    class="modal fade"
    id="descModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Property Description
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <p style="text-align: justify">
            Welcome to luxury living at its finest! This stunning penthouse
            offers the pinnacle of elegance and sophistication. With 4
            bedrooms, 4.5 baths, and a sprawling 3115 of living space, this
            designer masterpiece is sure to impress. Step outside onto the
            huge open terrace and be captivated by the breathtaking sunset
            views. Entertain friends and family in style with the summer
            kitchen and jacuzzi, creating memories that will last a lifetime.
            The masterful layout and one-story living make this penthouse a
            truly unique find. Discover the renowned Brickell City Centre
            shops just steps away. Experience the best of luxury living in
            Brickell. Don't miss your chance to own this remarkable penthouse!
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- contact modal -->

  <div
    class="modal fade"
    id="contactModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Fill Out this one-time form
          </h5>

          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div>
            <p>get agents detailed over email</p>
          </div>
          <div>
            <form action="">
              <div class="form-group mb-20">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Name"
                />
              </div>
              <div class="form-group mb-20">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Your Email"
                />
              </div>
              <div class="form-group mb-20">
                <input
                  type="number"
                  class="form-control"
                  placeholder="Phone"
                />
              </div>
              <div class="form-group mb-20">
                <label for="" style="text-align: center; font-size: 12px"
                  >I agree to swadesh properties
                  <a href="terms-&-condition.html"> terms of use </a></label
                >
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary rounded-pill">
            Get Contact Details
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- review modal -->
  <div
    class="modal fade"
    id="reviewModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Write Your Review
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div>
            <form action="">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mb-20">
                    <label for="" style="color: #000; font-size: 12px"
                      >Rating</label
                    >
                    <select name="" id="" class="form-control">
                      <option value="">Select</option>
                      <option value="">5 Star</option>
                      <option value="">4 Star</option>
                      <option value="">3 Star</option>
                      <option value="">2 Star</option>
                      <option value="">1 Star</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-20">
                    <label for="" style="color: #000; font-size: 12px"
                      >Select Property</label
                    >
                    <select name="" id="" class="form-control">
                      <option value="">I Own Property Here</option>
                      <option value="">
                        I Currently / Used to live here
                      </option>
                      <option value="">I am a local agent</option>
                      <option value="">I Visited the project</option>
                      <option value="">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-20">
                    <label for="" style="color: #000; font-size: 12px"
                      >Add a title</label
                    >
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-20">
                    <label for="" style="color: #000; font-size: 12px"
                      >Write a Review</label
                    >
                    <textarea name="" id="" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  @endsection
