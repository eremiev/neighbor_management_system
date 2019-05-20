@extends('layouts.app')

@section('content')
    <div class="col-lg-10 col-lg-push-1">

        {!! Form::model($category, ['route' => ['categories.update', $category['id']],
                        'method' => 'put',
                        'class'=>'form-horizontal']) !!}

        <fieldset>

            <legend>Редактиране на запис</legend>

            @include('errors.validation')

            <div class="form-group">
                <label for="name-bg" class="col-lg-2 control-label">Име</label>
                <div class="col-lg-10">
                    <input type="text"
                           id="name-bg"
                           class="form-control "
                           name="name"
                           value="{{$category['name']}}"
                           placeholder="Въведете име на категорията"/>
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

@endsection
