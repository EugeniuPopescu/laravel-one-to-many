@extends('layouts.admin')

    @section('content')
    <div class="container-fluid mt-4 overflow-y-scroll">
    	<div class="row justify-content-center">
            <h1 class="text-center">Categories</h1>
            @foreach ($categories as $category)
            <div class="col-md-12 py-2">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            {{ $category->name }}
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="d-inline-block">Description:</h5>
                        <p>{{ $category->description }}</p>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4 d-flex justify-content-center">
                            <a class="btn btn-outline-warning" href="{{ route("admin.categories.show", $category->id) }}">Dettaglio</a>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <a class="btn btn-outline-info text-body" href="{{ route("admin.categories.edit", $category->id) }}">Modifica</a>
                        </div>

                        <div class="col-4 d-flex justify-content-center">
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
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
