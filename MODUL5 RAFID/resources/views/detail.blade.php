@extends('layouts.layout')

@section('content')
<section id='detail'>
    <div class="container">
      @auth
                <h1 class='tambahh1'>{{ $showroom->name }}</h1>
                <p class='tambahp'>Detail Mobil {{ $showroom->name }}</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='{{ url('storage/'.$showroom->image) }}' alt='foto_mobil'>
                  <form action='{{ url('/detail/'.$showroom->id) }}' method="POST" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='name' name='name' value='{{ $showroom->name }}'>
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='{{ auth()->user()->name }}'>
                    <label for='merk'>Merk</label>
                    <input type='text' id='merk' name='brand' value='{{ $showroom->brand }}'>
                    <label for='tanggalbeli'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' name='purchase_date' value='{{ $showroom->purchase_date }}'>
                    <label for='desc'>Deskripsi</label>
                    <textarea id='desc' name='description' style='height:200px; width: 600px; border-radius: 8px;'> {{ $showroom->description }} </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' name='gambar' style='height: 40px;'>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' {{ (($showroom->status == 'Lunas') ? 'checked="checked"' : "")  }} style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' {{ (($showroom->status == 'Belum Lunas') ? 'checked="checked"' : "")  }} style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <button type="submit" class='btn btn-primary' style='margin-top: 40px;'>Edit</button>
                  </form>
                </div>
        @endauth
    </div>
  </section>
@endsection