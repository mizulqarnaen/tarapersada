@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Course')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Course</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Stars</label>
                <input type="number" step="0.1" name="stars" class="form-control" value="{{ old('stars') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
