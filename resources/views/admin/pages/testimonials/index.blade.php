@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Testimonials')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Testimonials</h5>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">+ Add Testimonial</a>
    </div>
    <div class="table-responsive text-nowrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Client</th>
                    <th>Company</th>
                    <th>Image</th>
                    <th>Stars</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->client_name }}</td>
                    <td>{{ $testimonial->company_name }}</td>
                    <td><img src="{{ asset('storage/' . $testimonial->image) }}" class="thumbnail-img"></td>
                    <td>{{ $testimonial->stars }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.testimonials.edit', $testimonial->id) }}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;width:100%;">
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
            {{ $testimonials->links() }}
        </div>
    </div>
</div>
@endsection
