@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="col-lg-10 col-lg-push-1">

                        {!! Form::model($file, ['route' => ['files.update', $file['id']],
                                        'method' => 'put',
                                        'class'=>'form-horizontal',
                                        'files' => true]) !!}

                        <fieldset>

                            <legend>Редактиране на запис</legend>

                            @include('errors.validation')

                            <div class="form-group">
                                <label for="title-bg" class="col-lg-2 control-label">Заглавие</label>
                                <div class="col-lg-10">
                                    <input type="text"
                                           id="title-bg"
                                           class="form-control "
                                           name="title"
                                           value="{{ old($file['title'], $file['title'])}}"
                                           placeholder="Въведете име на категорията"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description-bg" class="col-lg-2 control-label">Описание</label>
                                <div class="col-lg-10">
        <textarea id="description-bg"
                  class="form-control"
                  placeholder="Опишете на кратко книгата"
                  name="description" cols="50"
                  rows="10">{{ old( htmlspecialchars($file['description']),htmlspecialchars($file['description']))}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="bs-component">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myModal" class="btn btn-default pull-left" data-toggle="modal">Добави категория</a>
                                    <!-- Modal HTML -->
                                    <div id="myModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        &times;
                                                    </button>
                                                    <h4 class="modal-title">Добави категория</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Със тикче изберете категориите към които спада дадената книга</p>
                                                    <div class="well" style="max-height: 300px;overflow: auto;">
                                                        @foreach ($categories as $category)
                                                            <label>
                                                                {{ Form::checkbox('categories[]', $category->id, in_array($category->id, $file->categories->pluck('category_id')->toArray())) }}
                                                                {{$category->name}}
                                                            </label>
                                                            <br>
                                                        @endforeach
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Готово</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group pull-right">
                                <div id="buttons">
                                    <button type="submit" class="btn btn-primary">Запиши
                                    </button>
                                    <button type="reset" class="btn btn-default"
                                            onClick='confirm("Сигурни ли сте, че искате да откажите новите промени?");'>Откажи
                                    </button>

                                </div>
                            </div>

                        </fieldset>

                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
