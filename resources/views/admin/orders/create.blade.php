@extends('app')

@section('content')

<div class="col-md-12">
    <h3>Novo Pedido</h3>

    <br>

    @include('partials.form_errors', ['listErrors' => false])
    @include('flash::message')

    <div class="panel panel-default">
        {!! Form::open(['route' => 'admin.orders.store']) !!}
            <div class="panel-body">
                @include('admin.orders._form')
            </div>

            <div class="panel-footer">
                {!! Form::submit('Criar Pedido', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.orders.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
