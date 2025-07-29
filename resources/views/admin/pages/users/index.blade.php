@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Users')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Users</h5>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">+ Add User</a>
    </div>
    <div class="table-responsive text-nowrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.users.edit', $user->id) }}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;width:100%;">
                                    @csrf @method('DELETE')
                                    <a type="submit" onclick="return confirm('Are you sure?')" class="dropdown-item"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
