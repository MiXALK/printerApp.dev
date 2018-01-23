@extends('layouts.app')

@section('content')

<div class="container">
  @component('admin.components.breadcrumb')
    @slot('title') Список кодов ошибок @endslot
    @slot('parent') Панель администратора @endslot
    @slot('active') Коды ошибок @endslot
  @endcomponent

  <hr>

  <a href="#" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>Создать код ошибки</a>
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
          <td>
            <a href="#"><i class="fa fa-edit"></i></a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection