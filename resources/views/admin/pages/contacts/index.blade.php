@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Contacts')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Contacts</h5>
        <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary">+ Add Contact</a>
    </div>
    <div class="table-responsive text-nowrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Link</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->value }}</td>
                    <td>{{ $contact->link }}</td>
                    <td>{{ $contact->type }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.contacts.edit', $contact->id) }}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;width:100%;">
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
            {{ $contacts->links() }}
        </div>
    </div>
</div>
@endsection
