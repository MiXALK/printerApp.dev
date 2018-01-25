@extends('layouts.app')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание списка моделей принтеров @endslot
            @slot('parent') Панель администратора @endslot
            @slot('active')  Создание списка моделей принтеров  @endslot
        @endcomponent

        <hr>
            <form class="form-horizontal" action="{{route('admin.printer.store')}}" method="post">
                {{ csrf_field() }}

                {{-- Form include --}}
                @include('admin.printer.partials.form')

            </form>
    </div>

@endsection