@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Панель администратора</div>

                    <div class="panel-body">
                         <div class="alert alert-success">
                            <p>Вы вошли как администратор!
                            </p>
                        </div>

                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="#">
                                            Клиенты
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.error.index')}}">
                                            Ошибки принтеров
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.printer.index')}}">
                                            Модели принтеров
                                        </a>
                                    </li>
                                </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
