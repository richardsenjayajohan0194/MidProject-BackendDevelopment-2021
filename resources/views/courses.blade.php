
@extends('layouts.main')


@section('container')
    
<article>
      <h2>{{ $course["title"] }}</h2>
      <h5>{{ $course["autor"] }}</h5>
      <p>{{ $course["body"] }}</p>
</article>
   
<a href="/course">Back to Course</a>
@endsection
