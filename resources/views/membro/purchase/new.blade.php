@extends('layouts.app')
@section('title', 'Pedido - Novo')

@section('content')
    <form class="form-horizontal">
        @foreach($products as $product)
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">{{$product->name}}</label>
                <div class="col-sm-1">
                    <p class="form-control-static">R$ {{number_format($product->price,2,',','')}}</p>
                </div>

                <div class="col-sm-2">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Qtd">
                </div>
            </div>
        <hr>
        @endforeach
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Estou ciente de que o valor pode sofrer alterações
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-warning">Salvar</button>
            </div>
        </div>
    </form>
@stop