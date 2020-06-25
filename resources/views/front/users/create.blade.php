@extends ('front.layout.layout_default')
@section('title')
Inscription
@endsection

@section('content')
<div class="container">
    <div class="page-content" style="margin-top:150px">
        @include('front.users.sidebar')
        <div class="col-md-7 pull-right tab-content">
            <div class="container" style="width: 650px;padding: 0px;">
                @include('front.pages.alerte')
            </div>
            <div class="container" style="width: 650px;border: 3px solid #0f263a;padding: 15px;">
           {!! Form::open(['route' =>'front-users.store']) !!}
            <div class="form-group {!! $errors->has('nom')?'has-error':'' !!}">
                <label for="nom">Nom:</label>
                {!! Form::text('nom',null,['class'=>'form-control','id'=>'nom']) !!}
                 {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {!! $errors->has('prenoms')?'has-error':'' !!}">
                <label for="prenoms">Prénoms:</label>
                {!! Form::text('prenoms',null,['class'=>'form-control','id'=>'prenoms']) !!}
                {!! $errors->first('prenoms','<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {!! $errors->has('email')?'has-error':'' !!}">
                <label for="email">Email:</label>
                {!! Form::email('email',null,['class'=>'form-control','id'=>'email']) !!}
                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {!! $errors->has('password')?'has-error':'' !!}">
                <label for="password">Password:</label>
                {!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}
                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmer:</label>
                {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'password_confirmation']) !!}
            </div>
            <div class="form-group {!! $errors->has('tel1')?'has-error':'' !!}">
                <label for="tel1">Contact 1:</label>
                {!! Form::tel('tel1',null,['class'=>'form-control','id'=>'tel1']) !!}
                {!! $errors->first('tel1','<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="tel2">Contact 2:</label>
                {!! Form::tel('tel2',null,['class'=>'form-control','id'=>'tel2']) !!}
            </div>
                <div class="form-group {!! $errors->has('g-recaptcha-response')?'has-error':'' !!}">
                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY')}}"></div>
                    @if($errors->has('g-recaptcha-response'))
                        <span class="invalid-feedback" style="display:block">
                            <strong>{!! $errors->first('g-recaptcha-response') !!}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {!! $errors->has('condition')?'has-error':'' !!}">
                    {!! Form::checkbox('condition') !!}
                    <span>Je certifie avoir plus de 18 ans, j'ai lu et accepté les <a href="#">conditions générales d'utilisation</a></span>
                    {!! $errors->first('condition','<span class="help-block">:message</span>') !!}
                </div>
            <div class="form-group">
                {!! Form::submit('Enregistrer',['class'=>'btn form-control','id'=>'submit','style'=>'font-size: 18px;background-color:#ffcc00;border: none;font-weight: bold;line-height: 38px;text-align: center;color: #000000;']) !!}
            </div>
            <div class="form-group">
                <label for="text" style="color:green">Vous avez dejà un compte?</label>
                <a href="{{ Route('front-users.index')}}">connexion</a>
            </div>
        {!! Form::close() !!}
        </div>
        </div>
</div>
</div>
@endsection
