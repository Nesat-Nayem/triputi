@section('title', 'Dashboard - Yug Parivartan Samiti')
@extends('laoyout.admin')
@section('content')

<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">States</h4>
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
              <a href="#">States</a>
            </li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card-title d-inline-block">States</div>
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
                                    style="width: 97.3727px"
                                  >
                                    <input
                                      type="checkbox"
                                      class="bulk-check"
                                      data-val="all"
                                    />
                                  </th>
                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 281.62px"
                                  >
                                    Country Name
                                  </th>
                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 237.87px"
                                  >
                                    State Name
                                  </th>
                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 225.451px"
                                  >
                                    Actions
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $key => $value)

                                <tr class="odd">
                                  <td>
                                    <input
                                      type="checkbox"
                                      class="bulk-check"
                                      data-val="12"
                                    />
                                  </td>
                                  <td>{{ $value->country->name }}</td>
                                  <td>{{ $value->name }}</td>

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
                                          href="#"
                                          data-toggle="modal"
                                          data-target="#editModal"
                                          data-id="12"
                                          data-en_name="Texas"
                                          data-ar_name=""
                                            onclick="editvalue({{ $value->id }})"
                                        >
                                          <span class="btn-label">
                                            <i class="fa-solid fa-edit"></i>
                                            Edit
                                          </span>
                                        </a>

                                        <a  class="dropdown-item editBtn" onclick="return confirm('Are you sure ! Delete This.')" href="{{ route('deleterownew',['table' => 'location' ,'id' => $value->id,'image' => 'no_image']) }}">
                                            <i
                                            class="fa-solid fa-trash-alt"
                                          ></i>
                                          Delete
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
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="/admin/new-country" class="w-100">
                @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Add State
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

                <input type="text" value="Y" name="state" hidden>
                  <div class="form-group">
                    <label for="">Country*</label>
                    <select name="country" class="form-control">
                     @foreach (App\Models\Location::where('status','Y')->where('type','country')->get() as $val)
                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                    @endforeach
                    </select>
                    <p
                      id="err_country"
                      class="mt-2 mb-0 text-danger em"
                    ></p>
                  </div>

                  <div class="form-group">
                    <label for="">State Name </label>
                    <input
                      type="text"
                      class="form-control"
                      name="name" required
                      placeholder="Enter state name"
                    />
                    <p
                      id="err_en_name"
                      class="mt-2 mb-0 text-danger em"
                    ></p>
                  </div>

                  <div class="form-group">
                    <label for="">Status*</label>
                    <select name="status" class="form-control">
                      <option value="Y">Active</option>
                      <option value="N">Deactive</option>
                    </select>
                    <p id="err_status" class="mt-2 mb-0 text-danger em"></p>
                  </div>


                 </div>

              <div class="modal-footer">
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
    url: '/admin/get-state/'+id, // Laravel route
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
