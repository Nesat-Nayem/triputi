
@extends('superadmin.layout.common')
@section('content')

<!-- customer list area Start-->
    <div class="form-element-area">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
            style="background: #fff; padding: 20px"
          >
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <div class="nk-int-st">
                    <input
                      type="search"
                      class="form-control input-sm"
                      placeholder="Search ..."
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="normal-table-list">
              <div class="bsc-tbl-bdr">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="text-wrap: nowrap">#</th>
                      <th style="text-wrap: nowrap">Bill No.</th>
                      <th style="text-wrap: nowrap">First Name</th>
                      <th style="text-wrap: nowrap">Last Name</th>
                      <th style="text-wrap: nowrap">Mobile Number</th>
                      <th style="text-wrap: nowrap">Delivery Date</th>
                      <th style="text-wrap: nowrap">Status</th>
                      <th style="text-wrap: nowrap">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-wrap: nowrap">1</td>
                      <td style="text-wrap: nowrap">8081</td>
                      <td style="text-wrap: nowrap">Suraj</td>
                      <td style="text-wrap: nowrap">Jamdade</td>
                      <td style="text-wrap: nowrap">+91 9090909090</td>
                      <td style="text-wrap: nowrap">14/11/2024</td>
                      <td style="text-wrap: nowrap">
                        <span class="label label-warning">Ongoing </span>
                      </td>
                      <td style="text-wrap: nowrap">
                        <a href="edit-customers.html">
                          <button
                            class="btn btn-primary primary-icon-notika waves-effect"
                          >
                            <i class="notika-icon notika-edit"></i>
                          </button>
                        </a>
                        <a href="#">
                          <button
                            class="btn btn-info primary-icon-notika waves-effect"
                            data-toggle="modal"
                            data-target="#ViewModal"
                          >
                            <i class="notika-icon notika-eye"></i>
                          </button>
                        </a>

                        <a href="#">
                          <button
                            class="btn btn-danger primary-icon-notika waves-effect"
                          >
                            <i class="notika-icon notika-trash"></i>
                          </button>
                        </a>
                        <a href="invoice.html">
                          <button
                            class="btn btn-warning primary-icon-notika waves-effect"
                          >
                            <i class="notika-icon notika-paperclip"></i>
                          </button>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-wrap: nowrap">2</td>
                      <td style="text-wrap: nowrap">8081</td>
                      <td style="text-wrap: nowrap">Suraj</td>
                      <td style="text-wrap: nowrap">Jamdade</td>
                      <td style="text-wrap: nowrap">+91 9090909090</td>
                      <td style="text-wrap: nowrap">14/11/2024</td>
                      <td style="text-wrap: nowrap">
                        <span class="label label-warning">Ongoing </span>
                      </td>
                      <td style="text-wrap: nowrap">
                        <a href="edit-customers.html">
                          <button
                            class="btn btn-primary primary-icon-notika waves-effect"
                          >
                            <i class="notika-icon notika-edit"></i>
                          </button>
                        </a>
                        <a href="#">
                          <button
                            class="btn btn-info primary-icon-notika waves-effect"
                            data-toggle="modal"
                            data-target="#ViewModal"
                          >
                            <i class="notika-icon notika-eye"></i>
                          </button>
                        </a>

                        <a href="#">
                          <button
                            class="btn btn-danger primary-icon-notika waves-effect"
                          >
                            <i class="notika-icon notika-trash"></i>
                          </button>
                        </a>
                        <a href="invoice.html">
                          <button
                            class="btn btn-warning primary-icon-notika waves-effect"
                          >
                            <i class="notika-icon notika-paperclip"></i>
                          </button>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12"></div>
        </div>
      </div>
    </div>
    <!-- customer list area End-->


    <!-- view modal -->

    <div class="modal fade" id="ViewModal" role="dialog">
      <div class="modal-dialog modal-large">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h2>Customer Details</h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="bsc-tbl-bdr">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="2">Bill Number</td>
                        <td colspan="2">8081</td>
                        <td colspan="2">Salesman Code</td>
                        <td colspan="2">9090</td>
                      </tr>

                      <tr>
                        <td colspan="2">GST Number</td>
                        <td colspan="2">27DNYPP0795M1ZR</td>
                        <td colspan="2">First Name</td>
                        <td colspan="2">Suraj</td>
                      </tr>
                      <tr>
                        <td colspan="2">Last Name</td>
                        <td colspan="2">Jamdade</td>
                        <td colspan="2">Order Date</td>
                        <td colspan="2">12/11/2024</td>
                      </tr>

                      <tr>
                        <td colspan="2">Delivery Date</td>
                        <td colspan="2">12/11/2024</td>
                        <td colspan="2">Mobile Number</td>
                        <td colspan="2">+91 9090909090</td>
                      </tr>

                      <tr>
                        <td colspan="2">Status</td>
                        <td colspan="4">
                          <span class="label label-success"
                            >Today Delivery</span
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="bsc-tbl-bdr">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="2">Fabrics</td>
                        <td colspan="2"></td>
                        <td colspan="2">Quantity</td>
                        <td colspan="2">10</td>
                      </tr>

                      <tr>
                        <td colspan="2">Amount</td>
                        <td colspan="2">Rs.3000</td>
                        <td colspan="2">Total Qty.</td>
                        <td colspan="2">10</td>
                      </tr>

                      <tr>
                        <td colspan="2">Total Amount</td>
                        <td colspan="2">Rs.3000</td>
                        <td colspan="2">Advance</td>
                        <td colspan="2">Rs.1500</td>
                      </tr>

                      <tr>
                        <td colspan="2">Advance Date</td>
                        <td colspan="2">12/11/2024</td>
                        <td colspan="2">Balance</td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td colspan="2">Receive</td>
                        <td colspan="2">Rs.1500</td>
                        <td colspan="2">Receive Date</td>
                        <td colspan="2">12/11/2024</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="bsc-tbl-bdr">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="2">Selected Category</td>
                        <td colspan="2" style="color: red">Shirt</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="bsc-tbl-bdr">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Particulars</th>
                        <th>Body Size</th>
                        <th>Losing</th>
                        <th>Remark</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Length</td>
                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Shoulder</td>
                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Chest</td>
                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Belly</td>

                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Hip</td>

                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Sleeve Length</td>

                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Arms</td>

                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Collar</td>

                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Cuff</td>
                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>3/4</td>

                        <td>20</td>
                        <td>20</td>
                        <td>Front</td>
                      </tr>

                      <tr>
                        <td>Style</td>

                        <td>Front</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="bsc-tbl-bdr">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="2">Selected Category</td>
                        <td colspan="2" style="color: red">Pant</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="bsc-tbl-bdr">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Particulars</th>
                        <th>Body Size</th>
                        <th>Losing</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Length</td>
                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Waist</td>
                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Hip</td>
                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Pockland</td>

                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Thigh</td>

                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Knee</td>

                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Potree</td>

                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Btm</td>

                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Hight</td>
                        <td>20</td>
                        <td>20</td>
                      </tr>

                      <tr>
                        <td>Style</td>

                        <td>Front</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="invoice.html">
              <button
                type="button"
                class="btn btn-default"
                style="border-radius: 0; font-size: 12px; padding: 10px 20px"
              >
                <i class="fa fa-print"></i> Invoice
              </button>
            </a>
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
              style="border-radius: 0; font-size: 12px; padding: 10px 20px"
            >
              <i class="fa fa-close"></i> Close
            </button>
          </div>
        </div>
      </div>
    </div>


    @endsection
