@extends('laoyout.admin')
@section('content')


 <!-- partial -->
 <div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Categories List</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.html">Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Categories List
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
                <i class="mdi mdi-plus btn-icon-prepend"></i> Add
              </button>
            </div>

            <table class="table table-bordered table-responsive-sm">
              <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Categories Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php  $data = DB::table('category')->where('type','Area')->get();   ?>
                @foreach ($data as $key => $val)
                    
                <tr>
                  <td>{{$key+1}}</td>
                  <td><?=$val->title ?></td>
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
                     <a href="/admin/edit-blogs-category/{{$val->id}}"      type="submit"
                      title="Edit"data-toggle="modal" data-target="#editModal{{$val->id}}" 
                      >
                      <button  class="btn btn-inverse-dark btn-icon mx-2"><i class="mdi mdi-table-edit"></i></button>
                     </a>
                      

                      <a href="/admin/blogs-delete-category/{{ $val->id }}">
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
      
v  <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/edit-blogs-category/' . $val->id) }}">
  @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">
            Edit Categories
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
        
            <input type="hidden"  value="Area" name="type">
            <div class="row">
              <div class="col-lg-6 mb-2">
                <div class="form-group">
                  <label for="" class="text-dark"
                    >Categories Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id=""
                    placeholder=""
                 value="<?=$val->title ?>"  name="title"
                    />
                </div>
              </div>

              <div class="col-lg-6 mb-2">
                <div class="form-group">
                  <label for="status" class="text-dark">Status:</label>
                  <select name="status" id="status" class="form-select form-control" required>
                      <option value="" disabled>Select Status</option>
                      <option value="Y" {{ isset($val) && $val->status == 'Y' ? 'selected' : '' }}>Active</option>
                      <option value="N" {{ isset($val) && $val->status == 'N' ? 'selected' : '' }}>Inactive</option>
                  </select>
                </div>
              </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button
            type="button" class="btn btn-danger" data-dismiss="modal">
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
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">
            Add Categories
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
          <form method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden"  value="Area" name="type">
            <div class="row">
              <div class="col-lg-6 mb-2">
                <div class="form-group">
                  <label for="" class="text-dark"
                    >Categories Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id=""
                    name="title"
                    placeholder=""
                  />
                </div>
              </div>

              <div class="col-lg-6 mb-2">
                <div class="form-group">
                  <label for="" class="text-dark">Status</label>
                  <select name="status" id="" value="status" class="form-control">
                    <option value="Y">Active</option>
                    <option value="N">In Active</option>
                  </select>
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
          </form>
        </div>
       
      </div>
    </div>
  </div>


@endsection
