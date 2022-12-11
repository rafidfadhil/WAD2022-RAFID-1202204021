@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-center align-items-center">
            <div style="">
                <h1 style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 56px; line-height: 66px; letter-spacing: 1.2px; text-transform: capitalize; color: #212121;">Selamat Datang di <br> Rafid Show Room</h1>
                <p class="mt-5" style="font-family: 'Raleway'; font-style: normal; font-weight: 400; font-size: 20px; line-height: 20px; letter-spacing: 0.2px; color: #757575;">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis<br>cursus vestibulum, facilisi ac, sed faucibus.</p>
                <div class="d-flex  justify-content-lg-start mt-2">
            </div>
                <div class="d-flex align-items-center gap-5" style="margin-top:100px;">
                    <img src="assets/img/logo-ead.png" alt="logoead" style="width: 105.43px; height: 30px; left: 120px; top: 729px;">
                    <p style="margin-top: 20px; font-family: 'Raleway'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 14px; text-align: center; letter-spacing: 0.46px; color: #757575;">RAFID FADHIL_1202204021</p>
                </div>
            </div>
            {{-- display image from assets/img --}}
            <img src="assets/img/image.png" alt="" style="justify-content: center; width: 590px; height: 495px; background: url(.jpg), #EFF3FD; border-radius: 20px;">
        </div>
    </div>
</section>
<!-- Jumbotron End -->
@endsection