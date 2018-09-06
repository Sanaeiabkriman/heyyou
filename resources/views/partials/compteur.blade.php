<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <title>Compteur</title>
</head>

<body>
    <section id="compteur" class="text-center pt-5">
        <div class="container p-auto">
            <div class="row text-center text-white p-5 m-4 ">
                <div class="col-3">
                    <i class="fas fa-code"></i>
                    <h2>300</h2>
                    <p>PROJETS</p>
                </div>
                <div class="col-3">
                    <i class="far fa-heart"></i>
                    <h2>500</h2>
                    <p>NUITS BLANCHES</p>
                </div>
                <div class="col-3">
                    <i class="fas fa-coffee"></i>
                    <h2>600</h2>
                    <p>DEPRESSIONS</p>
                </div>
                <div class="col-3">
                    <i class="fas fa-trophy"></i>
                    <h2>8001</h2>
                    <p>CRAQUAGES</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
