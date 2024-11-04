@extends('auth.layouts')
@section('content')
    <table class="table">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Photo</td>
            <td>Action</td>
        </tr>
        
        @foreach ($userss as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            {{-- <td><img src="{{ asset('storage/'.$user->photo) }}" alt=""></td> --}}
            <td>
                @if($user->photo)
                <img src="{{ asset('storage/'.$user->photo) }}" width="100px" alt="">
                @else
                <img src="{{ asset('noimage.jpg') }}" width="100px" alt="no img">
                @endif
            </td>
            <td>
                <button class="btn btn-secondary" onclick="location.href='{{ route('users.edit', $user->id) }}'">Edit</button>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @method('DELETE')
                    @csrf 
                    <br />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ URL('/dashboard') }}"><button class="btn btn-primary">Back to Dashboard</button></a>
@endsection