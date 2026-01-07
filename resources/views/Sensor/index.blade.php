@extends('layouts.app')

@section('title', 'Data Sensor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold">Data Sensor</h1>
    <a href="/sensor/create" class="btn btn-primary">Tambah Data Sensor</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Nama sensor</th>
            <th class="text-end">Data</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sensors as $sensor)
        <tr>
            <td>{{ $sensor->nama_sensor }}</td>
            <td class="text-end">{{ $sensor->data }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
