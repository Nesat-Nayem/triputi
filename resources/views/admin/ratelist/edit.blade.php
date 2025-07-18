@section('title', 'Dashboard - Laxmi Tirupati Transport')
@extends('laoyout.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit! Rate List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Reports</li>
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

                                       <!-- Report Number -->
<div class="col-lg-6 col-12">
    <div class="form-group">
        <label class="text-dark">Particulars Name*</label>
        <input type="text" class="form-control @error('particulars_name') is-invalid @enderror" 
               name="particulars_name"  value="{{ old('particulars_name', $rate->particulars_name ?? '') }}">
        @error('particulars_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<!-- Qty Number -->
<div class="col-lg-6 col-12">
    <div class="form-group">
        <label class="text-dark">Per Piece Rate*</label>
        <input type="text" class="form-control @error('per_piece_rate') is-invalid @enderror" 
               name="per_piece_rate" value="{{ old('per_piece_rate', $rate->per_piece_rate ?? '') }}">
        @error('per_piece_rate')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

                                      
                                        <!-- Status -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-dark">Status*</label>
                                                <select name="status" class="form-control">
                                                    <option value="Y" {{ $rate->status == 'Y' ? 'selected' : '' }}>Active</option>
                                                    <option value="N" {{ $rate->status == 'N' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            
                            <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i> Submit</button>
                            <button type="reset" class="btn btn-danger"><i class="mdi mdi-refresh"></i> Reset</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
