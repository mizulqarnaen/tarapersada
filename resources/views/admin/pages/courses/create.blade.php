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
            <x-form-input name="title" label="Course Title" :value="old('title')" />
            <x-form-select name="category_id" label="Category" :options="$categories->pluck('title','id')" />
            <x-form-input name="price" label="Price" type="number" :value="old('price')" />
            <x-form-input name="stars" label="Stars" type="number" :value="old('stars')" />
            <x-form-input name="thumbnail" label="Thumbnail" type="file" />
            <x-form-textarea name="description" label="Description" :value="old('description')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
