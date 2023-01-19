@extends('main.layout')
@section('content')

<center>
    <br>
    <h2>EDIT DATA NILAI</h2>
    <form method="POST" action="/nilai/update/{{ $nilai->id}}">
     @csrf
     <table width="50%">
        <tr>
            <td class="bar">GURU</td>
                    <td>
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $score)
                        <option value="{{ $score->id}}" @if ( $score->id == $nilai->mengajar_id) selected @endif>{{ $score->guru->nama_guru}} </option>
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
                        <option value="{{ $score->id}}" @if ($score->id == $nilai->siswa_id) selected @endif>{{ $score->nama_siswa}}</option>
                        @endforeach
                    </select>
                    </td>
        </tr>
            <tr>
                <td>UH</td>
                <td><input type="number" name="uh" value="{{ $nilai->uh}}"></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td><input type="number" name="uts" value="{{ $nilai->uts}}"></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td><input type="number" name="uas" value="{{ $nilai->uas}}"></td>
            </tr>
        <tr>
            <td colspan="2">
            <center><button class="button-primary" type="submit">UBAH</button></center>
            </td>
        </tr>
     </table>
    </form>
</center>
@endsection