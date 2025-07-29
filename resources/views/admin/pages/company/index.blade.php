@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Company Information')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Company Information</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="name" label="Company Name" :value="old('name', $company->name)" required />
            <x-form-input name="address" label="Company Address" :value="old('address', $company->address)" />
            <div class="mb-3">
                <label class="form-label">Image</label>
                @if($company->image)
                    <img src="{{ asset('storage/'.$company->image) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="image" class="form-control">
            </div>
            <x-form-textarea name="about" label="About" :value="old('about', $company->about)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.company.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
