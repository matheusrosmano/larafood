@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>
        Planos <a href="{{ route('plans.create') }}">Criar</a>
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Filtros
        </div>
       <div class="card-body">
           <table class="table table-condensed">
               <thead>
                   <tr>
                       <th>Nome</th>
                       <th>Preço</th>
                       <th>Ações</th>
                   </tr>
               </thead>
               <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                                {{ $plan->price }}
                            </td>
                            <td>
                                <a href="" class="btn btn-warning">
                                    Ação
                                </a>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
           </table>
       </div>
       <div class="card-footer">
           {{ $plans->links() }}
       </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
