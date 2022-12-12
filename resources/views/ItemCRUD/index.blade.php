@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('item.create') }}" class="btn btn-success"> Criar Novo Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Título</th>
            <th>Descrição</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($items as $key => $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="{{ route('item.show', $item->id) }}" class="btn btn-info">Visualizar</a>
                    <a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary">Editar</a>
                    {!! Form::open(
                            [
                                'method' => 'DELETE', 
                                'route' => [
                                    'item.destroy', 
                                    $item->id, 
                                    'style' => 'display:inline'
                                ]
                            ]
                        ) 
                    !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {!! $items->render() !!}
@endsection