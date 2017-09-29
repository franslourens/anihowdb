@extends('layouts.perfectum_login')

@section('content')
<div class="row">
    <div class="login-box">
        <div class="icons">
            <a href="index.html"><i class="fa fa-home"></i></a>
            <a href="login.html#"><i class="fa fa-cog"></i></a>
        </div>
        <h2>Login to your account</h2>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <fieldset>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="controls">
                    <div class="input-group col-sm-11">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="username" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="type username" required autofocus>
                    </div>

                  </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="controls">
                    <div class="input-group col-sm-11">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="type password" required>
                    </div>
                  </div>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif                      
                    
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                
                <label class="remember" for="remember"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember">&nbsp; Remember me</label>

                <div class="button-login">
                    <button type="submit" class="btn btn-primary" style="margin-right:12px;"><i class="icon-off icon-white"></i> Login</button>
                </div>
                <div class="clearfix"></div>
        </form>
        <hr>
        <h3>Forgot Password?</h3>
        <p>
            No problem, <a href="{{ route('password.request') }}">click here</a> to get a new password.
        </p>
        <p>Server on <?php echo $_SERVER["SERVER_ADDR"]?></p>
    </div><!--/col-->
</div><!--/fluid-row-->
@endsection
