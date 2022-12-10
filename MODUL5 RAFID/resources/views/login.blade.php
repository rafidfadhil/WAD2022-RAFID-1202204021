@include('layouts.layout')
    <section id="login">
        <div class="container-fluid" style="font-family: Raleway;">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left">
                    <img src="assets/img/hrv.png" style="object-fit:fill; width:100%; height:100%;" alt="foto">
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
                                    placeholder="masukan email"
                                    value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" />
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label
                                " for="password">Password</label>
                                <input type="password" id="password" class="form-control form-control-lg" name="password"
                                    placeholder="masukan password"
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
                            <div class="text-center text-lg-start mt-2 pt-2">
                                <button type="submit" name="login" class="d-block btn btn-primary mb-3"
                                        style="width: 129px; height: 51px; left: 838px; top: 645px; background: #3593E9; border-radius: 5px;">Login</button>
                                <p class="mt-2 pt-1 mb-0">Don't have Account? <a href="{{'register'}}"
                                        class="link-primary">Register</a></p>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
