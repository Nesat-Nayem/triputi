@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('laoyout.admin')
@section('content')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Rate List Page</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Rate List Page
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
                        placeholder="Search..."
                        name="search"
                      />
                    </div>
                  </form>
                </div>

                <a href="/admin/create-rate-list">
                  <button
                    type="button"
                    class="btn btn-outline-danger btn-icon-text"
                  >
                    <i class="mdi mdi-plus btn-icon-prepend"></i> Add
                    Rate List 
                  </button>
                </a>
              </div>

              <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Particulars Name</th>
                    <th>Per Piece Rate</th>
                 
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rate as $key => $val)
                        
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$val->particulars_name}}</td>
                    <td>{{$val->per_piece_rate}}</td>
                 
                  
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
                       

                        <a href="/admin/rate-edit/{{$val->id}}">
                          <button
                            type="button"
                            class="btn btn-inverse-dark btn-icon mx-2"
                            title="Edit"
                          >
                            <i class="mdi mdi-table-edit"></i>
                          </button>
                        </a>

                        <a href="/admin/rate-delete/{{$val->id}}">
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
                  {{ $rate->links('pagination.custom') }}

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <div class="modal-body" id="contentid">
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
                <i class="mdi mdi-close-octagon menu-icon"></i> Close
            </button>
            <a id="printButton" href="#">
                <button type="button" class="btn btn-info">
                    <i class="mdi mdi-printer menu-icon"></i> Print
                </button>
            </a>
        </div>
        </div>
      </div>
    </div>


@endsection