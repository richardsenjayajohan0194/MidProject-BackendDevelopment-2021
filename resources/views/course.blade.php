

@extends('layouts.main')

@section('container')
    
   @foreach ($courses as $course)
     <article class="mb-5">
       <h2>
           <a href="/courses/{{ $course["slug"] }}">{{ $course["title"] }}</a>
       </h2>
       <h5>By: {{ $course["autor"]}}</h5>
       <p>{{ $course["body"]}}</p>
     </article>
   @endforeach

@endsection