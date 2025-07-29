@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Client')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Client</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="name" label="Client Name" :value="old('name')" required />
            <x-form-input name="logo" label="logo" type="file" />
            <x-form-input name="website_link" label="website_link" type="text" :value="old('website_link')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
