@extends('laoyout.admin')
@section('content')


<style>
    .image_box img{
        width: 70px;
    height: 70px;
    object-fit: cover;
    }
</style>

<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">

            <?php if($_GET['property_type'] == "projects_builder"){
             $title = "New Projects / Builder";
            }elseif ($_GET['property_type'] == "latest_properties") {
                $title = "Latest Properties";
            }else{
                $title = "Land / Plot";
            }
                ?>

          <h4 class="page-title"><?= $title ?></h4>
          <ul class="breadcrumbs">
            <li class="nav-home">
              <a href="/admin/dashboard">
                <i class="fa-solid fa-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-angle-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Property Management</a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-angle-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Properties</a>
            </li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card-title d-inline-block">Properties</div>
                  </div>
                  <div class="col-lg-6 mt-2 mt-lg-0">
                    <a
                      href="/admin/new-property?property_type={{ $_GET['property_type'] }}"
                      class="btn btn-primary btn-sm float-right"
                      ><i class="fa-solid fa-plus"></i> Add Property</a
                    >

                    <button
                      class="btn btn-danger btn-sm float-right mr-2 d-none bulk-delete"
                    >
                      <i class="fa-solid fa-trash"></i> Delete
                    </button>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="table-responsive">
                      <table class="table table-striped mt-3">
                        <thead>
                          <tr>
                            <th scope="col">
                              <input
                                type="checkbox"
                                class="bulk-check"
                                data-val="all"
                              />
                            </th>
                            <th scope="col">Title</th>

                            <?php if($_GET['property_type'] == "latest_properties" || $_GET['property_type'] == "land_plot"){ ?>

                            <th scope="col">Category</th>
                            <?php } ?>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key => $value)

                            <tr>
                            <td>
                              <input
                                type="checkbox"
                                class="bulk-check"
                                data-val="80"
                              />
                            </td>
                            <td class="table-title">
                              <a href="" target="_blank">
                                {{ $value->title }}
                              </a>
                            </td>
                            <?php if($_GET['property_type'] == "land_plot" || $_GET['property_type'] == "latest_properties"){ ?>

                            <td>
                                @if($_GET['property_type'] == "latest_properties")
                              <span class="badge badge-success">@if(isset($value->category->title)) {{ $value->category->title }} @endif</span>
                                    @else
                              <span class="badge badge-success">{{ $value->plot_category }}</span>

                                @endif
                            </td>
                            <?php } ?>
                            <td class="image_box">
                                <img src="{{ url('') }}/{{ $value->thumbnail }}" loading="lazy" class=" img-thumbnail" alt="">
                            </td>
                            <td>
                              <div class="dropdown">
                                <button
                                  class="btn btn-secondary dropdown-toggle btn-sm"
                                  type="button"
                                  id="dropdownMenuButton"
                                  data-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  Select
                                </button>

                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuButton"
                                >
                                  <a  href="/admin/edit-property/{{ $value->id }}?property_type={{ $_GET['property_type'] }}" class="dropdown-item">
                                    <span class="btn-label">
                                      <i class="fa-solid fa-edit"></i> Edit
                                    </span>
                                  </a>
                                  <a href="/admin/delete/property/{{ $value->id }}" onclick="return confirm('Are you sure ! Delete This.')" class="dropdown-item">
                                    <span class="btn-label">
                                      <i class="fa-solid fa-trash"></i>
                                      Delete
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>

                        @endforeach
                        </tbody>
                      </table>



                @if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="pagination-container">
                    {{-- Custom Pagination Links --}}
                    {{ $data->links('vendor.pagination.custom') }}  {{-- Reference to the custom pagination view --}}
                </div>
            @endif



                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
{{--
        <div
          class="modal fade"
          id="featuredRequest"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div
            class="modal-dialog modal-lg modal-dialog-centered"
            role="document"
          >
            <div class="modal-content">
              <form
                id="my-checkout-form"
                class="modal-form"
                method="post"
                enctype="multipart/form-data"
              >
                <input type="hidden" name="_token" value="" />
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">
                    Featured Request
                  </h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div class="modal-body">
                  <input
                    type="hidden"
                    id="in_property_id"
                    name="property_id"
                  />

                  <div class="form-group">
                    <label for=""> Select Pricing * </label>
                    <div class="row mt-2 justify-content-center">
                      <div class="col-md-3">
                        <label class="imagecheck">
                          <input
                            name="featured_pricing_id"
                            type="radio"
                            value="4"
                            class="imagecheck-input"
                            checked=""
                          />

                          <figure class="imagecheck-figure">
                            <div class="card-pricing3 card-secondary">
                              <div class="pricing-header pb-2"></div>
                              <div class="price-value">
                                <div class="value">
                                  <span class="amount">$50</span>
                                </div>
                              </div>

                              <ul class="pricing-content">
                                <li>Number Of Days : 10</li>
                              </ul>
                            </div>
                          </figure>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label class="imagecheck">
                          <input
                            name="featured_pricing_id"
                            type="radio"
                            value="5"
                            class="imagecheck-input"
                            checked=""
                          />

                          <figure class="imagecheck-figure">
                            <div class="card-pricing3 card-secondary">
                              <div class="pricing-header pb-2"></div>
                              <div class="price-value">
                                <div class="value">
                                  <span class="amount">$80</span>
                                </div>
                              </div>

                              <ul class="pricing-content">
                                <li>Number Of Days : 20</li>
                              </ul>
                            </div>
                          </figure>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label class="imagecheck">
                          <input
                            name="featured_pricing_id"
                            type="radio"
                            value="6"
                            class="imagecheck-input"
                            checked=""
                          />

                          <figure class="imagecheck-figure">
                            <div class="card-pricing3 card-secondary">
                              <div class="pricing-header pb-2"></div>
                              <div class="price-value">
                                <div class="value">
                                  <span class="amount">$100</span>
                                </div>
                              </div>

                              <ul class="pricing-content">
                                <li>Number Of Days : 25</li>
                              </ul>
                            </div>
                          </figure>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label class="imagecheck">
                          <input
                            name="featured_pricing_id"
                            type="radio"
                            value="7"
                            class="imagecheck-input"
                            checked=""
                          />

                          <figure class="imagecheck-figure">
                            <div class="card-pricing3 card-secondary">
                              <div class="pricing-header pb-2"></div>
                              <div class="price-value">
                                <div class="value">
                                  <span class="amount">$120</span>
                                </div>
                              </div>

                              <ul class="pricing-content">
                                <li>Number Of Days : 30</li>
                              </ul>
                            </div>
                          </figure>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-2">
                    <label for="payment-gateway">
                      Select Payment Method *</label
                    >
                    <select
                      name="gateway"
                      id="payment-gateway"
                      required=""
                      class="form-control select"
                    >
                      <option selected="" disabled="" value="">
                        Select Payment Gateway
                      </option>
                      <option value="paypal">PayPal</option>
                      <option value="instamojo">Instamojo</option>
                      <option value="paystack">Paystack</option>
                      <option value="flutterwave">Flutterwave</option>
                      <option value="razorpay">Razorpay</option>
                      <option value="mercadopago">MercadoPago</option>
                      <option value="mollie">Mollie</option>
                      <option value="stripe">Stripe</option>
                      <option value="paytm">Paytm</option>
                      <option value="authorize.net">Authorize.net</option>

                      <option value="Citibank">Citibank</option>
                      <option value="Bank of America">
                        Bank of America
                      </option>
                    </select>
                  </div>
                </div>

                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button
                    type="submit"
                    id="payment"
                    class="btn btn-primary"
                  >
                    Pay
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div> --}}
      </div>
    </div>

    {{-- <footer class="footer py-4">
      <div class="container-fluid">
        <div class="d-block mx-auto">
          <p class="mb-0"></p>
          <p>Copyright ©2024. All Rights Reserved.</p>
          <p></p>
        </div>
      </div>
    </footer> --}}
  </div>

  @section('footer')


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

  @endsection

  @endsection
