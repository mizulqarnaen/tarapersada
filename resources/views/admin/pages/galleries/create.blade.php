@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Gallery')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Gallery</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="name" label="Gallery Name" :value="old('name')" required />
            <x-form-input name="image" label="image" type="file" required />
            <div class="mb-4">
                <label class="form-label" for="type">Type</label>
                <select name="type" id="type"
                    class="form-select">
                    <option value="logo">logo</option>
                    <option value="banner">banner</option>
                    <option value="legality">legality</option>
                    <option value="schedule">schedule</option>
                    <option value="documentation">documentation</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
