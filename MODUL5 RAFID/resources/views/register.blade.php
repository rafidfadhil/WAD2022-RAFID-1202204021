@include('layouts.layout')

<section id="register">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 min-vh-100 left">
                <img src="/assets/img/hrv.png" style="object-fit:fill; width:100%; height:100%;" alt="foto">
            </div>
            <div class="col-md-6">
                <div class="form-login m-auto ps-5">
                    <h2 class="fw-bold mb-4">Register</h2>
                    <form action="{{ route('register.post') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-3 position-relative">
                            <label class="form-label " for="email">Email address</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                placeholder="masukan email" required />

                        </div>
                        <!-- nama input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="name" id="name" class="form-control form-control-lg" name="name"
                                placeholder="masukan name" required />
                        </div>
                        <!-- no hp input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="no_hp">No Hp</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="no_hp" id="no_hp" class="form-control form-control-lg" name="no_hp"
                                placeholder="masukan No Hp" required />
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                placeholder="masukan password" required />
                        </div>
                        <div class="form-outline mb-4">
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="password2">konfirmasi Password</label>
                                <span class="required" style="top: 0px; left: 41px;">*</span>
                                <input type="password" id="password2" class="form-control form-control-lg"
                                    name="password2" placeholder="masukan ulang password" required />
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" name="daftar" class="btn btn-success btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">anda sudah punya akun? <a
                                        href="{{'login'}}" class="link-danger">Login</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
