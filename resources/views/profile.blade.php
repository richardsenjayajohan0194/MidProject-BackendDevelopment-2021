@extends('layouts.main')


@section('container')
    <h1>User Profile</h1>
    <table border = 0>
        <tr>
            <td>Full name</td>
            <td>:</td>
            <td>{{ $user->full_name }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td>{{ $user->address }}</td>
        </tr>
        <tr>
            <td>Phone number</td>
            <td>:</td>
            <td>{{ $user->phone_number }}</td>
        </tr>
        <tr>
            <td>Age</td>
            <td>:</td>
            <td>{{ $user->age }}</td>
        </tr>
        <tr>
            <td>Birthdate</td>
            <td>:</td>
            <td>{{ $user->birthdate }}</td>
        </tr>
    </table>
@endsection
