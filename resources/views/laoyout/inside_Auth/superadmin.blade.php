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
                  <a href="<?=route('logout') ?>">
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
            <a data-toggle="collapse" href="#propertySpecification">
              <i class="fa-regular fa-file"></i>
              <p>Property Specifications</p>
              <span class="caret"></span>
            </a>

            <div id="propertySpecification" class="collapse">
              <ul class="nav nav-collapse">

                <li class="">
                  <a href="/admin/categories?type=property">
                    <span class="sub-item">Categories</span>
                  </a>
                </li>

                <li class="">
                  <a href="/admin/amenity">
                    <span class="sub-item">Amenities</span>
                  </a>
                </li>
                <li class="">
                  <a href="/admin/country">
                    <span class="sub-item">Countries</span>
                  </a>
                </li>
                <li class="">
                  <a href="/admin/states">
                    <span class="sub-item">States</span>
                  </a>
                </li>
                <li class="">
                  <a href="/admin/city">
                    <span class="sub-item">Cities</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a data-toggle="collapse" href="#usermagament">
              <i class="fa-regular fa-file"></i>
              <p>User Management</p>
              <span class="caret"></span>
            </a>

            <div id="usermagament" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="/admin/view-agent">
                    <span class="sub-item">agent</span>
                  </a>
                </li>

                <li class="">
                  <a href="/admin/view-builder">
                    <span class="sub-item">builder</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#blogs">
              <i class="fa-regular fa-file"></i>
              <p>Blog</p>
              <span class="caret"></span>
            </a>

            <div id="blogs" class="collapse">
              <ul class="nav nav-collapse">

                <li class="">
                  <a href="/admin/create-blog">
                    <span class="sub-item">Create Blog</span>
                  </a>
                </li>
                <li class="">
                  <a href="/admin/blogs">
                    <span class="sub-item">Blog List</span>
                  </a>
                </li>
                <li class="">
                  <a href="/admin/categories?type=blog_category">
                    <span class="sub-item">Categories</span>
                  </a>
                </li>

              </ul>
            </div>
          </li>


          
          <li class="nav-item">
            <a data-toggle="collapse" href="#footer">
              <i class="fa-solid fa-shoe-prints"></i>
              <p>Testimonials</p>
              <span class="caret"></span>
            </a>

            <div id="footer" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="{{ route('createtestimonials') }}">
                    <span class="sub-item">Create Testimonials</span>
                  </a>
                </li>

                <li class="">
                  <a href="{{ route('testimonials') }}">
                    <span class="sub-item">Testimonials List</span>
                  </a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#featuredPricing">
              <i class="fa-solid fa-money-bill"></i>
              <p>Web Pages</p>
              <span class="caret"></span>
            </a>
            <div id="featuredPricing" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="{{ route('aboutus') }}">
                    <span class="sub-item">About Us</span>
                  </a>
                </li>

                <li class="">
                  <a href="{{ route('faq') }}">
                    <span class="sub-item">Faq</span>
                  </a>
                </li>

                <li class="">
                  <a href="{{ route('privacypolicy') }}">
                    <span class="sub-item">Privacy Policy</span>
                  </a>
                </li>


                <li class="">
                  <a href="{{ route('terms') }}">
                    <span class="sub-item">Terms Condition</span>
                  </a>
                </li>


                
                <li class="">
                  <a href="{{ route('counteradd') }}">
                    <span class="sub-item">counter</span>
                  </a>
                </li>

              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a href="{{ route('contact-list') }}">
              <i class="fa-solid fa-circle-notch"></i>
              <p>Contact Enquiry</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#blog">
              <i class="fa-solid fa-blog"></i>
              <p>Teams Management</p>
              <span class="caret"></span>
            </a>

            <div id="blog" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="{{ route('createteam') }}">
                    <span class="sub-item">Create Team</span>
                  </a>
                </li>
              </ul>
            </div>

            <div id="blog" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="{{ route('team') }}">
                    <span class="sub-item">Team List</span>
                  </a>
                </li>
              </ul>
            </div>
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

                <li class="">
                  <a href="/admin/property-management-properties?property_type=latest_properties">
                    <span class="sub-item">Manage Properties</span>
                  </a>
                </li>

                <li class="">
                  <a href="/admin/property-management-properties?property_type=projects_builder">
                    <span class="sub-item">New Projects / Builder</span>
                  </a>
                </li>

                <li class="">
                  <a href="/admin/property-management-properties?property_type=land_plot">
                    <span class="sub-item">Land / Plot</span>
                  </a>
                </li>


            </ul>
            </div>
          </li>



          <li class="nav-item">
            <a href="property-messages.html">
              <i class="fa-solid fa-comment"></i>
              <p>Property Messages</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#projectManagement">
              <i class="fa-solid fa-building"></i>
              <p>Project Management</p>
              <span class="caret"></span>
            </a>

            <div id="projectManagement" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="project-management-settings.html">
                    <span class="sub-item">Settings</span>
                  </a>
                </li>

                <li class="">
                  <a href="project-management-create.html">
                    <span class="sub-item">Add Project</span>
                  </a>
                </li>

                <li class="">
                  <a href="project-management-projects.html">
                    <span class="sub-item">Manage Projects</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="agent-management.html">
              <i class="fa-solid fa-users"></i>
              <p>Agents</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#packageManagement">
              <i class="fa-solid fa-receipt"></i>
              <p>Package Management</p>
              <span class="caret"></span>
            </a>

            <div id="packageManagement" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="package-settings.html">
                    <span class="sub-item">Settings</span>
                  </a>
                </li>

                <li class="">
                  <a href="package-packages.html">
                    <span class="sub-item">Packages</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="menu-builder.html">
              <i class="fa-solid fa-bars"></i>
              <p>Menu Builder</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="payment-log.html">
              <i class="fa-solid fa-rupee-sign"></i>
              <p>Payment Log</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#user">
              <i class="fa-solid fa-users"></i>
              <p>Users Management</p>
              <span class="caret"></span>
            </a>

            <div id="user" class="collapse">
              <ul class="nav nav-collapse">
                <li class="                  ">
                  <a href="user-management.html">
                    <span class="sub-item">Registered Users</span>
                  </a>
                </li>

                <li class="">
                  <a href="user-management-create.html">
                    <span class="sub-item">Add User</span>
                  </a>
                </li>

                <li class="">
                  <a href="user-management-subscribers.html">
                    <span class="sub-item">Subscribers</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#vendor">
              <i class="fa-solid fa-users"></i>
              <p>Vendors Management</p>
              <span class="caret"></span>
            </a>

            <div id="vendor" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="vendor-management-settings.html">
                    <span class="sub-item">Settings</span>
                  </a>
                </li>
                <li class="">
                  <a href="vendor-management-registered-vendors.html">
                    <span class="sub-item">Registered vendors</span>
                  </a>
                </li>
                <li class="">
                  <a href="vendor-management-add-vendor.html">
                    <span class="sub-item">Add vendor</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#support_ticket">
              <i class="fa-solid fa-circle-info"></i>
              <p>Support Tickets</p>
              <span class="caret"></span>
            </a>

            <div id="support_ticket" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="support-ticket-setting.html">
                    <span class="sub-item">Setting</span>
                  </a>
                </li>
                <li class="">
                  <a href="support-tickets.html">
                    <span class="sub-item">All Tickets</span>
                  </a>
                </li>
                <li class="">
                  <a href="support-ticket-pending.html">
                    <span class="sub-item">Pending Tickets</span>
                  </a>
                </li>
                <li class="">
                  <a href="support-ticket-open.html">
                    <span class="sub-item">Open Tickets</span>
                  </a>
                </li>
                <li class="">
                  <a href="support-ticket-closed.html">
                    <span class="sub-item">Closed Tickets</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#home_page">
              <i class="fa-solid fa-layer-group"></i>
              <p>Home Page</p>
              <span class="caret"></span>
            </a>

            <div id="home_page" class="collapse">
              <ul class="nav nav-collapse">
                <li class="submenu">
                  <a data-toggle="collapse" href="#hero_section">
                    <span class="sub-item">Hero Section</span>
                    <span class="caret"></span>
                  </a>

                  <div id="hero_section" class="collapse">
                    <ul class="nav nav-collapse subnav">
                      <li class="">
                        <a href="home-page-hero-section.html">
                          <span class="sub-item">Static Version</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="">
                  <a href="about-section.html">
                    <span class="sub-item">About Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="why-choose-us-section.html">
                    <span class="sub-item">Why Choose Us Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="brand-section.html">
                    <span class="sub-item">Brand Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="property-section.html">
                    <span class="sub-item">Property Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="feature-section.html">
                    <span class="sub-item">Featured Property Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="counter-section.html">
                    <span class="sub-item">Counter Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="city-section.html">
                    <span class="sub-item">City Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="testimonial-section.html">
                    <span class="sub-item">Testimonial Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="vendor-section.html">
                    <span class="sub-item">Vendor Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="subscribe-section.html">
                    <span class="sub-item">Subscribe Section</span>
                  </a>
                </li>

                <li class="">
                  <a href="section-customization.html">
                    <span class="sub-item">Section Show/Hide</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#footer">
              <i class="fa-solid fa-shoe-prints"></i>
              <p>Footer</p>
              <span class="caret"></span>
            </a>

            <div id="footer" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="logo-and-image.html">
                    <span class="sub-item">Logo &amp; Image</span>
                  </a>
                </li>

                <li class="">
                  <a href="content.html">
                    <span class="sub-item">Content</span>
                  </a>
                </li>

                <li class="">
                  <a href="quick-links.html">
                    <span class="sub-item">Quick Links</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="custom-pages.html">
              <i class="fa-solid fa-file"></i>
              <p>Custom Pages</p>
            </a>
          </li>

         

         

          <li class="nav-item">
            <a data-toggle="collapse" href="#customid">
              <i class="fa-brands fa-buysellads"></i>
              <p>Advertisements</p>
              <span class="caret"></span>
            </a>

            <div id="customid" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="advertise-settings.html">
                    <span class="sub-item">Settings</span>
                  </a>
                </li>

                <li class="">
                  <a href="advertise-all-advertisement.html">
                    <span class="sub-item">All Advertisements</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="announcement-popups.html">
              <i class="fa-solid fa-bullhorn"></i>
              <p>Announcement Popups</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#basic_settings">
              <i class="fa-solid fa-gears"></i>
              <p>Basic Settings</p>
              <span class="caret"></span>
            </a>

            <div id="basic_settings" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="general-settings.html">
                    <span class="sub-item">General Settings</span>
                  </a>
                </li>

                <li class="">
                  <a href="contact-page.html">
                    <span class="sub-item">Contact Page</span>
                  </a>
                </li>

                <li class="submenu">
                  <a data-toggle="collapse" href="#mail-settings">
                    <span class="sub-item">Email Settings</span>
                    <span class="caret"></span>
                  </a>

                  <div id="mail-settings" class="collapse">
                    <ul class="nav nav-collapse subnav">
                      <li class="">
                        <a href="mail-from-admin.html">
                          <span class="sub-item">Mail From Admin</span>
                        </a>
                      </li>

                      <li class="">
                        <a href="mail-to-admin.html">
                          <span class="sub-item">Mail To Admin</span>
                        </a>
                      </li>

                      <li class="">
                        <a href="mail-templates.html">
                          <span class="sub-item">Mail Templates</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="">
                  <a href="breadcrumb.html">
                    <span class="sub-item">Breadcrumb</span>
                  </a>
                </li>

                <li class="">
                  <a href="page-headings.html">
                    <span class="sub-item">Page Headings</span>
                  </a>
                </li>

                <li class="">
                  <a href="plugins.html">
                    <span class="sub-item">Plugins</span>
                  </a>
                </li>

                <li class="">
                  <a href="seo-informations.html">
                    <span class="sub-item">SEO Informations</span>
                  </a>
                </li>

                <li class="">
                  <a href="maintenance-mode.html">
                    <span class="sub-item">Maintenance Mode</span>
                  </a>
                </li>

                <li class="">
                  <a href="cookie-alert.html">
                    <span class="sub-item">Cookie Alert</span>
                  </a>
                </li>

                <li class="">
                  <a href="social-medias.html">
                    <span class="sub-item">Social Medias</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#payment_gateways">
              <i class="fa-brands fa-paypal"></i>
              <p>Payment Gateways</p>
              <span class="caret"></span>
            </a>

            <div id="payment_gateways" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="online-gateways.html">
                    <span class="sub-item">Online Gateways</span>
                  </a>
                </li>

                <li class="">
                  <a href="offline-gateways.html">
                    <span class="sub-item">Offline Gateways</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#admin">
              <i class="fa-solid fa-users"></i>
              <p>Admin Management</p>
              <span class="caret"></span>
            </a>

            <div id="admin" class="collapse">
              <ul class="nav nav-collapse">
                <li class="">
                  <a href="role-permissions.html">
                    <span class="sub-item">Role &amp; Permissions</span>
                  </a>
                </li>

                <li class="">
                  <a href="registered-admins.html">
                    <span class="sub-item">Registered Admins</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="language-management.html">
              <i class="fa-solid fa-language"></i>
              <p>Language Management</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
