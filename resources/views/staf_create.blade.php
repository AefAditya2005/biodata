@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Staf Page</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Staf</h3>
      </div>
      <div class="card-body">
      <a href="{{ route ('staf.index')}}" class="btn btn-default">Kembali</a>
      <br>
      <br>

      <form action="{{ route ('staf.store') }}" method="POST">
        @csrf
        <div class="form-group">
                <label>NIP</label>
                <input name="nip" type="number" class="form-control" placeholder="....">
                @error ('nip')
                <p>{{ 'message' }}</p>
                @enderror
        </div>
        <div class="form-group">
                <label>Nama Lengkap</label>
                <input name="namalengkap" type="text" class="form-control" placeholder="....">
                @error ('namalengkap')
                <p>{{ 'message' }}</p>
                @enderror
        </div>
        <input type="submit" name="submit" class="btn btn-success" value="tambah">
      </form>

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