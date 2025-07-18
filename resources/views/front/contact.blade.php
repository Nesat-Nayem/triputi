@section('title','BB')
@extends('laoyout.app')
@section('content')


<?php

$data = DB::table('webinfo')->where('id', 5)->select(['image', 'favicon', 'info_one'])->first();
$row = json_decode($data->info_one);


?>


  <!-- breadcrumb start -->
  <div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">Contact Us</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- section start -->
  <div class="space" id="contact-sec">
    <div class="container">
      <div class="row gy-40">
        <div class="col-lg-6 col-xl-5">
          <div class="contact-info-wrap me-xl-4">
            <div class="title-area mb-20">
              <h3 class="sec-title">Our Contact Information</h3>
              <p>
                Have a inquiry or some feedback for us? Fill out the form
                below to contact our team.
              </p>
            </div>
            <div class="contact-info">
              <div class="contact-info_icon">
                <i class="fa-light fa-location-dot"></i>
              </div>
              <div class="media-body">
                <h3 class="box-title">Our Address</h3>
                <span class="contact-info_text"><?=$row->location ?></span>
              </div>
            </div>
            <div class="contact-info">
              <div class="contact-info_icon">
                <i class="fa-light fa-phone"></i>
              </div>
              <div class="media-body">
                <h3 class="box-title">Phone Number</h3>
                <span class="contact-info_text"
                  >Mobile:
                  <a href="#">+<?=$row->phone?> </a></span
                ><span class="contact-info_text"
                  >Email: <a href="#"><?=$row->email ?></a></span
                >
              </div>
            </div>
            <div class="contact-info">
              <div class="contact-info_icon">
                <i class="fa-light fa-clock"></i>
              </div>
              <div class="media-body">
                <h3 class="box-title">Hours of Operation</h3>
                <span class="contact-info_text"
                  >Monday - Friday: 9AM - 8PM Sunday - Saturday: 10AM -
                  6PM</span
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-7">
          <div class="map-sec">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.7090613273!2d73.69814776226434!3d18.52487061670001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1736180389092!5m2!1sen!2sin"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="contact-form-wrapper">
            <form  method="POST" >
              @csrf
              <h2 class="form-title text-center">Get In Touch</h2>
              <div class="row">
                <div class="form-group col-md-6">
                  <i class="fa-sharp fa-light fa-user"></i>
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    placeholder="Your Name"
                  />
                  @error('name')
                  <div class="text-danger mt-2">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group col-md-6">
                  <i class="fa-sharp fa-regular fa-envelope"></i>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Email Address"
                  />
                  @error('email')
                  <div class="text-danger mt-2">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="tel"
                    class="form-control"
                    name="phone"
                    id="number"
                    placeholder="Phone Number"
                  />
                  @error('phone')
                  <div class="text-danger mt-2">{{ $message }}</div>
                   @enderror
                  <i class="fal fa-phone"></i>
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    name="services"
                    id="service"
                    placeholder="service"/>
                    @error('services')
                    <div class="text-danger mt-2">{{ $message }}</div>
                     @enderror
                  <i class="fal fa-edit"></i>
                </div>

                <div class="form-group col-12">
                  <i class="fal fa-comment"></i>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="3"
                    class="form-control"
                    placeholder="Message"
                  ></textarea>
                  @error('message')
                 <div class="text-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-btn col-12">
                  <button class="th-btn fw-btn" type="submit" >Send Messages<i class="fa-solid fa-arrow-right ms-2"></i>
                  </button>
                </div>
              </div>
              <p class="form-messages mb-0 mt-3"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
