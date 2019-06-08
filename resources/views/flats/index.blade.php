@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(Session::has('flash_message'))
                        <p class="alert alert-success text-center">{{ Session::get('flash_message') }}</p>
                    @endif

                    <div class="row">
                        <div class="col-lg-10 col-lg-push-1">

                            {!! Form::model($flat, ['route' => ['flats.update', $flat['id']],
                                            'method' => 'put',
                                            'class'=>'form-horizontal']) !!}

                            <fieldset>

                                <legend><p class="text-center" style="font-size: 20pt;">Събиране на такси</p>
                                </legend>

                                @include('errors.validation')


                                <div class="form-group">
                                    <label for="flat" class="col-md-4 control-label">Апартамент</label>

                                    <div class="col-md-6">
                                        <select id="flat" name="flat">
                                            <option value="">Избери апартамент</option>
                                            @foreach($flats as $flat)
                                                    <option value="{{$flat->id}}">{{$flat->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="amount" class="col-lg-4 control-label">Сума</label>
                                    <div class="col-lg-6">
                                        <input type="number"
                                               id="amount"
                                               class="form-control "
                                               name="amount"
                                               step=".1"
                                               placeholder="Въведете сумата"/>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="pin" class="col-lg-4 control-label">ПИН</label>
                                    <div class="col-lg-6">
                                        <input type="password"
                                               pattern="[0-9]*"
                                               inputmode="numeric"
                                               id="pin"
                                               class="form-control"
                                               name="pin"
                                               placeholder="Въведете ПИН">
                                        <i style="font-size: 8pt;">С поставянет на ПИН се съгласявам да платя таксите за входа доброволно на касиера.</i>

                                    </div>
                                </div>

                                <div class="form-group pull-right">
                                    <div id="buttons">
                                        <button type="submit" class="btn btn-primary">Плати
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
