@extends('layouts.admin')

    @section('content')
    <div class="container-fluid mt-4">
    	<div class="row justify-content-center">
            <h1 class="text-center">Portfolios</h1>
            @foreach ($portfolios as $portfolio)
            <div class="col-md-6 py-2">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            {{ $portfolio->title }}
                        </h4>
                    </div>
                    
                    <div class="row p-2">
                        <div class="col-6">
                            <img src="{{ $portfolio->img }}" alt="">
                        </div>
    
                        <div class="col-6 card-body">
                            <h5 class="d-inline-block">Role:</h5>
                            <p>{{ $portfolio->role }}</p>
    
                            @php
                                var_dump($portfolio->category);
                            @endphp
    
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $portfolio->category ? $portfolio->category->name : "Senza categoria" }}
                            </h6>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-4 d-flex justify-content-center">
                            <a class="btn btn-outline-warning" href="{{ route("admin.portfolios.show", $portfolio->id) }}">Dettaglio</a>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <a class="btn btn-outline-info text-body" href="{{ route("admin.portfolios.edit", $portfolio->id) }}">Modifica</a>
                        </div>

                        <div class="col-4 d-flex justify-content-center">
                            <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina" class="btn btn-outline-danger text-body">
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
    	</div>
    </div>
@endsection
