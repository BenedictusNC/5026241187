@extends('template')
@section('title', 'Hard Disk')
@section('konten')
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
        </tr>

        @foreach ($harddisk as $h)
            <tr>
                <td>{{ $h->kodeharddisk }}</td>
                <td>{{ $h->merkharddisk }}</td>
                <td>{{ $h->stockharddisk }}</td>
                <td>{{ $h->tersedia }}</td>
            </tr>
        @endforeach
    </table>

@endsection
