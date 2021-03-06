@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Daftar Surat Dalam Alquran</h1>
@stop

<!-- load css datatables-->
@section('content')
@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

<!-- load js datatables -->
@section('javascripts')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>

@endsection


<p>Silahkan piliah daftar surat yang akan dibaca</p>


<!-- awal table -->

            <!-- /.card-header -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
              <div class="card-body">
                 <table class="table table-hover text-nowrap" id="datatable">
                  <thead>
                  <tr>
                    <th>No Surat</th>
                    <th>Nama Surat</th>
                    <th>Jumlah Ayat</th>
                    <th>Keterangan</th>
                    <th>Kategori</th>
                  </tr>
                  </thead>
                  <tbody>
              
              @foreach($surat as $data)
               
                  <tr>
                    <td>{{ $data->nosurat }}</td>
                    <td>{{ $data->nama_surat }}</td>
                    <td>{{ $data->jml_ayat }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->kategori }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                   <th>No Surat</th>
                    <th>Nama Surat</th>
                    <th>Jumlah Ayat</th>
                    <th>Keterangan</th>
                    <th>Kategori</th>
                  </tr>

                  </tfoot>
                </table>
                Halaman : {{ $surat->currentPage() }} <br/>
                Jumlah Data : {{ $surat->total() }} <br/>
                Data Per Halaman : {{ $surat->perPage() }} <br/>
 
 
  {{ $surat->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



<!-- akhir table -->
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop


