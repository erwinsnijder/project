@extends('layout')

@section('content')

<h1 class="title">{{  $project->title }}</h1>

    <div class="content">{{ $project->description }}
   
<p>
    <a class="button is-link" href="/projects/">Back to Projects</a>
</p>

   @endsection