@extends('tampilan_user.index_user')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{route('user')}}"><img src="{{url('regent_user/img/Rlogo.png')}}" alt="" width="250px" height="80px"></a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="name" type="text" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password-confirm" type="password" placeholder="Konfirmasi Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                </div>
                <div class="row">
 
                    <!-- /.col -->
                    <div class="col-12">
                
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                  </div>
                    </form>
                    <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-outline-primary">
                          <i class="fab fa-facebook mr-2"></i>
                          Sign up using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-outline-danger">
                          <i class="fab fa-google mr-2"></i>
                          Sign up using Google
                        </a>
                      </div>
                
                      <a href="{{ route('login')}}" class="text-center">Masuk dengan akun yang sudah ada</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
