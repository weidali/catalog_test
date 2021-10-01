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
                  <li class="breadcrumb-item active">Orders</li>
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
                  <h3 class="card-title">Orders</h3>
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
                                <th>Customer Name</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($orders as $order)
                              <tr onclick="window.location='{{ route('dashboard.order.show', [$order->id]) }}'">
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->updated_at }}</td>
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
                            {!! $orders->links() !!}
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
