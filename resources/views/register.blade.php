<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body class="d-flex align-items-center py-4 bg-body-secondary">

    <main class="form-signin w-100 m-auto">
        <form action="/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    id="floatingInput" placeholder="username" value="{{ old('name') }}" required autocomplete="off"
                    autofocus>
                <label for="floatingInput">name</label>
                @error('name')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    id="floatingInput" placeholder="username" value="{{ old('username') }}" required autocomplete="off">
                <label for="floatingInput">username</label>
                @error('username')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="floatingPassword" placeholder="Password" value="{{ old('password') }}" required
                    autocomplete="off">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
