@extends('layouts.app')

@section('content')
<h3 class="login-box-msg">datos de Acceso</h3>        
        <form role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="form-group has-feedback">            
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif            
            </div>
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="form-group has-feedback">            
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-success btn-block btn-flat">
                Ingresar al Sistema
              </button>
            </div>            
          </div>
        </form>
      </div><!-- /.login-box-body -->
@endsection
