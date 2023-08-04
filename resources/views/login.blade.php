@extends('layout.main')
@section('content')

<section id="form" class="form">
    <div class="container">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9" >
                <div class="text-center my-5" >
                    
                </div>

                <div class="card shadow-lg" style="background: rgba(242, 219, 148, 0.9); border-radius: 20px;">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                        <form action="/login" method="POST" class="needs-validation" novalidate=""
                            autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Email</label>
                                <input id="email" type="email" placeholder="Masukkan email anda"
                                    class="form-control @error('email') is-invalid
                                @enderror"
                                    name="email" value="" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                </div>
                                <input id="password" type="password" placeholder="Masukkan password anda" class="form-control" name="password" required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label">Ingat saya</label>
                                </div>
                                <button type="submit" class="btn btn-form ms-auto">
                                    Login
                                </button>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Belum punya akun? <a href="/register" class="text-dark">Daftar.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection