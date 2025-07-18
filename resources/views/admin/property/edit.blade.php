@extends('laoyout.admin')
@section('content')


<?php if($_GET['property_type'] == "projects_builder"){
    $title = "Projects / Builder";
   }elseif ($_GET['property_type'] == "latest_properties") {
       $title = "Latest Properties";
   }else{
       $title = "Land / Plot";
   }
       ?>


<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Edit Poperty</h4>
          <ul class="breadcrumbs">
            <li class="nav-home">
              <a
                href="/admin/dashboard"
              >
                <i class="fa-solid fa-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)">{{ $title }}</a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)">Edit Porperty</a>
            </li>
          </ul>
        </div>


        <style>
            .images_foreach img{
                width: 100px;
                height: 100px;
                margin-bottom: 10px;
                object-fit: cover;
            }
        </style>

        <form enctype="multipart/form-data" method="post">
            @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Edit Porperty {{ $title }}</div>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div
                      class="alert alert-danger pb-1 dis-none"
                      id="carErrors"
                    >
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                      >
                        ×
                      </button>
                      <ul></ul>
                    </div>



                    <div class="col-lg-12 px-0">
                        <div class="form-group">
                          <label>Title</label>
                          <input
                            type="text"
                            class="form-control"
                            name="title"
                            value="{{ $row->title }}"
                            placeholder="Enter Property Title"
                          />


                        </div>
                      </div>


                    <div class="row">

                    <div class="col-lg-6">
                      <label for="gallery"  class="mb-2"
                        ><strong>Gallery Images **</strong>
                      >
                      <div
 id="my-dropzone"
                        class="dropzone create dz-clickable"
                      >
                        <input
                          type="file"
                          name="gallery[]"
                          multiple
                          id="gallery"
                        />
                        <div class="dz-default dz-message">
                          <span>Drop files here to upload</span>
                        </div>
                      </div>
                    </label>
                      <p
                        class="em text-danger mb-0"
                        id="errslider_images"
                      ></p>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Thumbnail Image*</label>
                          <br />
                          <div class="thumb-preview">
                            <img
                            @if(isset($row->thumbnail))

                              src="{{ url('') }}/{{ $row->thumbnail }}"


                              @else
                             src="https://codecanyon8.kreativdev.com/estaty/assets/img/noimage.jpg"

                            @endif
width="200"
                            alt="..."
                              class="uploaded-img"
                            />
                          </div>

                          <div class="mt-3">
                            <div
                              role="button"
                              class="btn btn-primary btn-sm upload-btn"
                            >
                              Choose Image
                              <input
                                type="file"
                                name="thumbnail"
                                class="img-input"
                                name="featured_image"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>


                    <div
                      id="carForm"
                      action="https://codecanyon8.kreativdev.com/estaty/admin/property-management/store"
                      method="POST"

                    >
                      <input
                        type="hidden"
                        name=""
                        value="1JKXaxVfoqk8vcEV0yiVbim1181mDSgaJd8IKGTI"
                      />
                      <input type="hidden" name="type" value="commercial" />
                      <div id="sliders"></div>
                      <div class="row">


                        {{-- <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Floor Planning Image</label>
                            <br />
                            <div class="thumb-preview remove">
                              <img
                                src="https://codecanyon8.kreativdev.com/estaty/assets/img/noimage.jpg"
                                alt="..."
                                class="uploaded-img2"
                              />
                            </div>

                            <div class="mt-3">
                              <div
                                role="button"
                                class="btn btn-primary btn-sm upload-btn"
                              >
                                Choose Image
                                <input
                                  type="file"
                                  class="img-input2"
                                  name="floor_planning_image"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Video Image</label>
                            <br />
                            <div class="thumb-preview remove">
                              <img
                                src="https://codecanyon8.kreativdev.com/estaty/assets/img/noimage.jpg"
                                alt="..."
                                class="uploaded-img3"
                              />
                            </div>

                            <div class="mt-3">
                              <div
                                role="button"
                                class="btn btn-primary btn-sm upload-btn"
                              >
                                Choose Image
                                <input
                                  type="file"
                                  class="img-input3"
                                  name="video_image"
                                />
                              </div>
                            </div>
                          </div>
                        </div> --}}
                      </div>

                      <div class="row">
                        {{-- <div class="col-lg-3">
                          <div class="form-group">
                            <label>Video Url </label>
                            <input
                              type="text"
                              class="form-control"
                              name="video_url"
                              placeholder="Enter video url"
                            />
                          </div>
                        </div> --}}

                        <div class="col-12">
                            <div class="images_foreach">
                                <?php
                                  if(isset($row->gallery)){
                                    $gallery = json_decode($row->gallery);
                                      foreach ($gallery as $key => $value) {

                                    ?>
                               <a href="{{ url('') }}/{{ $value }}">
                                <img src="{{ url('') }}/{{ $value }}" class="img-thumbnail" alt="">
                               </a>
                                <?php } } ?>
                            </div>
                        </div>



                        @if(($_GET['property_type'] == "latest_properties"))

                        <div class="col-lg-4">
                            <div class="form-group">
                              <label>Category*</label>

                              <select name="purpose" id="category-select"  class="form-control">
                                <option selected="" disabled="" value="">
                                  Select Category
                                </option>
                                @foreach (App\Models\Category::where('status','Y')->where('type','property')->get() as $key => $value)
                                <option value="{{ $value->id }}" <?= $row->purpose == $value->id ? "selected" : "" ?>>{{ $value->title }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>


                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Category Type*</label>
                              <select name="category_type" id="category-select-type"  class="form-control">
                                @foreach (App\Models\Category::where('category_type',$row->purpose)->where('status','Y')->get() as $key => $value)
                                <option value="{{ $value->id }}" <?= $value->id == $row->category_type ? "selected" : "" ?> >{{ $value->title }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                        @endif

                        @if(($_GET['property_type'] == "land_plot"))
                        <div class="col-lg-3">
                            <div class="form-group">
                              <label>Category *</label>
                              <select
                                name="plot_category"
                                class="form-control category"
                              >
                               <option disabled="" selected="">
                                  Select a Category
                                </option>
                                <option value="na_plot" <?= $row->plot_category == "na_plot" ? "selected" : "" ?>>NA Plot</option>
                                <option value="agriculture_plot" <?= $row->plot_category == "agriculture_plot" ? "selected" : "" ?>>Agriculture Plot</option>
                              </select>
                            </div>
                          </div>

                        @endif



                        {{-- <div class="col-lg-3">
                          <div class="form-group">
                            <label>Category *</label>
                            <select
                              name="category_id"
                              class="form-control category"
                            >
                              <option disabled="" selected="">
                                Select a Category
                              </option>

                              <option value="35">Hotel</option>
                              <option value="38">Building</option>
                              <option value="39">Floor</option>
                              <option value="40">Shop</option>
                            </select>
                          </div>
                        </div> --}}
                        {{-- <div class="col-lg-3">
                          <div class="form-group">
                            <label>Country *</label>
                            <select
                              name="country_id"
                              class="form-control country js-example-basic-single3 select2-hidden-accessible"
                              data-select2-id="select2-data-7-rquv"
                              tabindex="-1"
                              aria-hidden="true"
                            >
                              <option
                                disabled=""
                                selected=""
                                data-select2-id="select2-data-9-ptvz"
                              >
                                Select Country
                              </option>

                              <option value="7">USA</option>
                              <option value="8">Canada</option>
                              <option value="9">Afghanistan</option>
                              <option value="10">Palestine</option></select
                            ><span
                              class="select2 select2-container select2-container--default"
                              dir="ltr"
                              data-select2-id="select2-data-8-lht6"
                              style="width: 174.942px"
                              ><span class="selection"
                                ><span
                                  class="select2-selection select2-selection--single"
                                  role="combobox"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  tabindex="0"
                                  aria-disabled="false"
                                  aria-labelledby="select2-country_id-m9-container"
                                  ><span
                                    class="select2-selection__rendered"
                                    id="select2-country_id-m9-container"
                                    role="textbox"
                                    aria-readonly="true"
                                    title="Select Country
                                                  "
                                    >Select Country </span
                                  ><span
                                    class="select2-selection__arrow"
                                    role="presentation"
                                    ><b
                                      role="presentation"
                                    ></b></span></span></span
                              ><span
                                class="dropdown-wrapper"
                                aria-hidden="true"
                              ></span
                            ></span>
                          </div>
                        </div>
                        <div class="col-lg-3 state">
                          <div class="form-group">
                            <label>State *</label>
                            <select
                              onchange="getCities(event)"
                              name="state_id"
                              class="form-control state_id states js-example-basic-single3 select2-hidden-accessible"
                              data-select2-id="select2-data-10-dy9x"
                              tabindex="-1"
                              aria-hidden="true"
                            >
                              <option
                                selected=""
                                disabled=""
                                data-select2-id="select2-data-12-3dgo"
                              >
                                Select State
                              </option>
                              <option value="10">California</option>
                              <option value="11">Florida</option>
                              <option value="12">Texas</option></select
                            ><span
                              class="select2 select2-container select2-container--default"
                              dir="ltr"
                              data-select2-id="select2-data-11-5gu8"
                              style="width: 174.942px"
                              ><span class="selection"
                                ><span
                                  class="select2-selection select2-selection--single"
                                  role="combobox"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  tabindex="0"
                                  aria-disabled="false"
                                  aria-labelledby="select2-state_id-m5-container"
                                  ><span
                                    class="select2-selection__rendered"
                                    id="select2-state_id-m5-container"
                                    role="textbox"
                                    aria-readonly="true"
                                    title="Select State
                                                  "
                                    >Select State </span
                                  ><span
                                    class="select2-selection__arrow"
                                    role="presentation"
                                    ><b
                                      role="presentation"
                                    ></b></span></span></span
                              ><span
                                class="dropdown-wrapper"
                                aria-hidden="true"
                              ></span
                            ></span>
                          </div>
                        </div>
                        <div class="col-lg-3 city">
                          <div class="form-group">
                            <label>City *</label>
                            <select
                              name="city_id"
                              class="form-control city_id js-example-basic-single3 select2-hidden-accessible"
                              data-select2-id="select2-data-13-5bzk"
                              tabindex="-1"
                              aria-hidden="true"
                            >
                              <option
                                selected=""
                                disabled=""
                                data-select2-id="select2-data-15-vzgx"
                              >
                                Select City
                              </option></select
                            ><span
                              class="select2 select2-container select2-container--default"
                              dir="ltr"
                              data-select2-id="select2-data-14-ua9h"
                              style="width: 174.942px"
                              ><span class="selection"
                                ><span
                                  class="select2-selection select2-selection--single"
                                  role="combobox"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  tabindex="0"
                                  aria-disabled="false"
                                  aria-labelledby="select2-city_id-68-container"
                                  ><span
                                    class="select2-selection__rendered"
                                    id="select2-city_id-68-container"
                                    role="textbox"
                                    aria-readonly="true"
                                    title="Select City
                                              "
                                    >Select City </span
                                  ><span
                                    class="select2-selection__arrow"
                                    role="presentation"
                                    ><b
                                      role="presentation"
                                    ></b></span></span></span
                              ><span
                                class="dropdown-wrapper"
                                aria-hidden="true"
                              ></span
                            ></span>
                          </div>
                        </div> --}}


{{--
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label for="">Amenities*</label>
                            <select
                              name="amenities[]"
                              class="form-control js-example-basic-single2 select2-hidden-accessible"
                              multiple=""
                              data-select2-id="select2-data-16-j6q2"
                              tabindex="-1"
                              aria-hidden="true"
                            >
                              <option value="" disabled="">
                                Please Select Amenities
                              </option>
                              <option value="10">Parking</option>
                              <option value="11">Swimming pool</option>
                              <option value="12">Gym</option>
                              <option value="13">Security</option>
                              <option value="14">Air conditioning</option>
                              <option value="15">Backup Electricity</option>
                              <option value="16">Mosque</option></select
                            ><span
                              class="select2 select2-container select2-container--default"
                              dir="ltr"
                              data-select2-id="select2-data-17-e6mm"
                              style="width: 174.942px"
                              ><span class="selection"
                                ><span
                                  class="select2-selection select2-selection--multiple"
                                  role="combobox"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  tabindex="-1"
                                  aria-disabled="false"
                                  ><ul
                                    class="select2-selection__rendered"
                                    id="select2-amenities-wp-container"
                                  ></ul>
                                  <span
                                    class="select2-search select2-search--inline"
                                    ><input
                                      class="select2-search__field"
                                      type="search"
                                      tabindex="0"
                                      autocorrect="off"
                                      autocapitalize="none"
                                      spellcheck="false"
                                      role="searchbox"
                                      aria-autocomplete="list"
                                      autocomplete="off"
                                      aria-describedby="select2-amenities-wp-container"
                                      placeholder="Select Amenities"
                                      style="
                                        width: 100%;
                                      " /></span></span></span
                              ><span
                                class="dropdown-wrapper"
                                aria-hidden="true"
                              ></span
                            ></span>
                          </div>
                        </div> --}}

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Price (INR) </label>
                            <input
                              type="number"
                              class="form-control"
                              name="price"
                               value="{{ $row->price }}"
                              placeholder="Enter Current Price"
                            />

                            <p class="text-warning">
                              If you leave it blank, price will be
                              negotiable.
                            </p>
                          </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                              <div class="text-white mb-3">Amenities</div>
                             <div class="dd row">
                              @foreach (App\Models\Amenity::latest()->get() as $key => $item)
                              <div class="col-sm-3 col-lg-2 d-flex align-items-center">
                                  <label class="mb-0 mr-2"  for="test{{ $key }}">{{ $item->name }}</label>
                              <input
                                type="checkbox"
                                class=""
                                value="{{ $item->id }}"

                                <?php if(isset($row->amenity)){
                                    $amt = json_decode($row->amenity);
                                    if(in_array($item->id, $amt)){
                                        echo "checked";
                                    }
                                } ?>

                                name="amenity[]"
                                id="test{{ $key }}"
                              />
                              </div>
                              @endforeach


                             </div>
                            </div>
                          </div>

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Area (sqft) *</label>
                            <input
                              type="text"
                              class="form-control"
                              name="arrea"
                              value="{{ $row->arrea }}"
                              placeholder="Enter area (sqft) "
                            />
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Bedrooms</label>
                            <input
                              type="text"
                              class="form-control"
                              name="bedrooms"
                               value="{{ $row->bedrooms }}"
                              placeholder=""
                            />
                          </div>
                        </div>
                      <div class="col-lg-4">
                          <div class="form-group">
                            <label>Bathrooms</label>
                            <input
                              type="text"
                              class="form-control"
                              name="bathrooms"
                               value="{{ $row->bathrooms }}"
                              placeholder=""
                            />
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Furnished Status</label>
                            <input
                              type="text"
                              class="form-control"
                              name="furnished_status"
                               value="{{ $row->furnished_status }}"
                              placeholder="Furnished Status"
                            />
                          </div>
                        </div>


                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Construction Age</label>
                            <input
                              type="text"
                              class="form-control"
                                value="{{ $row->construction_age }}"
                              name="construction_age"
                              placeholder=""
                            />
                          </div>
                        </div>


                        <div class="col-lg-4">
                          <div class="form-group">
                            <label>Location</label>
                            <input
                              type="text"
                              class="form-control"
                                value="{{ $row->location }}"
                              name="location"
                              placeholder=""
                            />
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Status *</label>
                            <select
                              name="status"
                              id=""
                              class="form-control"
                            >
                              <option value="1" <?= $row->status == 1 ? "selected" : "" ?>>Active</option>
                              <option value="0" <?= $row->status == 0 ? "selected" : "" ?>>Inactive</option>
                            </select>
                          </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="l_desc" class="form-label mb-2">Property Description</label>
                                <textarea name="property_description" id="summernote" class="form-control" cols="30" rows="3">{{ $row->property_description }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="l_desc" class="form-label mb-2">Additional Description</label>
                                <textarea name="additional_description" id="additional_description" class="form-control" cols="30" rows="3">{{ $row->additional_description }}</textarea>
                            </div>
                        </div>



                        <div class="col-12">
                            <h4 class="bg-white p-2 mb-3 text-center text-dark">Seo Details</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2">Meta Title</label>
                                <input type="text" id="simpleinput" name="meta_title"
                                    value="" value="{{ $row->meta_title }}" class="form-control">
                                </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2">Meta Tags</label>
                                <input type="text"  value="{{ $row->meta_tags }}" id="simpleinput" name="meta_tags"
                                    value="" class="form-control">
                                                                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="l_desc" class="form-label mb-2">Meta Description</label>
                                <textarea name="meta_description" class="form-control" cols="30" rows="3">{{ $row->meta_description }}</textarea>
                                                                            </div>
                        </div>




                        {{-- <div class="col-lg-3">
                          <div class="form-group">
                            <label>Latitude * </label>
                            <input
                              type="text"
                              class="form-control"
                              name="latitude"
                              placeholder="Enter Latitude"
                            />
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Longitude * </label>
                            <input
                              type="text"
                              class="form-control"
                              name="longitude"
                              placeholder="Enter Longitude"
                            />
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label for="">Vendor</label>
                            <select
                              name="vendor_id"
                              class="form-control vendor js-example-basic-single1 select2-hidden-accessible"
                              data-select2-id="select2-data-1-rdo4"
                              tabindex="-1"
                              aria-hidden="true"
                            >
                              <option
                                value="0"
                                selected=""
                                data-select2-id="select2-data-3-15er"
                              >
                                Please Select
                              </option>
                              <option value="35">marcia</option>
                              <option value="36">oscar_eade</option>
                              <option value="37">gledson</option>
                              <option value="38">mackenzie</option>
                              <option value="39">leichhardt</option></select
                            ><span
                              class="select2 select2-container select2-container--default"
                              dir="ltr"
                              data-select2-id="select2-data-2-zf61"
                              style="width: 174.942px"
                              ><span class="selection"
                                ><span
                                  class="select2-selection select2-selection--single"
                                  role="combobox"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  tabindex="0"
                                  aria-disabled="false"
                                  aria-labelledby="select2-vendor_id-1f-container"
                                  ><span
                                    class="select2-selection__rendered"
                                    id="select2-vendor_id-1f-container"
                                    role="textbox"
                                    aria-readonly="true"
                                    title="Please Select
                                              "
                                    >Please Select </span
                                  ><span
                                    class="select2-selection__arrow"
                                    role="presentation"
                                    ><b
                                      role="presentation"
                                    ></b></span></span></span
                              ><span
                                class="dropdown-wrapper"
                                aria-hidden="true"
                              ></span
                            ></span>
                            <p class="text-warning">
                              if you do not select any vendor, then this
                              property will be listed under you
                            </p>
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group agent d-none">
                            <label for="">Agent</label>
                            <select
                              name="agent_id"
                              class="form-control agent_id js-example-basic-single1 select2-hidden-accessible"
                              data-select2-id="select2-data-4-70af"
                              tabindex="-1"
                              aria-hidden="true"
                            >
                              <option
                                value=""
                                selected=""
                                data-select2-id="select2-data-6-rdy7"
                              >
                                Please Select
                              </option></select
                            ><span
                              class="select2 select2-container select2-container--default"
                              dir="ltr"
                              data-select2-id="select2-data-5-6qg9"
                              style="width: auto"
                              ><span class="selection"
                                ><span
                                  class="select2-selection select2-selection--single"
                                  role="combobox"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  tabindex="0"
                                  aria-disabled="false"
                                  aria-labelledby="select2-agent_id-64-container"
                                  ><span
                                    class="select2-selection__rendered"
                                    id="select2-agent_id-64-container"
                                    role="textbox"
                                    aria-readonly="true"
                                    title="Please Select
                                              "
                                    >Please Select </span
                                  ><span
                                    class="select2-selection__arrow"
                                    role="presentation"
                                    ><b
                                      role="presentation"
                                    ></b></span></span></span
                              ><span
                                class="dropdown-wrapper"
                                aria-hidden="true"
                              ></span
                            ></span>
                            <p class="text-warning">
                              if you do not select any agent, then this
                              property will be listed under Vendor
                            </p>
                          </div>
                        </div> --}}
                      </div>



                      <div id="sliders"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-12 text-center">
                    <button
                      type="submit"
                      id="PropertySubmit"
                      class="btn btn-success"
                    >
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
      </div>
    </div>

    {{-- <footer class="footer py-4">
      <div class="container-fluid">
        <div class="d-block mx-auto">
          <p class="mb-0"></p>
          <p>Copyright ©2024. All Rights Reserved.</p>
          <p></p>
        </div>
      </div>
    </footer> --}}
  </div>

  @section('footer')

  <script>
       $('#summernote').summernote({
                        placeholder: '',
                        tabsize: 2,
                        height: 200,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['fontsize', ['fontsize']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ],
                        fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '36', '48', '64', '82',
                            '150'
                        ], // Custom font sizes
                    });

                    $('#additional_description').summernote({
                        placeholder: '',
                        tabsize: 2,
                        height: 200,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['fontsize', ['fontsize']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ],
                        fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '36', '48', '64', '82',
                            '150'
                        ], // Custom font sizes
                    });
  </script>


<script>
    $(document).ready(function () {
        $('#category-select').on('change', function () {
            const categoryId = $(this).val(); // Get selected value

            if (categoryId) {
                $.ajax({
                    url: '/admin/get-category-type-details', // Route to send GET request
                    method: 'GET',
                    data: { id: categoryId }, // Send the selected value
                    success: function (response) {
                        $('#category-select-type').html(response);
                    },
                    error: function (xhr) {
                        console.error(xhr.responseText); // Handle error response
                    }
                });
            }
        });
    });
</script>

  @endsection


@endsection
