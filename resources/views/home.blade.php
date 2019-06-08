@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <p class="text-center" style="font-size: 20pt;">Резюме</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="well bs-component">
                            <form class="form-horizontal">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="balance" class="col-lg-6 control-label">Баланс на апартамент No. {{ $user->flat->number }}</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="balance" disabled value="{{ $user->flat->balance }}" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="balance" class="col-lg-6 control-label">Баланс на каса</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="balance" disabled value="180" >
                                        </div>
                                    </div>
                                    <hr>
                                    <h3>Неплатени</h3>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ап.</th>
                                            <th>Месец</th>
                                            <th>Сума</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>04.2019, 05.2019, 06.2019</td>
                                                    <td>48 лв.</td>
                                                </tr>
                                        </tbody>
                                    </table>

                                </fieldset>
                            </form>
                            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
