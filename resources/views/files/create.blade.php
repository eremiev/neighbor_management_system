@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="row">
                        <div class="col-lg-10 col-lg-push-1">

                            {!! Form::open(['route' => ['files.store'],
                                            'method' => 'POST',
                                            'class'=>'form-horizontal',
                                            'files' => true]) !!}
                            <fieldset>

                                <legend><p class="text-center" style="font-size: 20pt;">Добавяне на нов файл</p>
                                </legend>

                                @include('errors.validation')

                                <div class="form-group">
                                    <div class="bs-component">
                                        <!-- Button HTML (to Trigger Modal) -->
                                        <a href="#myModal" class="btn btn-default pull-right" data-toggle="modal">Добави
                                            категория към файла</a>
                                        <!-- Modal HTML -->
                                        <div id="myModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content text-center">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">
                                                            &times;
                                                        </button>
                                                        <h4 class="modal-title">Добави категория</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Със тикче изберете категориите към които спада дадения
                                                            файл</p>
                                                        <div class="well" style="max-height: 300px;overflow: auto;">
                                                            @foreach ($categories as $category)
                                                                <label>
                                                                    {{ Form::checkbox('categories[]', $category->id) }}
                                                                    {{ $category->name}}

                                                                </label>
                                                                <br>
                                                            @endforeach

                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Готово
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title-bg" class="col-lg-3 control-label">Име на файла</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="title-bg" class="form-control " name="title"
                                               placeholder="Въведете името на файла" value="{{ old('title') }}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description-bg" class="col-lg-3 control-label">Описание</label>
                                    <div class="col-lg-9">
                                        <textarea id="description-bg" class="form-control"
                                                  placeholder="Опишете на кратко файла" name="description" cols="50"
                                                  rows="10">{{ old('description')}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="file-upload" class="col-lg-3 control-label">Файл</label>
                                    <div class="col-lg-9">
                                        <label for="file-upload" class="btn btn-default">
                                            <i class="fa fa-cloud-upload"></i> Прикачи
                                            <input id="file-upload" type="file" name="file"/>
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group pull-right">
                                    <div id="buttons">
                                        <button type="submit" class="btn btn-primary">Запиши
                                        </button>
                                        <button type="reset" class="btn btn-default"
                                                onClick='confirm("Сигурни ли сте, че искате да откажите новите промени?");'>
                                            Откажи
                                        </button>

                                    </div>
                                </div>


                            </fieldset>

                            {!! Form::close() !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
