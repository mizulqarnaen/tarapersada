@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Course')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Course</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $course->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $course->price) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Stars</label>
                <input type="number" step="0.1" name="stars" class="form-control" value="{{ old('stars', $course->stars) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                @if($course->thumbnail)
                    <img src="{{ asset('storage/'.$course->thumbnail) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="thumbnail" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description', $course->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
