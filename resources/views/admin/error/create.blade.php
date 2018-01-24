@extends('layouts.app')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание кодов ошибок @endslot
            @slot('parent') Панель администратора @endslot
            @slot('active') Создание кодов ошибок @endslot
        @endcomponent

        <hr>
            <form class="form-horizontal" action="{{route('admin.error.store')}}" method="post">
                {{ csrf_field() }}

                {{-- Form include --}}
                @include('admin.error.partials.form')

            </form>
    </div>

@endsection