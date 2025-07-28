@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Courses')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Courses</h5>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">+ Add Course</a>
    </div>
    <div class="card-body">
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
                    <th width="120">Action</th>
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
                        <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $courses->links() }}
    </div>
</div>
@endsection
