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
                <li class="breadcrumb-item"><a href="{{ route('dashboard.customers.index') }}">Customers</a></li>
                <li class="breadcrumb-item active">New</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Adding Customer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('dashboard.customers.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="fullName" name="name" 
                    placeholder="Enter Full Name" value="{{ Request::get('name') ?? old('name') }}">
                  @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phoneNumber" name="phone" 
                    placeholder="Enter Phone Number" value="{{ Request::get('phone') ?? old('phone') }}">
                  @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" 
                    placeholder="Enter email" value="{{ Request::get('email') ?? old('email') }}">
                  @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>

                <div class="form-group">
                  <div class="file-loading">
                      <input id="photo" type="file" name="photo"
                             class="@error('photo') is-invalid @enderror"
                             accept="image/*" data-min-file-count="1" multiple>
                      @error('photo')
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
