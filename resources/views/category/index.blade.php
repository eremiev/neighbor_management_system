@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">
                        <p class="text-center" style="font-size: 20pt;">Категории</p>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <a href="{{ URL::route('categories.create') }}" class="btn btn-default">Добави нова
                                категория</a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="list-group col-lg-offset-2 col-lg-8">
                            <div class="bs-component">
                                <ul class="list-group">
                                    @foreach($categories as $category)
                                        <li class="row  text-center list-group-item ">

                                            <div class=" col-lg-4">
                                                {{$category->name}}
                                                {{-- <a href="{{ $book->path }}" target="_blank">  {{$book->title}}</a>--}}
                                            </div>
                                            <div class=" col-lg-5 col-lg-offset-2">

                                                {!! Form::open([
                                                    'route' => ['categories.destroy', $category->id],
                                                    'method' => 'delete',
                                                    'class' => 'pull-right']) !!}
                                                {!! Form::submit('Изтрий',
                                                [ 'class' => 'btn btn-xs btn-danger pull-right',
                                                'onclick' => "return confirm('Сигурни ли сте?');" ]) !!}
                                                {!! Form::close() !!}

                                                <div class="pull-left">
                                                    <a href="{{ URL::route('categories.edit',[$category->id],false) }}">Промени
                                                    </a>
                                                </div>
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
