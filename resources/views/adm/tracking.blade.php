@extends('adm.layouts.adm')
@section('content')
    <!--po@po-include('pagamento.form-search')-->

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Usuário</th>
            <th>Data</th>
            <th>IP</th>
            <th>Navegador</th>
            <th>Ação</th>
            <th>Registro</th>
        </tr>
        </thead>
        <tbody>
        @foreach($results as $log)
            <tr>
                <td>{{$log->causer->name ?? ''}}</td>
                <td>{{$log->created_at->format('d/m/Y H:i')}}</td>
                <td>{{$log->properties['ip'] ?? ''}}</td>
                <td>{{$log->properties['ua'] ?? ''}}</td>
                <td>
                    {{ str_replace('App\\','',$log->subject_type) }} -
                    {{$log->log_name!=='default'?$log->log_name:''}}
                    {{$log->properties['action'] ?? ''}} -
                    @switch($log->description)
                        @case('created')
                        Registro Cadastrado
                        @break
                        @case('updated')
                        Registro Alterado
                        @break
                        @case('deleted')
                        Registro Deletado
                        @break

                        @default
                        {{$log->description ?? ''}}
                    @endswitch
                </td>
                <td>{{$log->subject_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection