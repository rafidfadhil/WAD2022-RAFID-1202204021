<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
    <section id="register">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left" style="background-image: url(../assets/img/test.png); background-size: cover;">
                </div>
                <div class="col-md-6" >
                    <div class="form-login m-auto ps-5">
                        <h2 class="fw-bold mb-4 ">Register</h2>
                        <form action="{{ url('/register')}}" method="POST" enctype="multipart/form-data">
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
                                    <button type="submit" name="daftar" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">anda sudah punya akun? <a
                                            href="{{ 'login' }}" class="link-danger">Login</a></p>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
