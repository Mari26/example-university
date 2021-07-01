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
                    <label for="surname">surname</label>
                    <input type="text" class="form-control" name="surname" value="{{ $student->surname }}"/>
                </div>
                <div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="numbers" class="form-control" name="user_id" value="{{ $student->user_id }}"/>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}"/>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" class="form-control" name="address" value="{{ $student->address }}"/>
                </div>
                <div class="form-group">
                    <label for="birthdate">birthdate</label>
                    <input type="text" class="form-control" name="birthdate" value="{{ $student->birthdate }}"/>
                </div>
                <div class="form-group">
                    <label for="sex">sex</label>
                    <input type="text" class="form-control" name="sex" value="{{ $student->sex }}"/>
                </div>
                <div class="form-group">
                    <label for="apartament">apartament</label>
                    <input type="text" class="form-control" name="apartament" value="{{ $student->apartament }}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Update User</button>
            </form>
        </div>
    </div>
@endsection
