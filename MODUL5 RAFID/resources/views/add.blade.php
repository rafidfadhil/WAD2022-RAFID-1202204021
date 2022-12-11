@extends('layouts.layout')

@section('content')
<section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Mobil</h1>
      <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="{{ url('addCar') }}" method="POST" enctype="multipart/form-data">
        @auth
        @csrf
        <input type="text" value="{{ auth()->user()->id }}" style="display: none;" name="id_user">
        <label for="nama">Nama Mobil</label>
        <input type="text" id="nama" name="name" placeholder="Masukkan Nama Mobil">
        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="pemilik" value="{{ auth()->user()->name }}" placeholder="Masukkan Nama Pemilik">
        <label for="merk">Merk</label>
        <input type="text" id="merk" name="brand" placeholder="Masukkan Merk Mobil">
        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="date" id="tanggalbeli" name="purchase_date">
        <label for="desc">Deskripsi</label>
        <textarea id="desc" name="description" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="image" style="height: 40px;">
        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
        @endauth
      </form>
    </div>
  </section>
@endsection