@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add New User')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Add User</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form-input name="name" label="Name" :value="old('name')" />
            <x-form-input name="email" label="Email" type="email" :value="old('email')" />
            <x-form-input name="password" label="Password" type="password" :value="old('password')" />
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
