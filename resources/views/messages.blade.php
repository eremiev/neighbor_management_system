@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">
                        <p class="text-center" style="font-size: 20pt;">Коментари</p>
                    </div>
                    <div class="row">

                        {!! Form::open(['route' => ['comments.store'],
                                    'method' => 'POST',
                                    'class'=>'form-horizontal col-md-8 col-md-offset-2']) !!}
                        <fieldset>

                            <legend>Добави коментар</legend>

                            @include('errors.validation')

                            <div class="form-group">
                                <label for="message" class="col-lg-2 control-label">Коментар</label>
                                <div class="col-lg-10">
                                    <textarea id="message" class="form-control"
                                              placeholder="Въведете коментар" name="message" cols="50"
                                              rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group pull-right">
                                <div id="buttons">
                                    <button type="submit" class="btn btn-primary">Изпрати
                                    </button>
                                </div>
                            </div>

                        </fieldset>

                        {!! Form::close() !!}

                    </div>

                    <hr>

                    @foreach($comments as $comment)
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <div>От: <i><b>{{ $comment->user->name }}</b></i> <br>
                                    Дата:
                                    <b><i>{{ Carbon\Carbon::parse($comment->created_at)->format('d-m-Y H:i:s') }}</i></b>
                                </div>
                                <div class="jumbotron">
                                    <p><i>{{ $comment->message }}</i></p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="row">
                        <div class="text-center col-lg-offset-3 col-lg-6">
                            {{ $comments->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
