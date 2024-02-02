@extends("layouts.admin")

@section("content")
<div class="container py-3">
    
    <div class="row">
        <h1>Insert new Portfolio</h1>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="{{ route("admin.portfolios.store") }}" method="POST">
                {{-- cross scripting request forgery --}}
                @csrf

                {{-- title  --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old("title") }}">

                    {{-- error message --}}
                    @error("title")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- description  --}}
                <div class="mb-3">
                    <label for="description"  class="form-label">Description</label>
                    <textarea class="form-control @error("description") is-invalid @enderror" rows="2" id="description" name="description" value="{{ old("description") }}"></textarea>

                    {{-- error message --}}
                    @error("description")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- img  --}}
                <div class="mb-3">
                    <label for="img" class="form-label">Img</label>
                    <input type="text" class="form-control @error("img") is-invalid @enderror" id="img" name="img" value="{{ old("img") }}">

                    {{-- error message --}}
                    @error("img")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- role --}}
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control @error("role") is-invalid @enderror" id="role" name="role" value="{{ old("role") }}">

                    {{-- error message --}}
                    @error("role")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- select-category --}}
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">nessuna categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- select tag --}}
                <div class="mb-3">
                    <label for="tag" class="form-label">Tag</label>
                    <select multiple name="tags[]" id="categories" class="form-select">
                        <option value="">nessun tag</option>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach 
                    </select>
                </div>

                <button type="submit" class="btn btn-dark">Create</button>
                </form>
        </div>
    </div>
</div>
@endsection
