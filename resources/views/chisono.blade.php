<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primo Progetto Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
    <main>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="welcome">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chisono">Chi Sono</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contatti">Contatti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <h1>Ciao, sei in "Chi Sono".</h1>
        <hr>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                @foreach ($aboutme as $about)

                <li class="list-group-item">{{$about}}</li>
                @endforeach

            </ul>
            <div class="card-footer">
                ---
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>