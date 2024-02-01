@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="py-3 text-center">{{ $portfolio->title }}</h2>
            <div class="col-4">
                <img style="width: 100%" class="" src="{{ $portfolio->img }}" alt="{{ $portfolio->title }}">
            </div>
            <div class="col-8">
                <p>{{ $portfolio->description }}</p>
            </div>
            <div class="py-3 text-center">
                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-primary">Torna alla projects list</a>
                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>
    </div>
@endsection
