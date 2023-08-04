@extends('layout.main')
@section('content')

<section id="form" class="form">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9" >
                <div class="text-center my-5" ></div>
    
                <div class="card shadow-lg" style="background: rgba(242, 219, 148, 0.9); border-radius: 20px;">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                            
                            <form action="/register" method="POST" class="needs-validation" novalidate=""
                                autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Name</label>
                                    <input type="hidden" name="role" value="0">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama anda" name="name"
                                        value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email anda" name="email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password anda" name="password"
                                        required>
                                    @error('password')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <!-- <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Confirm Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan kembali password anda" name="password"
                                        required>
                                    @error('password')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div> -->

                                <p class="form-text text-muted mb-3">
                                    By registering you agree with our terms and condition.
                                </p>

                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-form ms-auto">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Sudah punya akun? <a href="/login" class="text-dark">Login</a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>

@endsection