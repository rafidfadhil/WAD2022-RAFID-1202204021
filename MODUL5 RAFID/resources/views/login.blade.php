{{-- @include('layouts.layout') --}}
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
    <section id="login">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left" style="background-image: url(../assets/img/test.png); background-size: cover;">
                </div>
                <div class="col-md-6">
                    <div class="form-login m-auto ps-5">
                        <h2 class="fw-bold mb-4">Login</h2>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" id="email" class="form-control form-control-lg" name="email"
                                    placeholder="masukan email" style="width: 502px; height: 40px; left: 838px; top: 438px; background: #FFFFFF; border: 1px solid #000000; border-radius: 10px;"
                                    value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" />
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label
                                " for="password">Password</label>
                                <input type="password" id="password" class="form-control form-control-lg" name="password"
                                    placeholder="masukan password" style="width: 502px; height: 40px; left: 838px; top: 438px; background: #FFFFFF; border: 1px solid #000000; border-radius: 10px;"
                                    value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" />
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="check"
                                    name="check" />
                                <label class="form-check-label" for="check">
                                    Remember me
                                </label>
                            </div>

                    </div>
                    <div class="text-center text-lg-start mt-4 " style="margin-left: 50px;">
                        <button type="submit" class="btn btn-primary btn-lg" name="login"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-3 mb-0">Anda belum punya akun? <a href="{{'register'}}"
                                class="link-pemary">Daftar</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    
</body>
</html>
