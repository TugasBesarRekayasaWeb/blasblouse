@extends('layout/template')

@section('title', 'Edit')

@section('container')

<div class="container">
  <div class="row">
  <div class="col-10">

<h1 align="center">Form Ubah Data Barang</h1>


<form method="post" action="/barang/{{$barang->id}}">
@method('patch')
<table>
<tr>




@csrf

<table align="center">



<tr>
    <td>Nama Barang</td>
    <td>
    <input type="text" name="Nama_barang" required="" placeholder="Masukkan Nama" value="{{$barang->Nama_barang}}">
    </td>
</tr>

<tr>
    <td>Picture</td>
    <td>
    <input type="file" name="Picture" required="" placeholder="Masukkan file" value="{{$barang->Picture}}"></td>
</tr>

<tr>
    <td>Merk Barang</td>
    <td>
    <input type="text" name="Merk_barang" required="" placeholder="Masukkan Merk" value="{{$barang->Merk_barang}}">
    </td>
</tr>

<tr>
    <td>Harga Barang</td>
    <td>
    <input type="text" name="Harga_barang" required="" placeholder="Masukkan Harga" value="{{$barang->Harga_barang}}">
    </td>
</tr>

<tr>
<td>
<button type="submit">Ubah Data</button>
</td>
</tr>


</table>

</form>

</div>
</div>
</div>
@endsection