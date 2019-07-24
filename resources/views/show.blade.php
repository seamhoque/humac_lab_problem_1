{{--{{dd($registrations)}}--}}

@extends('layouts.master')
@section('content')

    <a type="button" class="btn btn-primary" style="margin-top: 30px" href="{{route('reg.create')}}">Create new user</a>

    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">User List</h1>
            <table class="table table-striped">
                <thead>
                <tr>

                    <td>Name</td>
                    <td>Email</td>
                    <td>password</td>
                    <td>Birthdate</td>
                    <td>City</td>
                    <td>Country</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($registrations as $registration)
                    <tr>
                        <td>{{$registration->username}}</td>
                        <td>{{$registration->email}}</td>
                        <td>{{$registration->password}}</td>
                        <td>{{$registration->birthdate}}</td>
                        <td>{{$registration->city}}</td>
                        <td>{{$registration->country}}</td>

                        <td>
                            <a href="{{ route('reg.edit',$registration->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('reg.destroy', $registration->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
@endsection
