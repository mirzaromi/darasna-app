<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="/assets/image/hhf.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Admin Darasna Network</title>
</head>

<body class="body" style="background-image: linear-gradient(180deg, rgb(53, 95, 233), rgb(88, 243, 140));">
    <div class="login">
        @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form class="form-signin forms" action="/login" method="post">
            @csrf
            <img class="mb-4 d-block mx-auto" src="/assets/image/hhf.png" alt="" width="72" >
            <h1 class="h3 mb-3 font-weight-normal text-center fs-5">Admin Website <br> Darasna Network</h1>

            <label for="inputEmail " class="sr-only mb-2">Username</label>
            <input type="text" id="inputEmail" class="form-control @error('username') is-invalid @enderror"
                placeholder="Username" name="username" autofocus>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="inputPassword" class="sr-only mb-2 mt-3">Password</label>
            <input type="password" id="inputPassword" class="form-control mb-0 @error('password') is-invalid @enderror"
                placeholder="Password" name="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            {{-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> --}}
            <button class="btn btn-md  btn-block d-block mx-auto w-50 mt-5"
                style="background-color: #147759; color: #F2FFF8;" type="submit">Log in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
