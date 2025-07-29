@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Client')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Client</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="name" label="Client Name" :value="old('name', $client->name)" required />
            <div class="mb-3">
                <label class="form-label">Logo</label>
                @if($client->logo)
                    <img src="{{ asset('storage/'.$client->logo) }}" class="img-thumbnail mb-2" style="width:120px">
                @endif
                <input type="file" name="logo" class="form-control">
            </div>
            <x-form-input name="website_link" label="website_link" type="text" :value="old('website_link', $client->website_link)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
