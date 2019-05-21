@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">
                        <p class="text-center" style="font-size: 20pt;">Архиви</p>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <a href="{{ URL::route('files.create') }}" class="btn btn-default">Добави нов файл</a>
                            <span class="pull-right">
            <a href="#search" class="btn btn-default pull-right" data-toggle="collapse">Подробно търсене</a>
                </span>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-lg-12">
                            <div class="bs-component">
                                <div id="search" class="collapse text-center">
                                    <div class="jumbotron">
                                        @if(! $categories->isEmpty())
                                            <label>Със тикче изберете категориите които искате да включите в
                                                търсенето.</label>
                                            <ul class="list-group" style="height: 100px; overflow: auto">
                                                @foreach ($categories as $category)
                                                    <li class="list-group-item"
                                                        style="padding:0px; margin-bottom: 5px;">
                                                        <label style="display: block; margin:0px;">
                                                            <input type="checkbox" id="check-{{$category->id}}"
                                                                   name="categories[]" value="{{$category->id}}"/>
                                                            {{$category->name}}
                                                        </label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>Няма добавени категории!</p>
                                        @endif


                                        <div class="form-group">
                                            <label for="search_by_title">Търсене по заглавие:</label>
                                            <input type="text" class="form-control" id="search_by_title" name="title">
                                        </div>

                                    </div>
                                    <button id="search-btn" onclick="search()" class="btn btn-default">Търси</button>

                                </div>
                                <br/>
                                <br/>
                                {{--<p>Резултати:</p>--}}
                                <p id="list-tags">Филтър по категории: <b><span
                                                id="selected_tags">{{$selectedTags}}</span></b></p>
                                <p id="list-title">Филтър по заглавие: <b><span id="title"></span></b></p>
                            </div>
                        </div>

                    </div>

                    <hr/>

                    <div class="row">
                        <div class="list-group col-lg-offset-2 col-lg-8">
                            <div class="bs-component">
                                <ul class="list-group">
                                    @if(!$files->isEmpty())
                                        @foreach($files as $file)
                                            <li class="row  text-center list-group-item ">
                                                <div class=" col-lg-4">
                                                    <a href="{{ URL::route('files.show',[$file->id],false) }}">  {{$file->title}}</a>
                                                    {{-- <a href="{{ $book->path }}" target="_blank">  {{$book->title}}</a>--}}
                                                </div>
                                                <div class=" col-lg-5 col-lg-offset-2">

                                                    {!! Form::open([
                                                    'route' => ['files.destroy', $file->id],
                                                    'method' => 'delete',
                                                    'class' => 'pull-right']) !!}
                                                    {!! Form::submit('Изтрий',
                                                    [ 'class' => 'btn btn-xs btn-danger pull-right',
                                                    'onclick' => "return confirm('Сигурни ли сте?');" ]) !!}
                                                    {!! Form::close() !!}

                                                    <div class="pull-left">
                                                        <a href="{{ URL::route('files.edit',[$file->id],false) }}">Промени
                                                        </a>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                    @else
                                        <p class="text-center">Няма намерени файлове!</p>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center col-lg-offset-3 col-lg-6">
                            {{ $files->render() }}
                        </div>
                    </div>


                    <script type="text/javascript">
                        (function () {
                            var url = new URL(window.location.href);
                            var category = url.searchParams.get("category");
                            var title = url.searchParams.get("title");
                            document.getElementsByName('title')[0].value = title;
                            if (category) {
                                category.split(',').forEach(function (cat) {
                                    document.getElementById("check-" + cat).checked = true;
                                });
                            }
                            if (title) {
                                document.getElementById('title').innerHTML = '';
                                document.getElementById('title').innerHTML = title;
                                document.getElementById('list-title').style.display = 'block';
                            } else {
                                document.getElementById('list-title').style.display = 'none';
                            }

                            if (document.getElementById('selected_tags').innerHTML == '') {
                                document.getElementById('list-tags').style.display = 'none';
                            } else {
                                document.getElementById('list-tags').style.display = 'block';
                            }
                        })();

                        function search() {
                            var checkboxes = document.getElementsByName('categories[]');
                            var title = document.getElementsByName('title');
                            var vals = "";
                            for (var i = 0, n = checkboxes.length; i < n; i++) {
                                if (checkboxes[i].checked) {
                                    vals += "," + checkboxes[i].value;
                                }
                            }
                            if (vals || title) {
                                if (vals != 'undefined')
                                    var category = 'category=' + vals.substring(1) + '&';
                                if (title != 'undefined')
                                    var title = 'title=' + title[0].value + '&';
                                window.location.replace('http://' + window.location.hostname + '/files?' + category + title);
                            } else {
                                window.location.replace('http://' + window.location.hostname + '/files');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
