@extends('layouts.admin')

@section('content')

<p><br></p>
<div class="row">
        <div class="col-md-8">
            <h1>Edit User</h1>
        </div>
        <div class="col-md-4">
            <a href="{{ route('users.index') }}" class="btn btn-info"> Users</a>
        </div><br>
    </div>
    <p><br></p>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('users.update',$data->id) }}" method="POST">
            <input type="hidden" name="_method" value="put" />
            {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" name="email" id="" class="form-control" value="{{ $data->email }}">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="text" name="password" id="" class="form-control" value="{{ $data->password }}">
                </div>
                <div class="form-group">
                    <label for="">Mobile No:</label>
                    <input type="text" name="mobile_no" id="" class="form-control" value="{{ $data->mobile_no }}">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" id="" class="form-control" value="{{ $data->status }}">
                </div>
                
                
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



@endsection