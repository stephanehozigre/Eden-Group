@extends('back.layouts.layout')
@section('style')
<style type="text/css">
    body{
        background-color: #3c763d;
    }
    .ls.ms{
        background-color: #3c763d;
    }
</style>
@endsection
@section('content')
    <!-- template sections -->
    <section class="ls ms section_padding_top_100 section_padding_bottom_100 section_full_height">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <div class="with_background with_padding">
                        <h4 class="text-center">
                            ESPACE ADMINISTRATEUR
                        </h4>
                        <hr class="bottommargin_30">
                        <div class="wrap-forms">
                            <form role="form" method="POST" action="{{ url('/admin/login') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email">Email</label>
                                            <i class="grey fa fa-envelope-o"></i>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="login-password">Password</label>
                                            <i class="grey fa fa-pencil-square-o"></i>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="theme_button block_button color1">Connexion</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
@endsection
