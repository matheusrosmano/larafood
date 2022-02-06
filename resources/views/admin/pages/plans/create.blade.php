@extends('adminlte::page')

@section('title', 'Cadastrar planos')

@section('content_header')
    <h1>
        Criar Planos
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" class="form">
                @csrf

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome:">
                </div>

                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Preço:">
                </div>

                <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Descrição:">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop
