@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Category')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Category</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="title" label="Category Title" :value="old('title')" />
            <x-form-input name="thumbnail" label="Thumbnail" type="file" />
            <x-form-textarea name="description" label="Description" :value="old('description')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
