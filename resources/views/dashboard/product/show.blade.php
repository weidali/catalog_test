@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Product Card</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Products</a></li>
                <li class="breadcrumb-item active">#{{ $product->id }}</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="card">
          <form action="{{ route('dashboard.product.delete', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="card-footer">
              <div class="float-right">
                <a class="btn btn-info btn-sm" href="{{ route('dashboard.product.edit', $product->id) }}">
                  <i class="fas fa-pencil-alt"></i> Edit
                </a>
                <button class="btn btn-danger btn-sm" type="submit"
                  onclick="return confirm('Confirm action to delete:')">
                    <i class="fas fa-trash"></i> Delete
                </button>
              </div>
              <a class="btn btn-default btn-sm" href="{{ route('dashboard.product.index') }}">
                <i class="fas fa-chevron-left"></i> Back</a>
            </div>
          </form>
        </div><!-- /.card -->
          
        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Good!</h5>
                    {{ $message }}
                  </div>
                @endif
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">{{ $product->name }}</h3>
                <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }} Image">
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3">{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <hr>
  
                <h4 class="mt-3">SKU <small>{{ $product->sku }}</small></h4>
  
                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">
                    ${{ number_format($product->price/100, 2) }}
                  </h2>
                  <h4 class="mt-0">
                    <small>Ex Tax: ${{ number_format($product->price/100, 2) }}</small>
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    </div>
@endsection
