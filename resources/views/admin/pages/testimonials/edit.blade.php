@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Testimonial')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Testimonial</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="client_name" label="Client Name" :value="old('client_name', $testimonial->client_name)" required />
            <x-form-input name="company_name" label="Company Name" :value="old('company_name', $testimonial->company_name)" required />
            <div class="mb-3">
                <label class="form-label">Image</label>
                @if($testimonial->image)
                    <img src="{{ asset('storage/'.$testimonial->image) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="image" class="form-control">
            </div>
            <x-form-input name="stars" label="Stars" type="number" :value="old('stars', $testimonial->stars)" />
            <x-form-textarea name="description" label="Description" :value="old('description', $testimonial->description)" />
            <x-form-input name="position" label="position" type="number" :value="old('position', $testimonial->position)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
