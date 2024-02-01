@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="py-3 text-center">{{ $category->name }}</h2>
            <div class="col-12">
                <p>{{ $category->description }}</p>
            </div>
            <div class="py-3 text-center">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Torna alla projects list</a>
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>
    </div>
@endsection
