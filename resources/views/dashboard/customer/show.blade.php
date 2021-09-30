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
                <li class="breadcrumb-item active">#{{ $customer->id }}</li>
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
                <form action="{{ route('dashboard.customer.delete', $customer->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <div class="card-footer">
                    <div class="float-right">
                      <a href="{{ route('dashboard.customer.edit', $customer->id) }}" class="btn btn-default">
                        <i class="fas fa-pencil-alt"></i> Edit</a>
                      <button class="btn btn-default" type="submit"
                      onclick="return confirm('Confirm action to delete:')">
                        <i class="far fa-trash-alt text-danger"></i> Delete</button>
                    </div>
                    <a href="{{ route('dashboard.customer.index') }}" class="btn btn-default">
                      <i class="fas fa-chevron-left"></i> Back</a>
                  </div>
                </form>
                
                <div class="card-body">
                  <div class="tab-content">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <span class="form-control">{{ $customer->name }}</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <span class="form-control">{{ $customer->email }}</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Phone</label>
                      <div class="col-sm-10">
                        <span class="form-control">{{ $customer->phone }}</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Photo</label>
                      <div class="col-sm-10">
                        <div class="user-block">
                          <img class="attachment-img"  src="{{ asset('storage/uploads/customers/'.$customer->photo)}}" alt="{{ $customer->name }}_Ava">
                        </div>
                      </div>
                    </div>                        
                  </div>
                </div><!-- /.card-body -->
              </div><!-- /.card -->
              
              <dvi class="card">
                <div class="card-body">
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                          <tbody>
                            <tr role="row">
                              <th>Id</th>
                              <th>Full Name</th>
                              <th>Phone Number</th>
                              <th>Email</th>
                              <th>Photo</th>
                            </tr>
                            <tr class="odd">
                              <td>{{ $customer->id }}</td>
                              <td>{{ $customer->name }}</td>
                              <td>{{ $customer->phone }}</td>
                              <td>{{ $customer->email }}</td>
                              <td>
                                  <div class="user-block">
                                    <img class="attachment-img"  src="{{ asset('storage/uploads/customers/'.$customer->photo)}}" alt="{{ $customer->name }}_Ava">
                                  </div>
                              </td>
                            </tr>    
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
@endsection
