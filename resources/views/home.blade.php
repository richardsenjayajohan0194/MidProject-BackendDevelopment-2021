@extends('layouts.main')


@section('container')
    <?php if(session()->has('current_user')) : ?>
        <h1>Hi, {{ $user->user_name }}</h1>
        <h2>Enrolled course</h2>
        <ul>
        <?php if($user->course1) : ?>
            <li><a href="/courses/Matematika%20Minat">Matematika Minat</a></li>
        <?php endif; ?>
        <?php if($user->course2) : ?>
            <li><a href="/courses/Matematika%20Wajib">Matematika Wajib</a></li>
        <?php endif; ?>
        <?php if($user->course3) : ?>
            <li><a href="/courses/Fisika">Fisika</a></li>
        <?php endif; ?>
        <?php if($user->course4) : ?>
            <li><a href="/courses/Kimia">Kimia</a></li>
        <?php endif; ?>
        </ul>
        <hr>
    <?php endif; ?>

    <h2>Popular Course</h2>
    <ul>
        <li><a href="/courses/Matematika%20Wajib">Matematika Wajib</a></li>
        <li><a href="/courses/Fisika">Fisika</a></li>
    </ul>
    <hr>
    <h2>Kenapa memilih Midas Learning?</h2>
    <!--- Isi keunggulan website--->
        <h5>1. Materi disajikan dengan menarik</h5>
        <h5>2. Pemahaman mengenai materi yang diberikan mudah dimengerti</h5>
        <h5>3. Hasil testimoni memuaskan</h5>
@endsection
