@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <iframe src="{{$link}}" frameborder="0" style="width:100%; height:700px;"></iframe>

                </div>
            </div>
        </div>
    </div>
@endsection
