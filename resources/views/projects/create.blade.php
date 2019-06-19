<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>
    <h1>Create a new Project</h1>
    <form method="POST" action="/projects">
    {{ csrf_field() }}
    <br>
    <div class="field">
        <label class="label" for="title">Project Title</label>

    <div class="control">
            <input type="text" class="input" name="title" value="{{ old('title') }}">
        </div>
    </div>

    <div class="field">
    <label class="label" for="Description">Project Description</label>

    <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>
    </div>
    

    <div>
        <button type="submit" class="button is-link" >Create Project</button>
        </div>
            <br>
            @if ($errors->any())
        <div class="notification is-danger">
        <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        
        </div>
        @endif
    </form>

</body>
</html>