@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Service')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Service</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="title" label="Service Title" :value="old('title', $service->title)" />
            <x-form-input name="icon" :value="old('icon', $service->icon)" />
            <x-form-textarea name="description" label="Description" :value="old('description', $service->description)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
