
@extends('superadmin.layout.common')
@section('content')


    <!-- steep form start -->
    <section class="signup-step-container">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12">
            <div class="wizard">
              <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist" style="display: none">
                  <li role="presentation" class="active">
                    <a
                      href="#step1"
                      data-toggle="tab"
                      aria-controls="step1"
                      role="tab"
                      aria-expanded="true"
                      ><span class="round-tab">1 </span> <i>Step 1</i></a
                    >
                  </li>
                  <li role="presentation" class="disabled">
                    <a
                      href="#step2"
                      data-toggle="tab"
                      aria-controls="step2"
                      role="tab"
                      aria-expanded="false"
                      ><span class="round-tab">2</span> <i>Step 2</i></a
                    >
                  </li>
                  <li role="presentation" class="disabled">
                    <a
                      href="#step3"
                      data-toggle="tab"
                      aria-controls="step3"
                      role="tab"
                      ><span class="round-tab">3</span> <i>Step 3</i></a
                    >
                  </li>
                  <li role="fabric" class="disabled">
                    <a
                      href="#step4"
                      data-toggle="tab"
                      aria-controls="step4"
                      role="tab"
                      ><span class="round-tab">4</span> <i>Step 4</i></a
                    >
                  </li>
                </ul>
              </div>

              <form role="form" action="{{route('savecustomer')}}" method="post" enctype="multipart/form-data" class="login-box">
                @csrf
                <div class="tab-content" id="main_form">
                  <div class="tab-pane active" role="tabpanel" id="step1">

                      <div class="row">
                        <div
                          class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-b-15"
                        >
                          <div class="form-element-list">
                            <div class="row">
                              <div
                                class="col-lg-3 col-md-4 col-sm-4 col-xs-12 mb-4"
                              >
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Customer Name</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{ old('name') }}"
                                      class="form-control input-sm"
                                      placeholder="Customers Name"
                                    />
                                    @error('name')
    <div class="text-danger">{{ $message }}</div>
@enderror
                                  </div>
                                </div>
                              </div>
                              <div
                                class="col-lg-3 col-md-4 col-sm-4 col-xs-12 mb-4"
                              >
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Mobile Number</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      name="mobile"
                                      value="{{ old('mobile') }}"
                                      class="form-control input-sm"
                                      placeholder="+91 "
                                    />
                                    @error('mobile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                  </div>
                                </div>
                              </div>


                              <div
                              class="col-lg-3 col-md-4 col-sm-4 col-xs-12 mg-b-15"
                            >
                              <div
                                class="form-group nk-datapk-ctm form-elet-mg"
                                id="data_1"
                              >
                                <label style="font-size: 12px">DOB</label>
                                <div class="input-group date nk-int-st">
                                  <span class="input-group-addon"></span>
                                  <input
                                    type="text"
                                    class="form-control"
                                    value=""
                                      name="dob"
                                      value="{{ old('dob') }}"
                                  />
                                </div>
                              </div>
                            </div>



                            <div
                            class="col-lg-3 col-md-4 col-sm-4 col-xs-12 mb-4"
                            id="data_1"
                          >
                            <div class="form-group">
                              <label style="font-size: 12px"
                                >Delivery Date</label
                              >

                              <div class="input-group date nk-int-st">
                                <span class="input-group-addon"></span>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="delivery_date"
                                      value="{{ old('delivery_date') }}"
                                />
                              </div>



                            </div>
                          </div>

                              <div
                                class="col-lg-3 col-md-4 col-sm-4 col-xs-6 mb-4"
                              >

                              <?php

                              $lastItem = DB::table('cusotmers')->orderBy('id', 'desc')->first();

// Check if we have a record to get the last ID, or start from 0 if it's empty
$lastId = $lastItem ? (int) $lastItem->id : 0;

// Increment the ID for the next one
$newId = $lastId + 1;

// Format the ID to have leading zeros (e.g., 001, 002, ..., 990)
$formattedId = str_pad($newId, 3, '0', STR_PAD_LEFT);


                              ?>

                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Bill Number</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="Bill No."
                                     name="bill_number"
                                      value=" {{ $formattedId }}"
                                      disabled
                                    />
                                  </div>
                                </div>
                              </div>





                              <div
                              class="col-lg-3 col-md-4 col-sm-4 col-xs-6 mg-b-15"
                            >
                              <div
                                class="form-group nk-datapk-ctm form-elet-mg"
                                id="data_1"
                              >
                                <label style="font-size: 12px"
                                  >Order Date</label
                                >
                                <div class="nk-int-st">
                                  <input
                                    type="text"
                                    class="form-control input-sm"
                                    placeholder=" "
                                   name="order_date"
                                      value="<?= date('m/d/Y'); ?>"
                                  />
                                </div>
                              </div>
                            </div>



                              <div
                                class="col-lg-3 col-md-4 col-sm-4 col-xs-6 mb-4"
                              >
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Salesman Code</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="salesman code "
                                       name="salesman_code"
                                      value="{{ old('salesman_code') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div
                                class="col-lg-3 col-md-4 col-sm-4 col-xs-6 mb-4"
                              >
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >GST Number</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="salesman code "
                                      value="27DNYPP0795M1ZR"
                                     name="gst"
                                      value="{{ old('gst') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-12">
                                <ul class="list-inline pull-right">
                                  <li>
                                    <button type="button" class="default-btn next-step">
                                      Continue to next step
                                    </button>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                  </div>
                  <div class="tab-pane" role="tabpanel" id="step2">

                      <div class="row">
                        <div
                          class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-b-15"
                        >
                          <div class="form-element-list">
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px">Fabrics</label>
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="fabrics"
                                      name="fabrics"
                                      value="{{ old('fabrics') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Quantity</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="quantity"
                                      name="quantity"
                                      value="{{ old('quantity') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px">Amount</label>
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="amount"
                                        name="amount"
                                      value="{{ old('amount') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Total Qty.</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="qty "
                                         name="total_quantity"
                                      value="{{ old('total_quantity') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Total Amount</label
                                  >
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="total amount"
                                         name="total_amount"
                                      value="{{ old('total_amount') }}"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px"
                                    >Discount
                                  </label>
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="total Discount"
                                         name="discount"
                                      value="{{ old('discount') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                <div class="form-group">
                                  <label style="font-size: 12px">Advance</label>
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="advance"
                                       name="advance"
                                      value="{{ old('advance') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-b-15">
                                <div
                                  class="form-group nk-datapk-ctm form-elet-mg"
                                  id="data_1"
                                >
                                  <label style="font-size: 12px"
                                    >Advance Date</label
                                  >
                                  <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="12/11/2024"
                                        name="advance_date"
                                      value="{{ old('advance_date') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px">Balance</label>
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="balance "
                                      name="balance"
                                      value="{{ old('balance') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <label style="font-size: 12px">Receive</label>
                                  <div class="nk-int-st">
                                    <input
                                      type="text"
                                      class="form-control input-sm"
                                      placeholder="receive"
                                      name="receive"
                                      value="{{ old('receive') }}"
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div
                                  class="form-group nk-datapk-ctm form-elet-mg"
                                  id="data_1"
                                >
                                  <label style="font-size: 12px"
                                    >Receive Date</label
                                  >
                                  <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="12/11/2024"
                                       name="receive_date"
                                      value="{{ old('receive_date') }}"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <ul class="list-inline pull-right">
                                  <li>
                                    <button type="button" class="default-btn prev-step">
                                      Back
                                    </button>
                                  </li>

                                  <li>
                                    <button type="button" class="default-btn next-step">
                                      Continue
                                    </button>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



                  </div>
                  <div class="tab-pane" role="tabpanel" id="step3">

                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="row" style="background: #fff">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              {{-- <div class="row mg-b-15 mg-t-15">
                                <div
                                  class="col-lg-4 col-md-4 col-sm-4 col-xs-4"
                                >
                                  <div class="fm-checkbox">
                                    <label
                                      ><div
                                        class="icheckbox_square-green checked"
                                        style="position: relative"
                                      >
                                        <div
                                          class="icheckbox_square-green checked"
                                          style="position: relative"
                                        >
                                          <input
                                            type="checkbox"
                                            checked=""
                                            class="i-checks"
                                            style="
                                              position: absolute;
                                              opacity: 0;
                                            "
                                          /><ins
                                            class="iCheck-helper"
                                            style="
                                              position: absolute;
                                              top: 0%;
                                              left: 0%;
                                              display: block;
                                              width: 100%;
                                              height: 100%;
                                              margin: 0px;
                                              padding: 0px;
                                              background: rgb(255, 255, 255);
                                              border: 0px;
                                              opacity: 0;
                                            "
                                          ></ins>
                                        </div>
                                        <ins
                                          class="iCheck-helper"
                                          style="
                                            position: absolute;
                                            top: 0%;
                                            left: 0%;
                                            display: block;
                                            width: 100%;
                                            height: 100%;
                                            margin: 0px;
                                            padding: 0px;
                                            background: rgb(255, 255, 255);
                                            border: 0px;
                                            opacity: 0;
                                          "
                                        ></ins>
                                      </div>
                                      <i></i> Shirt</label
                                    >
                                  </div>
                                </div>

                                <div
                                  class="col-lg-4 col-md-4 col-sm-4 col-xs-4"
                                >
                                  <div class="fm-checkbox">
                                    <label
                                      ><div
                                        class="icheckbox_square-green"
                                        style="position: relative"
                                      >
                                        <div
                                          class="icheckbox_square-green"
                                          style="position: relative"
                                        >
                                          <input
                                            type="checkbox"
                                            class="i-checks"
                                            style="
                                              position: absolute;
                                              opacity: 0;
                                            "
                                          /><ins
                                            class="iCheck-helper"
                                            style="
                                              position: absolute;
                                              top: 0%;
                                              left: 0%;
                                              display: block;
                                              width: 100%;
                                              height: 100%;
                                              margin: 0px;
                                              padding: 0px;
                                              background: rgb(255, 255, 255);
                                              border: 0px;
                                              opacity: 0;
                                            "
                                          ></ins>
                                        </div>
                                        <ins
                                          class="iCheck-helper"
                                          style="
                                            position: absolute;
                                            top: 0%;
                                            left: 0%;
                                            display: block;
                                            width: 100%;
                                            height: 100%;
                                            margin: 0px;
                                            padding: 0px;
                                            background: rgb(255, 255, 255);
                                            border: 0px;
                                            opacity: 0;
                                          "
                                        ></ins>
                                      </div>
                                      <i></i> Kurta</label
                                    >
                                  </div>
                                </div>

                                <div
                                  class="col-lg-4 col-md-4 col-sm-4 col-xs-4"
                                >
                                  <div class="fm-checkbox">
                                    <label
                                      ><div
                                        class="icheckbox_square-green"
                                        style="position: relative"
                                      >
                                        <div
                                          class="icheckbox_square-green"
                                          style="position: relative"
                                        >
                                          <input
                                            type="checkbox"
                                            class="i-checks"
                                            style="
                                              position: absolute;
                                              opacity: 0;
                                            "
                                          /><ins
                                            class="iCheck-helper"
                                            style="
                                              position: absolute;
                                              top: 0%;
                                              left: 0%;
                                              display: block;
                                              width: 100%;
                                              height: 100%;
                                              margin: 0px;
                                              padding: 0px;
                                              background: rgb(255, 255, 255);
                                              border: 0px;
                                              opacity: 0;
                                            "
                                          ></ins>
                                        </div>
                                        <ins
                                          class="iCheck-helper"
                                          style="
                                            position: absolute;
                                            top: 0%;
                                            left: 0%;
                                            display: block;
                                            width: 100%;
                                            height: 100%;
                                            margin: 0px;
                                            padding: 0px;
                                            background: rgb(255, 255, 255);
                                            border: 0px;
                                            opacity: 0;
                                          "
                                        ></ins>
                                      </div>
                                      <i></i> Jacket</label
                                    >
                                  </div>
                                </div>
                              </div> --}}

                              <h5 style="margin-top: 15px;font-size: 20px;">Top</h5>

                              <div class="append_moretops" id="append_moretops">
                                <div class="bsc-tbl-bdr">
                                    <?php $rand = rand(); ?>
                                    <div class="col-12">
                                        <label for="">Select Top Type</label>
                                        <select name="top[<?=$rand?>][type]" id="" class="form-control">
                                            <option value="shirt">Shirt</option>
                                            <option value="kurta">Kurta</option>
                                            <option value="jacket">Jacket</option>
                                        </select>
                                    </div>
                                    <table class="table table-bordered" style="    margin-top: 15px;">
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
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  name="top[<?=$rand?>][length][body_size]"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  name="top[<?=$rand?>][length][losing]"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  name="top[<?=$rand?>][length][remark]"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Shoulder</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][shoulder][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][shoulder][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][shoulder][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Chest</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][chest][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][chest][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][chest][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Belly</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][belly][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  name="top[<?=$rand?>][belly][losing]"
                                                  placeholder=""
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                    name="top[<?=$rand?>][belly][remark]"
                                                  placeholder=""
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Hip</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][hip][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][hip][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][hip][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Sleeve Length</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][sleeve_length][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][sleeve_length][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][sleeve_length][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Arms</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][arms][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                     name="top[<?=$rand?>][arms][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][arms][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Collar</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][collor][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][collor][losing]"

                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][collor][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Cuff</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][cuff][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="top[<?=$rand?>][cuff][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][cuff][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>3/4</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][three_foure][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="top[<?=$rand?>][three_foure][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][three_foure][remark]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Style</td>
                                          <td colspan="3">
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="top[<?=$rand?>][style]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>

                              </div>


                              <button class="btn btn-primary" type="button" style="margin-bottom:10px;" id="buttontopmore">Add More</button>


                            </div>
                            <div
                              class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                              style="border-left: 1px solid red"
                            >
                              <div class="row mg-b-15 ">


                                <h5 style="margin-top: 15px;font-size: 20px;padding-left:15px">Bottom</h5>


                                <?php $rand = rand(); ?>
                               <div>
                                <div class="col-lg-12">

                                    <label for="">Select Bottom Type</label>
                                    <select name="bottom[<?=$rand?>][type]" id="" class="form-control">
                                        <option value="trouser">Trouser</option>
                                        <option value="pant">Pant</option>
                                        <option value="pajama">Pajama</option>
                                    </select>
                                </div>
                               </div>

                              </div>

                              <div class="col-12" id="appendbottom">

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
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][length][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][length][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Waist</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][waist][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][waist][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Hip</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][hip][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][hip][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Pockland</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][pockland][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="bottom[<?=$rand?>][pockland][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Thigh</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="bottom[<?=$rand?>][thigh][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="bottom[<?=$rand?>][thigh][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Knee</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                   name="bottom[<?=$rand?>][knee][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="bottom[<?=$rand?>][knee][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Potree</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                    name="bottom[<?=$rand?>][potree][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][potree][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Btm.</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][btm][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][btm][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Hight</td>
                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][hight][body_size]"
                                                />
                                              </div>
                                            </div>
                                          </td>

                                          <td>
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][hight][losing]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Style</td>
                                          <td colspan="2">
                                            <div class="form-group">
                                              <div class="nk-int-st">
                                                <input
                                                  type="text"
                                                  class="form-control input-sm"
                                                  placeholder=""
                                                  name="bottom[<?=$rand?>][style]"
                                                />
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                              </div>
                              <button type="button" class="btn btn-primary" id="appendbottom_button" style="margin-top: 20px">Add More</button>
                            </div>
                            <div class="col-12 mg-b-15">
                              <ul class="list-inline pull-right">
                                <li>
                                  <button type="button" class="default-btn prev-step">
                                    Back
                                  </button>
                                </li>

                                <li>
                                  <button type="button" class="default-btn next-step">
                                    Continue
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                  </div>

                  <div class="tab-pane" role="tabpanel" id="step4">


                    <style>
                        .audio_uploading{
                            position: fixed;
    background: #00000061;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 111;
    display: none;
                        }

    .content_upload_audio{
        background: #fff;
    width: 90%;
    max-width: 400px;
    padding: 20px;
    border-radius: 10px;
    margin: auto;
    display: flex;
    align-items: center;
    gap: 19px;
    margin: auto;
    justify-content: center;
    }
    .content_upload_audio p{
        margin-bottom: 0px
    }



    .loader {
        width: 40px;
    height: 40px;
    border: 5px solid #ed0202;
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }


                    </style>

                    <div class="audio_uploading" id="audio_uploading">
                        <div class="content_upload_audio">
                            <p>Uploading Audio</p>
                            <span class="loader"></span>

                        </div>
                    </div>

                      <div class="row">
                        <div
                          class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-b-15 " style="background-color: #fff;padding-bottom: 20px;">
                          <div class="form-element-list">
                      <div class="row">

                        <div
                        class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4"
                      >
                        <div class="form-group">
                          <label style="font-size: 12px"
                            >Fabric Images</label
                          >
                          <div class="nk-int-st">
                            <input
                              type="file"
                              class="form-control input-sm"
                              placeholder=""
                              name="fabric_image"
                              style="height: 50px;"
                            />
                          </div>
                        </div>
                      </div>

                      <style>
                        #popup{
                            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: #0000006b;
    z-index: 11111;
    display: flex
;
    align-items: center;
    justify-content: center;
    display: none;
                        }

                        .popup-content{
                            width: 90%;
    max-width: 500px;
    background-color: #fff;
    margin: auto;
    padding: 22px;
    min-height: 200px;
    border-radius: 10px;
    border: 2px solid darkgray;
                        }

                        .popup-content img{
                            background: #fff;
    border-radius: 100%;
    width: 37px;
    margin-right: 20px;
                        }

                        #closePopup{
                            background-color: red;
    padding: 10px 20px;
    display: inline-block;
    color: #fff;
    border-radius: 6px;
    margin-top: 10px;
                        }

                        #audioPlayer{
                            margin-top: 20px;
                        }
                      </style>


                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="form-group">
                          <label for="audio-upload" style="font-size: 12px;">Audio</label>
                       <div class="mg-t-0">
                        <button class="default-btn next-step" id="startBtn" type="button" style="margin: 0;">RECORD</button>
                        <button class="btn btn-info" id="stopBtn" type="button"  style="border-radius: 0;margin: 0;display:none;">STOP</button>
                       </div>


                        <!-- Audio controls and download link -->
    <div class="audio-controls">
        <audio id="audioPlayer" controls></audio>
        <input type="text" name="audioPlayer_input" hidden id="audioPlayer_input">
        <a id="downloadLink" href="#" download="recording.webm" style="display:none;">Download Recording</a>
      </div>

      <!-- Popup for audio recording with speaker icon and timer -->
      <div id="popup" class="popup">
        <div class="popup-content">
          <div class="speaker">
            <img style="background: #fff;
      border-radius: 100%;" src="https://cdn-icons-png.freepik.com/256/4640/4640455.png?ga=GA1.1.826854550.1733502921&semt=ais_hybrid" alt="Speaker" />
            <span id="timer">0</span> seconds
          </div>
          <span class="popup-close" id="closePopup">Stop Recording</span>

        </div>
      </div>
    </div>




                          <!-- Audio Recorder -->
                          <div style="margin-top: 10px;">
                            <div class="collection" id="results"></div>
                          </div>
                        </div>
                      </div>
                        <div
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4"
                      >
                        <div class="form-group">
                          <label style="font-size: 12px"
                            >Note</label
                          >
                          <div class="nk-int-st">
                            <textarea name="note" id="" cols="30" rows="5" class="form-control" placeholder="Note">{{ old('note') }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <ul class="list-inline pull-right">
                          <li>
                            <button type="button" class="default-btn prev-step">
                              Back
                            </button>
                          </li>

                          <li>
                            <button type="submit" class="default-btn next-step">
                              Save & Print
                            </button>

                          </li>
                        </ul>
                      </div>



                      </div>
                      </div>
                      </div>
                      </div>


                  </div>

                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- steep form end -->

    <!-- Start Footer area-->

    <!-- End Footer area-->


 {{-- <script>
  var recorder; // globally accessible
var blobs = [];
var result_container = document.querySelector("#results");
var record_button = document.querySelector("#record");
var stop_button = document.querySelector("#stop");

function captureMicrophone(callback) {
  navigator.mediaDevices
    .getUserMedia({ audio: true })
    .then(callback)
    .catch(function(error) {
      alert("Unable to access your microphone.");
      console.error(error);
    });
}
var index = 1;
function stopRecordingCallback() {
  var blob = recorder.getBlob();
  var audio_element = document.createElement("a");
  audio_element.innerText = "FILE:" + index;
  audio_element.className = "collection-item";
  audio_element.href = URL.createObjectURL(blob);
  audio_element.onclick = function() {
    this.parentNode.removeChild(this);
  };
  recorder.microphone.stop();
  result_container.appendChild(audio_element);
  console.log("BLOBS:" + blobs.length);
  blobs = [];
  index++;
  record_button.disabled = false;
}

record_button.onclick = function() {
  this.disabled = true;
  captureMicrophone(function(microphone) {
    recorder = RecordRTC(microphone, {
      type: "audio",
      // mimeType 'audio/ogg',
      // audioBitsPerSecond: 128000,
      recorderType: StereoAudioRecorder,
      numberOfAudioChannels: 1,
      disableLogs: true,
      desiredSampRate: 16000,
      // sampleRate: 96000,
      // bufferSize:2048,
      timeSlice: 250,
      // getNativeBlob: true,
      ondataavailable: function(blob) {
        console.log("BLOBS" + blob.size);
        blobs.push(blob);
      }
    });
    recorder.startRecording();
    recorder.microphone = microphone;
    stop_button.disabled = false;
  });
};
stop_button.onclick = function() {
  this.disabled = true;
  recorder.stopRecording(stopRecordingCallback);
};
// recorder.destroy();
// recorder.clearRecordedData();
// recorder.pauseRecording();
// recorder.resumeRecording();

 </script> --}}


<script>





function getRandomInt(min = 1, max = 9999) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1) + min);
        }



        $('#buttontopmore').on('click', function() {

var number = getRandomInt();

  var html = '<div class="bsc-tbl-bdr"><div class="col-12"><label for="">Select Top Type</label><select name="top['+number+'][type]" id="" class="form-control"><option value="shirt">Shirt</option><option value="kurta">Kurta</option><option value="jacket">Jacket</option></select></div><table class="table table-bordered"><thead><tr><th>Particulars</th><th>Body Size</th><th>Losing</th><th>Remark</th></tr></thead><tbody><tr><td>Length</td><td><div class="form-group"><div class="nk-int-st"><input type="text" name="top['+number+'][length][body_size]" class="form-control input-sm" placeholder=""/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input ="text" name="top['+number+'][length][losing]" class="form-control input-sm" placeholder=""/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" name="top['+number+'][length][remark]" class="form-control input-sm" placeholder=""/></div></div></td></tr><tr><td>Shoulder</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][shoulder][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][shoulder][losing]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][shoulder][remark]"/> </div></div></td></tr><tr><td>Chest</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][chest][body_size]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][chest][losing]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][chest][remark]"/></div></div></td></tr><tr><td>Belly</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][belly][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" name="top['+number+'][belly][losing]" placeholder="" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" name="top['+number+'][belly][remark]" placeholder=""/></div></div></td></tr><tr><td>Hip</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][hip][body_size]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][hip][losing]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][hip][remark]"/> </div></div> </td></tr><tr><td>Sleeve Length</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][sleeve_length][body_size]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][sleeve_length][losing]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][sleeve_length][remark]"/></div></div></td></tr><tr><td>Arms</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][arms][body_size]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][arms][losing]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][arms][remark]"/></div></div></td></tr><tr><td>Collar</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][collor][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][collor][losing]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][collor][remark]"/></div></div></td></tr><tr><td>Cuff</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][cuff][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][cuff][losing]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][cuff][remark]"/></div></div></td></tr><tr><td>3/4</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][three_foure][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][three_foure][losing]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][three_foure][remark]"/> </div></div></td></tr><tr><td>Style</td><td colspan="3"><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="top['+number+'][style]"/></div></div></td></tr></tbody></table></div>';

$('#append_moretops').append(html);

});


$('#appendbottom_button').on('click', function() {

var number = getRandomInt();

  var html = ' <div class="col-lg-12"><label for="">Select Bottom Type</label><select name="bottom['+number+'][type]" id="" class="form-control"><option value="trouser">Trouser</option><option value="pant">Pant</option><option value="pajama">Pajama</option></select></div><div class="bsc-tbl-bdr"><table class="table table-bordered"><thead><tr><th>Particulars</th><th>Body Size</th><th>Losing</th></tr></thead><tbody><tr><td>Length</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][length][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][length][losing]"/></div></div></td></tr><tr><td>Waist</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][waist][body_size]" /></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][waist][losing]"/></div></div></td></tr><tr><td>Hip</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm"  name="bottom['+number+'][hip][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][hip][losing]"/></div></div></td></tr><tr><td>Pockland</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][pockland][body_size]"/> </div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][pockland][losing]"/></div></div></td></tr><tr><td>Thigh</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][thigh][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][thigh][losing]"/></div></div></td></tr><tr><td>Knee</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][knee][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][knee][losing]"/></div></div></td></tr><tr><td>Potree</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][potree][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][potree][losing]"/></div></div></td></tr><tr><td>Btm.</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][btm][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][btm][losing]"/></div></div></td></tr><tr><td>Hight</td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][hight][body_size]"/></div></div></td><td><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][hight][losing]"/></div></div></td></tr><tr><td>Style</td><td colspan="2"><div class="form-group"><div class="nk-int-st"><input type="text" class="form-control input-sm" placeholder="" name="bottom['+number+'][style]"/></div></div></td></tr></tbody></table></div>';

$('#appendbottom').append(html);

});



let startBtn = document.getElementById('startBtn');
let stopBtn = document.getElementById('stopBtn');
let audioPlayer = document.getElementById('audioPlayer');
let downloadLink = document.getElementById('downloadLink');
let textOutput = document.getElementById('textOutput');
let popup = document.getElementById('popup');
let timerDisplay = document.getElementById('timer');
let closePopup = document.getElementById('closePopup');

let mediaRecorder;
let audioChunks = [];
let timerInterval;
let seconds = 0;
let transcription = "hello give me nature video"; // Simulated transcription text

// Start recording
startBtn.addEventListener('click', () => {
  // Open the popup and start recording
  popup.style.display = 'block';
  startRecording();
//   startBtn.disabled = true;
  stopBtn.disabled = false;
});

// Stop recording
stopBtn.addEventListener('click', () => {
  stopRecording();
  startBtn.disabled = false;
  stopBtn.disabled = true;
  popup.style.display = 'none';
});

// Close popup
closePopup.addEventListener('click', () => {
  popup.style.display = 'none';
  if (mediaRecorder && mediaRecorder.state !== 'inactive') {
    mediaRecorder.stop();
    stopRecording();
  }
});

// Start recording function
async function startRecording() {
  // Request user permission to access the microphone
  let stream = await navigator.mediaDevices.getUserMedia({ audio: true });
  mediaRecorder = new MediaRecorder(stream);

  mediaRecorder.ondataavailable = (event) => {
    audioChunks.push(event.data);
  };

  mediaRecorder.onstop = () => {
    const audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
    const audioUrl = URL.createObjectURL(audioBlob);
    audioPlayer.src = audioUrl;
    downloadLink.href = audioUrl;
    downloadLink.style.display = 'block';
    audioChunks = [];

    // Simulate voice-to-text (transcription) for now
    textOutput.value = `Transcribed text: "${transcription}"\nAudio recorded! Duration: ${seconds} seconds.`;
  };

  mediaRecorder.start();

  // Timer for popup
  seconds = 0;
  timerInterval = setInterval(() => {
    seconds++;
    timerDisplay.textContent = seconds;
  }, 1000);
}

// // Stop recording function
// function stopRecording() {
//   clearInterval(timerInterval);
//   mediaRecorder.stop();
// }




function stopRecording() {
    document.getElementById('audio_uploading').classList.add('show');
  clearInterval(timerInterval);
  mediaRecorder.stop();

  mediaRecorder.onstop = async () => {
    const audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
    const formData = new FormData();
    formData.append('audio', audioBlob);

    try {
      // Upload to Laravel using AJAX
      const response = await fetch('/crm/upload-voice', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
      });

      console.log(response);
    //   if (!response.ok) throw new Error('Upload failed');

      const result = await response.json();

      console.log(result.url);

      // Set the returned URL into a hidden input field or display it
      document.getElementById('audioPlayer').src = result.url;
      document.getElementById('audioPlayer_input').setAttribute('value', result.url);
    //   alert('Audio uploaded successfully! URL: ' + result.url);

      document.getElementById('audio_uploading').classList.remove('show');


    } catch (error) {
      console.error('Error uploading audio:', error);
      alert('Failed to upload audio.');
    } finally {
      audioChunks = []; // Reset chunks
    }
  };
}






</script>

@endsection
