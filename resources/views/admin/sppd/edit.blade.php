@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/admin/data/sppd" class="btn btn-flat btn-primary"><i class="fa fa-backward"></i> Kembali</a> <br /> <br />
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/admin/data/sppd/edit/{{$data->id}}">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nip" required value="{{$data->nip}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required value="{{$data->nama}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" required value="{{$data->jabatan}}">
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right" onclick="return confirm('Yakin sudah sesuai?');"><i class="fa fa-save"></i> Update Data</button>
                </div>
                <!-- /.box-footer -->
            </form>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection
@push('js')

@endpush