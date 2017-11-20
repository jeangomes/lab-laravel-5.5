@extends('layouts.app')
@section('title', 'Pedido - Novo')

@section('content')
    
    {!! Form::open(['route' => 'pedido.store','class'=>'form-horizontal']) !!}    
        @foreach($products as $product)
            <div class="form-group">
                <label for="{{'qtd_' . $product->id}}" class="col-sm-4 control-label">{{$product->name}}</label>
                <div class="col-sm-1">
                    <p class="form-control-static">R$ {{number_format($product->price,2,',','')}}</p>
                </div>

                <div class="col-sm-2">
                    {!!Form::number('qtd[' . $product->id . ']', null,
                    ['class'=>'form-control',
                    'ng-model'=>'qtd_' . $product->id,
                    'placeholder'=>'Qtd','min'=>1,'max'=>10,
                    'id'=>'qtd_' . $product->id])!!}
                </div>
                <div class="col-sm-1">
                    <p class="form-control-static ng-cloak">
                        <% {{'qtd_'.$product->id}}*{{$product->price}} | currency %>
                    </p>
                </div>
            </div>
        <hr>
        @endforeach
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('ciente', 1,false,['required'=>true])!!} 
                        Estou ciente de que o valor pode sofrer alterações 
                        devido ao peso final de alguns produtos, 
                        e que o pagamento será no ato da entrega.
                    </label>                    
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-warning">Salvar</button>
            </div>
        </div>
    {!! Form::close() !!}
@stop