<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-migration-seeder</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="text-white">Laravel Migration Seeder</h1>
        </div>
        <div class="text-white">
            <div>
                <h2 class="text-info">Tutti i Treni:</h2>
            </div>
            <div class="row">
                @foreach ($trainsArray as $trainsEl)
                <div class="col-3 p-5">
                    <div class="card">
                        <h3 class="text-success pt-3 text-center">Azienda:<br> {{$trainsEl->company}}</h3>
                        <h5 class="text-center text-danger fw-semibold">Stazione di partenza:<br> {{$trainsEl->departure_station}}</h5>
                        <h5 class="text-center text-danger fw-semibold">Stazione di arrivo:<br> {{$trainsEl->arrival_station}}</h5>
                        <p class="text-center text-black fw-semibold">Orario di partenza:<br> {{$trainsEl->departure_time}}</p>
                        <p class="text-center text-black fw-semibold">Orario di arrivo:<br> {{$trainsEl->arrival_time}}</p>
                        <p class="text-center text-black fw-semibold">Codice Treno:<br> {{$trainsEl->train_code}}</p>
                        <p class="text-center text-black fw-semibold">Numero Carrozze:<br> {{$trainsEl->number_of_carriages}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-white">
            <div>
                <h2 class="text-info">In Partenza oggi:</h2>
            </div>
            <div class="row">
                @foreach ($trains as $train)
                <div class="col-3 p-5">
                    <div class="card">
                        <h3 class="text-success pt-3 text-center">Azienda:<br> {{$train->company}}</h3>
                        <h5 class="text-center text-danger fw-semibold">Stazione di partenza:<br> {{$train->departure_station}}</h5>
                        <h5 class="text-center text-danger fw-semibold">Stazione di arrivo:<br> {{$train->arrival_station}}</h5>
                        <p class="text-center text-black fw-semibold">Orario di partenza:<br> {{$train->departure_time}}</p>
                        <p class="text-center text-black fw-semibold">Orario di arrivo:<br> {{$train->arrival_time}}</p>
                        <p class="text-center text-black fw-semibold">Codice Treno:<br> {{$train->train_code}}</p>
                        <p class="text-center text-black fw-semibold">Numero Carrozze:<br> {{$train->number_of_carriages}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
