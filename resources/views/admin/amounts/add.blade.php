@extends('laoyout.admin')
@section('content')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Amount List</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Amount List
            </li>
          </ol>
        </nav>
      </div>

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

                <button
                  type="button"
                  class="btn btn-outline-danger btn-icon-text"
                  data-toggle="modal"
                  data-target="#addModal"
                >
                  <i class="mdi mdi-plus btn-icon-prepend"></i> Add Amount
                </button>
              </div>

              <table class="table table-bordered table-responsive-sm">
                <thead>
                    <?php $data = DB::table('amount')->get(); ?>
                  <tr>
                    <th>Sr.No</th>
                    <th>Category Name</th>
                    {{-- <th>City Name</th> --}}
                    <th>Area Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $val)
                        
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$val->category}}</td>
                    {{-- <td>{{$val->city_name}}</td> --}}
                    <td>{{$val->area_name}}</td>
                    <td>Rs.{{$val->amount}}</td>
                    <td>
                        @if($val->status == 'Y')
                        <div class="badge rounded-pill bg-success text-white">
                            Active
                        </div>
                    @else
                        <div class="badge rounded-pill bg-danger text-white">
                            Inactive
                        </div>
                    @endif
                    </td>
                    <td>
                        <div
                        class="btn-group"
                        role="group"
                        aria-label="Basic example"
                      >
                       <a href="/admin/create-areas-amount/{{$val->id}}" type="submit"
                        title="Edit"data-toggle="modal" data-target="#editModal{{$val->id}}" 
                        >
                        <button  class="btn btn-inverse-dark btn-icon mx-2"><i class="mdi mdi-table-edit"></i></button>
                       </a>
                        
  
                        <a href="/admin/amount-delete/{{ $val->id }}">
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

      <!-- edit modal -->
      <div
      class="modal fade"
      id="editModal{{$val->id}}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      style="display: none"
    >
      <div class="modal-dialog modal-dialog-centered">
        <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/create-areas-edit/' . $val->id) }}">
          @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">
              Edit Amount
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
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">Category Name</label>
                    <select name="category" class="form-control">
                      <option value="">Select Category</option>
                
                      @php
                        // Get the categories from the database
                        $categories = DB::table('category')->where('type','Area')->where('status','Y')->get();
                      @endphp
                
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                                {{ isset($amount) && $amount->category == $category->id ? 'selected' : '' }}>
                          {{ $category->title }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
                {{-- <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">City Name</label>
                    <select name="" id="" class="form-control">
                      <option value="">Pune</option>
                      <option value="">Mumbai</option>
                      <option value="">Delhi</option>
                      <option value="">Sangli</option>
                      <option value="">Satara</option>
                    </select>
                  </div>
                </div> --}}
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">Area Name</label>
                    <select name="area_name" class="form-control">
                      <option >Select Area</option>
                
                      @php
                        // Fetch the areas from the database where status is 'Y'
                        $areas = DB::table('ares')->where('status', 'Y')->get();
                      @endphp
                
                      @foreach($areas as $area)
                        <option value="{{ $area->area_name }}"
                          {{ isset($amount) && $amount->area_name == $area->area_name ? 'selected' : '' }}>
                          {{ $area->area_name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">Amount </label>
                    <input
                      type="text"
                      class="form-control"
                      id=""
                      name="amount"
                      value="{{$val->amount}}"
                      placeholder=""
                    />
                  </div>
                </div>

                <div class="col-lg-12 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">Status</label>
                    <select name="status" id="status" class="form-control">
                      <option value="Y" {{ isset($amount) && $amount->status == 'Y' ? 'selected' : '' }}>Active</option>
                      <option value="N" {{ isset($amount) && $amount->status == 'N' ? 'selected' : '' }}>In Active</option>
                    </select>
                  </div>
                </div>
                
              </div>
           
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >
              <i class="mdi mdi-close-octagon menu-icon"></i> Close
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="mdi mdi-content-save menu-icon"></i> Update
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
                  
                  @endforeach
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
      </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- add modal -->
    <div
      class="modal fade"
      id="addModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      style="display: none"
    >
      <div class="modal-dialog modal-dialog-centered">
        <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">
              Add Amount
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
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <?php $category = DB::table('category')->where('type','Area')->where('status','Y')->get(); ?>
                    <label for="" class="text-dark">Category Name</label>
                    <select name="category" id="" class="form-control">
                        @foreach ($category as $val)
                            <option><?=$val->title ?></option>
                            @endforeach
                    </select>
                  </div>
                  @error('category')
                <div class="mt-2 text-danger">{{ $message }}</div>
                   @enderror
                </div>
                {{-- <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <?php $citys = DB::table('ares')->where('status','Y')->get(); ?>
                    <label for="" class="text-dark">City Name</label>
                    <select name="city_name" id="" class="form-control">
                        @foreach ($citys as $val)
                            
                            <option><?=$val->city_name ?></option>
                            @endforeach
                    </select>
                  </div>
                  @error('city_name')
                <div class="mt-2 text-danger">{{ $message }}</div>
                   @enderror
                </div> --}}
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <?php $arears = DB::table('ares')->where('status','Y')->get(); ?>
                    <label for="" class="text-dark">Area Name</label>
                    <select name="area_name" id="" class="form-control">
                        @foreach ($arears as $val)
                            
                        <option><?=$val->area_name ?></option>
                        @endforeach
                    </select>
                  </div>
                  @error('area_name')
                <div class="mt-2 text-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">Amount </label>
                    <input
                      type="text"
                      class="form-control"
                      id=""
                      name="amount"
                      placeholder=""
                    />
                    @error('amount')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                       @enderror
                  </div>
                </div>

                <div class="col-lg-12 mb-2">
                  <div class="form-group">
                    <label for="" class="text-dark">Status</label>
                    <select name="status" id="" class="form-control">
                      <option value="Y">Active</option>
                      <option value="N">In Active</option>
                    </select>
                  </div>
                </div>
              </div>
            
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >
              <i class="mdi mdi-close-octagon menu-icon"></i> Close
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="mdi mdi-content-save menu-icon"></i> Save
            </button>
          </div>
        </div>
        
    </form>
      </div>
    </div>

   

@endsection