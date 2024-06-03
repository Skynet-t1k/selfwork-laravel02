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
            <a class="navbar-brand" href="{{route('homepage')}}">
                <img class="navlogo" src="/images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home Page</a>
                    <a class="nav-link  mx-5" href="{{route('aboutus')}}">Chi Siamo</a>
                    <a class="nav-link" href="{{route('services')}}">Servizi</a>
                </div>
            </div>
            <div class="navlogo"></div>
        </div>
    </nav>
    <header>
        <div class="bg-image">
            <h1 id="title" class="text-center pt-5">Cosmic Chronicles</h1>

        </div>
    </header>
    <section class="section1">
        <div class="row d-flex justify-content-center">
            <div class="col12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-align-center h2desc">Benvenuti a bordo dell'astronave "Cosmic Chronicles"</h2>
                <p class="blogdesc">Il vostro portale interstellare per le avventure più incredibili che la scienza fiction ha da offrire! Siete pronti a viaggiare tra stelle lontane, pianeti inesplorati e civiltà alieni? Siete nel posto giusto!
                    Qui su "Cosmic Chronicles", esploriamo i confini dell'immaginazione umana, spingendoci oltre i limiti del possibile. Dalle epiche battaglie spaziali che fanno tremare l'universo, alle sottili trame politiche di galassie lontane, copriamo tutto ciò che un appassionato di SF potrebbe desiderare. Con recensioni di ultime uscite, profonde analisi di classici del genere, e interviste esclusive con gli eroi (e i cattivi) del domani, garantiamo una lettura che è quanto meno esplosiva!
                    Unisciti a noi mentre decifriamo i misteri dell'universo, una storia alla volta. E non preoccuparti per il viaggio di ritorno: la gravità qui è sempre leggera e il senso dell'umorismo è un must-have. Accendi i motori a curiosità e lascia che "Cosmic Chronicles" sia il tuo copilota nella galassia della fantascienza!
                </p>
            </div>
            <div class="col12 col-md-6 pt-5">
                <img class="imgdesc" src="/images/astronave.webp" alt="astronave">
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <p>@Skynet Production</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>