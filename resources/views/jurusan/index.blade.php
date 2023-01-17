@extends('main.layout')
@section('content')
 
<center>
    <b>
        <h2>LIST DATA JURUSAN</h2>
        <a href="/jurusan/create" class="button-primary">TAMBAH DATA </a>
        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <th>NAMA JURUSAN</th>
                <th>ACTION</th>
            </tr>
            @foreach ($jurusan as $g)
            <tr>
                <td>{{ $loop->iteration }}</td>
                
                <td>{{ $g->nama_jurusan}}</td>
                <td>
                    <a href="/jurusan/edit/{{$g->id}}" class="button-warning">EDIT</a>
                    <a href="/jurusan/destroy/{{$g->id}}" class="button-danger" onClick="return confirm ('Yakin Hapus?')">HAPUS</a>
                </td>
            </tr>
            @endforeach
        </table>
    </b>
</center>

@endsection