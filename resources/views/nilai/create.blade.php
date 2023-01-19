@extends('main.layout')
@section('content')

<center>
    <br>
        <h2>TAMBAH NILAI</h2>
        <form method="post" action="/nilai/store">
             @csrf
             <table width="50%">
                <tr>
                    <td class="bar">GURU</td>
                    <td>
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $m)
                        <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} </option>
                        @endforeach
                    </select>
                    </td>
                </tr>
                <tr>
                <td class="bar">NAMA SISWA</td>
                    <td>
                    <select name="siswa_id">
                        <option></option>
                        @foreach ($siswa as $score)
                        <option value="{{ $score->id}}">{{ $score->nama_siswa}}</option>
                        @endforeach
                    </select>
                </td>
                </tr>
                <tr>
                    <td>UH</td>
                    <td><input type="number" name="uh"></td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td><input type="number" name="uts"></td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td><input type="number" name="uas"></td>
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