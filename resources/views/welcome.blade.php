@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-6">
                    <div class="bg-primary p-3 m-3">
                        <div class="card-title">
                            <h3>Azienda: {{ $train->azienda }}</h3>
                        </div>
                        <div class="card-title">
                            <h3>Stazione di Partenza: {{ $train->stazione_di_partenza }}</h3>
                        </div>
                        <div class="card-title">
                            <h3>Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</h3>
                        </div>
                        <div class="card-title">
                            <h3>Orario di partenza: {{ $train->orario_di_partenza }}</h3>
                        </div>
                        <div class="card-title">
                            <h3>Orario di arrivo: {{ $train->orario_di_arrivo }}</h3>
                        </div>
                        <div class="card-title">
                            <h3>Codice treno: {{ $train->codice_treno }}</h3>
                        </div>
                        <div class="card-title">
                            <h3>Numero di carrozze: {{ $train->numero_carrozze }}</h3>
                        </div>
                        @if ($train->in_orario === 1)
                            <div class="card-title">
                                <h3>Treno in orario: SI</h3>
                            </div>
                            <div class="card-title">
                                <h3>Cancellato: No</h3>
                            </div>
                        @else
                            <div class="card-title">
                                <h3>Treno in orario: NO</h3>
                            </div>
                            <div class="card-title">
                                <h3>Cancellato: SI</h3>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
