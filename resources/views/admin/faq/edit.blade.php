@extends('laoyout.admin')
@section('content')



<style>
/* .container {
    max-width: 960px;
    margin: 30px auto;
    padding: 20px;
} */

h1 {
    font-size: 20px;
    text-align: center;
    margin: 20px 0 20px;
    small {
        display: block;
        font-size: 15px;
        padding-top: 8px;
        color: gray;
    }
}

.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;
    .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
        input {
            display: none;
            + label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all .2s ease-in-out;
                &:hover {
                    background: #f1f1f1;
                    border-color: #05ed9c;
                }
                &:after {
                    content: "\f040";
                    font-family: 'FontAwesome';
                    color: #757575;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    margin: auto;
                }
            }
        }
    }
    .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
}
</style>


<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Faq</h4>
          <ul class="breadcrumbs">
            <li class="nav-home">
              <a
                href="https://codecanyon8.kreativdev.com/estaty/admin/dashboard"
              >
                <i class="fa-solid fa-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-chevron-right"></i>
            </li>

         


            <li class="nav-item">
              <a href="#"></a>
            </li>
            <li class="separator">
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Faq</a>
            </li>
          </ul>
        </div>

        <form enctype="multipart/form-data" method="post">
            @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Faq</div>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div
                      class="alert alert-danger pb-1 dis-none"
                      id="carErrors"
                    >
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                      >
                        ×
                      </button>
                      <ul></ul>
                    </div>


                    <div
                      id="carForm"
                      action="https://codecanyon8.kreativdev.com/estaty/admin/property-management/store"
                      method="POST"

                    >
                      <input
                        type="hidden"
                        name=""
                        value="1JKXaxVfoqk8vcEV0yiVbim1181mDSgaJd8IKGTI"
                      />
                      <input type="hidden" name="type" value="commercial" />
                      <div id="sliders"></div>

                        <div class="">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2">Title</label>
                                <input type="text" id="simpleinput" name="title"
                                    value="<?=$row->title ?>" class="form-control">
                                    @error('title')
                             <div class="text-danger mt-2">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                       
                    
                        <div class="">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2">Description</label>
                                <textarea class="form-control" id="simpleinput" name="description" rows="3"><?=$row->description ?></textarea>
                                @error('desc')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Status</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Y" name="status"
                                            type="radio" name="gridRadios" id="gridRadios1"
                                            value="option1" checked="">
                                        <label class="form-check-label" for="gridRadios1">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" value="N" name="status"
                                            type="radio" name="gridRadios" id="gridRadios2"
                                            value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    

                      </div>

                      <div class="col-12 mt-3">
                        <button
                          type="submit"
                          id="PropertySubmit"
                          class="btn btn-success"
                        >
                          Save
                        </button>
                      </div>

                      <div id="sliders"></div>
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="card-footer">
                <div class="row">
               
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
      </div>
    </div>

    {{-- <footer class="footer py-4">
      <div class="container-fluid">
        <div class="d-block mx-auto">
          <p class="mb-0"></p>
          <p>Copyright ©2024. All Rights Reserved.</p>
          <p></p>
        </div>
      </div>
    </footer> --}}
  </div>

  @section('footer')

  <script>
       $('#summernote').summernote({
                        placeholder: '',
                        tabsize: 2,
                        height: 200,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['fontsize', ['fontsize']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ],
                        fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '36', '48', '64', '82',
                            '150'
                        ], // Custom font sizes
                    });

                    $('#additional_description').summernote({
                        placeholder: '',
                        tabsize: 2,
                        height: 200,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['fontsize', ['fontsize']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ],
                        fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '36', '48', '64', '82',
                            '150'
                        ], // Custom font sizes
                    });
  </script>
<script>
    $(document).ready(function () {
        $('#category-select').on('change', function () {
            const categoryId = $(this).val(); // Get selected value

            if (categoryId) {
                $.ajax({
                    url: '/admin/get-category-type-details', // Route to send GET request
                    method: 'GET',
                    data: { id: categoryId }, // Send the selected value
                    success: function (response) {
                        $('#category-select-type').html(response);
                    },
                    error: function (xhr) {
                        console.error(xhr.responseText); // Handle error response
                    }
                });
            }
        });
    });
</script>


<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>

  @endsection


@endsection
