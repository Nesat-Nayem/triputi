@section('title', 'Dashboard - Yug Parivartan Samiti')
@extends('laoyout.admin')
@section('content')

<style>
    .svg_code svg{
        width: 20px;
    }
</style>

<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Amenities</h4>
          <ul class="breadcrumbs">
            <li class="nav-home">
              <a href="">
                <i class="fa-solid fa-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-right-arrow"></i>
            </li>
            <li class="nav-item">
              <a href="#">Property Specifications</a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-right-arrow"></i>
            </li>
            <li class="nav-item">
              <a href="#">Amenities</a>
            </li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card-title d-inline-block">Amenities</div>
                  </div>

                  <div class="col-lg-3">
                    <select
                      name="language"
                      class="form-control"
                      onchange="window.location='https://codecanyon8.kreativdev.com/estaty/admin/property-specification/amenity?language=' + this.value"
                    >
                      <option selected="" disabled="">
                        Select a Language
                      </option>
                      <option value="en" selected="">English</option>
                      <option value="ar">عربي</option>
                    </select>
                  </div>

                  <div class="col-lg-4 offset-lg-1 mt-2 mt-lg-0">
                    <a
                      href="#"
                      onclick="document.getElementById('alert_dd').style.display = 'none'"
                      data-toggle="modal"
                      data-target="#createModal"
                      class="btn btn-primary btn-sm float-lg-right float-left"
                      ><i class="fa-solid fa-plus"></i> Add</a
                    >

                    <button
                      class="btn btn-danger btn-sm float-right mr-2 d-none bulk-delete"
                      data-href=""
                    >
                      <i class="flaticon-interface-5"></i> Delete
                    </button>
                  </div>

                  @if ($errors->any())
 <div class="col-12" id="alert_dd">
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 </div>
@endif

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
                                    style="width: 71.4005px"
                                  >
                                    Icon
                                  </th>
                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 203.53px"
                                  >
                                    Name
                                  </th>
                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 108.924px"
                                  >
                                    Status
                                  </th>

                                  <th
                                    scope="col"
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="width: 135.671px"
                                  >
                                    Actions
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $key => $value)

                                <tr class="{{ $key % 2 == 0 ? 'even' : 'odd' }}">

                                  <td class="svg_code">
                                    <?= $value->icon_code ?>
                                  </td>
                                  <td>{{ $value->name }}</td>
                                  <td>
                                    <h2 class="d-inline-block">
                                        @if($value->status == "Y")
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
                                          href="#"
                                           onclick="editvalue({{ $value->id }})"
                                          data-toggle="modal"
                                          data-target="#editModal"
                                          data-en_name="Mosque"
                                          data-ar_name="مسجد"
                                          data-amenity_id="16"
                                          data-icon="fas fa-mosque"
                                          data-name=""
                                          data-status="1"
                                          data-serial_number="7"
                                        >
                                          <span class="btn-label">
                                            <i class="fa-solid fa-edit"></i>
                                            Edit
                                          </span>
                                        </a>
                                        <a
                                          class="dropdown-item editBtn"
                                         onclick="return confirm('Are you sure ! Delete This.')" href="{{ route('deleterownew',['table' => 'amenity' ,'id' => $value->id,'image' => 'no_image']) }}"

                                        >
                                          <span class="btn-label">
                                            <i
                                            class="fa-solid fa-trash"
                                          ></i>
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
           <form action="/admin/new-amenity" method="post" class="w-100">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Add Property Amenity
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
                    <label for="">Name* </label>
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      placeholder="Enter aminity name"
                    />
                    <p
                      id="err_en_name"
                      class="mt-2 mb-0 text-danger em"
                    ></p>
                  </div>


                  <div class="form-group">
                    <label for="">Icon* (Use icon from <a href="https://remixicon.com/" target="_blank">https://remixicon.com/</a>)</label>
                        <textarea name="icon_code" id="" rows="4" class="form-control"></textarea>
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
          <div class="modal-dialog modal-dialog-centered" id="model_content_edit" role="document">

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
    url: '/admin/get-amenity/'+id, // Laravel route
    method: 'GET',         // HTTP GET method
    success: function(response) {
        $('#model_content_edit').html(response);
    },
    error: function(xhr) {
        console.error('Error:', xhr.responseText);
    }
});

    }
  </script>

@endsection
@endsection
