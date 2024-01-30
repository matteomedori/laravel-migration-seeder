<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center my-3">Treni in partenza dalla data odierna</h1>
    <ul class="list-group container">
        @foreach ($trains as $train)
            <li class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between p-3">
                    <h5 class="mb-1">Codice treno: {{ $train['codice_treno'] }}</h5>
                </div>
                <div class="d-flex">
                    <div class="partenza p-3">
                        <p class="mb-1">Partenza: {{ $train['stazione_partenza'] }}</p>
                        <p class="mb-1">{{ $train['data_partenza'] }}</p>
                        <p class="mb-1">{{ Str::substr($train['orario_partenza'], 0, 5) }}</p>
                    </div>
                    <div class="arrivo p-3">
                        <p class="mb-1">Arrivo: {{ $train['stazione_arrivo'] }}</p>
                        <p class="mb-1">{{ $train['data_arrivo'] }}</p>
                        <p class="mb-1">{{ Str::substr($train['orario_arrivo'], 0, 5) }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

</body>

</html>
