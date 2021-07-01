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
            Add User
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
            <form method="post" action="{{ route('students.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="surname">surname</label>
                    <input type="text" class="form-control" name="surname" />
                </div>
                <div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="numbers" class="form-control" name="user_id"/>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" class="form-control" name="address" />
                </div>
                <div class="form-group">
                    <label for="birthdate">birthdate</label>
                    <input type="text" class="form-control" name="birthdate" />
                </div>
                <div class="form-group">
                    <label for="sex">sex</label>
                    <input type="text" class="form-control" name="sex" />
                </div>
                <div class="form-group">
                    <label for="apartament">apartament</label>
                    <input type="text" class="form-control" name="apartament" />
                </div>
                <button type="submit" class="btn btn-block btn-danger">Create User</button>
            </form>
        </div>
    </div>
@endsection
