@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Courses')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Courses</h5>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">+ Add Course</a>
    </div>
    <div class="table-responsive text-nowrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stars</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->category->title }}</td>
                    <td>Rp {{ number_format($course->price) }}</td>
                    <td>{{ $course->stars }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.courses.edit', $course->id) }}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline-block;width:100%;">
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
            {{ $courses->links() }}
        </div>
    </div>
</div>
@endsection
