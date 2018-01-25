@extends('layouts.app')

@section('content')

<div class="container">
  @component('admin.components.breadcrumb')
    @slot('title') Список кодов ошибок @endslot
    @slot('parent') Панель администратора @endslot
    @slot('active') Коды ошибок @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.error.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>
    Создать код ошибки</a>
  <table class="table table-striped">
    <thead>
      <th>Код ошибки</th>
      <th>Описание ошибки</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($errors as $error)
        <tr>
          <td>{{$error->error_code}}</td>
          <td>{{$error->description}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.error.destroy',
             $error)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <a class="btn btn-default" href="{{route('admin.error.edit', $error)}}"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
    <tr>
      <td colspan="3">
        <ul class="pagination pull-right">{{ $errors->links() }}</ul>
      </td>
    </tr>
    </tfoot>﻿
  </table>
</div>

@endsection