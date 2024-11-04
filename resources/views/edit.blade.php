{{-- resources/views/users/edit.blade.php --}}
@extends('auth.layouts')
@section('content')
    <h2>Edit Photo for user ({{ $user->name }})</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" class="form-control">
        <button type="submit" class="btn btn-primary mt-2">Update Photo</button>
    </form>
    <a href="{{ URL('/users') }}"><button class="btn btn-secondary mt-1">Back to users table</button></a>
@endsection
