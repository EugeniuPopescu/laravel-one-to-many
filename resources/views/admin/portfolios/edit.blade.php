@extends("layouts.admin")

@section("content")
<div class="container py-3">
    
    <div class="row">
        <h1>Edit new Portfolio</h1>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="{{ route("admin.portfolios.update", $portfolio->id) }}" method="POST">
                {{-- cross scripting request forgery --}}
                @csrf

                {{-- per la sintassi corretta --}}
                @method("PUT")

                {{-- title  --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old("title") ?? $portfolio->title }}">

                    {{-- error message --}}
                    @error("title")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- description  --}}
                <div class="mb-3">
                    <label for="description"  class="form-label">Description</label>
                    <textarea class="form-control @error("description") is-invalid @enderror" rows="2" id="description" name="description" value="{{ old("description") ?? $portfolio->description }}"></textarea>

                    {{-- error message --}}
                    @error("description")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- img  --}}
                <div class="mb-3">
                    <label for="img" class="form-label">Img</label>
                    <input type="text" class="form-control @error("img") is-invalid @enderror" id="img" name="img" value="{{ old("img") ?? $portfolio->img }}">

                    {{-- error message --}}
                    @error("img")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- role --}}
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control @error("role") is-invalid @enderror" id="role" name="role" value="{{ old("role") ?? $portfolio->role }}">

                    {{-- error message --}}
                    @error("role")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark">Edit</button>
                </form>
        </div>
    </div>
</div>
@endsection
