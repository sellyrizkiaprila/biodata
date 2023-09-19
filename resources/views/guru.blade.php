@extends('adminlte')
@section('content')
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
      <h3 class="card-title">Tabel Guru</h3>

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
      <a href="{{route('guru.create')}}" class="btn btn-success">Tambah Data</a>
      <br><br>
      @if($message = Session::get('success'))
      <div class="alert alert-success">{{ $message }}</div>
      @endif
        <table class="table table-striped table-bordered">
        <tr>
          <th>NIP</th>
          <th>Nama Guru</th>
          <th>Mapel</th>
          <th>Aksi</th>
        </tr>
        @foreach ($GuruM as $guru)
        <tr>
          <td>{{ $guru->nip }}</td>
          <td>{{ $guru->namaguru }}</td>
          <td>{{ $guru->mapel }}</td>
          <td>
              <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-xs btn-warning">Edit </a>
              <form action="{{ route('guru.destroy', $guru->id)}}" method="POST">
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
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
@endsection('content')