@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('manager.layout.index')

@section('content')


   <!-- partial -->
   <div class="main-panel">
    <div class="content-wrapper">
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2">
          Welcome {{Auth::user()->name}}
        </h2>
        <div
          class="d-sm-flex justify-content-xl-between align-items-center mb-2"
        >
          <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
            <button
              class="btn bg-white dropdown-toggle p-3 d-flex align-items-center"
              type="button"
              id="dropdownMenuButton1"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="mdi mdi-calendar mr-1"></i
              ><span id="date-range"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div
              class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card"
            >
              <a href="" style="width: 100%">
                <div
                  class="card"
                  style="
                    background: #e9f3f1;
                    color: #000;
                    border: 1px dotted #000;
                  "
                >
                  <div class="card-body text-center">
                    <h5 class="mb-2 font-weight-normal">
                      today's Reports
                    </h5>
                    <h2 class="mb-4 font-weight-bold">{{$todayReports}}</h2>
                  </div>
                </div>
              </a>
            </div>

        
          
{{-- 
            <div
              class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card"
            >
              <a href="categories.html" style="width: 100%">
                <div
                  class="card"
                  style="
                    background: #fff2ee;
                    color: #000;
                    border: 1px dotted #000;
                  "
                >
                  <div class="card-body text-center">
                    <h5 class="mb-2 font-weight-normal">
                      Total Collection
                    </h5>
                    <h2 class="mb-4 font-weight-bold">11,000</h2>
                  </div>
                </div>
              </a>
            </div> --}}

            {{-- <div
              class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card"
            >
              <a href="categories.html" style="width: 100%">
                <div
                  class="card"
                  style="
                    background: #eafaff;
                    color: #000;
                    border: 1px dotted #000;
                  "
                >
                  <div class="card-body text-center">
                    <h5 class="mb-2 font-weight-normal">
                      Today's Collection
                    </h5>
                    <h2 class="mb-4 font-weight-bold">374000</h2>
                  </div>
                </div>
              </a>
            </div> --}}
            {{-- <div
              class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card"
            >
              <a href="bookings.html" style="width: 100%">
                <div
                  class="card"
                  style="
                    background: #eeedff;
                    color: #000;
                    border: 1px dotted #000;
                  "
                >
                  <div class="card-body text-center">
                    <h5 class="mb-2 font-weight-normal">
                      Total Vehicles
                    </h5>
                    <h2 class="mb-4 font-weight-bold">718</h2>
                  </div>
                </div>
              </a>
            </div> --}}
          </div>
        </div>
      </div>
{{-- 
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <div class="search-field" style="border: 1px solid #000">
                  <form
                    class="d-flex align-items-center h-100"
                    action="#"
                  >
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <i
                          class="input-group-text border-0 mdi mdi-magnify"
                        ></i>
                      </div>
                      <input
                        type="text"
                        class="form-control bg-transparent border-0"
                        placeholder="Search..."
                      />
                    </div>
                  </form>
                </div>

                <a href="create-booking.html">
                  <button
                    type="button"
                    class="btn btn-outline-danger btn-icon-text"
                  >
                    <i class="mdi mdi-plus btn-icon-prepend"></i> Add
                    Bookings
                  </button>
                </a>
              </div>

              <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>will send</th>
                    <th>will take</th>
                    <th>Date</th>
                    <th>Item Name</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Suraj Jamdade</td>
                    <td>Vishal Mishra</td>
                    <td>03/ 01/ 2025</td>
                    <td>Tv</td>
                    <td>Glass</td>
                    <td>
                      <div class="badge badge-success">Approved</div>
                    </td>
                    <td>
                      <div
                        class="btn-group"
                        role="group"
                        aria-label="Basic example"
                      >
                        <button
                          type="button"
                          class="btn btn-inverse-dark btn-icon mx-2"
                          title="View"
                          data-toggle="modal"
                          data-target="#viewModal"
                        >
                          <i class="mdi mdi-eye-circle"></i>
                        </button>

                        <a href="edit-booking.html">
                          <button
                            type="button"
                            class="btn btn-inverse-dark btn-icon mx-2"
                            title="Edit"
                          >
                            <i class="mdi mdi-table-edit"></i>
                          </button>
                        </a>

                        <a href="#">
                          <button
                            type="button"
                            class="btn btn-inverse-danger btn-icon mx-2"
                            title="Delete"
                          >
                            <i class="mdi mdi-trash-can"></i>
                          </button>
                        </a>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>002</td>
                    <td>Suraj Jamdade</td>
                    <td>Vishal Mishra</td>
                    <td>03/ 01/ 2025</td>
                    <td>Gas</td>
                    <td>Gas</td>
                    <td>
                      <div class="badge badge-danger">Rejected</div>
                    </td>
                    <td>
                      <div
                        class="btn-group"
                        role="group"
                        aria-label="Basic example"
                      >
                        <button
                          type="button"
                          class="btn btn-inverse-dark btn-icon mx-2"
                          title="View"
                          data-toggle="modal"
                          data-target="#viewModal"
                        >
                          <i class="mdi mdi-eye-circle"></i>
                        </button>

                        <a href="edit-booking.html">
                          <button
                            type="button"
                            class="btn btn-inverse-dark btn-icon mx-2"
                            title="Edit"
                          >
                            <i class="mdi mdi-table-edit"></i>
                          </button>
                        </a>

                        <a href="#">
                          <button
                            type="button"
                            class="btn btn-inverse-danger btn-icon mx-2"
                            title="Delete"
                          >
                            <i class="mdi mdi-trash-can"></i>
                          </button>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

              <div class="row mt-5 text-center">
                <div class="col-lg-12">
                  <div
                    class="btn-group"
                    role="group"
                    aria-label="Basic example"
                  >
                    <button
                      type="button"
                      class="btn btn-outline-secondary"
                    >
                      1
                    </button>
                    <button
                      type="button"
                      class="btn btn-outline-secondary"
                    >
                      2
                    </button>
                    <button
                      type="button"
                      class="btn btn-outline-secondary"
                    >
                      3
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- content-wrapper ends -->

    <!-- view modal -->
    <div
      class="modal fade"
      id="viewModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      style="display: none"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">
              View Details
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
            <table class="table table-bordered table-responsive-sm">
              <tbody>
                <tr>
                  <th>will send</th>
                  <td>Suraj Jamdade</td>
                </tr>
                <tr>
                  <th>will take</th>
                  <td>Vishal Mishra</td>
                </tr>
                <tr>
                  <th>Date</th>
                  <td>03/01/2025</td>
                </tr>
                <tr>
                  <th>Item Name</th>
                  <td>Tv</td>
                </tr>
                <tr>
                  <th>Category Name</th>
                  <td>Glass</td>
                </tr>
                <tr>
                  <th>City Name</th>
                  <td>Pune</td>
                </tr>
                <tr>
                  <th>Area</th>
                  <td>Baner</td>
                </tr>
                <tr>
                  <th>Pin Code</th>
                  <td>41111</td>
                </tr>
                <tr>
                  <th>Qty</th>
                  <td>1</td>
                </tr>
                <tr>
                  <th>Transportation fare</th>
                  <td>1000</td>
                </tr>
                <tr>
                  <th>Filled up</th>
                  <td>100</td>
                </tr>
                <tr>
                  <th>Receipt charge</th>
                  <td>20</td>
                </tr>
                <tr>
                  <th>we attacked</th>
                  <td>20</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>2000</td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>
                    <p class="badge badge-success">Approved</p>
                  </td>
                </tr>
                <tr>
                  <th>The said goods were received safely.</th>
                  <th>yes</th>
                </tr>
                <tr>
                  <th>Rent recovered</th>
                  <th>yes</th>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >
              <i class="mdi mdi-close-octagon menu-icon"></i> Close
            </button>
            <a href="print-booking.html">
              <button type="button" class="btn btn-info">
                <i class="mdi mdi-printer menu-icon"></i> Print
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>

@endsection
