@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ URL::route('categories.create') }}" class="btn btn-default">Добави</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="list-group col-lg-offset-2 col-lg-8">
                            <div class="bs-component">
                                <ul class="list-group">
                                    @foreach($categories as $category)
                                        <li class="list-group-item text-center"
                                            href="{{ route('categories.edit',[$category->id],false) }}">
                                            {{$category->name}}
                                            <div class="pull-right col-lg-offset-1">

                                                {!! Form::open([
                                                'route' => ['categories.destroy', $category->id],
                                                'method' => 'delete',
                                                'class' => 'col-lg-offset-2  col-lg-1']) !!}
                                                {!! Form::submit('X',
                                                [ 'class' => 'btn btn-xs btn-danger pull-right',
                                                'onclick' => "return confirm('Сигурни ли сте?');" ]) !!}
                                                {!! Form::close() !!}
                                            </div>

                                            <div class="pull-right">
                                                <a href="{{ URL::route('categories.edit',[$category->id],false) }}">Edit
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-lg-offset-3 col-lg-6">
                            {{ $categories->render() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
