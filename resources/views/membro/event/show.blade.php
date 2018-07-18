@extends('adm.layouts.adm')
@section('content')
    <div class="page-header">
        <h1>Amigo Oculto em Alagoa  - Participantes</h1>
    </div>    
    <table class="table table-bordered">   
        <thead>
            <tr>
                <th>Participante</th>
                <th>Sugestões</th>
            </tr>
        </thead>
        @foreach($evento as $customer)
        <tr>
            <td>{{ $customer['name'] }}</td>            
            <td>
                @foreach($customer['dicas'] as $coisa)
                <label class="badge">{{ $coisa->gkift_tip }}</label>
                @endforeach 
            </td>
        </tr>
        @endforeach        
    </table>
@stop