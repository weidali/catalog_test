@extends('layouts.app')

@section('content')
  <div class="container-fluid">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Products</a></li>
              <li class="breadcrumb-item"><a href="{{ route('dashboard.product.show', $product->id) }}">#{{ $product->id }}</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-9">
            <div class="card">
              <div class="card-footer">
                <a href="{{ route('dashboard.product.show', $product->id) }}" class="btn btn-default">
                  <i class="fas fa-eye"></i> View</a>
              </div>
            
              <div class="card-body">  
                <form class="form-horizontal" action="{{ route('dashboard.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" name="name"
                        value="{{ $product->name ?? old('name') }}">
                        @error('name')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku"
                        value="{{ $product->sku ?? old('sku') }}">
                        @error('sku')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        value="{{ $product->description ?? old('description') }}">
                        @error('description')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                        value="{{ $product->price ?? old('price') }}">
                        @error('price')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <label class="custom-file-label" for="image">Choose file</label>
                      <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                      @error('image')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Refresh</button>
                    </div>
                  </div>
                </form>
                  
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection
