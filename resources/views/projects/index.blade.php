<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
</head>
<body>

<h1>Projects</h1>

<ul>    
@foreach ($projects as $project)

<li>

<a class="button" href="/projects/{{ $project->id }}">
        {{ $project->title }}

</a>

</li>

@endforeach
</ul>

</body>
</html>