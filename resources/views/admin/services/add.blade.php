@extends('laoyout.admin')
@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

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
     

        <form enctype="multipart/form-data" method="post">
            @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Create Service</div>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                  


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

                 <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label mb-2 text-dark">Title</label>
                        <input type="text" id="simpleinput" name="title"
                            value="" class="form-control">
                            @error('title')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
             


                
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="example-select" class="form-label text-dark">Select Category</label>
                        <select class="form-select form-control" name="category" id="example-select">
                            <?php
                            $categories = DB::table('servicecategory')
                                ->where('status', 'Y')
                                ->get(['id', 'title']);
                            foreach ($categories as $key => $value) {
                            ?>
                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                            <?php } ?>
                        </select> @error('category')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               
                 </div>


                
                       

                <div class="">
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label mb-2 text-dark">Video Url</label>
                        <input type="text" id="simpleinput" name="video"
                            value="" class="form-control">
                            @error('video')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    
                        <div class="">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2 text-dark">Description</label>
                                <textarea class="form-control" id="summernote" name="description" rows="3"></textarea>
                                @error('description')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2 text-dark">icon</label>
                                <input type="file" id="simpleinput" name="icon"
                                    value="" class="form-control">
                                    @error('icon')
                                    <div class="mt-2 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2 text-dark">image</label>
                                <input type="file" id="simpleinput" name="image"
                                    value="" class="form-control">
                                    @error('image')
                                    <div class="mt-2 text-danger">{{ $message }}</div>
                                @enderror
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
              

            </div>
          </div>
        </div>
    </form>
      </div>
    </div>


  </div>

  


<script>
    $('#summernote').summernote({
      placeholder: '',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>


@endsection
