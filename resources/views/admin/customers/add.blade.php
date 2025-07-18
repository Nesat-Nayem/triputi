@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('laoyout.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Create Customer</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Customer</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin">
                <form method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <!-- Name -->
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Name*</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                                       name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Address*</label>
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                                       name="address" value="{{ old('address') }}">
                                                @error('address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Mobile -->
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Mobile*</label>
                                                <input type="text" class="form-control @error('mobile') is-invalid @enderror" 
                                                       name="mobile" value="{{ old('mobile') }}">
                                                @error('mobile')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Map Iframe -->
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Map Iframe (Optional)</label>
                                                <textarea class="form-control @error('map_iframe') is-invalid @enderror" 
                                                          name="map_iframe">{{ old('map_iframe') }}</textarea>
                                                @error('map_iframe')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Status -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Status*</label>
                                                <select name="status" class="form-control">
                                                    <option value="Y">Active</option>
                                                    <option value="N">Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Submit & Reset Buttons -->
                            <button type="submit" class="btn btn-primary mr-2">
                                <i class="mdi mdi-content-save"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger">
                                <i class="mdi mdi-refresh"></i> Reset
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
