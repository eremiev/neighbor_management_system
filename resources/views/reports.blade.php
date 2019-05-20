@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="container">
                        <h1>Отчети</h1>
                        <h3>Събрани пари за дата:</h3>
                        <div id="chart_div" style="width: 700px; height: 500px;"></div>


                        <table style="width:100%">
                            <tr>
                                <th>Апартамент</th>
                                <th>Стълбище-чистач</th>3
                                <th>Асансьор</th>4
                                <th>Фонд ремонт</th>5
                            </tr>

                            @foreach ($invoices as $invoice)
                                <tr>
                                <td>{{ $invoice['type'] }}</td>
                                </tr>
                                @foreach ($invoices as $invoice)


                                @endforeach
                            @endforeach


                            <tr>
                                <td>Jill</td>
                                <td>Smith</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>Eve</td>
                                <td>Jackson</td>
                                <td>94</td>
                            </tr>
                        </table>


                        <script>
                            var reports = {!! $report !!};
                            console.log(reports);



                            var data = [];

                            for (var key in reports) {

                                var amount = 0;
                                for (var flatOwn in reports[key].flats) {
                                    for (var flatKey in reports[key].flats[flatOwn]) {
                                        amount += parseInt(reports[key].flats[flatOwn][flatKey].amount);
                                    }
                                    data[reports[key].type] = amount;
                                }
                            }


                            console.log(data);

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


