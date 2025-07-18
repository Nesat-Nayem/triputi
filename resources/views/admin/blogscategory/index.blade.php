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
      

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Data Lists</h5>
            <a class="btn btn-dark" href="/admin/blogs-categories" role="button">Add</a>
        </div>
        <div class="card-body">
            <table id="fixed-header-datatable"
                class="table table-striped dt-responsive nowrap table-striped w-100">
                <thead>
                    <tr>
                        <th>Sr/o</th>
                        <th>Title </th>
                        <th></th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cateb as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->title }}</td>
                      


                        


                        <td> <?php
                            if (isset($item->image)) {
                                $image = $item->image;
                            } else {
                                $image = 'no_image';
                            } ?>

                        </td>

                        <td>
                            @if ($item->status == "Y")
                            <a href="/admin/blogs-categories-change/{{$item->id}}" class="btn btn-primary">Y</a>
                            @else
                                <a href="/admin/blogs-categories-change/{{$item->id}}" class="btn btn-danger">N</a>
                            @endif
                        </td>

                        <td>
                           

                            <a onclick="return confirm('Are you sure !')"
                                href="{{ route('deleterownew', ['table' => 'blogscategory', 'id' => $item->id, 'image' => $image]) }}"
                                class="text-danger">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="/admin/edit-blogs-category/{{ $item->id }}" class="text-primary">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z">
                                    </path>
                                </svg>

                            </a>
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
