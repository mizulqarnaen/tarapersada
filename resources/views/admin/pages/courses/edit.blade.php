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
            <x-form-input name="title" label="Course Title" :value="old('title', $course->title)" required />
            <x-form-select name="category_id" label="Category" :options="$categories->pluck('title','id')" />
            <x-form-input name="price" label="Price" type="number" :value="old('price', $course->price)" />
            <x-form-input name="stars" label="Stars" type="number" :value="old('stars', $course->stars)" />
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                @if($course->thumbnail)
                    <img src="{{ asset('storage/'.$course->thumbnail) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="thumbnail" class="form-control">
            </div>
            <x-form-textarea name="description" label="Description" :value="old('description', $course->description)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
