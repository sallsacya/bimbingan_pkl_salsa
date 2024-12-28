
@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row text-center">
    <img src="/background/logo.jpg" width="10%"><H2>HI {{strtoupper(Auth::user()->name)}}, SELAMAT DATANG DI APLIKASI <br />KOMISI PEMILIHAN UMUM KOTA BANJARMASIN</H2>
</div>

@endsection
@push('js')
@endpush