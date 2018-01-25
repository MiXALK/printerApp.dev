@extends('layouts.app')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование кодов ошибок @endslot
            @slot('parent') Панель администратора @endslot
            @slot('active') Редактирование кодов ошибок @endslot
        @endcomponent

        <hr>
        <form class="form-horizontal" action="{{route('admin.error.update', $error)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.error.partials.form')

        </form>
    </div>

@endsection