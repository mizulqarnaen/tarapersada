@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Testimonial')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Testimonial</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="client_name" label="Client Name" :value="old('client_name')" required />
            <x-form-input name="company_name" label="Company Name" :value="old('company_name')" required />
            <x-form-input name="image" label="image" type="file" required />
            <x-form-input name="stars" label="Stars" type="number" :value="old('stars')" />
            <x-form-textarea name="description" label="Description" :value="old('description')" />
            <x-form-input name="position" label="position" type="number" :value="old('position')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
