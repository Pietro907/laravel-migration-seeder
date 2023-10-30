@extends('layout.app')

@section('main_content')

    <div class="container my-5">
        <div class="row">
            
                
            <div class="col-2">
                <div class="card">
                    <p>{{ $new_train->stazione }}</p>
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
