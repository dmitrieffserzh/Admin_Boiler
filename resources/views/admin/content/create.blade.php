@extends('admin.main')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h4 class="my-3">Создать категорию</h4>
    <div class="row">
        <div class="col py-2 px-3 mb-3 bg-light text-muted">
            Панель управления / Посты / Создать пост
        </div>
    </div>

    <form action="{{ route('admin.'.$content_type.'.store') }}" method="POST">
        @csrf
        @include('admin.content.partials.form')
        <hr>
        <button type="submit" class="btn btn-primary">Сохранить</button>

    </form>

@endsection
