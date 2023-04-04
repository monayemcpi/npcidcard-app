@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Users</h1>
        </div>
        <div class="col-md-4">
            <a href="{{ route('users.create') }}" class="btn btn-info">Create User</a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <td>Sl#</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
                @foreach($data as $row)
                <tr>
                    <td>1</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection