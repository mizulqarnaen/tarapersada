@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Clients')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Clients</h5>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">+ Add Client</a>
    </div>
    <div class="table-responsive text-nowrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Website</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td><img src="{{ asset('storage/' . $client->logo) }}" class="thumbnail-img"></td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->website_link }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.clients.edit', $client->id) }}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" style="display:inline-block;width:100%;">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="dropdown-item"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
        <div class="d-flex justify-content-center">
            {{ $clients->links() }}
        </div>
    </div>
</div>
@endsection
