@extends('layouts.layout')

@section('content')
<section id="profile">
    <div class="container d-flex flex-column pt-5">
      <form action="{{ '/profile/'.$user->id  }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="profile">
          <span class="d-flex mx-auto">
            <h1>Profile</h1>
          </span>
          <div class="d-flex align-items-center">
            <label for="dummy1">Email</label>
            <h2>{{ $user->email }}</h2>
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nama">Nama</label>
            <input id="nama" name="name" value="{{ $user->name }}">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nohp">Nomor Handphone</label>
            <input id="nohp" name="no_hp" value="{{ $user->no_hp }}">
          </div>
          <hr>
          <div class="d-flex align-items-center">
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="password">Konfirmasi Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Konfirmasi Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4 justify-content-center">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
        <div class="d-flex align-items-center gap-5 mt-5">
          <img src="../assets/img/logo-ead.png" alt="logoead" style="width:100px;">
          <p style="margin-top: 20px; font-size:14px;">Nama_NIM</p>
        </div>
    </div>
</section>
@endsection