@section('title','BB')
@extends('laoyout.app')
@section('content')


<!-- breadcrumb start -->
<div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">Image Gallery</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Image Gallery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- section start -->
  <div class="overflow-hidden space" id="gallery-sec">
    <div class="container">
      <div class="row gy-4">

        @foreach ($gallery as $val)
        <div class="col-md-4">
          <div class="gallery-card wow fadeInUp">
            <div class="gallery-img" style="width: 100%; height: 300px">
              <img
                src="{{url('/uploads')}}/<?= $val->image ?>"
                alt="gallery image"
                style="width: 100%; height: 100%; object-fit: fill"
              />
            </div>
            <div class="gallery-content">
              <a
                href="{{url('uploads')}}/<?=$val->image ?>"
                class="icon-btn popup-image"
                ><i class="fa-solid fa-arrow-up-right"></i
              ></a>
              {{-- <h2 class="gallery-title box-title">Body Massage</h2> --}}
              {{-- <p class="gallery-text">Massage</p> --}}
            </div>
          </div>
        </div>
        @endforeach
       

      </div>
      <div class="th-pagination text-center mt-60 mb-0">
        <ul>
          <li>
            <a href="blog.html"><i class="fa-solid fa-arrow-left"></i></a>
          </li>
          <li><a href="blog.html">1</a></li>
          <li><a href="blog.html">2</a></li>
          <li>
            <a href="blog.html"><i class="fa-solid fa-arrow-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

@endsection