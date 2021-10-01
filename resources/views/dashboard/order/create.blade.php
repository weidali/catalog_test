@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Products</a></li>
                <li class="breadcrumb-item active">New</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Adding Product</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('dashboard.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="fullName">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="fullName" name="name" 
                  placeholder="Enter Full Name" value="{{ Request::get('name') ?? old('name') }}">
                @error('name')
                  <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" 
                  placeholder="Enter SKU" value="{{ Request::get('sku') ?? old('sku') }}">
                @error('sku')
                  <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" 
                  placeholder="Enter description" value="{{ Request::get('description') ?? old('description') }}">
                @error('description')
                  <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="description">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" 
                  placeholder="Enter price" value="{{ Request::get('price') ?? old('price') }}">
                @error('price')
                  <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <div class="form-group">
                  <div class="file-loading">
                    <input id="image" type="file" name="image"
                      class="@error('image') is-invalid @enderror"
                      accept="image/*" data-min-file-count="1" multiple>
                    @error('image')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Create"/>
            </div>
          </form>
        </div>
            
    </div>
@endsection
