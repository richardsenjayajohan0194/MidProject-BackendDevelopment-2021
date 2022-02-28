@extends('layouts.main')


@section('container')

<article>
      <h2>{{ $course["title"] }}</h2>
      <h5>{{ $course["autor"] }}</h5>
      <p>{{ $course["body"] }}</p>
</article>
<?php if($course["id"] == 1) : ?>
    <form action="1" method="POST">
        @csrf
        <button type="submit">Enroll/Stop course</button>
    </form>
<?php endif; ?>
<?php if($course["id"] == 2) : ?>
    <form action="2" method="POST">
        @csrf
        <button type="submit">Enroll/Stop course</button>
    </form>
<?php endif; ?>
<?php if($course["id"] == 3) : ?>
    <form action="3" method="POST">
        @csrf
        <button type="submit">Enroll/Stop course</button>
    </form>
<?php endif; ?>
<?php if($course["id"] == 4) : ?>
    <form action="4" method="POST">
        @csrf
        <button type="submit">Enroll/Stop course</button>
    </form>
<?php endif; ?>
<a href="/course">Back to Course</a>
@endsection
