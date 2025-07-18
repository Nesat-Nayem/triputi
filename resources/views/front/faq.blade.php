@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')



    <!-- Page title start-->
    <div class="page-title-area header-next">
        <img class="lazyload blur-up bg-img" src="{{ url('swadesh') }}/assets/img/6511175715121.jpg" />
        <div class="container">
          <div class="content text-center">
            <h1 class="color-white">FAQ</h1>
            <ul class="list-unstyled">
              <li class="d-inline-block">
                <a href="">Home</a>
              </li>
              <li class="d-inline-block">>></li>
              <li class="d-inline-block active">FAQ</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page title end-->
  
      <div class="faq-area pt-100 pb-70">
        <div class="container">
          <div class="accordion" id="faqAccordion">
            <div class="row">
              <div class="col-lg-6 has-time-line" data-aos="fade-right">
                <div class="row">
                    @php
                        $chunks = $data->chunk(ceil($data->count() / 2)); // Split $data into two chunks
                    @endphp
            
                    @foreach ($chunks[0] as $key => $item) <!-- First half of the data -->
                    <div class="col-12">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1{{ $key+1 }}" aria-expanded="true" aria-controls="collapse1{{ $key+1 }}">
                                    {{ $key+1 }}. <?=$item->title ?>
                                </button>
                            </h6>
                            <div id="collapse1{{ $key+1 }}" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        To list your property, simply create an account on our website, provide accurate vehicle information, upload high-quality photos, and set an appropriate price.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-lg-6 has-time-line" data-aos="fade-left"> <!-- Second column for the second half -->
                <div class="row">
                    @foreach ($chunks[1] as $key => $item) <!-- Second half of the data -->
                    <div class="col-12">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2{{ $key+1 }}" aria-expanded="true" aria-controls="collapse2{{ $key+1 }}">
                                    {{ $key+1 }}. <?=$item->title ?>
                                </button>
                            </h6>
                            <div id="collapse2{{ $key+1 }}" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        To list your property, simply create an account on our website, provide accurate vehicle information, upload high-quality photos, and set an appropriate price.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            
            </div>
          </div>
        </div>
      </div>
      <!-- Faq-area end -->
  
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
                <form class="subscriptionForm" action="" method="POST">
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
