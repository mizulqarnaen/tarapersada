@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit User')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit User</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <x-form-input name="name" label="Name" :value="old('name', $user->name)" />
            <x-form-input name="email" label="Email" type="email" :value="old('email', $user->email)" />
            <x-form-input name="password" label="Password" type="password" :value="old('password', $user->password)" />
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
