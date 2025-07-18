@extends('laoyout.admin')
@section('content')


<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card-title d-inline-block">
                      Categories
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

                                  <td> <?php
                                    if (isset($item->image)) {
                                        $image = $item->image;
                                    } else {
                                        $image = 'no_image';
                                    } ?>
        
                                    {{-- <img src="{{ url('/uploads') }}/<?=$item->image ?>" width="100" height="100" class="img-thumblain" alt=""> --}}
                                </td>
        

                                  <td>
                                      <a onclick="return confirm('Are you sure !')"
                                          href="{{ route('deletetestimonials', ['table' => 'testimonials', 'id' => $item->id, 'image' => $image]) }}"
                                          class="text-danger">
                                          <svg width="20" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" fill="currentColor">
                                              <path
                                                  d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z">
                                              </path>
                                          </svg>
                                      </a>
          
                                      <a href="/admin/edit-testimonials/{{ $item->id }}" class="text-primary">
                                          <svg width="20" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" fill="currentColor">
                                              <path
                                                  d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z">
                                              </path>
                                          </svg>
          
                                      </a>
                                      <?php if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] == "blog_category" ){ ?>

                                        <a class="dropdown-item editBtn"
                                        onclick="return confirm('Are you sure ! Delete This.')" href="{{ route('deleterownew',['table' => 'category' ,'id' => $item->id,'image' => 'no_image']) }}" >
                                        <span class="btn-label">
                                            <i class="fa-solid fa-trash"></i>
                                          Delete
                                        </span>
                                      </a>

                                    <?php }else{ ?>
                                    <a
                                      class="dropdown-item editBtn"
                                      href="/admin/category/types/{{ $item->id }}"
                                    >
                                      <span class="btn-label">
                                        <i class="fa-solid fa-view"></i>
                                        Category Types
                                      </span>
                                    </a>
                                    <?php } ?>
                                  </td>
                                  {{-- <td>
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


                                        <?php if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] == "blog_category" ){ ?>

                                            <a class="dropdown-item editBtn"
                                            onclick="return confirm('Are you sure ! Delete This.')" href="{{ route('deleterownew',['table' => 'category' ,'id' => $item->id,'image' => 'no_image']) }}" >
                                            <span class="btn-label">
                                                <i class="fa-solid fa-trash"></i>
                                              Delete
                                            </span>
                                          </a>

                                        <?php }else{ ?>
                                        <a
                                          class="dropdown-item editBtn"
                                          href="/admin/category/types/{{ $item->id }}"
                                        >
                                          <span class="btn-label">
                                            <i class="fa-solid fa-view"></i>
                                            Category Types
                                          </span>
                                        </a>
                                        <?php } ?>

                                      </div>
                                    </div>
                                  </td> --}}
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

            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Add Category
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
                    <label for="">Category Name*</label>
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

</div>

   
  </div>

  @section('footer')

  <script>
    function editvalue(id){
        $.ajax({
    url: '/admin/get-categories/'+id, // Laravel route
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
