@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Article')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Article</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="title" label="Article Title" :value="old('title')" />
            <x-form-input name="thumbnail" label="Thumbnail" type="file" />
            <x-form-textarea name="description" label="Description" :value="old('description')" />
            <x-form-input name="tags" label="tags" type="text" :value="old('tags')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
