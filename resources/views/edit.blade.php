<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar {
            display: none;
        }

        trix-editor {
            height: 200px;
        }
    </style>
</head>

<body class="bg-dark-subtle">
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <h3 class="my-3 w-75">Create Note</h3>
        <form action="/update/{{ $note->id }}" method="post">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <select class="form-select bg-body-secondary border-dark-subtle" name="category_id">
                    <option>Choose Category</option>
                    @foreach (auth()->user()->categories as $category)
                        @if ($note->category ? $note->category->id == $category->id : false)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="title" class="form-control bg-body-secondary border-dark-subtle" id="title"
                    name="title" value="{{ $note->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <div id="blank-toolbar" hidden></div>
                <input id="x" type="hidden" name="content" value="{{ $note->content }}">
                <trix-editor toolbar="blank-toolbar" input="x" class="bg-body-secondary rounded"></trix-editor>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </main>

    @include('layouts.navigation')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/js/create.js"></script>
</body>

</html>
