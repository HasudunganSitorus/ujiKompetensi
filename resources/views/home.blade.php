@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>name</th>
                    <th>parent_id</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $item)
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item['name'] }} </td>
                      <td>{{ $item['parent_id'] }}</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm mb-2 p-2">
                          <a href="#" class="btn btn-info "><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
@endsection
