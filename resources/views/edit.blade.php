@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 450px;
        }
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Edit & Update
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('students.update', $student->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
                </div>
                <div class="form-group">
                    <label for="surname">Email</label>
                    <input type="text" class="form-control" name="surname" value="{{ $student->surname }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}"/>
                </div>
                <div class="form-group">
                    <label for="address">Password</label>
                    <input type="text" class="form-control" name="address" value="{{ $student->address }}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Update User</button>
            </form>
        </div>
    </div>
@endsection
