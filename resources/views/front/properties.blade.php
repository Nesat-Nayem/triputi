@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')
    <!-- Map Start-->
    <div class="map-area border-top header-next pt-30">
        <!-- Background Image -->
        <div class="container">
          <div class="lazy-container radius-md ratio border">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.7090613273!2d73.69814776226434!3d18.52487061670001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1733127223809!5m2!1sen!2sin"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
      <!-- Map End-->
      <!-- Listing Start -->
      <div class="listing-grid pt-40 pb-70">
        <div class="container">
          <div class="row gx-xl-5">
            <div class="col-xl-3">
              <div
                class="widget-offcanvas offcanvas-xl offcanvas-start"
                tabindex="-1"
                id="widgetOffcanvas"
                aria-labelledby="widgetOffcanvas"
              >
                <div class="offcanvas-header px-20">
                  <h4 class="offcanvas-title">Filter</h4>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    data-bs-target="#widgetOffcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body p-3 p-xl-0">
                  <aside class="sidebar-widget-area" data-aos="fade-up">
                    <div class="widget widget-select radius-md mb-30">
                      <h3 class="title">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#type"
                          aria-expanded="true"
                          aria-controls="type"
                        >
                          Property Type
                        </button>
                      </h3>
                      <div id="type" class="collapse show">
                        <div class="accordion-body">
                          <select
                            name="type"
                            id=""
                            class="form-control form-select mb-20"
                            onchange="updateURL('type='+$(this).val())"
                          >
                            <option selected disabled>Select Category</option>
                            @foreach (App\Models\Category::where('status','Y')->where('type','property')->get() as $key => $value)

                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="widget widget-categories radius-md mb-30">
                      <h3 class="title">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#categories"
                          aria-expanded="true"
                          aria-controls="categories"
                        >
                          Categories
                        </button>
                      </h3>
                      <div id="categories" class="collapse show">
                        <div class="accordion-body">
                          <ul class="list-group">
                            <li class="list-item">
                              <a class="" onclick="updateURL('category=all')">
                                All
                              </a>
                            </li>
                            <div id="catogoryul">
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=apartment');"
                                >
                                  Apartment</a
                                >
                              </li>
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=hotel');"
                                >
                                  Hotel</a
                                >
                              </li>
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=house');"
                                >
                                  House</a
                                >
                              </li>
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=pent-house');"
                                >
                                  Pent House</a
                                >
                              </li>
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=building');"
                                >
                                  Building</a
                                >
                              </li>
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=floor');"
                                >
                                  Floor</a
                                >
                              </li>
                              <li class="list-item">
                                <a class="" onclick="updateURL('category=shop');">
                                  Shop</a
                                >
                              </li>
                              <li class="list-item">
                                <a
                                  class=""
                                  onclick="updateURL('category=duplex');"
                                >
                                  Duplex</a
                                >
                              </li>
                            </div>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <form
                      action="properties"
                      method="get"
                      id="searchForm"
                      class="w-100"
                    >

                      <div class="widget widget-select radius-md mb-30">
                        <h3 class="title">
                          <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#select"
                            aria-expanded="true"
                            aria-controls="select"
                          >
                            Property Info
                          </button>
                        </h3>
                        <div id="select" class="collapse show">
                          <div class="accordion-body">
                            <div class="form-group mb-20">
                              <label class="mb-10">Title</label>
                              <input
                                type="text"
                                class="form-control"
                                name="title"
                                placeholder="Enter title"
                                onkeydown="if (event.keyCode == 13) updateURL('title='+$(this).val())"
                              />
                            </div>
                            <div class="form-group mb-20">
                              <label class="mb-10">Country</label>
                              <select
                                name="country"
                                id=""
                                class="form-control country form-select"
                                onchange="updateURL('country='+$(this).val())"
                              >
                                <option selected disabled>Select Country</option>
                                <option value="all" data-id="0">All</option>
                                <option data-id="7" value="USA">USA</option>
                                <option data-id="8" value="india">India</option>
                              </select>
                            </div>
                            <div class="form-group mb-20 state">
                              <label class="mb-10">State</label>
                              <select
                                name="state_id"
                                id=""
                                class="form-control form-select state_id states"
                                onchange="updateURL('state='+$(this).val());getCities(this)"
                              >
                                <option>Select State</option>
                                <option>Maharashtra</option>
                                <option>Gujrat</option>
                                <option>Panjab</option>
                                <option>Uttar Pradesh</option>
                                <option>Delhi</option>
                                <option>Rajasthan</option>
                                <option>Haryana</option>
                                <option>Tamil Nadu</option>
                                <option>Kerala</option>
                                <option>Karnataka</option>
                                <option>Andhra Pradesh</option>
                              </select>
                            </div>
                            <div class="form-group mb-20 city">
                              <label class="mb-10">City</label>
                              <select
                                name="city_id"
                                id=""
                                class="form-control form-select city_id"
                                onchange="updateURL('city='+$(this).val())"
                              >
                                <option>Select City</option>
                                <option>Mumbai</option>
                                <option>Pune</option>
                                <option>Nashik</option>
                                <option>Nagpur</option>
                                <option>Kolhapur</option>
                                <option>Solapur</option>
                                <option>Ahmednagar</option>
                                <option>Aurangabad</option>
                                <option>Jalgaon</option>
                                <option>Sangli</option>
                              </select>
                            </div>
                            <div class="form-group mb-20">
                              <label class="mb-10">Location</label>
                              <input
                                type="text"
                                class="form-control"
                                name="location"
                                placeholder="Enter location"
                                onkeydown="if (event.keyCode == 13) updateURL('location='+$(this).val())"
                              />
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group mb-20">
                                  <label class="mb-10"> Beds</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    name="beds"
                                    placeholder="No. of bed"
                                    onkeydown="if (event.keyCode == 13) updateURL('beds='+$(this).val())"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group mb-20">
                                  <label class="mb-10"> Baths</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    name="baths"
                                    placeholder="No. of bath"
                                    onkeydown="if (event.keyCode == 13) updateURL('baths='+$(this).val())"
                                  />
                                </div>
                              </div>
                            </div>

                            <div class="form-group mb-20">
                              <label class="mb-10"> Area (Sqft.)</label>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Enter area"
                                onkeydown="if (event.keyCode == 13) updateURL('area='+$(this).val())"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="widget widget-amenities radius-md mb-30">
                        <h3 class="title">
                          <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#amenities"
                            aria-expanded="true"
                            aria-controls="amenities"
                          >
                            Amenities
                          </button>
                        </h3>
                        <div id="amenities" class="collapse show">
                          <div class="accordion-body">
                            <ul class="list-group custom-checkbox">
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox10"
                                  value="10"
                                  onchange="updateAmenities('amenities[]=Parking',this)"
                                />

                                <label class="form-check-label" for="checkbox10"
                                  ><span>Parking</span></label
                                >
                              </li>
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox11"
                                  value="11"
                                  onchange="updateAmenities('amenities[]=Swimming pool',this)"
                                />

                                <label class="form-check-label" for="checkbox11"
                                  ><span>Swimming pool</span></label
                                >
                              </li>
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox12"
                                  value="12"
                                  onchange="updateAmenities('amenities[]=Gym',this)"
                                />

                                <label class="form-check-label" for="checkbox12"
                                  ><span>Gym</span></label
                                >
                              </li>
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox13"
                                  value="13"
                                  onchange="updateAmenities('amenities[]=Security',this)"
                                />

                                <label class="form-check-label" for="checkbox13"
                                  ><span>Security</span></label
                                >
                              </li>
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox14"
                                  value="14"
                                  onchange="updateAmenities('amenities[]=Air conditioning',this)"
                                />

                                <label class="form-check-label" for="checkbox14"
                                  ><span>Air conditioning</span></label
                                >
                              </li>
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox15"
                                  value="15"
                                  onchange="updateAmenities('amenities[]=Backup Electricity',this)"
                                />

                                <label class="form-check-label" for="checkbox15"
                                  ><span>Backup Electricity</span></label
                                >
                              </li>
                              <li>
                                <input
                                  class="input-checkbox"
                                  type="checkbox"
                                  name="amenities[]"
                                  id="checkbox16"
                                  value="16"
                                  onchange="updateAmenities('amenities[]=Mosque',this)"
                                />

                                <label class="form-check-label" for="checkbox16"
                                  ><span>Mosque</span></label
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="widget widget-type radius-md mb-30">
                        <h3 class="title">
                          <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#pricetype"
                            aria-expanded="true"
                            aria-controls="type"
                          >
                            Pricing Type
                          </button>
                        </h3>
                        <div id="pricetype" class="collapse show">
                          <div class="accordion-body">
                            <ul class="list-group">
                              <li class="list-item">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="price"
                                    onchange="updateURL('price=all',this)"
                                    id="exampleRadios"
                                    value="all"
                                    checked
                                  />
                                  <label
                                    class="form-check-label"
                                    for="exampleRadios"
                                  >
                                    All
                                  </label>
                                </div>
                              </li>

                              <li class="list-item">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="price"
                                    onchange="updateURL('price=fixed',this)"
                                    id="exampleRadios1"
                                    value="fixed"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="exampleRadios1"
                                  >
                                    Fixed Price
                                  </label>
                                </div>
                              </li>

                              <li class="list-item">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="price"
                                    onchange="updateURL('price=negotiable',this)"
                                    id="exampleRadios2"
                                    value="negotiable"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="exampleRadios2"
                                  >
                                    Negotiable
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="widget widget-price radius-md mb-30">
                        <h3 class="title">
                          <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#price"
                            aria-expanded="true"
                            aria-controls="price"
                          >
                            Pricing Filter
                          </button>
                        </h3>
                        <input
                          class="form-control"
                          type="hidden"
                          value="253"
                          name="min"
                          id="min"
                        />
                        <input
                          class="form-control"
                          type="hidden"
                          value="253"
                          id="o_min"
                        />
                        <input
                          class="form-control"
                          type="hidden"
                          value="250151"
                          id="o_max"
                        />

                        <input
                          class="form-control"
                          value="250151"
                          type="hidden"
                          name="max"
                          id="max"
                        />
                        <input type="hidden" id="currency_symbol" value="₹" />

                        <div id="price" class="collapse show">
                          <div class="accordion-body">
                            <div class="price-item">
                              <div data-range-slider="priceSlider"></div>
                              <div class="price-value">
                                <span class="color-primary"
                                  >Price:
                                  <span data-range-value="priceSliderValue">
                                    ₹ 253 - ₹ 250151
                                  </span></span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="cta">
                        <div class="row">
                          <div class="col-sm-12">
                            <button
                              onclick="resetURL()"
                              type="button"
                              class="btn-text color-primary icon-start mt-10"
                            >
                              <i class="fal fa-redo"></i>Reset Search
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </aside>
                </div>
              </div>
            </div>

            <div class="col-xl-9">
              <div class="product-sort-area mb-10" data-aos="fade-up">
                <div class="row justify-content-sm-end">
                  <div class="col-sm-5 d-xl-none">
                    <button
                      class="btn btn-sm btn-outline icon-end radius-sm mb-15"
                      type="button"
                      data-bs-toggle="offcanvas"
                      data-bs-target="#widgetOffcanvas"
                      aria-controls="widgetOffcanvas"
                    >
                      Filter <i class="fal fa-filter"></i>
                    </button>
                  </div>
                  <div class="col-sm-7">
                    <ul class="product-sort-list text-sm-end list-unstyled mb-15">
                      <li class="item">
                        <div class="sort-item d-flex align-items-center">
                          <label class="color-dark me-2 font-sm flex-auto"
                            >Sort By :</label
                          >
                          <select
                            class="form-select form_control"
                            name="sort"
                            onchange="updateURL('sort='+$(this).val())"
                          >
                            <option value="new">Newest</option>
                            <option value="old">Oldest</option>
                            <option value="low-to-high">
                              Price : Low to High
                            </option>
                            <option value="high-to-low">
                              Price : High to Low
                            </option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row properties">

                @foreach ($data as $value)
                <div class="col-lg-6 col-md-6">



                    @include('front/particals/box', $value)


                  <!-- product-default -->
                </div>

                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Listing End -->
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
                src="assets/img/popups/65bb6bd20536d.png"
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


