@extends('layouts.app')

@section('content')
    <div class="section section-signup"
         style="background-image: url('{{ asset('now-ui-kit-v1.1.0/assets/img/bg11.jpg') }}'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="black">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header text-center">
                            <h4 class="title title-up">Cadastro</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-round">
                                    <i class="fa fa-google-plus"></i>
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
                            <hr>

                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_calendar-60"></i>
                                        </span>
                                <input id="birth_date" type="text"
                                       class="form-control"
                                       ui-mask="99/99/9999"
                                       ng-model="birth_dt"
                                       ng-init="birth_dt='{{ old('birth_date','') }}'"
                                       name="birth_date"
                                       value="{{ old('birth_date') }}"
                                       required>

                            </div>
                            @if ($errors->has('birth_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                </span>
                                <br>
                            @endif

                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons"></i>
                                        </span>
                                <input id="cellphone"
                                       type="text"
                                       ui-mask="(99) 9?9999-9999"
                                       ng-model="cellphone"
                                       ng-init="cellphone='{{ old('cellphone','') }}'"

                                       class="form-control" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                                       name="cellphone" validate="true"
                                       value="{{ old('cellphone') }}"
                                       required>
                            </div>
                            @if ($errors->has('cellphone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cellphone') }}</strong>
                                </span>
                                <br>
                            @endif

                            <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons"></i>
                                        </span>
                                <input id="nick_name"
                                       type="text" placeholder="Como gostaria de ser chamado"
                                       class="form-control"
                                       name="nick_name"
                                       value="{{ old('nick_name') }}">
                            </div>

                            @if ($errors->has('nick_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nick_name') }}</strong>
                                </span>
                        @endif
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
