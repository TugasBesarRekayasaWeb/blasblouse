@extends('layout/template')

@section('title', 'Create')

@section('container')

<div class="container">
  <div class="row">
  <div class="col-10">


<h1 align="center">Form Tambah Data Barang</h1>


<form method="post" action="/barang">
<table>
<tr>




@csrf

<table align="center">



<tr>
    <td>Nama Barang</td>
    <td>
    <input type="text" name="Nama_barang" required="" placeholder="Masukkan Nama" value="{{old('Nama_barang')}}">
    </td>
</tr>

<tr>
    <td>Tambah file</td>
    <td>
    <input type="file" name="Picture" required="" placeholder="Masukkan file" value="{{old('Picture')}}" >
    </td>
</tr>

<tr>
    <td>Merk Barang</td>
    <td>
    <input type="text" name="Merk_barang" required="" placeholder="Masukkan Merk" value="{{old('Merk_barang')}}">
    </td>
</tr>

<tr>
    <td>Harga Barang</td>
    <td>
    <input type="text" name="Harga_barang" required="" placeholder="Masukkan Harga" value="{{old('Harga_barang')}}">
    </td>
</tr>

<tr>
<td>
<button type="submit">Simpan Data</button>
</td>
</tr>


</table>






</form>






</div>
</div>
</div>
@endsection
