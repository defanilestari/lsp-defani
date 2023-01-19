@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST NILAI</h2>
        <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
            <p class="tetxt-success">{{ session('success') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <td>NO</td>
                    <td>GURU</td>
                    <td>NAMA SISWA</td>
                    <td>UH</td>
                    <td>UTS</td>
                    <td>UAS</td>
                    <td>NA</td>
                    
                    <td>ACTION</td>
                </tr>
                @foreach($nilai as $score)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $score->mengajar->guru->nama_guru}}</td>
                    <td>{{ $score->siswa->nama_siswa}}</td>
                    <td>{{ $score->uh}}</td>
                    <td>{{ $score->uts}}</td>
                    <td>{{ $score->uas}}</td>
                    <td>{{ $score->na}}</td>
                    
                    <td>
                        <a href="/nilai/edit/{{ $score->id}}" class="button-warning">EDIT</a>
                        <a href="/nilai/destroy/{{$score->id}}" onclick="return confirm('Yakin Hapus?')" class="button-danger">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </table>
    </b>
</center>
@endsection