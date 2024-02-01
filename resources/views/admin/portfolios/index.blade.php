@extends('layouts.admin')

    @section('content')
    <div class="container-fluid mt-4">
    	<div class="row justify-content-center">
            @foreach ($portfolios as $portfolio)
            <div class="col-md-4 py-2">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            {{ $portfolio->title }}
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="d-inline-block">Description:</h5>
                        <p>{{ $portfolio->description }}</p>
                        
                        <h5 class="d-inline-block">Role:</h5>
                        <p>{{ $portfolio->role }}</p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a class="btn btn-primary" href="{{ route("admin.portfolios.show", $portfolio->id) }}">Dettaglio</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-secondary" href="{{ route("admin.portfolios.edit", $portfolio->id) }}">Modifica</a>
                        </div>

                        <div class="col-4">
                            <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
    	</div>
    </div>
@endsection
