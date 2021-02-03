@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>List Surat -  Aplikasi Tahfidz Alquran</h1>
@stop

@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection




@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Halaman Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Products </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Produk</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th> Nama Produk </th>
                                    <th> Satuan </th>
                                    <th> Harga Beli </th>
                                    <th> Harga Jual </th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $data->nama_surat }}</td>
                                        <td>{{ $data->nama_surat }}</td>
                                        <td>{{ $data->nama_surat }}</td>
                                        <td>{{ $data->nama_surat }}</td>
                                    </tr>
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

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop


@section('javascripts')
<!-- DataTables -->
<script src="{{url('/vendor/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>

@endsection
