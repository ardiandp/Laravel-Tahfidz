@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Daftar Hadist -  Aplikasi Tahfidz Alquran</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>

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
              
              @foreach($hadist as $data)
               
                  <tr>
                    <td>{{ $data->imam }}</td>
                    <td>{{ $data->no_hadist }}</td>
                    <td>{{ $data->text_arab }}</td>
                    <td>{{ $data->terjemah_hadist }}</td>
                    <td>{{ $data->title }}</td>
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
                Halaman : {{ $hadist->currentPage() }} <br/>
                Jumlah Data : {{ $hadist->total() }} <br/>
                Data Per Halaman : {{ $hadist->perPage() }} <br/>
 
 
  {{ $hadist->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop