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
                  <li class="breadcrumb-item active">Customers</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Good!</h5>
                  {{ $message }}
                </div>
              @endif
              @if ($message = Session::get('delete'))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Ok!</h5>
                  {{ $message }}
                </div>
              @endif
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Customers</h3>
                  <a href="{{ route('dashboard.customers.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> New Cusromer</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                          <thead>
                            <tr role="row">
                                <th>Id</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($customers as $customer)
                              <tr onclick="window.location='{{ route('dashboard.customers.show', [$customer->id]) }}'">
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                  @if ( $customer->photo )
                                    <div class="user-block">
                                      <img class="attachment-img" src="{{ asset('storage/uploads/customers/'.$customer->photo)}}" alt="{{ $customer->name }}_Ava">
                                    </div>
                                  @endif
                                    
                                </td>
                                <td>{{ $customer->created_at }}</td>
                                <td>{{ $customer->updated_at }}</td>
                              </tr>    
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                          
                    <div class="row">
                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                          {{-- Pagination --}}
                          <div class="d-flex justify-content-center">
                            {!! $customers->links() !!}
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                      
              
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
    </div>        
  </div>
@endsection
