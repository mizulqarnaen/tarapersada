@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New Contact')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add Contact</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.contacts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="name" label="Contact Name" :value="old('name')" />
            <x-form-input name="value" label="Value" :value="old('value')" />
            <x-form-input name="link" label="Link" :value="old('link')" />
            <div class="mb-4">
                <label class="form-label" for="type">Type</label>
                <select name="type" id="type"
                    class="form-select">
                    <option value="phone">phone</option>
                    <option value="email">email</option>
                    <option value="whatsapp">whatsapp</option>
                    <option value="linkedin">linkedin</option>
                    <option value="facebook">facebook</option>
                    <option value="instagram">instagram</option>
                    <option value="website">website</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
