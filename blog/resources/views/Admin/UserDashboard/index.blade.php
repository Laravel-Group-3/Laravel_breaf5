@extends('Admin.layout.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Image</th>
                        <th>Email</th>
                        <th>Phone</th>
                        {{-- <th>Password</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->lname }}</td>
                            <td>{{ $user->img }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone}}</td>
                            {{-- <td>{{ $user->password }}</td> --}}
                            <td>
                                <a href="{{ route('userdashboard.show', $user->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('userdashboard.edit', $user->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('userdashboard.destroy', $user->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
