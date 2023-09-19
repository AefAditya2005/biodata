@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Pages Staf</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Staf Tu</h3>
      </div>
      <div class="card-body">
        @if($message = Session::get('success'))
        <div class="alert alert-success">{{$message}}</div>
        @endif
      <a href="{{ route ('staf.create')}}" class="btn btn-success">Tambah Data</a>
      <br>
      <br>
            <table class="table table-striped table-bordered">
                  <tr>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                  </tr>
                  @foreach ($StafM as $staf)
                  <tr>
                    <td>{{ $staf->nip}}</td>
                    <td>{{ $staf->namalengkap}}</td>
                    <td>
                          <a href="{{ route('staf.edit' , $staf->id) }}" class="btn btn-xs btn-warning">Edit</a>
                          
                          <form action="{{ route('staf.destroy' , $staf->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                          </form>
                    </td>
                  </tr>
                  @endforeach
            </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection