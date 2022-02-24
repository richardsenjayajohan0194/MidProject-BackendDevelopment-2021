@extends('layouts.main')

@section("container")
<p>
    <h1>Login</h1>
    @if($errors->any())
        @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    @endif
    @if($truth == 1)
        <br><span style="color:red"><b>Username or Password incorrect!</b></span><br><br>
    @endif
    <form action="login" method="POST">
        @csrf
        Username<br>
        <input type="text" name="user_name" placeholder="Username"><br><br>
        Password<br>
        <input type="password" name="password" placeholder="Passsword"><br><br>
        <button type="submit">Login</button>
    </form>
    Don't have an account? <a href="/register">Register</a>
</p>
@endsection
