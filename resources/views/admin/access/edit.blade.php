@extends('laoyout.admin')
@section('content')


  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Create Access</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="javascripti:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Create Access
            </li>
          </ol>
        </nav>
      </div>

      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Full Name</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                            name="name"
                              value="{{ $access->name }}"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Mobile Number</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id=""
                             name="phone"
                             value="{{ $access->phone }}"

                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                          <label for="" class="text-dark">
                            Password*</label
                          >
                          <input
                            type="password"
                            class="form-control"
                            id=""
                            name="password"
                            value="{{ $access->codeid }}"
                            placeholder=""
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label for="" class="text-dark">Access Type*</label>
                            <select class="form-control" name="role">
                                <option value="manager" {{ old('role', $access->role) == 'manager' ? 'selected' : '' }}>Manager</option>
                                <option value="driver" {{ old('role', $access->role) == 'driver' ? 'selected' : '' }}>Driver</option>
                            </select>
                        </div>
                    </div>
                    
            
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label for="" class="text-dark">Status*</label>
                            <select class="form-control" name="status">
                                <option value="active" {{ old('status', $access->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $access->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">
                  <i class="mdi mdi-content-save"></i> Submit
                </button>
                <button class="btn btn-danger">
                  <i class="mdi mdi-refresh"></i>Reset
                </button>
            
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->



@endsection