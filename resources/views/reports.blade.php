@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <p class="text-center" style="font-size: 20pt;">Отчети</p>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px;">
                        <div class="col-lg-5" style="padding-left: 4%;">
                            <label for="from">От</label>
                            <input type="text" id="from" name="from" value="{{ old($dates['from'], $dates['from'])}}">
                        </div>
                        <div class="col-lg-5">
                            <label for="to">До</label>
                            <input type="text" id="to" name="to" value="{{ old($dates['to'], $dates['to'])}}">
                        </div>
                        <div class="col-lg-2">
                            <button id="see" onclick="findReport(); return false;" class="btn btn-default">Търси
                            </button>

                        </div>
                        <div id="result" style="display: none;">
                            <hr>
                            <h4 class="text-center">Резултати за периода: <b>{{$dates['from']}} / {{$dates['to']}}</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bs-component">
                                <table class="table table-striped table-hover" id="myTable">
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="noResult" style="display: none;">
                        <hr>
                        <p class="text-center">Няма зададени дати!</p>
                    </div>

                    <script type="text/javascript">
                        (function () {
                            var reports = {!! $reports !!};
                            console.log(reports);

                            if (reports.length === 0) {
                                document.getElementById('noResult').style.display = 'block';
                                document.getElementById('myTable').style.display = 'none';
                            } else {
                                document.getElementById('noResult').style.display = 'none';
                                document.getElementById('myTable').style.display = '';
                                document.getElementById('result').style.display = '';
                            }

                            var table = document.getElementById("myTable");
                            var header = table.createTHead();
                            var header_row = header.insertRow(0);
                            var header_flat_id = header_row.insertCell(0);
                            header_flat_id.outerHTML = "<th>Ап.</th>";

                            var header_set = 0;

                            for (var key in reports) {
                                var flat = reports[key];
                                var row = table.insertRow(-1);
                                var flat_id = row.insertCell(0);
                                var table_cell = 1;
                                // console.log("===============");

                                for (var flat_key in flat) {

                                    if (header_set == 0) {
                                        var header_cell = header_row.insertCell(table_cell);
                                        header_cell.outerHTML = "<th>" + flat_key + "</th>";
                                    }

                                    var amount = 0;
                                    var people = flat[flat_key];
                                    var cell1 = row.insertCell(table_cell);


                                    for (var people_key in people) {
                                        amount += parseFloat(people[people_key].amount);
                                        // console.log(people[people_key]);
                                    }


                                    table_cell++;
                                    cell1.innerHTML = amount + " лв.";
                                    flat_id.innerHTML = people[people_key].flat_id;
                                }


                                // var type_size = Object.keys(flat).length;
                                // var info_cell = row.insertCell(type_size + 1);
                                // info_cell.outerHTML = '<td>Ап.<span class="badge">' + person + '</span>Таван<span class="badge">'+tavan+'</span></td>';


                                header_set = 1;
                            }

                        })();


                        function findReport() {
                            var from = document.getElementById('from');
                            var to = document.getElementById('to');

                            // var selected_from =  from.value.substring(3);
                            // selected_from = "01-" + selected_from;

                            // var selected_to =  to.value.substring(3);
                            // selected_to = "01-" + selected_to;

                            window.location.replace('http://' + window.location.hostname + '/reports?from=' + from.value + "&to=" + to.value);


                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
@endsection


