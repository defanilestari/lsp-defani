@extends('main.layout')
@section('content')
 
<center>
    <b>
        <h2>LIST DATA MENGAJAR</h2>
        <a href="/mengajar/create" class="button-primary">TAMBAH DATA </a>
        @if (session('success'))
        <p class="text-success">{{ session('success')}}</p>
    @endif 
    @if (session('error'))
        <p class="text-danger">{{ session('error')}}</p>
    @endif
        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <th>GURU</th>
                <th>MATA PELAJARAN</th>
                <th>KELAS</th>
                <th>ACTION</th>
            </tr>
            @foreach ($mengajar as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->guru->nama_guru}}</td>
                <td>{{ $r->mapel->nama_mapel}}</td>
                <td>{{ $r->kelas->nama_kelas}}</td>
                <td>
                    <a href="/mengajar/edit/{{$r->id}}" class="button-warning">EDIT</a>
                    <a href="/mengajar/destroy/{{$r->id}}" class="button-danger" onClick="return confirm ('Yakin Hapus?')">HAPUS</a>
                </td>
            </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection 