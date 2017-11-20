@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="required form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="required form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="required form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="required form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme a senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr>

                        <div class="required form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Data de nascimento</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="text" 
                                       mask='39/19/9999' 
                                       ng-model="birth_dt"  
                                       ng-init="birth_dt='{{ old('birth_date','') }}'"
                                       restrict="reject" 
                                       class="form-control" 
                                       name="birth_date" 
                                       value="{{ old('birth_date') }}" 
                                       required autofocus>

                                @if ($errors->has('birth_date'))
                                <span class="help-block"> 
                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="required form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="cellphone" 
                                       type="text" 
                                       mask="(99) 9?9999-9999"
                                       ng-model="cellphone"  
                                       ng-init="cellphone='{{ old('cellphone','') }}'"
                                       restrict="reject" 
                                       class="form-control" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                                       name="cellphone" validate="true"
                                       value="{{ old('cellphone') }}" 
                                       required autofocus>

                                @if ($errors->has('cellphone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cellphone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('nick_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apelido</label>

                            <div class="col-md-6">
                                <input id="nick_name" 
                                       type="text" placeholder="Como gostaria de ser chamado"
                                       class="form-control" 
                                       name="nick_name" 
                                       value="{{ old('nick_name') }}" 
                                       autofocus>

                                @if ($errors->has('nick_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nick_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
