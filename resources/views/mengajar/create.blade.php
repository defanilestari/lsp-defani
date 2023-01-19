@extends('main.layout')
@section('content')

<center>
    <br>
        <h2>TAMBAH MENGAJAR</h2>
        <form method="post" action="/mengajar/store">
             @csrf
             <table width="50%">
                <tr>
                    <td class="bar">GURU</td>
                    <td>
                        <select name="guru_id">
                            <option></option>
                            @foreach ($guru as $g)
                            <option value="{{ $g->id}}">{{ $g->nama_guru}}</option>
                            @endforeach
                        </select>
                        </td>
                </tr>
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td>
                    <select name="mapel_id">
                        <option></option>
                        @foreach ($mapel as $m)
                        <option value="{{ $m->id}}">{{ $m->nama_mapel}}</option>
                        @endforeach
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>
                        <select name="kelas_id">
                            <option></option>
                            @foreach ($kelas as $k)
                            <option value="{{ $k->id}}">{{ $k->nama_kelas}}</option>
                            @endforeach
                        </select>
                        </td>   
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">SIMPAN</button></center>
                    </td>
                </tr>
             </table>
        </form>
</center>

@endsection