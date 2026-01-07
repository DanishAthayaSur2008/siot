@extends('layouts.app')

@section('title', 'Tambah Data Sensor')

@section('content')
<h1 class="fw-bold mb-4">Tambah Data Sensor</h1>

<form action="/sensor" method="POST" style="max-width: 400px;">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Sensor</label>
        <input type="text" name="nama_sensor" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Data</label>
        <input type="number" name="data" class="form-control">
    </div>

    <button class="btn btn-primary">Submit</button>
</form>
@endsection
