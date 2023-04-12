@extends('layouts.app')

@section('main-content')
    <div class="container">

        <div class="row mt-5" style="gap: 1rem;">

            @forelse ($trains as $train)
                <div class="card col d-flex flex-column " style="gap: 1rem;">
                    <span>AZIENDA: <br> {{ $train->azienda}}</span>
                    <span>STAZIONE DI PARTENZA: <br>{{ $train->stazione_di_partenza}}</span>
                    <span>ORARIO DI PARTENZA: <br>{{ $train->orario_di_partenza}}</span>
                    <span>STAZIONE DI ARRIVO: <br>{{ $train->stazione_di_arrivo}}</span>
                    <span>ORARIO DI ARRIVO:<br>{{ $train->orario_di_arrivo}}</span>
                    <span>CODICE: <br>{{ $train->codice_treno}}</span>
                    <span>NUMERO CARROZZE: <br>{{ $train->numero_carrozze}}</span>
                    <span>IL TRENO è IN ORARIO?:<br>{{ $train->in_orario ? 'Si' : 'No'}}</span>
                    <span>IL TRENO è STATO CANCELLATO?: <br>{{ $train->cancellato  ? 'Si' : 'No'}}</span>
                </div>

            @empty
                
            @endforelse

        </div>
    </div>
@endsection

@section('page-title', 'Welcome')