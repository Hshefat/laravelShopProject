<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin  Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="center">
 
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('login') }}"> --}}
                        {{-- @csrf --}}

                        <div class="panel-body">
                      {{Form::open(['url'=>'/login','method'=>'POST'])}}


                        {{-- Admin login mail Pass --}}
                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Admin login mail pass   --}}




                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> --}}




                        <div class="form-group ">
                          {{Form::email('email',null, ['class'=>'form-control','placeholder'=>'Enter your Email Address'])}}
                        </div>
                        <div class="form-group">
                          {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Enter your Password' ])}}
                        </div>
                        <div class=" checkbox">
                         <label> {{Form::checkbox('name', 'rememberMe ')}} Remember Me </label>
                        </div>
                        <br>
                        <div class="form-group">
                          {{Form::submit('Login',['class'=>'btn btn-success','name'=>'btn'])}}
                        </div>
                       

                        {!! Form::close() !!}
                        </div>
                    {{-- </form> --}} 
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('admin/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/')}}/js/sb-admin-2.min.js"></script>

</body>

</html>
