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
              <li class="breadcrumb-item"><a href="{{ route('dashboard.customer.index') }}">Customers</a></li>
              <li class="breadcrumb-item"><a href="{{ route('dashboard.customer.show', $customer->id) }}">#{{ $customer->id }}</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('storage/uploads/customers/'.$customer->photo)}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $customer->name }}</h3>

                <p class="text-muted text-center">{{ $customer->email }}</p>  
              </div>
              <!-- /.card-body -->
              <hr>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted">Malibu, California</p>

                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-footer">
                <a href="{{ route('dashboard.customer.show', $customer->id) }}" class="btn btn-default">
                  <i class="fas fa-eye"></i> View</a>
              </div>
            
              <div class="card-body">  
                <form class="form-horizontal" action="{{ route('dashboard.customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" name="name"
                        value="{{ $customer->name ?? Request::get('name') ?? old('name') }}">
                        @error('name')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email"
                        value="{{ $customer->email ?? Request::get('email') ?? old('email') }}">
                        @error('email')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('phone') is-invalid @enderror" id="inputPhone" name="phone"
                        value="{{ $customer->phone ?? Request::get('phone') ?? old('phone') }}">
                        @error('phone')
                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                      <label class="custom-file-label" for="inputPhoto">Choose file</label>
                      <input type="file" class="form-control @error('photo') is-invalid @enderror" id="inputPhoto" name="photo">
                      @error('photo')
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
