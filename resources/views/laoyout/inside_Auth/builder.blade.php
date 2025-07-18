<div class="sidebar sidebar-style-2" data-background-color="{{ $themecolor }}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <div class="user">
          <div class="avatar-sm float-left mr-2">
            <img
              src="{{ url('admin') }}/assets/img/admins/66693d3c45263.png"
              alt="Admin Image"
              class="avatar-img rounded-circle"
            />
          </div>

          <div class="info">
            <a
              data-toggle="collapse"
              href="#adminProfileMenu"
              aria-expanded="true"
            >
              <span>
                {{ Auth::user()->name }}

                <span class="user-level">{{ $role }}</span>

                <span class="caret"></span>
              </span>
            </a>

            <div class="clearfix"></div>

            <div class="collapse in" id="adminProfileMenu">
              <ul class="nav">
                <li>
                  <a href="/admin/profile">
                    <span class="link-collapse">Edit Profile</span>
                  </a>
                </li>

                {{-- <li>
                  <a href="change-password.html">
                    <span class="link-collapse">Change Password</span>
                  </a>
                </li> --}}

                <li>
                  <a href="/logout">
                    <span class="link-collapse">Logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <ul class="nav nav-primary">
          <div class="row mb-3">
            <div class="col-12">
              <form action="">
                <div class="form-group py-0">
                  <input
                    name="term"
                    type="text"
                    class="form-control sidebar-search ltr"
                    placeholder="Search Menu Here..."
                  />
                </div>
              </form>
            </div>
          </div>

          <li class="nav-item active">
            <a href="/admin/dashboard">
              <i class="fa-solid fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#carManagement">
              <i class="fa-solid fa-home"></i>
              <p>Property Management</p>
              <span class="caret"></span>
            </a>

            <div id="carManagement" class="collapse">
              <ul class="nav nav-collapse">
                {{-- <li class="">
                  <a href="property-management-settings.html">
                    <span class="sub-item">Settings</span>
                  </a>
                </li> --}}
                {{-- <li class="">
                  <a href="/admin/new-property?property_type=latest_properties">
                    <span class="sub-item">Add Property</span>
                  </a>
                </li> --}}

                {{-- <li class="">
                  <a href="/admin/property-management-properties?property_type=latest_properties">
                    <span class="sub-item">Manage Properties</span>
                  </a>
                </li> --}}

                <li class="">
                  <a href="/admin/property-management-properties?property_type=projects_builder">
                    <span class="sub-item">New Projects / Builder</span>
                  </a>
                </li>

                {{-- <li class="">
                  <a href="/admin/property-management-properties?property_type=land_plot">
                    <span class="sub-item">Land / Plot</span>
                  </a>
                </li> --}}


            </ul>
            </div>
          </li>



        </ul>
      </div>
    </div>
  </div>
