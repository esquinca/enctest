@extends('layouts.auth')

@section('content')
<body class="fix-header">
  <!-- Preloader -->
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="login-register">
    <div class="login-box">
      <div class="white-box">
        <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="col-xs-12 text-center">
              <div class="user-thumb text-center"> <img alt="thumbnail" class="img-circle" width="100" src="../plugins/images/users/genu.jpg">
                <h3>Login</h3>
              </div>
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-xs-12">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email Address" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-xs-12">
              <input id="password" class="form-control" name="password" type="password" placeholder="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group text-center">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </section>
</div>
@endsection
