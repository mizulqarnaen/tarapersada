@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Contact')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Contact</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="name" label="Contact Name" :value="old('name', $contact->name)" />
            <x-form-input name="value" label="Value" :value="old('value', $contact->value)" />
            <x-form-input name="link" label="Link" :value="old('link', $contact->link)" />
            <div class="mb-4">
                <label class="form-label" for="type">Type</label>
                <select name="type" id="type"
                    class="form-select">
                    <option value="phone" {{ $contact->type == 'phone' ? 'selected' : '' }}>phone</option>
                    <option value="email" {{ $contact->type == 'email' ? 'selected' : '' }}>email</option>
                    <option value="whatsapp" {{ $contact->type == 'whatsapp' ? 'selected' : '' }}>whatsapp</option>
                    <option value="linkedin" {{ $contact->type == 'linkedin' ? 'selected' : '' }}>linkedin</option>
                    <option value="facebook" {{ $contact->type == 'facebook' ? 'selected' : '' }}>facebook</option>
                    <option value="instagram" {{ $contact->type == 'instagram' ? 'selected' : '' }}>instagram</option>
                    <option value="website" {{ $contact->type == 'website' ? 'selected' : '' }}>website</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
