<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Cosmic Chronicles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="navlogo" src="/images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home Page</a>
                    <a class="nav-link  mx-5" href="{{route('aboutus')}}">Chi Siamo</a>
                    <a class="nav-link active" href="{{route('services')}}">Servizi</a>
                </div>
            </div>
            <div class="navlogo"></div>
        </div>
    </nav>
    <div class="bg-image flex-column">
        <h1 id="title-aboutus" class="text-center pt-5"> {{ $service['nomeservizio'] }} </h1>
        <div class="row">
            <div class="col12 col-md-6 desc">
               
                
                <p class="lead">{{$service['descservizio']}}</p>
            </div>
            <div class="col12 col-md-6"><img src="{{ $service['urlservizio'] }}" class="img-fluid detailimg" alt="..."></div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <p>@Skynet Production</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>