<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Laxmi Tirupati Transport</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link rel="stylesheet" href="{{url('web')}}/assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('web')}}/assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('web')}}/assets/images/logo.png" />
  </head>


<style>
  /* Hide Google Translate toolbar and elements */
  .goog-te-banner-frame, 
  .goog-te-balloon-frame, 
  .goog-te-menu-frame, 
  .goog-tooltip, 
  .goog-tooltip:hover, 
  .goog-te-spinner-pos, 
  .goog-te-gadget {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
  }

  body {
    top: 0px !important;
  }
</style>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
      >
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo" href="/admin/dashboard"
            ><div
              style="
                display: flex;
                align-items: flex-end;
                justify-content: center;
              "
            >
              <img src="{{url('web')}}/assets/images/logo.png" alt="logo" />
              <p style="color: #c60da3; font-weight: bold">
                Laxmi Tirupati Transport
              </p>
            </div></a
          >
          <a class="navbar-brand brand-logo-mini" href="index.html"
            ><div
              style="
                display: flex;
                align-items: flex-end;
                justify-content: center;
              "
            >
              <img src="{{url('web')}}/assets/images/logo.png" alt="logo" /></div
          ></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input
                  type="text"
                  class="form-control bg-transparent border-0"
                  placeholder="Search..."
                />
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right" >
            <li class="nav-item nav-language dropdown d-none d-md-block" id="google_translate_element">
             
            </li>

            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="profileDropdown"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <div class="nav-profile-img">
                  <img src="{{url('web')}}/assets/images/faces/face1.jpg" alt="image" />
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?=Auth::user()->name ?></p>
                </div>
              </a>
              <div
                class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                aria-labelledby="profileDropdown"
                data-x-placement="bottom-end"
              >
                <div class="p-3 text-center" style="background: #030336">
                  <img
                    class="img-avatar img-avatar48 img-avatar-thumb"
                    src="{{url('web')}}/assets/images/faces/face1.jpg"
                    alt=""
                  />
                </div>
                <div class="p-2">
                  <a
                    class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                    href="/admin/profile"
                  >
                    <span>Profile</span>
                    <i class="mdi mdi-account ml-1"></i> 
                  </a>
                </div>
                <div class="p-2">
                  <a
                    class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                    href="/logout"
                  >
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
           @php
    $role = Auth::user()->role;
@endphp

@if($role == 'superadmin' || $role == 'manager') 
    <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/admin/bookin-list">
            <span class="icon-bg"><i class="mdi mdi-book menu-icon"></i></span>
            <span class="menu-title">Bookings</span>
        </a>
    </li>

    @if($role == 'superadmin' || $role == 'driver')
    <li class="nav-item">
        <a class="nav-link" href="/admin/reports-list">
            <span class="icon-bg"><i class="mdi mdi-bullseye menu-icon"></i></span>
            <span class="menu-title">Reports</span>
        </a>
    </li>
@endif


    <li class="nav-item">
        <a class="nav-link" href="/admin/rate-list">
            <span class="icon-bg"><i class="mdi mdi-currency-inr menu-icon"></i></span>
            <span class="menu-title">Rate List</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/admin/customer-list">
            <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
            <span class="menu-title">Customer List</span>
        </a>
    </li>
    

    @if ($role == 'superadmin')
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Access" aria-expanded="false" aria-controls="ui-basic">
            <span class="icon-bg"><i class="mdi mdi-phone menu-icon"></i></span>
            <span class="menu-title">Access Management</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Access">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/create-access">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/access-list">Access List</a>
                </li>
            </ul>
        </div>
    </li>
    @endif
@endif




         
           
{{-- 
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth"
              >
                <span class="icon-bg"
                  ><i class="mdi mdi-lock menu-icon"></i
                ></span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/profile"> Profile </a>
                  </li>
                
                </ul>
              </div>
            </li> --}}
          </ul>
        </nav>



        @yield('content')


  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="footer-inner-wraper">
      <div
        class="d-sm-flex justify-content-center justify-content-sm-between"
      >
        <span
          class="text-muted d-block text-center text-sm-left d-sm-inline-block"
          >Copyright © Laxmi Tirupati Transport 2025</span
        >
      </div>
    </div>  
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
{{-- <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      { 
        pageLanguage: "en", 
        includedLanguages: "en,mr", 
        autoDisplay: false 
      },
      "google_translate_element"
    );
  }
</script> --}}

{{-- <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}

{{-- <!-- Hidden Google Translate Element -->
<div id="google_translate_element" style="display: none;"></div>

<script type="text/javascript">
  function setDefaultLanguage() {
    var languageCode = "mr"; // Default language set to Marathi
    var interval = setInterval(function () {
      var selectElement = document.querySelector(".goog-te-combo");
      if (selectElement) {
        selectElement.value = languageCode;
        selectElement.dispatchEvent(new Event("change"));
        clearInterval(interval);
      }
    }, 500);
  }

  window.onload = function () {
    setTimeout(setDefaultLanguage, 1000);
  };

  // Hide Google Translate popups and unwanted elements
  function hideGoogleTranslateElements() {
    var style = document.createElement("style");
    style.innerHTML = `
      .goog-te-banner-frame, 
      .goog-te-balloon-frame, 
      .goog-te-menu-frame, 
      .goog-tooltip, 
      .goog-tooltip:hover, 
      .goog-te-spinner-pos, 
      .goog-te-gadget,
      iframe.VIpgJd-ZVi9od-ORHb-OEVmcd { 
        display: none !important; 
        visibility: hidden !important; 
        opacity: 0 !important; 
        width: 0 !important; 
        height: 0 !important; 
        position: absolute !important; 
      }
      
      body { top: 0px !important; }
    `;
    document.head.appendChild(style);
  }

  setTimeout(hideGoogleTranslateElements, 2000);
</script> --}}

<style>
  /* Hide Google Translate elements */
  .goog-te-banner-frame, 
  .goog-te-balloon-frame, 
  .goog-te-menu-frame, 
  .goog-tooltip, 
  .goog-tooltip:hover, 
  .goog-te-spinner-pos, 
  .goog-te-gadget,
  iframe.VIpgJd-ZVi9od-ORHb-OEVmcd { 
    display: none !important; 
    visibility: hidden !important; 
    opacity: 0 !important; 
    width: 0 !important; 
    height: 0 !important; 
    position: absolute !important; 
  }

  body {
    top: 0px !important;
  }
</style>

<!-- plugins:js -->
<script src="{{url('web')}}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{url('web')}}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{url('web')}}/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{url('web')}}/assets/js/off-canvas.js"></script>
<script src="{{url('web')}}/assets/js/hoverable-collapse.js"></script>
<script src="{{url('web')}}/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{url('web')}}/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->


<script src="{{ url('') }}/sweetalert/sweetalert2@11.js"></script>

@if(Session::has('success'))
<script>
  Swal.fire({
title: '{{ Session::get('success') }}!',
text: '',
icon: 'success',
});

</script>

@endif
@if(Session::has('error'))
<script>
  Swal.fire({
title: '{{ Session::get('error') }}!',
text: '',
icon: 'error',
});
</script>
@endif

<script>
function formatDate(date) {
const options = { year: "numeric", month: "short", day: "numeric" };
return new Intl.DateTimeFormat("en-US", options).format(date);
}

const today = new Date();
const startDate = formatDate(today);
const endDate = formatDate(today);

document.getElementById(
"date-range"
).textContent = `${startDate} - ${endDate}`;
</script>
</body>
</html>