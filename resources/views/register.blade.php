@extends('layouts.main')

@section("container")
<p>
    <h1>Create new account</h1>
    @if($errors->any())
        @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    @endif
    <form action="register" method="POST">
        @csrf
        Fullname (must be 10-45 character long)<br>
        <input type="text" name="full_name" placeholder="Fullname"><br><br>
        Username (must be 3-15 character long)<br>
        <input type="text" name="user_name" placeholder="Username"><br><br><br>

        Password<br>
        (must be 8-20 character long, contain uppercase(A-Z), lowercase(a-z), number(0-9), and symbol(@$!%*#?&))<br>
        <input type="password" name="password" placeholder="Passsword"><br><br>
        Confirm Password<br>
        <input type="password" name="confirm_password" placeholder="Confirm Passsword"><br><br>
        Address<br>
        <input type="text" name="address" placeholder="Address"><br><br>
        Phone number<br>
        <input type="text" name="phone_number" placeholder="Phone number"><br><br>
        Age<br>
        <input type="number" name="age" placeholder="Age"><br><br>
        Birthdate<br>
        <input type="date" name="birthdate"><br><br>
        <button type="submit">Register</button>
    </form>
</p>
@endsection
