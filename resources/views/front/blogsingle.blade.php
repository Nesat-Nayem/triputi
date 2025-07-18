@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')

    <!-- Page title start-->

    <!-- Page title start-->
    <div class="page-title-area header-next">

      <?php $baner = DB::table('blogs')->where('status','Y')->get(); ?>
      @foreach ($baner as $item)
          
      <img class="lazyload blur-up bg-img" src="{{ url('/uploads') }}/<?=$item->banner ?>" />
      
      @endforeach
      <div class="container">
        <div class="content text-center">
          <h1 class="color-white">
            First-Time Homebuyers’ Guide: 10 Essential Tips for Success
          </h1>
          <ul class="list-unstyled">
            <li class="d-inline-block">
              <a href="">Home</a>
            </li>
            <li class="d-inline-block">>></li>
            <li class="d-inline-block active">Post Details</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page title end-->
    <!-- Page title end-->

    <!--====== Start Blog Section ======-->

    <div class="blog-details-area pt-100 pb-70">
      <div class="container">
        <div class="row justify-content-center gx-xl-5">
          <div class="col-lg-8">
            <div class="blog-description mb-40">
              <article class="item-single">
                <div class="image radius-md">
                  <div class="lazy-container ratio ratio-16-9">
                    <img
                      class="lazyload"
                      src="{{ url('/uploads') }}/<?=$blog->image ?>"
                      data-src="{{ url('/uploads') }}/<?=$blog->image ?>"
                    />
                  </div>
                </div>
                <div class="content">
                  <ul class="info-list">
                    <li><i class="fal fa-user"></i><?=$blog->name?></li>
                    <li><i class="fal fa-calendar"></i><?=$blog->created_at?></li>
                    <li>
                      <a href="blog?category=buying-guides">
                        <i class="fal fa-list"></i> Buying Guides</a>
                    </li>
                  </ul>
                  <h3 class="title">
                   <?= $blog->title ?>
                  </h3>
                  <div class="summernote-content">
                    <p>
                   <?= $blog->short_description ?>
                    </p>
                    <p>
                      <?= $blog->description ?>
                    </p>
                 
                  </div>
                </div>
              </article>
              <div class="text-center mt-4">
                <a
                  href=""
                  target="_blank"
                  onclick="adView(13)"
                  class="ad-banner"
                >
                  <img
                    data-src="{{ url('swadesh') }}/assets/img/advertisements/65bf707d02fb5.png"
                    alt="advertisement"
                    style="width: 728px; height: 90px"
                    class="lazyload blur-up"
                  />
                </a>
              </div>
            </div>
            <div class="comments mb-30"></div>
          </div>
          <div class="col-lg-4">
            <aside class="sidebar-widget-area">
              <div class="widget widget-search radius-md mb-30">
                <h4 class="title mb-15">Search Posts</h4>
                <form class="search-form radius-md" action="blog" method="GET">
                  <input
                    type="search"
                    class="search-input"
                    placeholder="Search By Title"
                    name="title"
                    value=""
                  />

                  <button class="btn-search" type="submit">
                    <i class="far fa-search"></i>
                  </button>
                </form>
              </div>
              <div class="widget widget-blog-categories radius-md mb-30">
                <h3 class="title mb-15">Categories</h3>

                <?php
                $category = DB::table('category')->where('type','blog_category')->orwhere('status','Y')->get();
                
                ?>
                @foreach ($category as $item)
                    
                <ul class="list-unstyled m-0">
                  <li class="d-flex align-items-center justify-content-between">
                    <a href="#"
                      ><i class="fal fa-folder"></i> <?=$item->title ?></a
                    >
                    {{-- <span class="tqy">(2)</span> --}}
                  </li>
                </ul>
                
                @endforeach
              </div>
              <div class="widget widget-post radius-md mb-30">

              <?php   $recent = DB::table('blogs')->orderBy('created_at', 'desc')->first(); ?>
                <h3 class="title mb-15">Recent Posts</h3>
                
                <article class="article-item mb-30">
                  @foreach ($recent as $item)
                  <div class="image">
                    <a
                      href="blog-details.html"
                      class="lazy-container ratio ratio-1-1"
                    >
                      <img
                        class="lazyload"
                        src="{{ url('swadesh') }}/assets/front/images/placeholder.png"
                        data-src="{{ url('swadesh') }}/assets/img/blogs/666aa4324c1ff.png"
                      />
                    </a>
                  </div>
                  <div class="content">
                    <ul class="info-list">
                      <li><i class="fal fa-user"></i><?=$recent->name ?></li>
                      <li><i class="fal fa-calendar"></i> <?=$recent->created_at ?></li>
                    </ul>
                    <h6>
                      <a href="blog-details.html">
                        Navigating Mortgage Options: Fixed vs. A...
                      </a>
                    </h6>
                  </div>
                  @endforeach
                </article>
               
                
                
              </div>

              <div class="text-center mb-40">
                <a
                  href=""
                  target="_blank"
                  onclick="adView(8)"
                  class="ad-banner"
                >
                  <img
                    data-src="{{ url('swadesh') }}/assets/img/advertisements/65bf704fb05c6.png"
                    alt="advertisement"
                    style="width: 300px; height: 600px"
                    class="lazyload blur-up"
                  />
                </a>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!--====== End Blog Section ======-->

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