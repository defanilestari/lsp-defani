@extends('main.layout')
@section('content')

<center>
    <br>
        <h2>TAMBAH DATA MATA PELAJARAN</h2>
        <form method="post" action="/mapel/store">
             @csrf
             <table width="50%">
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel">
                    </td>
                </tr>
                 <tr>
                    <td>
                        <center><button class="button-primary" type="submit">SIMPAN</button></center>
                    </td>
                </tr>
             </table>
        </form>
</center>

@endsection