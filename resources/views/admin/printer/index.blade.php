@extends('layouts.app')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список моделей принтеров @endslot
            @slot('parent') Панель администратора @endslot
            @slot('active') Список моделей принтеров  @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.printer.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>
            Добавить модель принтера</a>
        <table class="table table-striped">
            <thead>
            <th>Модели принтеров</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($printers as $printer)
                <tr>
                    <td>{{$printer->model}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.printer.destroy',
             $printer)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a class="btn btn-default" href="{{route('admin.printer.edit', $printer)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2">
                    <ul class="pagination pull-right">{{ $printers->links() }}</ul>
                </td>
            </tr>
            </tfoot>﻿
        </table>
    </div>

@endsection