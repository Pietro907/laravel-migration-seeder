<?php

/* 

Creiamo una tabella trains con relativa Migration e Model.
Ogni treno dovrà avere almeno:

- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato
 

> Oltre ai campi impostati da laravel di default in tutte le migrazioni

Inserite qualche dato usando un seeder tramite Faker PHP per popolare la vostra tabella.

Quando il db é pronto e i dati inseriti, 
create un Controller per mostrare nella home page tutti i treni che sono in partenza
dalla data odierna.

*/

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <p>{{$new_train->azienda}}</p>
                    <p>Stazione di partenza</p>
                    <p>Stazione di arrivo</p>
                    <p>Orario di partenza</p>
                    <p>Orario di arrivo</p>
                    <p>Codice Treno</p>
                    <p>Numero Carrozze</p>
                    <p>In orario</p>
                    <p>Cancellato</p>
                </div>
            </div>
        </div>
    </div>    

</body>

</html>