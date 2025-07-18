@extends('laoyout.admin')
@section('content')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Profile</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin/profile">Profile</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Profile
            </li>
          </ol>
        </nav>
      </div>

      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="home-tab"
                  data-toggle="tab"
                  data-target="#home"
                  type="button"
                  role="tab"
                  aria-controls="home"
                  aria-selected="true"
                >
                  Update My Profile
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="profile-tab"
                  data-toggle="tab"
                  data-target="#profile"
                  type="button"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                >
                  Update Password
                </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <form class="forms-sample" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 col-6">
                      <div class="form-group">
                        <label for="">Full Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id=""
                          value="<?= Auth::user()->name  ?>"
                          name="name"
                          placeholder="Enter Full Name"
                        />
                      </div>
                    </div>

                    <div class="col-lg-6 col-6">
                      <div class="form-group">
                        <label for="">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id=""
                          name="email"
                          value="<?= Auth::user()->email  ?>"
                          placeholder="Enter  Email"
                        />
                      </div>
                    </div>
                  
                    <div class="col-lg-6 col-6">
                      <div class="form-group">
                        <label for="">Phone Number</label>
                        <input
                          type="text"
                          class="form-control"
                          id=""
                          name="phone"
                          value="<?= Auth::user()->phone  ?>"
                          placeholder="+91 Enter Mobile "
                        />
                      </div>
                    </div>

                    <div class="col-lg-6 col-6">
                      <div class="form-group">
                        <label for="">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          id=""
                        name="address"
                        value="<?= Auth::user()->address  ?>"
                        />
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">
                    Update
                  </button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
              <div
                class="tab-pane fade"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >
                <form class="forms-sample" enctype="multipart/form-data" action="/admin/change-password" method="post">
                  @csrf
                  <input
                    type="hidden"
                    name=""
                    value="1JKXaxVfoqk8vcEV0yiVbim1181mDSgaJd8IKGTI"
                  />
                  <div class="row">
                    <div class="col-lg-4 col-12">
                      <div class="form-group">
                        <label for="">Currunt Password</label>
                        <input
                          type="text"
                          class="form-control"
                          id=""
                          name="currunt_password"
                          placeholder="Currunt Password"
                        />
                      </div>
                    </div>

                    <div class="col-lg-4 col-12">
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input
                          type="text"
                          class="form-control"
                          id=""
                          name="new_password"
                          placeholder="Enter New Password"
                        />
                      </div>
                    </div>

                    <div class="col-lg-4 col-12">
                      <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input
                          type="text"
                          class="form-control"
                          id=""
                          name="new_password_confirmation"
                          placeholder="Enter Confirm Password"
                        />
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">
                    Update
                  </button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->

@endsection
