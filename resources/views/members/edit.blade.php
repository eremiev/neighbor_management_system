@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                    <div class="row">
                        <div class="col-lg-10 col-lg-push-1">

                            {!! Form::model($member, ['route' => ['members.update', $member['id']],
                                            'method' => 'put',
                                            'class'=>'form-horizontal']) !!}

                            <fieldset>

                                <legend><p class="text-center" style="font-size: 20pt;">Редактиране на член</p>
                                </legend>

                                @include('errors.validation')

                                <div class="form-group">
                                    <label for="name-bg" class="col-lg-2 control-label">Активен</label>
                                    <div class="col-lg-10">
                                        {{ Form::checkbox('active',1, $member['active']) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name-bg" class="col-lg-2 control-label">Име</label>
                                    <div class="col-lg-10">
                                        <input type="text"
                                               id="name-bg"
                                               class="form-control "
                                               name="name"
                                               value="{{$member['name']}}"
                                               placeholder="Въведете име"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone-bg" class="col-lg-2 control-label">Телефон</label>
                                    <div class="col-lg-10">
                                        <input type="text"
                                               id="phone-bg"
                                               class="form-control "
                                               name="phone"
                                               value="{{$member['phone']}}"
                                               placeholder="Въведете телефон"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Члена плаща за:</label>
                                    <div class="col-lg-10">

                                        @foreach($costs as $cost)
                                            @if($cost->period == 'апартамент')
                                                <label>
                                                    {{$cost->type}} - {{$cost->price}} лв. / {{$cost->period}}
                                                </label>
                                            @else
                                                <label>
                                                    {{ Form::checkbox('costs[]', $cost->id, in_array($cost->id, $oldPermissions)) }}
                                                    {{$cost->type}} - {{$cost->price}} лв. / {{$cost->period}} </label>

                                            @endif
                                            <br>
                                        @endforeach

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
    </div>

@endsection
