@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Category')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Category</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="title" label="Category Title" :value="old('title', $category->title)" required />
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                @if($category->thumbnail)
                    <img src="{{ asset('storage/'.$category->thumbnail) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="thumbnail" class="form-control">
            </div>
            <x-form-textarea name="description" label="Description" :value="old('description', $category->description)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
