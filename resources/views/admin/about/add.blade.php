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
                <div class="card-title d-inline-block">About Us</div>
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

                      <div class="py-3">
                        <h5 class="bg-dark text-white py-3 px-3">Content 1</h5>
                    </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2 text-dark">Title</label>
                                <input type="text" id="simpleinput" name="title"
                                    value="<?= $row->title  ?>" class="form-control">
                                    @error('title')
                             <div class="text-danger mt-2">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                       
                        
                        <div class="col-lg-6">
                          <div class="mb-3">
                              <label for="simpleinput" class="form-label mb-2 text-dark">image</label>
                              <input type="file" id="simpleinput" name="image" class="form-control">
                              @error('image')
                              <div class="text-danger mt-2">{{ $message }}</div>
                              @enderror
                          </div>
                          @if(isset($data->image))

                          <img src="{{ url('') }}/uploads/{{ $data->image }}" class="img-thumbnail" width="100" height="100" alt="">
                          @endif

                      </div>
                        </div>
                    

                        <div class="">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2 text-dark">Desc</label>
                                <textarea class="form-control" id="summernote" name="desc" rows="3"><?= $row->desc ?></textarea>
                                @error('desc')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="py-3">
                          <h5 class="bg-dark text-white py-3 px-3">Content 2</h5>
                      </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="mb-3">
                                  <label for="simpleinput" class="form-label mb-2 text-dark">Title_2</label>
                                  <input type="text" id="simpleinput" name="title_2"
                                      value="<?= $row->title_2  ?>" class="form-control">
                                      @error('title_2')
                               <div class="text-danger mt-2">{{ $message }}</div>
                               @enderror
                              </div>
                          </div>
                         
                          
                          <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label mb-2 text-dark">image_2</label>
                                <input type="file" id="simpleinput" name="image_2" class="form-control">
                                @error('image_2')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            @if(isset($data->image_2))
  
                            <img src="{{ url('') }}/uploads/{{ $data->image_2 }}" class="img-thumbnail" width="100" height="100" alt="">
                            @endif
  
                        </div>
                          </div>
                      
  
                          <div class="">
                              <div class="mb-3">
                                  <label for="simpleinput" class="form-label mb-2 text-dark">Desc_2</label>
                                  <textarea class="form-control" id="summernote2" name="desc_2" rows="3"><?= $row->desc_2 ?></textarea>
                                  @error('desc_2')
                                  <div class="text-danger mt-2">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>

                        <div class="py-3">
                          <h5 class="bg-dark text-white py-3 px-3">About  Seo</h5>
                      </div>


                        <div class="seo_box">
                       <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                              <label for="simpleinput" class="form-label mb-2 text-dark">Meta Title</label>
                              <input type="text" id="simpleinput" name="meta_title"
                                  value="<?= $row->meta_title  ?>" class="form-control">
                                  @error('meta_title')
                                  <div class="text-danger mt-2">{{ $message }}</div>
                                  @enderror
                          </div>
                      </div>


                      <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label mb-2 text-dark">Meta Tags</label>
                            <input type="text" id="simpleinput" name="meta_tags"
                                value="<?= $row->meta_tags  ?>" class="form-control">
                           @error('meta_tags')
                           <div class="text-danger mt-2">{{ $message }}</div>
                           @enderror
                        </div>
                    </div>
                       </div>

                      <div class="">
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label mb-2 text-dark">Meta Description</label>
                            <textarea class="form-control" id="simpleinput" name="meta_description" rows="3"><?= $row->meta_description ?></textarea>
                            @error('meta_description')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                        </div>
    


                      </div>

                      <div class="col-12 mt-3">
                        <button
                          type="submit"
                          id="PropertySubmit"
                          class="btn btn-success px-4">
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

 
  <script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
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

<script>
  $('#summernote2').summernote({
    placeholder: 'Hello stand alone ui',
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
