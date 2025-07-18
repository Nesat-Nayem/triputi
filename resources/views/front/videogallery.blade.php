@section('title','BB')
@extends('laoyout.app')
@section('content')


 <!-- breadcrumb start -->
 <div class="breadcumb-wrapper" data-bg-src="{{url('BB')}}/assets/img/bg/price_bg_1.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h2 class="breadcumb-title">Video Gallery</h2>
        <div class="breadcumb-menu-wrapper">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Video Gallery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- section start -->
  <div class="overflow-hidden space" id="gallery-sec">
    <div class="container">
      <div class="row gy-4">
        @foreach ($video as $item)
            
       
        <div class="col-md-4">
          <div class="gallery-card wow fadeInUp">
            <div
              class="gallery-img"
              style="width: 100%; height: 300px; position: relative"
            >
            <?php
            $text = $item->video_url; // HTML और टेक्स्ट दोनों रखें
            $words = preg_split('/\s+/', $text); // टेक्स्ट को शब्दों में विभाजित करें
            $limitedWords = array_slice($words, 0, 20); // केवल पहले 20 शब्द लें
            echo implode(' ', $limitedWords) . '...'; // HTML और टेक्स्ट दोनों दिखाएं
        ?>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="th-pagination text-center mt-60 mb-0">
        <ul>
          <li>
            <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
          </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li>
            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>


@endsection