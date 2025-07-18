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

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
      >
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo" href="/Driver/dashboard"
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
          <a class="navbar-brand brand-logo-mini" href="/Driver/dashboard"
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
         


            <li class="nav-item">
              <a class="nav-link" href="/Driver/dashboard">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
            @if(Auth::check() && Auth::user()->role == "driver")
              <li class="nav-item">
                <a class="nav-link" href="{{ route('reports.list.driver') }}">
                  <span class="icon-bg"><i class="mdi mdi-book menu-icon"></i></span>
                  <span class="menu-title">Reports</span>
                </a>
              </li>
            @endif
            
            
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