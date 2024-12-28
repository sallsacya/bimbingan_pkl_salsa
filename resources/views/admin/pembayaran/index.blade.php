@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Pembayaran</h3>

            <div class="box-tools">
              <a href="/admin/data/pembayaran/create" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>Id</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>SPPD Id</th>
                <th>Nomor SPPD</th>
                <th>Tanggal SPPD</th>
                <th>Uang Harian</th>
                <th>Uang Transpot</th>
                <th>Tiket Pesawat</th>

              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{1 + $key}}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->sppd_id}}</td>
                <td>
                  <a href="/admin/data/pembayaran/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/admin/data/pembayaran/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
</div>

@endsection
@push('js')

@endpush