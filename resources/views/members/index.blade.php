@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <p class="text-center" style="font-size: 20pt;">Членове</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <a href="{{ URL::route('members.create') }}" class="btn btn-default">Добави нов член</a>
                        </div>
                    </div>


                    <div class="row" style="margin-top: 20px;">
                        <div class="list-group col-lg-offset-2 col-lg-8">
                            <div class="bs-component">
                                <table class="table table-striped table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th>Ап.</th>
                                        <th>Име</th>
                                        <th>Телефон</th>
                                        <th>Статус</th>
                                        <th>Редактирай</th>
                                        <th>Изтрий</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($members as $member)
                                        @if($member->ceiling_id)
                                            <tr>
                                                <td colspan="5" class="text-center">Таван</td>
                                            </tr>
                                        @endif
                                        <tr @if($member->ceiling_id) class="info" @endif>
                                            <td>{{ $member->flat_id }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->phone }}</td>
                                            <td>@if($member->active)Активен@elseНеактивен@endif</td>
                                            <td><a href="{{ URL::route('members.edit',[$member->id],false) }}">Редактирай</a></td>
                                            <td>
                                                {!! Form::open([
                                                   'route' => ['members.destroy', $member->id],
                                                   'method' => 'delete',
                                                   'class' => 'pull-right']) !!}
                                                {!! Form::submit('Изтрий',
                                                [ 'class' => 'btn btn-xs btn-danger pull-right',
                                                'onclick' => "return confirm('Сигурни ли сте?');" ]) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt;
                                    &gt;
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
