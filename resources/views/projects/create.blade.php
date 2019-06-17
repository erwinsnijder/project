<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h1>Create a new Project</h1>

    <form method="POST" action="/projects">
{{ csrf_field() }}

<div>

<input type ="text" name="title" placeholder="Project Title">

</div>

<div>

<textarea name="description" placeholder="Project description"></textarea> 

</div>

<div>

<button type="submit">create Project</button>

</div>

</body>
</html>