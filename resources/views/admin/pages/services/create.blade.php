@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Service')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Service</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="title" label="Service Title" :value="old('title')" />
            <x-form-input name="icon" label="Icon" :value="old('icon')" />
            <x-form-textarea name="description" label="Description" :value="old('description')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
