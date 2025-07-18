@extends('laoyout.admin')
@section('content')


<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Categories</h4>
          <ul class="breadcrumbs">
            <li class="nav-home">
              <a href="/admin/dashboard">
                <i class="fa-solid fa-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-arrow-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Property Specifications</a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-arrow-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Categories</a>
            </li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card-title d-inline-block">
                      Property Category Types - {{ $row->title }}
                    </div>
                  </div>

                  <div class="col-lg-3">

                  </div>

                  <div class="col-lg-4 offset-lg-1 mt-2 mt-lg-0">
                    <a
                      href="#"
                      data-toggle="modal"
                      data-target="#createModal"
                      class="btn btn-primary btn-sm float-lg-right float-left"
                      ><i class="fa-solid fa-plus"></i> Add</a
                    >

                    <button
                      class="btn btn-danger btn-sm float-right mr-2 d-none bulk-delete"
                      data-href=""
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
                      <div
                        id="basic-datatables_wrapper"
                        class="dataTables_wrapper dt-bootstrap4 no-footer"
                      >
                        <div class="row">
                          <div class="col-sm-12">
                            <table
                              class="table table-striped mt-3 dataTable no-footer"
                              id="basic-datatables"
                              role="grid"
                              aria-describedby="basic-datatables_info"
                            >
                              <thead>
                                <tr role="row">

                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 138.623px"
                                  >
                                    Name
                                  </th>
                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 107.176px"
                                  >
                                    Status
                                  </th>

                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 133.646px"
                                  >
                                    Actions
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $key => $item)

                                <tr class="odd">
                                  <td>{{ $item->title }}</td>
                                  <td>
                                    <h2 class="d-inline-block">
                                        @if($item->status == "Y")
                                        <span class="badge badge-success"
                                        >Active</span>
                                        @else
                                        <span class="badge badge-danger"
                                        >Inactive</span>
                                        @endif

                                    </h2>
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
                                        <a
                                          class="dropdown-item editBtn"
                                          href="/"
                                          onclick="editvalue({{ $item->id }})"
                                          data-toggle="modal"
                                          data-target="#editModal"
                                          data-id="34"
                                          data-en_name="Apartment"
                                          data-ar_name="شقة"
                                          data-status="1"
                                          data-type="residential"
                                          data-image="assets/img/property-category/6666994de647c.png"
                                          data-serial_number="1"
                                        >
                                          <span class="btn-label">
                                            <i class="fa-solid fa-edit"></i>
                                            Edit
                                          </span>
                                        </a>
                                        <a onclick="return confirm('Are you sure ! Delete This.')" href="{{ route('deleterownew',['table' => 'category' ,'id' => $item->id,'image' => 'no_image']) }}"  class="dropdown-item editBtn" >
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer"></div>
            </div>
          </div>
        </div>

        <div
          class="modal fade"
          id="createModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          style="display: none"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <form
            class="modal-form w-100"
            action="/admin/new-categories?type=<?= isset($_GET['type']) ? $_GET['type'] : "" ?>"
            method="post"
            enctype="multipart/form-data"

          >

          @csrf


          <input type="text" name="category_type" value="Y" hidden>

            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Add Property Category
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

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category"  required class="form-control">
                        @foreach (App\Models\Category::where('status','Y')->where('type','property')->get() as $key => $value)
                        <option value="{{ $value->id }}" @if($row->id == $value->id) selected @endif >{{ $value->title }}</option>
                        @endforeach
                    </select>
                    <p id="err_status" class="mt-2 mb-0 text-danger em"></p>
                  </div>

                  <div class="form-group">
                    <label for="">Category Type Name*</label>
                    <input
                      type="text"
                      name="title"
                      class="form-control"
                      placeholder="Enter category name"
                      required
                    />
                    <p
                      id="err_en_name"
                      class="mt-2 mb-0 text-danger em"
                    ></p>
                  </div>
                  <div class="form-group">
                    <label for="">Status*</label>
                    <select name="status"  required class="form-control">
                      <option value="Y">Active</option>
                      <option value="N">Deactive</option>
                    </select>
                    <p id="err_status" class="mt-2 mb-0 text-danger em"></p>
                  </div>


              </div>

              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary btn-sm"

                >
                  Close
                </button>
                <button

                  type="submit"
                  class="btn btn-primary btn-sm"
                >
                  Save
                </button>
              </div>
            </div>
        </form>
          </div>
        </div>

        <div
          class="modal fade"
          id="editModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" id="edit_content" role="document">

          </div>
        </div>
      </div>
    </div>

    <footer class="footer py-4">
      <div class="container-fluid">
        <div class="d-block mx-auto">
          <p class="mb-0"></p>
          <p>Copyright ©2024. All Rights Reserved.</p>
          <p></p>
        </div>
      </div>
    </footer>
  </div>

  @section('footer')

  <script>
    function editvalue(id){
        $.ajax({
    url: '/admin/get-categories-type/'+id, // Laravel route
    method: 'GET',         // HTTP GET method
    success: function(response) {
        $('#edit_content').html(response);
    },
    error: function(xhr) {
        console.error('Error:', xhr.responseText);
    }
});

    }
  </script>

@endsection
@endsection
