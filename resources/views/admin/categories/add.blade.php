@section('title', 'Dashboard - Yug Parivartan Samiti')
@extends('laoyout.admin')
@section('content')


<style>
    .content-page{
        width: 100%;
    }
</style>
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold m-0">Add Category</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>

                <!-- General Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">Category Detail</h5>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Title</label>
                                                <input type="text" id="simpleinput" name="title"
                                                    value="{{ old('title') }}" class="form-control">
                                                @error('title')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Type</label>
                                                <input type="text" id="simpleinput" name="type"
                                                    value="{{ old('type') }}" class="form-control">
                                                @error('type')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                      

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>


            </div> <!-- container-fluid -->

        </div> <!-- content -->


    </div>

@endsection
