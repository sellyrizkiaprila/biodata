@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Guru Pages</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Tambah Guru</h3>
  
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
    <div class="card-body">
      <a href="{{ route('guru.index') }}"
        class="btn btn-default">Kembali</a>
      <br><br>

      <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NIP</label>
            <input name="nip" type="text" class="form-control" placeholder="...">
            @error('nip')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input name="namaguru" type="text" class="form-control" placeholder="...">
            @error('namaguru')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Mapel</label>
            <input name="mapel" type="string" class="form-control" placeholder="...">
            @error('mapel')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="Tambah"/>
    </form>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
@endsection
