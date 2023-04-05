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
                @php $sl=1; @endphp
                @foreach($data as $row)
                <tr>
                    <td>{{$sl++}}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>
                        <a href="{{ route('users.edit',$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('users.destroy',$row->id) }}" method="POST" style="display:inline;">
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection