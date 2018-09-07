@extends('layouts.app')

@section('content')
    <div class="section section-signup"
         style="background-image: url('{{ asset('now-ui-kit-v1.1.0/assets/img/IMG_3427.JPG') }}'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="black">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header text-center" style="height: auto;">
                            <h4 class="title title-up">Cadastro</h4>
                            <div class="social-line">
                                <a href="{{ url('auth/redirect/google') }}" class="btn btn-neutral btn-google btn-icon btn-round">
                                    <i class="fa fa-google"></i>
                                </a>
                                <a href="{{ url('auth/redirect/facebook') }}" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="" class="btn btn-neutral btn-twitter btn-icon btn-round">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                <input id="name" type="text" class="form-control" name="name"
                                       placeholder="Nome Completo"
                                       value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-mail"
                                       value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                <br>
                            @endif

                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                                <input id="password" type="password" class="form-control" placeholder="Senha"
                                       name="password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                                <input id="password-confirm" type="password" class="form-control"
                                       placeholder="Confirme a senha"
                                       name="password_confirmation" required>
                            </div>

                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                            <!-- <div class="checkbox">
                              <input id="checkboxSignup" type="checkbox">
                                  <label for="checkboxSignup">
                                  Unchecked
                                  </label>
                                </div> -->
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-neutral btn-round btn-lg">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col text-center">
                <a href="{{ route('login') }}" class="btn btn-simple btn-round btn-white btn-lg">
                    Já tenho cadastro</a>
            </div>
        </div>
    </div>
@endsection
