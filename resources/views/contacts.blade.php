@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="page-header">
                                <p class="text-center" style="font-size: 20pt;">Контакти</p>
                            </div>

                            <div class="bs-component">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Ап.</th>
                                        <th>Име</th>
                                        <th>Телефон</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($flats as $flat)
                                        @foreach($flat->people as $person)
                                            <tr @if($person->ceiling_id) class="info"@endif>
                                                <td>{{ $flat->id }}</td>
                                                <td>{{ $person->name }}</td>
                                                <td>{{ $person->phone }}</td>
                                            </tr>
                                        @endforeach
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
