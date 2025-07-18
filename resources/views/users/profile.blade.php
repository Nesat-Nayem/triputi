@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')
<div class="page-title-area header-next">
    <img class="lazyload blur-up bg-img" src="assets/img/6511175715121.jpg" />
    <div class="container">
      <div class="content text-center">
        <h1 class="color-white">Dashboard</h1>
        <ul class="list-unstyled">
          <li class="d-inline-block">
            <a href="index.html">Home</a>
          </li>
          <li class="d-inline-block">>></li>
          <li class="d-inline-block active">Dashboard</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Page title end-->

  <div class="user-dashboard pt-100 pb-60">
    <div class="container">
      <div class="row gx-xl-5">
        <div class="col-lg-3">
          <div class="sidebar-widget-area mb-40">
            <div class="widget radius-md">
              <ul class="links">
                <li>
                  <a href="dashboard.html" class="active">Dashboard</a>
                </li>

                <li>
                  <a href="wishlist.html" class="">My Wishlists </a>
                </li>
                <li>
                  <a href="support-ticket.html" class="">Support Tickets </a>
                </li>

                <li>
                  <a href="change-password.html" class="">Change Password </a>
                </li>
                <li>
                  <a href="edit-profile.html" class="">Edit Profile </a>
                </li>
                <li>
                  <a href="user/login.html">Logout </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="user-profile-details mb-30">
            <div class="account-info radius-md">
              <div class="title">
                <h4>Account Information</h4>
              </div>
              <div class="main-info">
                <ul class="list">
                  <li><span>Name:</span> <span></span></li>
                  <li><span>Username:</span> <span>nenimok</span></li>
                  <li>
                    <span>Email:</span> <span>nenimok340@eqvox.com</span>
                  </li>
                  <li><span>Phone:</span> <span></span></li>
                  <li><span>City:</span> <span></span></li>
                  <li><span>Country:</span> <span></span></li>
                  <li><span>State:</span> <span></span></li>
                  <li><span>Zip Code:</span> <span></span></li>
                  <li><span>Address:</span> <span></span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="account-info radius-md mb-40">
            <div class="title">
              <h4>Wishlists</h4>
            </div>
            <div class="main-info">
              <div class="main-table">
                <div class="table-responsive">
                  <table id="myTable" class="table table-striped w-100">
                    <thead>
                      <tr>
                        <th>Serial</th>
                        <th>Property title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#1</td>
                        <td>
                          <a href="property-details.html"
                            >Elegant Home in Quiet Neighborhood</a
                          >
                        </td>
                        <td>
                          <a href="property-details.html" class="btn"
                            ><i class="fas fa-eye"></i> View</a
                          >
                          <a href="remove/wishlist/78" class="btn"
                            ><i class="fas fa-times"></i> Remove</a
                          >
                        </td>
                      </tr>

                      <tr>
                        <td>#2</td>
                        <td>
                          <a href="property-details.html"
                            >Fully Furnished Floor Ready for Move-In</a
                          >
                        </td>
                        <td>
                          <a href="property-details.html" class="btn"
                            ><i class="fas fa-eye"></i> View</a
                          >
                          <a href="remove/wishlist/73" class="btn"
                            ><i class="fas fa-times"></i> Remove</a
                          >
                        </td>
                      </tr>

                      <tr>
                        <td>#3</td>
                        <td>
                          <a href="property-details.html"
                            >Prime Commercial Building for Rent</a
                          >
                        </td>
                        <td>
                          <a href="property-details.html" class="btn"
                            ><i class="fas fa-eye"></i> View</a
                          >
                          <a href="remove/wishlist/80" class="btn"
                            ><i class="fas fa-times"></i> Remove</a
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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
