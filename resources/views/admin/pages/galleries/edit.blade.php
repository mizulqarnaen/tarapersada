@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Gallery')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Gallery</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="name" label="Gallery Name" :value="old('name', $gallery->name)" required />
            <div class="mb-3">
                <label class="form-label">Image</label>
                @if($gallery->image)
                    <img src="{{ asset('storage/'.$gallery->image) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label" for="type">Type</label>
                <select name="type" id="type"
                    class="form-select" disabled>
                    <option value="logo" {{ $gallery->type == 'logo' ? 'selected' : '' }}>logo</option>
                    <option value="banner" {{ $gallery->type == 'banner' ? 'selected' : '' }}>banner</option>
                    <option value="legality" {{ $gallery->type == 'legality' ? 'selected' : '' }}>legality</option>
                    <option value="schedule" {{ $gallery->type == 'schedule' ? 'selected' : '' }}>schedule</option>
                    <option value="documentation" {{ $gallery->type == 'documentation' ? 'selected' : '' }}>documentation</option>
                    <option value="marketing" {{ $gallery->type == 'marketing' ? 'selected' : '' }}>marketing</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
