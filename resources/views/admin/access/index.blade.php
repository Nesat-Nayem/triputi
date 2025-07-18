@extends('laoyout.admin')
@section('content')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Access List</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Access List
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
                    method="get"
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
                        name="search"
                        placeholder="Search..."
                      />
                    </div>
                  </form>
                </div>

                <a href="/admin/create-access">
                  <button
                    type="button"
                    class="btn btn-outline-danger btn-icon-text"
                  >
                    <i class="mdi mdi-plus btn-icon-prepend"></i> Add
                    Access
                  </button>
                </a>
              </div>

              <table class="table table-bordered table-responsive-sm">
                <thead>

                  <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Login Id</th>
                    <th>Phone</th>
                    <th>Access Type</th>
                    {{-- <th>Password</th> --}}
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

            @foreach ($access as $key=> $val)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->phone}}</td>
                <td>{{$val->role}}</td>
              
                <td>
                    @if($val->status == 'active')
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
                    <a href="/admin/access-edit/{{$val->id}}">
                      <button
                        type="button"
                        class="btn btn-inverse-dark btn-icon mx-2"
                        title="Edit"
                      >
                        <i class="mdi mdi-table-edit"></i>
                      </button>
                    </a>

                    <a href="/admin/access-delete/{{$val->id}}">
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
            @endforeach
                </tbody>
              </table>

              <div class="row mt-5 text-center">
                <div class="col-lg-12">
                  {{ $access->links('pagination.custom') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->




@endsection