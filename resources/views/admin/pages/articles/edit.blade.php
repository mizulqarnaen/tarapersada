@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Article')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Article</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="title" label="Article Title" :value="old('title', $article->title)" required />
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                @if($article->thumbnail)
                    <img src="{{ asset('storage/'.$article->thumbnail) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="thumbnail" class="form-control">
            </div>
            <x-form-textarea name="description" label="Description" :value="old('description', $article->description)" />
            <x-form-input name="tags" label="tags" type="text" :value="old('tags', $article->tags)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
