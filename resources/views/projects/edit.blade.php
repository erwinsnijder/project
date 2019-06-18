@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf
        
        <!-- {{ method_field('PATCH') }}
        {{ csrf_field() }} -->
    <div class="field">
  <label class="label" for="title">Title</label>

  <div class="control">
  <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title }}">
  </div>
</div>

<div class="field">
<label class="label" for="description">Description</label>

<div class="control">
<textarea name="description" class="textarea">{{ $project->description }}</textarea>
    </div>
</div>


<div clas="field">

<div class="control">
<button type="submit" class="button is-link">Update Project</button>
    </div>
</div>

</form>

<form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
@method('DELETE')
@csrf

<!-- {{ method_field('DELETE') }}
{{ csrf_field() }} -->

<div clas="field">

<div class="control">
<button type="submit" class="button is-link">Delete Project</button>
    </div>
</div>

</form>

<p>
    <a class="button is-link" href="/projects/">Back to Projects</a>
</p>



@endsection